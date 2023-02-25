<div class="dish pl-5 pr-[15px] pt-[15px]">
    <div class="touch w-full h-[120px] bg-gray rounded-md mb-3">
        {{-- <img src="" alt=""> --}}
    </div>
    <h3 class="touch text-white font-bold text-lg leading-tight pl-1">
        {{ $dish->name }}
    </h3>
    <p class="text-right border-b border-b-white border-opacity-20 pl-1">{{$dish->price}}</p>
    <p class="pl-1">
        {{$dish->description}}
    </p>
    <x-modal.dish :$dish></x-modal.dish>
</div>
