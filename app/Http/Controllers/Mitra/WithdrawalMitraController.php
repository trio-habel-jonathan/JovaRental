<?php

namespace App\Http\Controllers\mitra;

use App\Http\Controllers\Controller;
use App\Models\MetodePembayaranMitra;
use App\Models\Mitra;
use App\Models\RekeningMitra;
use App\Models\WithdrawalMitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WithdrawalMitraController extends Controller
{
    public function index()
    {
        $withdrawals = WithdrawalMitra::where('id_mitra', Auth::user()->mitra->id_mitra)->paginate(15);
        return view('mitra.withdrawal.index', compact('withdrawals'));
    }
 
    public function create()
    {
        return view('mitra.withdrawal.create');
    }

    public function store(Request $request)
    {
        try {
            $user = Auth::user();
            $mitra = $user->mitra;


            $validatedData = $request->validate([
                'id_rekening_mitra' => 'required|exists:rekening_mitra,id_rekening_mitra',
                'jumlah' => 'required|numeric|min:1',
                'keterangan' => 'nullable|string',
            ]);

            if ($validatedData['jumlah'] > ($mitra->saldo - $mitra->withdrawals->where('status_withdrawal', 'pending')->sum('jumlah'))) {
                return redirect()->route('mitra.withdraw.index')->with([
                    'type' => 'error',
                    'message' => 'Saldo anda tidak mencukupi!',
                ]);
            }



            DB::beginTransaction();
            // dd($validatedData);

            try {
                // $mitra->decrement('saldo', $validatedData['jumlah']);
                WithdrawalMitra::create([
                    'id_mitra' => $mitra->id_mitra,
                    'id_rekening_mitra' => $validatedData['id_rekening_mitra'],
                    'jumlah' => $validatedData['jumlah'],
                    'status_withdrawal' => 'pending',
                    'tanggal_withdrawal' => now(),
                    'keterangan' => $validatedData['keterangan'] ?? null,
                ]);

                DB::commit();

                return redirect()->route('mitra.withdraw.index')->with([
                    'type' => 'success',
                    'message' => 'Withdrawal request created successfully.',
                ]);
            } catch (\Throwable $th) {
                DB::rollBack();
                throw $th;
            }
        } catch (\Exception $e) {
            return redirect()->route('mitra.withdraw.index')->with([
                'type' => 'error',
                'message' => 'An error occurred while processing your request.' . $e->getMessage(),
            ]);
        }
    }
}

// An error occurred while processing your request.SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`db_rental`.`withdrawal_mitra`, CONSTRAINT `withdrawal_mitra_id_rekening_mitra_foreign` FOREIGN KEY (`id_rekening_mitra`) REFERENCES `rekening_mitra` (`id_rekening_mitra`) ON DELETE CASCADE) (Connection: mysql, SQL: insert into `withdrawal_mitra` (`id_mitra`, `id_rekening_mitra`, `jumlah`, `status_withdrawal`, `tanggal_withdrawal`, `keterangan`, `id_withdrawal`, `updated_at`, `created_at`) values (0196533b-a3e5-716f-9d82-10ec5415d182, 01965c55-9fcb-716c-85b7-9b9b0c8a2b51, 20000, pending, 2025-04-22 08:28:42, asdasdasd, 01965c9d-1e4f-7151-8c30-1cb78b0c5796, 2025-04-22 08:28:42, 2025-04-22 08:28:42))