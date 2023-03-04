<div class="w-full fixed bottom-0 z-10">

    <div class="relative flex flex-row bg-black-true border-t border-red-navigation border-opacity-20 px-5 z-10 py-2 left-0 bottom-0">
        <iconify-icon id="menuTab" class="text-white cursor-pointer" icon="material-symbols:menu-rounded" width="45" height="45">
        </iconify-icon>
        <picture id="close-wrapper" class="my-auto ml-auto cursor-pointer">
            <img id="icon-close-menu" src="{{Vite::asset('resources/img/icons/menu-close.svg')}}" alt="menu icon">
        </picture>
    </div>
    <x-nav.side-bar></x-nav.side-bar>
</div>
