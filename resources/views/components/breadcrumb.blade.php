<div class="bg-black-true py-3 flex flex-row pl-5 overflow-x-auto sticky">
    @foreach ($categories as $cat)
        <p class="text-gray font-light first:ml-0 mr-5">{{ $cat->cat_name }}</p>
    @endforeach
</div>
