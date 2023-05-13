@php
    $firstE = $array->first();
    $forId = strval('acordeon-type-'.$firstE->food_type_id);
@endphp
<label class="font-medium text-xl cursor-pointer hover:text-red-navigation" for="{{ $forId }}">
    {{ $title }}
    <iconify-icon class="my-auto text-base" icon="solar:alt-arrow-down-bold"></iconify-icon>
</label>
<input class="hidden" type="checkbox" id="{{ $forId }}">
<ul class="wineContainer">
    @foreach ($array as $element)
        <li class="flex justify-between relative my-2">
            <span>{{ $element->name }}</span>
            <div class="h-[1px] w-4/5 bg-white opacity-20 absolute bottom-0 right-0"></div>
            <span class="text-white">{{ $element->price }}</span>
        </li>
    @endforeach
</ul>
