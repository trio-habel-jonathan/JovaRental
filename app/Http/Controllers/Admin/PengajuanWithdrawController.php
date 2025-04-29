<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\WithdrawalMitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanWithdrawController extends Controller
{
    public function accept($uuid){
        DB::beginTransaction();

        try {
            // Find the withdrawal request
            $withdrawal = WithdrawalMitra::findOrFail($uuid);

            $mitra = Mitra::where('id_mitra', $withdrawal->id_mitra)->first();

            if (!$mitra) {
                return redirect()->back()->with(['type' => 'error', 'message' => 'Mitra tidak ditemukan']);
            }

            if ($mitra->saldo < $withdrawal->jumlah) {
                return redirect()->back()->with(['type' => 'error', 'message' => 'Saldo dari mitra tidak mencukupi']);
            }

            Mitra::where('id_mitra', $withdrawal->id_mitra)->update([
                'saldo' => $mitra->saldo - $withdrawal->jumlah
            ]);

            $withdrawal->update([
                'status_withdrawal' => 'success'
            ]);

            DB::commit();

            return redirect()->back()->with(['type' => 'success', 'message' => 'Withdrawal telah di terima!']);
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with(['type' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function reject($uuid){
        $withdrawal = WithdrawalMitra::findOrFail($uuid);

        $withdrawal->update(
            ['status_withdrawal' => 'failed']
        );

        return redirect()->back()->with(['type' => 'success', 'message' => 'Withdrawal telah ditolak']);
    }
}
