@php
    $urls = [
        'Wine' => '/image/drinks/wine.png',
        'Sangria' => '/image/drinks/sangria.png',
        'Cava' => '/image/drinks/cava.png',
        'Coctel' => '/image/drinks/coctel.png',
        'Drinks' => '/image/drinks/others.png',
    ];
@endphp
<div class="flex flex-row px-5 mt-5 justify-around">
    <h2 class="text-2xl m-auto">{{ $title }}</h2>
    <picture class="w-1/2">
        <img class="w-full rounded-md my-auto lazyload" data-src="{{ $urls[$title] }}" src="low-quality.jpg"
            alt="">
    </picture>
</div>
<ul class="px-5 mb-10 pt-2">
    @foreach ($array as $element)
        <li class="flex justify-between relative my-2">
            <span>{{ $element->name }}</span>
            <div class="h-[1px] w-4/5 bg-white opacity-20 absolute bottom-0 right-0"></div>
            <span class="text-white">{{ $element->price }}</span>
        </li>
    @endforeach
</ul>
