<div class="flex flex-row px-5 justify-around">
    <h2 class="text-2xl">{{$title}}</h2>
    <picture>
        <img src="" alt="">
    </picture>
</div>
<ul class="px-5">
        @foreach ($array as $element)
        <li class="flex justify-between relative my-2">
            <span>{{ $element->name }}</span>
            <div class="h-[1px] w-4/5 bg-white opacity-20 absolute bottom-0 right-0"></div>
            <span class="text-white">{{ $element->price }}</span>
        </li>
    @endforeach
</ul>
