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
        <div class="relative grid grid-cols-5">
            @foreach ($categories as $cat)
                <div id="{{ $cat->name }}"
                    class="cat cat-{{ $cat->id }} cursor-pointer col-span-4 bg-slate-500 first:mt-5">
                    <picture class="absolute left-0 -top-1">
                        {{-- <img class="" src="{{ $ }}"
                            alt="icon"> --}}
                    </picture>
                    <h3 class="text-white my-auto font-semibold text-[22px] text-right pr-5">{{ $cat->name }}</h3>
                </div>
                <article class="text-white col-start-1 col-span-4 mb-5 last:mb-10">
                    <p>
                        {{ $cat->foodPreparations()->value('name') }}
                    </p>
                </article>
            @endforeach
        </div>
    </div>
    <x-tab-bar></x-tab-bar>
</body>

</html>
