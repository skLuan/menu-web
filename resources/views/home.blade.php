@php
    $imgUrl = 'resources/img/principalSlider/'
@endphp
<x-layouts.general>
    <!-- Swiper Home -->
    <div class="relative w-full h-[50vh]">
        <div class="swiper swiper-home w-full h-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide text-center text-base flex justify-center items-center">
                    <picture class="h-full">
                    <img class="object-cover object-center h-full" src="{{Vite::asset($imgUrl . '1.JPG')}}" alt=""></picture></div>
                <div class="swiper-slide text-center text-base flex justify-center items-center">
                    <picture class="h-full">
                    <img class="object-cover object-center h-full" src="{{Vite::asset($imgUrl . '2.JPG')}}" alt=""></picture></div>
                <div class="swiper-slide text-center text-base flex justify-center items-center">
                    <picture class="h-full">
                    <img class="object-cover object-center h-full" src="{{Vite::asset($imgUrl . '3.JPG')}}" alt=""></picture></div>
                <div class="swiper-slide text-center text-base flex justify-center items-center">
                    <picture class="h-full">
                    <img class="object-cover object-center h-full" src="{{Vite::asset($imgUrl . '4.JPG')}}" alt=""></picture></div>
                <div class="swiper-slide text-center text-base flex justify-center items-center">
                    <picture class="h-full">
                    <img class="object-cover object-center h-full" src="{{Vite::asset($imgUrl . '5.JPG')}}" alt=""></picture></div>
                <div class="swiper-slide text-center text-base flex justify-center items-center">
                    <picture class="h-full">
                    <img class="object-cover object-center h-full" src="{{Vite::asset($imgUrl . '6.JPG')}}" alt=""></picture></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="w-full flex justify-evenly items-center mt-9">
        <a href="/reserve" class="text-white underline">{{ __('general.goReserve') }}</a>
        <a href="/menu" class="block bg-red-navigation text-white font-medium px-3 py-1"
            type="button">{{ __('general.gomenu') }}</a>
    </div>

    <div class="container mx-auto px-5 mt-12 text-white">
        <p class="text-center"><img class="inline h-[98px]" src="{{ Vite::asset('resources/img/icons/logo.svg') }}"
                alt="Meson jesus"></p>
        <p class="text-center">EST. 1972</p>
        <h6 class="text-center mb-4">{{ __('home.titleTradition') }}</h6>

    </div>

    <div class="grid grid-cols-2 gap-2 mt-6 px-5">
        <div class="pr-2">
            <p>
                {{ __('home.tradition') }}
            </p>
        </div>
        <div>
            <p class="text-right">
                <picture>
                    <img class="inline  w-7/8" src="{{ Vite::asset('resources/img/tradition.jpg') }}" alt="detalle tradición">
                </picture>
            </p>
        </div>
    </div>



    <div class="container mx-auto px-5 mt-12 text-white">
        <div class="grid grid-flow-row mt-6">
            <h6 class="text-center mb-4">{{ __('home.titleKitchen') }}</h6>
            <p class="text-left pt-2">
                <img class="inline" src="{{ Vite::asset('resources/img/minipaella2.jpg') }}" alt="detalle tradición">
            </p>
            <p>
                {{ __('home.kitchen') }}
            </p>
            <div class="w-full flex flex-col items-center mt-4">
                <div class="mb-5">
                    <a href="/reserve" class="block bg-red-navigation text-white font-medium px-3 py-1"
                        type="button">{{ __('general.goReserve') }}</a>
                </div>
            </div>
        </div>
    </div>



    <div class="container mx-auto mt-12 ">
        <div class="grid grid-flow-row mt-6">
            <h6 class="text-center mb-4">{{ __('home.titleTheRestaurant') }}</h6>
        </div>
        <!-- Swiper -->
        <div class="relative w-full">
            <div class="swiper swiper-restaurante w-full h-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center text-base flex justify-center items-center">
                        <picture>
                            <img class="lazyload" data-src="{{Vite::asset('resources/img/restaurante/res1.jpg')}}" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide text-center text-base flex justify-center items-center">
                        <picture>
                            <img class="lazyload" data-src="{{Vite::asset('resources/img/restaurante/res2.jpg')}}" src="" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide text-center text-base flex justify-center items-center">
                        <picture>
                            <img class="lazyload" data-src="{{Vite::asset('resources/img/restaurante/res3.jpg')}}" src="" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide text-center text-base flex justify-center items-center">
                        <picture>
                            <img class="lazyload" data-src="{{Vite::asset('resources/img/restaurante/res4.jpg')}}" src="" alt="">
                        </picture>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-12 ">
        <div class="grid grid-flow-row mt-6">
            <h6 class="text-center mb-4">{{ __('home.titleReviews') }}</h6>
        </div>
        <!-- Swiper -->
        <div class="relative w-full">
            <div class="swiper swiper-clientes w-full h-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center text-base flex justify-center items-center">
                        <picture>
                            <img class="lazyload" data-src="{{Vite::asset('resources/img/restaurante/res1.jpg')}}" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide text-center text-base flex justify-center items-center">
                        <picture>
                            <img class="lazyload" data-src="{{Vite::asset('resources/img/restaurante/res2.jpg')}}" src="" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide text-center text-base flex justify-center items-center">
                        <picture>
                            <img class="lazyload" data-src="{{Vite::asset('resources/img/restaurante/res3.jpg')}}" src="" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide text-center text-base flex justify-center items-center">
                        <picture>
                            <img class="lazyload" data-src="{{Vite::asset('resources/img/restaurante/res4.jpg')}}" src="" alt="">
                        </picture>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-5 mt-12 text-white">
        <div class="grid grid-flow-row mt-6">
            <h6 class="text-center mb-4">{{ __('home.titleNear') }}</h6>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2 mt-6 px-5">
        <div class="pr-2">
            <p>
                {{ __('home.near') }}

            </p>
        </div>
        <div>
            <p class="text-right">
                <picture>
                    <img class="inline w-7/8" src="{{ Vite::asset('resources/img/near.jpg') }}" alt="detalle tradición">
                </picture>
            </p>
        </div>
    </div>


    <div class="container mx-auto px-5 mt-12 text-white">
        <div class="grid grid-flow-row">
            <h6 class="text-left">{{ __('home.titlePi') }}</h6>
        </div>
    </div>


    <div class="container mx-auto px-5">
        <p>
            {{ __('home.piChurch') }}
        </p>
    </div>
    <p class="text-left py-1">
        <img class="inline" src="{{ Vite::asset('resources/img/pi.jpg') }}" alt="detalle tradición">
    </p>

    <div class="container mx-auto px-5">
        <div class="grid grid-flow-row mt-6">
            <h6 class="text-center mb-4">{{__('home.encuentranos')}}</h6>
        </div>
        <!-- Geolocalizacion -->
        <div class="w-full">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.6422782156606!2d2.1747463!3d41.38185609999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f81f239073%3A0x397b76de5f9a3d3f!2sMes%C3%B3n%20Jes%C3%BAs%20Restaurante!5e0!3m2!1ses!2sco!4v1678053470208!5m2!1ses!2sco"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="w-full grid justify-items-end mt-4">
            <a class="color-primary font-semibold text-center mx-auto underline" href="https://goo.gl/maps/Lx5DS26yr8GtQ4DKA"
                target="_blank">{{__('home.goMaps')}}</a>
        </div>
    </div>

    <div class="container mx-auto px-5 mt-12">
        <div class="grid grid-flow-row mt-6">
            <h6 class="text-center mb-4">{{ __('home.titleOpening') }}</h6>
            <div class="grid justify-items-center">
                <p class="w-4/5 flex justify-between">
                    <span>{{ __('home.week') }}</span>
                    <span class="text-white">00:00 - 23:00</span>
                </p>
                <p class="w-4/5 flex justify-between">
                    <span>{{ __('home.weekend') }}</span>
                    <span class="text-white">00:00 - 23:00</span>
                </p>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col items-center mt-9">
        <div class="mb-5">
            <a href="/reserve" class="block bg-red-navigation text-white font-medium px-3 py-1"
                type="button">{{ __('general.goReserve') }}</a>
        </div>
        <div class="mb-5">
            <a href="/menu" class="text-white underline">{{ __('general.gomenu') }}</a>
        </div>
    </div>

    <div class="w-full flex flex-col items-center mt-9">
        <div class="grid grid-flow-row mt-6">
            <div class="grid justify-items-center">
                <p>{{ __('home.titleFollow') }}</p>
                <div>
                    <a href="#" class="text-gray hover:text-white mr-5">
                        <i class="fa-brands fa-facebook fa-3x"></i>
                    </a>
                    <a href="#" class="text-gray hover:text-white">
                        <i class="fa-brands fa-instagram fa-3x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <x-nav.tab-bar></x-nav.tab-bar>
</x-layouts.general>
