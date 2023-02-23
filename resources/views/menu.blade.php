<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meson Jesus | Restaurante</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative antialiased bg-black">
    <x-header></x-header>
    <x-navigation></x-navigation>

    <div id="titles" class="overflow-scroll h-[76vh]">
        <div class="swiper-wrapper relative">
            <div class="bg-black-true absolute right-0 w-20 h-full"></div>
            @foreach ($categories as $cat)
                <div id="{{$cat->name}}" class="cat cursor-pointer grid grid-cols-5 bg-slate-500 swiper-slide first:mt-5 mb-16 last:mb-10">
                    <h3 class="text-white my-auto col-span-4 font-semibold text-[22px] text-right pr-5">{{ $cat->name }}</h3>
                    <div class="bg-black-true relative col-span-1 py-4">
                        <img class="m-auto" src="{{ Vite::asset('resources/img/icons/iconPlate.svg') }}" alt="icon">
                        <picture><img src="" alt=""></picture>
                    </div>
                </div>
                <article class="text-white">
                    <pre>
                        {{ $cat->foodPreparations()->get()}}
                    </pre>
                </article>
            @endforeach
        </div>
    </div>
    <x-tab-bar></x-tab-bar>
</body>

</html>
