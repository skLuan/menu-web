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
    <x-nav.navigation :$categories></x-nav.navigation>

    <div id="titles" class="overflow-scroll h-[76vh]">
        <div id="" class="catContainer relative grid grid-cols-5 pb-14">
            @foreach ($categories as $cat)
            @php
                $dishes = $cat->foodPreparations;
            @endphp
                <div id="{{ $cat->name }}"
                    class="cat cat-{{ $cat->id }} relative cursor-pointer col-span-4 bg-slate-500 first:mt-5 my-5">
                    <picture class="absolute left-0 -top-1">
                        {{-- <img class="" src="{{ $ }}"
                            alt="icon"> --}}
                    </picture>
                    <h3 class="text-white my-auto font-semibold text-[22px] text-right pr-5">{{ $cat->name }}</h3>
                </div>
                <div class="dishesContainer hidden cat-{{$cat->id}} text-white col-start-1 col-span-4 mb-5 last:mb-10">
                    @foreach ($dishes as $dish)
                    <x-cards.dish-card :$dish></x-cards.dish-card>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    <x-nav.tab-bar></x-nav.tab-bar>
</body>

</html>
