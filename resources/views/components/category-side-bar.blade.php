<div class="swiper-menu fixed bg-black-true w-[76px] px-4 flex flex-col right-0 h-[76vh] pb-10 overflow-x-hidden">
    <div class="swiper-wrapper">

        @foreach ($categories as $cat)
        <div class="relative swiper-slide first:mt-5 mb-16 last:mb-10">
            <img class="absolute" src="{{ Vite::asset('resources/img/icons/iconPlate.svg') }}" alt="icon">
            <p class="text-gray font-light text-sm">{{ $cat->cat_name }}</p>
        </div>
        @endforeach
    </div>
</div>
