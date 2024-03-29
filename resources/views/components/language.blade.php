@php
    $currentUrl = Route::currentRouteName();
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
<div {{ $attributes->merge(['class' => 'w-auto my-auto'])}}>
    <p class="text-gray text-sm font-light">
    <a class="{{$en}} " href="{{route($currentUrl, 'en')}}">En</a>
    <a class="{{$es}} px-2" href="{{route($currentUrl, 'es')}}">Es</a>
    <a class="{{$fr}} " href="{{route($currentUrl, 'fr')}}">Fr</a>
</div>
