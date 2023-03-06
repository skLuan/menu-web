<div
    {{ $attributes->merge(['class' => 'fixed h-[76vh] border-l border-red-navigation border-opacity-20 bg-black-true w-[76px] px-4 flex flex-col right-0 py-5 overflow-x-hidden z-10']) }}>
    <div id="swiper-menu" class="">
        <div class="swiper-wrapper">
            @foreach ($categories as $cat)
                <div class="swiper-slide !flex">
                    <div id="" class="cat cat-{{ $cat->id }} relative w-11 m-auto">
                        <picture class="absolute left-0 -top-1">
                            <img class="plateIcon opacity-40" src="{{ Vite::asset('resources/img/icons/iconPlate.svg') }}"
                                alt="icon">
                        </picture>
                        @php
                            $catIcons = $cat
                                ->multimedia()
                                ->where('multimedia_type_id', '1')
                                ->pluck('url')
                                ->first();
                            $url = $catIcons;
                        @endphp
                        <picture class="m-auto h-11">
                            <img class="catIcon catIcon-{{ $cat->id }} m-auto" width="70%" height="75%"
                                src="{{ $url }}" alt="icon">
                        </picture>
                        {{-- <p class="text-gray font-light text-sm">{{ print_r($url) }}</p> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
