<x-layouts.general>

    <div class="container mx-auto px-4 py-4">
        <div class="grid grid-cols-5 gap-4">
            <img class="inline w-[50px]" src="{{ Vite::asset('resources/img/icons/logo.svg') }}" alt="Meson jesus">
            <div class="col-span-3 flex justify-center items-center">
                <h1>Reserva</h1>
            </div>
        </div>
        <div class="w-full px-4 py-10">
            <form>
                <label class="block">
                    <span class="block font-medium text-sm">Nombre</span>
                    <input type="text"
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
                    <input type="email"
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
                    <input type="number"
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
                    <input type="date"
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
                    <input type="time"
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
                    <button class="btn btn-outline-primary" type="button">Reservar</button>
                </div>
            </form>
        </div>
    </div>
    <x-nav.tab-bar></x-nav.tab-bar>
</x-layouts.general>
