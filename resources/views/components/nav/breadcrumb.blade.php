<div id="breadcrumb-menu" class="bg-black-true border-y border-red-navigation border-opacity-20 py-3 flex flex-row pl-5 overflow-x-hidden sticky top-1">
    <div class="swiper-wrapper">
        @foreach ($categories as $cat)
        <p class="cursor-pointer cat cat-{{$cat->id}} swiper-slide bread text-gray font-light">{{ $cat->name }}</p>
        @endforeach
    </div>
</div>
