<x-layouts.general>
    <!-- Swiper -->
    <div class="relative w-full h-[40vh]">
        <div class="swiper swiper-home w-full h-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide text-center text-base bg-white flex justify-center items-center">Slide 1</div>
                <div class="swiper-slide text-center text-base bg-white flex justify-center items-center">Slide 2</div>
                <div class="swiper-slide text-center text-base bg-white flex justify-center items-center">Slide 3</div>
                <div class="swiper-slide text-center text-base bg-white flex justify-center items-center">Slide 4</div>
                <div class="swiper-slide text-center text-base bg-white flex justify-center items-center">Slide 5</div>
                <div class="swiper-slide text-center text-base bg-white flex justify-center items-center">Slide 6</div>
                <div class="swiper-slide text-center text-base bg-white flex justify-center items-center">Slide 7</div>
                <div class="swiper-slide text-center text-base bg-white flex justify-center items-center">Slide 8</div>
                <div class="swiper-slide text-center text-base bg-white flex justify-center items-center">Slide 9</div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="w-full flex justify-evenly mt-9">
        <a href="/reservas" class="text-white underline">Reservas</a>
        <button class="btn btn-outline-primary" type="button">Ir a la carta</button>
    </div>

    <div class="grid mt-12 text-white">
        <p class="text-center"><img class="inline h-[98px]" src="{{ Vite::asset('resources/img/icons/logo.svg') }}" alt="Meson jesus"></p>
        <p class="text-center">EST. 1972</p>
        <div class="mt-6">
            <h6 class="text-center">Años de tradición</h6>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum ullamcorper ipsum. Suspendisse commodo volutpat placerat. Donec mauris erat, cursus at pulvinar non, laoreet eget mauris. Suspendisse luctus condimentum libero, a egestas neque imperdiet pulvinar. Fusce vitae consequat lacus, id bibendum orci. Nunc condimentum egestas volutpat. Aenean convallis egestas justo eu pharetra. In varius convallis egestas. Ut eleifend augue ut ipsum sodales, in auctor eros consectetur. Duis aliquet urna id fermentum pretium. Donec eget placerat mauris.
            </p>
        </div>

    </div>

</x-layouts.general>
