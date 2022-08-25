<div>
    <div class="py-3 border-t-2 w-full">
        <h1 class="text-xl font-bold">Another Agenda</h1>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-5">
        @forelse ($agendas as $agenda)

        <div class="col-span-3">
            <img src="{{ url( $agenda->thumbnail != null ? str_replace('public', 'storage',$agenda->thumbnail) : 'assets/images/exampleContent.jpg')}}" class="w-full h-56 object-cover" alt="">
            <a href="{{ route('agendaDetail', ['id' => $agenda->id]) }}" class="text-black text-sm line-clamp-2 text-center">{{ $agenda->title }}</a>
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
        </div> --}}
    </div>
</div>
