<article id="" class="modalDish absolute hidden flex-col w-[92vw] left-0 top-0 mx-[15px] rounded-lg mt-5 z-30">
    <picture class="bg-black-true flex w-full h-[278px] rounded-t-lg">
        @php
            $url = $dish->multimedia()->pluck('url')->first();
            $placeholder = '/image/preparations/placeholder.png';
            if (!file_exists(public_path($url))) {
                $url = $placeholder;
            }
        @endphp
        <img class="rounded-md my-auto lazyload" data-src="{{ $url }}" src="low-quality.jpg" alt="">
    </picture>
    <div>
        {{-- Colection --}}
    </div>
    <div class="bg-black border border-red-navigation p-3 rounded-b-lg">
        <h3 class="touch text-white font-bold text-lg leading-tight pl-1">
            {{ $dish->name }}
        </h3>
        <p class="text-right font-medium text-2xl border-b border-b-white border-opacity-20 text-white pl-1">
            {{ $dish->price }} <span class="text-[12px]">€</span></p>
        <p class="pl-1">
            {{ $dish->description }}
        </p>
    </div>
    <div class="closeB w-full  flex">
        <div class="w-16 mx-auto bg-red-navigation rounded-b-lg flex">
            <iconify-icon class="text-black mx-auto" icon="ion:close-outline" width="45" height="45">
            </iconify-icon>
        </div>
    </div>
</article>
<div class="modalBlack hidden absolute top-0 left-0 w-screen h-screen bg-black-true opacity-80 z-20"></div>
