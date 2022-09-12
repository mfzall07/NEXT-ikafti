<div>
    <div class="py-3 border-t-2 w-full">
        <h1 class="text-xl font-bold text-black">Another Information</h1>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-5">
        @forelse ($infos as $info)

            <div class="col-span-3">
                <img src="{{ url( $info->thumbnail != null ? str_replace('public', 'storage',$info->thumbnail) : 'assets/images/exampleContent.jpg')}}" class="w-full h-56 object-cover rounded-lg" alt="">
                <a href="{{ route('informationDetail', ['id' => $info->id]) }}" class="text-black text-sm line-clamp-2 text-center">{{ $info->title }}</a>
            </div>
        @empty

        @endforelse
        {{-- <div class="col-span-3">
            <img src="../../assets/images/header/banner1.jpg" class="w-full h-56 object-cover" alt="">
            <p class="text-black text-sm line-clamp-2 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, atque.</p>
        </div>
        <div class="col-span-3">
            <img src="../../assets/images/header/banner1.jpg" class="w-full h-56 object-cover" alt="">
            <p class="text-black text-sm line-clamp-2 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, atque.</p>
        </div>
        <div class="col-span-3">
            <img src="../../assets/images/header/banner1.jpg" class="w-full h-56 object-cover" alt="">
            <p class="text-black text-sm line-clamp-2 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, atque.</p>
        </div>
    </div> --}}
</div>
