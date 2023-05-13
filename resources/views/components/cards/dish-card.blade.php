@php
    $url = $dish
        ->multimedia()
        ->pluck('url')
        ->first();
    $placeholder = '/image/preparations/placeholder.png';
    if (!file_exists(public_path($url))) {
        $url = $placeholder;
    }
@endphp
<div class="dishCard pl-5 pr-[15px] pt-[15px]">
    <picture class="touch w-full max-h-[120px] bg-black-true rounded-md">
        <img class="lazyload rounded-md" data-src="{{ $url }}" src="low-quality.jpg" alt="">
    </picture>
    <h3 class="touch text-white font-bold text-lg leading-tight pl-1 pt-3">
        {{ $dish->name }}
    </h3>
    <p class="text-right border-b border-b-white border-opacity-20 pl-1">{{ $dish->price }} <span
            class="text-[12px]">€</span></p>
    <p class="pl-1">
        {{ $dish->description }}
    </p>
    <x-modal.dish :$dish></x-modal.dish>
</div>
