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
                    <h1 class="text-2xl text-white-true">¡Solicitud enviada!</h1>
                @else
                    <div class="col-span-3 flex justify-center items-center">
                        <h1 class="text-2xl">Reserva</h1>
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
                    Te hemos enviado un correo electrónico con toda la información de tu
                    reserva.
                    <br>
                    <br>
                    Por favor, revisa tu bandeja de entrada y también la carpeta de spam por si acaso,
                    para confirmar que has recibido nuestro mensaje.
                    <br>
                    <br>
                    Te mantendremos informado sobre el estado de tu
                    reserva.
                </p>
                <div class="my-14 text-center">
                    <h6 class="">¡Muchas gracias por elegir nuestro restaurante!</h6>
                    <p class=" text-white-true text-bold mt-5">
                        <a href="{{route('menu', ['locale' => 'en'])}}" class="bg-red-navigation px-6 py-3">Ver el menu</a>
                    </p>
                </div>
                <p>
                    Si tienes alguna pregunta o necesitas hacer cambios en tu reserva, no dudes en contactarnos.
                </p>
            </div>
        @else
            <p class="col-span-full mx-auto mb-5">Danos tu información de reserva y en breve te estaremos
                confirmando
                la
                reservación</p>
            <form class="px-4" action="{{ route('make-reserve') }}" method="POST">
                @csrf
                <label for="name" class="block">
                    <span class="block font-medium text-sm">Nombre</span>
                    <input id="name" name="name" type="text"
                        class="peer mt-1 block w-full px-3 py-2 bg-black border border-slate-300 rounded-md placeholder-slate-400
                        focus:outline-none text-white focus:border-red-500 focus:ring-1 focus:ring-red-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-red-500 invalid:text-red-600
                        focus:invalid:border-red-500 focus:invalid:ring-red-500" />

                    <p class="mt-2 invisible peer-invalid:visible text-red-600 text-sm">
                        Ingrese su nombre completo.
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
                        Ingrese una dirección de correo válida.
                    </p>
                </label>
                <label class="block">
                    <span class="block font-medium text-sm">N° de personas</span>
                    <input type="number" name="numero_personas"
                        class="peer mt-1 block w-full px-3 py-2 bg-black border border-slate-300 rounded-md placeholder-slate-400
                        focus:outline-none text-white focus:border-red-500 focus:ring-1 focus:ring-red-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-red-500 invalid:text-red-600
                        focus:invalid:border-red-500 focus:invalid:ring-red-500" />

                    <p class="mt-2 invisible peer-invalid:visible text-red-600 text-sm">
                        Ingrese el numero de personas que asistirán.
                    </p>
                </label>
                <label class="block">
                    <span class="block font-medium text-sm">Fecha</span>
                    <input type="date" name="fecha"
                        class="peer mt-1 block w-full px-3 py-2 bg-black border border-slate-300 rounded-md placeholder-slate-400
                        focus:outline-none text-white focus:border-red-500 focus:ring-1 focus:ring-red-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-red-500 invalid:text-red-600
                        focus:invalid:border-red-500 focus:invalid:ring-red-500" />

                    <p class="mt-2 invisible peer-invalid:visible text-red-600 text-sm">
                        Ingrese un formato de fecha correcto.
                    </p>
                </label>
                <label class="block">
                    <span class="block font-medium text-sm">Hora</span>
                    <input type="time" name="hora"
                        class="peer mt-1 block w-full px-3 py-2 bg-black border border-slate-300 rounded-md placeholder-slate-400
                        focus:outline-none text-white focus:border-red-500 focus:ring-1 focus:ring-red-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-red-500 invalid:text-red-600
                        focus:invalid:border-red-500 focus:invalid:ring-red-500" />

                    <p class="mt-2 invisible peer-invalid:visible text-red-600 text-sm">
                        Ingrese un formato de hora correcto.
                    </p>
                </label>
                <div class="flex justify-center items-center">
                    <button class="btn px-5 py-2 btn-outline-primary" type="submit">Reservar</button>
                </div>
            </form>
        @endif

    </div>
    </div>
    <x-nav.tab-bar></x-nav.tab-bar>
</x-layouts.general>
