<style>
    input[type="checkbox"]+ul {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    input[type="checkbox"]:checked+ul {
        max-height: 236px;
        /* Cambia el valor a lo que necesites */
        transition: max-height 0.2s ease-in;
    }
</style>
@php
    $reds = $drinks->where('food_type_id', '3');
    $whites = $drinks->where('food_type_id', '4');
    $rose = $drinks->where('food_type_id', '5');
    $sangria = $drinks->where('food_type_id', '6');
    $cava = $drinks->where('food_type_id', '7');
    $coctel = $drinks->where('food_type_id', '8');
    $d = $drinks->where('food_type_id', '0');
@endphp
<div class="flex flex-row px-5 justify-around">
    <h2 class="text-2xl">wine</h2>
    <picture>
        <img src="" alt="">
    </picture>
</div>
<div class="px-5">
    <x-cards.drinks.acordeon title="Reds" :array="$reds">
    </x-cards.drinks.acordeon>
    <x-cards.drinks.acordeon title="Whites" :array="$whites">
    </x-cards.drinks.acordeon>
    <x-cards.drinks.acordeon title="Rosé" :array="$rose">
    </x-cards.drinks.acordeon>
</div>
{{-- ----------------------------------------------- Sangria --}}
<x-cards.drinks.list title="Sangria" :array="$sangria"></x-cards.drinks.list>
{{-- ----------------------------------------------- Cava --}}
<x-cards.drinks.list title="Cava" :array="$cava"></x-cards.drinks.list>
{{-- ----------------------------------------------- Cava --}}
<x-cards.drinks.list title="Coctel" :array="$coctel"></x-cards.drinks.list>
<x-cards.drinks.list title="Drinks" :array="$d"></x-cards.drinks.list>

