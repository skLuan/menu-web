<div id="sideBarContainer" class="">
    <div id="sideBar"
        class="absolute -translate-x-full flex border-r border-opacity-20 duration-300 border-red-navigation flex-col px-5 w-3/5 bottom-0 h-screen z-10 bg-black-true">
        <div class="text-gray text-[22px] font-medium flex flex-col my-auto">
            <a class="py-2" href="{{route('home', app()->getLocale()) }}">{{__('general.restaurante')}}</a>
            <a class="py-2" href="{{ route('reserve', app()->getLocale()) }}">{{__('general.reservas')}}</a>
            <a class="py-2" href="{{route('menu', app()->getLocale()) }}">{{__('general.menu')}}</a>
        </div>
        {{-- @if ($routeName === 'home')
        @endif --}}
    </div>
    <div id="sideBarBg" class="bg-black-true left-0 bottom-0 opacity-40 hidden h-screen w-screen absolute z-0">
    </div>
</div>
