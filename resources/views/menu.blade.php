<x-layouts.general>
    <x-header></x-header>
    <x-nav.navigation :$categories></x-nav.navigation>

    <div id="titles" class="overflow-scroll h-[76vh]">
        <div id="" class="catContainer grid grid-cols-5 pb-14">
            @foreach ($categories as $cat)
                @php
                    $dishes = $cat->foodPreparations;

                    $catIcons = $cat
                        ->multimedia()
                        ->where('multimedia_type_id', '2')
                        ->pluck('url')->first();
                    $url = $catIcons;
                @endphp
                <div id="{{ $cat->name }}"
                    class="cat cat-{{ $cat->id }} relative cursor-pointer col-span-4 first:mt-5 my-5">
                    <picture class="">
                        <img class="" width="100%" src="{{$url}}" alt="icon">
                    </picture>
                    <h3 class="absolute top-1/2 -translate-y-1/2 right-0 text-white my-auto font-semibold text-[22px] text-right pr-5">{{ $cat->name }}</h3>
                </div>
                <div
                    class="dishesContainer hidden cat-{{ $cat->id }} text-white col-start-1 col-span-4 mb-5 last:mb-10">
                    @foreach ($dishes as $dish)
                        <x-cards.dish-card :$dish></x-cards.dish-card>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    <x-nav.tab-bar></x-nav.tab-bar>
</x-layouts.general>
