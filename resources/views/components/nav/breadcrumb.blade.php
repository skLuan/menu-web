<div
    {{ $attributes->merge(['class' => 'bg-black-true border-y border-red-navigation border-opacity-20 py-3 flex flex-row pl-5 overflow-x-hidden sticky top-1']) }}>
    <div id="breadcrumb-menu" class="swiper">
        <div class="swiper-wrapper">
            @foreach ($categories as $cat)
                <div class="swiper-slide">
                    <p class="cursor-pointer cat cat-{{ $cat->id }} bread text-gray font-light">
                        {{ $cat->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
