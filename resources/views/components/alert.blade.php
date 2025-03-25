@php
    $type = $type ?? 'default';
@endphp

@switch($type)
    @case('success')
        @php
            $textContent = 'Successfully';
            $colorBg = 'bg-green-600';
            $colorText = 'text-green-600';
        @endphp
    @break

    @case('error')
        @php
            $textContent = 'Error';
            $colorBg = 'bg-red-600';
            $colorText = 'text-red-600';
        @endphp
    @break

    @case('warning')
        @php
            $textContent = 'Warning';
            $colorBg = 'bg-yellow-600';
            $colorText = 'text-yellow-600';
        @endphp
    @break

    @case('pending')
        @php
            $textContent = 'Pending';
            $colorBg = 'bg-blue-600';
            $colorText = 'text-blue-600';
        @endphp
    @break

    @default
        @php
            $textContent = 'Notification';
            $colorBg = 'bg-gray-600';
            $colorText = 'text-gray-600';
        @endphp
@endswitch

<div x-data="{
    show: true,
    init() {
        setTimeout(() => {
            this.show = false;
        }, 2500);
    }
}" x-show="show" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-full"
    class="bg-white p-4 rounded-md shadow-md mt-4 mr-8 fixed top-0 right-0 z-40">
    <div class="pr-6">
        <div class="flex items-center justify-center gap-4">
            <div class="{{ $colorText }} w-14 flex items-center justify-center">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.6459 18.0148C16.0747 19.6152 15.125 21.2602 13.5246 21.689C11.9242 22.1178 10.2792 21.1681 9.85036 19.5677M2.05683 11.6133C1.66734 10.2151 2.07238 8.70349 3.10878 7.68738M12.1463 5.74085C12.4505 5.19355 12.5507 4.53205 12.3759 3.87945C12.0185 2.54579 10.6477 1.75433 9.314 2.11168C7.98034 2.46904 7.18888 3.83988 7.54624 5.17355C7.7211 5.82614 8.13863 6.34891 8.67573 6.67079M20.319 6.72C19.9572 5.31439 18.8506 4.20779 17.445 3.84602M17.4906 9.44528C17.1337 8.11315 16.1808 6.99919 14.8415 6.34845C13.5022 5.69772 11.8863 5.56352 10.3492 5.97538C8.81214 6.38724 7.47981 7.31142 6.64533 8.54461C5.81085 9.77779 5.54258 11.219 5.89952 12.5511C6.4901 14.7552 6.37542 16.5135 6.00247 17.8497C5.5774 19.3725 5.36487 20.134 5.42228 20.2869C5.48798 20.4618 5.53549 20.5098 5.70973 20.5773C5.86202 20.6363 6.50179 20.4649 7.78133 20.122L19.6464 16.9428C20.9259 16.5999 21.5657 16.4285 21.6681 16.3013C21.7852 16.1557 21.8024 16.0904 21.7718 15.906C21.7451 15.7449 21.1803 15.1918 20.0508 14.0855C19.0597 13.1148 18.0812 11.6493 17.4906 9.44528Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div>
                <h1 class="text-xl montserrat-font font-bold {{ $colorText }}">{{ $textContent }}</h1>
                <p class="montserrat-font text-sm mt-1">{{ $message }}</p>
            </div>
        </div>
        <div class=" absolute -right-4 inset-y-0 flex items-center justify-center">
            <div class="{{ $colorBg }} w-10 h-10 rounded-full flex items-center justify-center text-white">
                <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
</div>
