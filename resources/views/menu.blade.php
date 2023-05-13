@php
    function compareDishes($dish1, $dish2)
    {
        $hasImage1 = file_exists($dish1->multimedia()->value('url'));
        $hasImage2 = file_exists($dish2->multimedia()->value('url'));

        if ($hasImage1 && !$hasImage2) {
            return -1; // $dish1 es menor que $dish2
        } elseif (!$hasImage1 && $hasImage2) {
            return 1; // $dish1 es mayor que $dish2
        } else {
            return 0; // $dish1 y $dish2 son iguales
        }
    }

    // Ordenamos el array $dishes

@endphp
<x-layouts.general>
    <x-header></x-header>
    <x-nav.navigation :$categories></x-nav.navigation>

    <div id="titles" class="overflow-scroll h-[76vh]">
        <div id="" class="catContainer grid grid-cols-5 pb-14">
            @foreach ($categories as $cat)
                @php
                    $dishes = $cat->foodPreparations->where('category_id', '!=', 1);
                    $drinks = $cat->foodPreparations->where('category_id', 1);
                    $dishes = $dishes->sortByDesc(function ($dish) {
                        $ImgPath = public_path($dish->multimedia()->value('url'));
                        return file_exists($ImgPath);
                    });

                    $catIcons = $cat
                        ->multimedia()
                        ->where('multimedia_type_id', '2')
                        ->pluck('url')
                        ->first();
                    $url = $catIcons;
                @endphp
                <div id="{{ $cat->name }}"
                    class="cat cat-{{ $cat->id }} relative cursor-pointer col-span-4 first:mt-5 my-5">
                    <picture class="">
                        <img class="" width="100%" src="{{ $url }}" alt="icon">
                    </picture>
                    <h3
                        class="absolute top-1/2 -translate-y-1/2 right-0 text-white my-auto font-semibold text-[22px] text-right pr-5">
                        {{ $cat->name }}</h3>
                </div>
                <div
                    class="dishesContainer hidden cat-{{ $cat->id }} text-white col-start-1 col-span-4 mb-5 last:mb-10">
                    @if ($cat->id == 1)
                        <x-cards.drinks :$drinks>

                        </x-cards.drinks>
                    @else
                        @foreach ($dishes as $dish)
                            <x-cards.dish-card :$dish></x-cards.dish-card>
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <x-nav.tab-bar></x-nav.tab-bar>
</x-layouts.general>
