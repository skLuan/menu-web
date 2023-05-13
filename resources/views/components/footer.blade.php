<footer class="w-full bg-black-true border-red-navigation border-t border-opacity-50 mt-10 pb-16">
    <div class="flex items-left p-6">
        <img class="inline mr-4" src="{{ Vite::asset('resources/img/icons/logo.svg') }}" alt="Meson jesus">
        <div class="col-span-3">
            <p>+00 000 0000</p>
            <p>mail@mail.com</p>
        </div>
    </div>
    <div class="flex flex-col items-left px-6 pb-5">
        <p><a href="{{route('reserve', app()->currentLocale())}}">{{__('general.reservas')}}</a></p>
        <p><a href="{{route('menu', app()->currentLocale())}}">{{__('general.menu')}}</a></p>
    </div>
    <div class="w-full p-3 bg-black">
        <p class="text-xs text-center">Copyright - 2023 | Developed by Luane</p>
    </div>
</footer>
