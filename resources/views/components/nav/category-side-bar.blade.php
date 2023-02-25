<div id="swiper-menu" class="fixed bg-black-true w-[76px] px-4 flex flex-col right-0 h-[76vh] py-5 overflow-x-hidden z-10">
    <div class="swiper-wrapper">
        @foreach ($categories as $cat)
        <div id="" class="cat cat-{{$cat->id}} relative swiper-slide w-11">
            <picture class="absolute left-0 -top-1">
                <img class="plateIcon opacity-40" src="{{ Vite::asset('resources/img/icons/iconPlate.svg') }}" alt="icon">
            </picture>
            @php
                $catIcons = $cat->multimedia()->where('multimedia_type_id', '1')->pluck('url');
                $url = $catIcons[0];
            @endphp
            <picture class="m-auto">
                <img class="catIcon catIcon-{{$cat->id}} m-auto" width="70%" height="75%" src="{{ $url }}" alt="icon">
            </picture>
            {{-- <p class="text-gray font-light text-sm">{{ print_r($url) }}</p> --}}
        </div>
        @endforeach
    </div>
</div>
