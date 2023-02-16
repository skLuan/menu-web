<div class="fixed bg-black-true w-[76px] px-4 flex flex-col right-0 h-[90vh] overflow-y-scroll overflow-x-hidden">

    @foreach ($categories as $cat)
        <div class="relative h-11 first:mt-5 mb-12">
            <img class="absolute" src="{{ Vite::asset('resources/img/icons/iconPlate.svg') }}" alt="icon">
            <p class="text-gray font-light text-sm">{{ $cat->cat_name }}</p>
        </div>
    @endforeach
</div>
