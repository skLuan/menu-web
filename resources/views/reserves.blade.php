<x-layouts.general>
    @php
        $success = session('success');
        // $success = true;
    @endphp
    <div class="container mx-auto py-4 pb-16">
        <div class="grid grid-cols-5 px-5 gap-4">
            <img class="inline w-[50px]" src="{{ Vite::asset('resources/img/icons/logo.svg') }}" alt="Meson jesus">
            @if ($success)
                <div class="col-span-4 flex justify-center items-center">
                    <h1 class="text-2xl text-white-true">{{ __('reserva.solicitud') }}</h1>
                @else
                    <div class="col-span-3 flex justify-center items-center">
                        <h1 class="text-2xl">{{ __('general.reserva') }}</h1>
            @endif
        </div>
    </div>
    @if ($success)
        <picture class="mt-5 block">
            <img class="h-auto w-full" src="{{ Vite::asset('resources/img/reserved_image.png') }}" alt="">
        </picture>
    @else
        <picture class="mt-5 block">
            <img class="h-auto w-full" src="{{ Vite::asset('resources/img/reserved_image2.png') }}" alt="">
        </picture>
    @endif
    <div class="w-full p-5">
        @if ($success)
            <div class="alert alert-success">
                <p>
                    {{ 'reserva.envio1' }}
                    <br>
                    <br>
                    {{ __('reserva.envio2') }}
                    <br>
                    <br>
                    {{ __('reserva.envio3') }}

                </p>
                <div class="my-14 text-center">
                    <h6 class="">{{ 'reserva.envio4' }}</h6>
                    <p class=" text-white-true text-bold mt-5">
                        <a href="{{ route('menu', ['locale' => 'en']) }}" class="bg-red-navigation px-6 py-3">Ver el
                            menu</a>
                    </p>
                </div>
                <p>
                    {{ __('reserva.envio4') }}
                </p>
            </div>
        @else
            <p class="col-span-full mx-auto mb-5"> {{ __('reserva.texto1') }}</p>
            <form class="px-4" action="{{ route('make-reserve') }}" method="POST">
                @csrf
                <label for="name" class="block">
                    <span class="block font-medium text-sm">{{ __('reserva.nombre') }}</span>
                    <input id="name" name="name" type="text"
                        class="peer mt-1 block w-full px-3 py-2 bg-black border border-slate-300 rounded-md placeholder-slate-400
                        focus:outline-none text-white focus:border-red-500 focus:ring-1 focus:ring-red-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-red-500 invalid:text-red-600
                        focus:invalid:border-red-500 focus:invalid:ring-red-500" />

                    <p class="mt-2 invisible peer-invalid:visible text-red-600 text-sm">
                        {{ __('reserva.errorNombre') }}
                    </p>
                </label>
                <label class="block">
                    <span class="block font-medium text-sm">Email</span>
                    <input type="email" name="email"
                        class="peer mt-1 block w-full px-3 py-2 bg-black border border-slate-300 rounded-md placeholder-slate-400
                      focus:outline-none text-white focus:border-red-500 focus:ring-1 focus:ring-red-500
                      disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                      invalid:border-red-500 invalid:text-red-600
                      focus:invalid:border-red-500 focus:invalid:ring-red-500" />

                    <p class="mt-2 invisible peer-invalid:visible text-red-600 text-sm">
                        {{ __('reserva.errormail') }}

                    </p>
                </label>
                <label class="block">
                    <span class="block font-medium text-sm">{{ __('reserva.nPersonas') }}</span>
                    <input type="number" name="numero_personas"
                        class="peer mt-1 block w-full px-3 py-2 bg-black border border-slate-300 rounded-md placeholder-slate-400
                        focus:outline-none text-white focus:border-red-500 focus:ring-1 focus:ring-red-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-red-500 invalid:text-red-600
                        focus:invalid:border-red-500 focus:invalid:ring-red-500" />

                    <p class="mt-2 invisible peer-invalid:visible text-red-600 text-sm">
                        {{ __('reserva.errorPersonas') }}
                    </p>
                </label>
                <label class="block">
                    <span class="block font-medium text-sm">{{ __('reserva.fecha') }}</span>
                    <input type="date" name="fecha"
                        class="peer mt-1 block w-full px-3 py-2 bg-black border border-slate-300 rounded-md placeholder-slate-400
                        focus:outline-none text-white focus:border-red-500 focus:ring-1 focus:ring-red-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-red-500 invalid:text-red-600
                        focus:invalid:border-red-500 focus:invalid:ring-red-500" />

                    <p class="mt-2 invisible peer-invalid:visible text-red-600 text-sm">
                        {{ __('reserva.errorFecha') }}

                    </p>
                </label>
                <label class="block">
                    <span class="block font-medium text-sm">{{ __('reserva.hora') }}
</span>
                    <input type="time" name="hora"
                        class="peer mt-1 block w-full px-3 py-2 bg-black border border-slate-300 rounded-md placeholder-slate-400
                        focus:outline-none text-white focus:border-red-500 focus:ring-1 focus:ring-red-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-red-500 invalid:text-red-600
                        focus:invalid:border-red-500 focus:invalid:ring-red-500" />

                    <p class="mt-2 invisible peer-invalid:visible text-red-600 text-sm">
                        {{ __('reserva.errorHora') }}
                    </p>
                </label>
                <div class="flex justify-center items-center">
                    <button class="btn px-5 py-2 btn-outline-primary" type="submit">{{ __('general.goReserve') }}</button>
                </div>
            </form>
        @endif

    </div>
    </div>
    <x-nav.tab-bar></x-nav.tab-bar>
</x-layouts.general>
