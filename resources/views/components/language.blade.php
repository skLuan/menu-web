@php
    $activeClass = '!font-semibold text-red-navigation';
    $en = '';
    $es = '';
    $fr = '';
    switch ($locale) {
        case 'en':
        $en = $activeClass;
            break;
        case 'es':
        $es = $activeClass;
            break;
        case 'fr':
        $fr = $activeClass;
            break;

        default:
            # code...
            break;
    }
@endphp
<div class="w-auto my-auto">
    <p class="text-gray text-sm font-light">
    <a class="{{$en}} " href="/menu/en">En</a>
    <a class="{{$es}} px-2" href="/menu/es">Es</a>
    <a class="{{$fr}} " href="/menu/fr">Fr</a>
</div>
