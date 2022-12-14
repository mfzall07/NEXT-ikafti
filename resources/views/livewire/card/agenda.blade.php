<div class="flex flex-col gap-5">
    @forelse ($agendas as $agenda)
    <div class="bg-white rounded-lg shadow-md border">
        <div class="flex flex-col laptop:flex-row laptop:items-center gap-4">
            {{-- <div style="background: url({{ url( $agenda->thumbnail != null ? str_replace('public', 'storage',$agenda->thumbnail) : 'assets/images/exampleContent.jpg')}})" class="w-96 laptop:h-[142px] h-56 bg-center bg-cover object-cover"></div> --}}
            <img src={{ url( $agenda->thumbnail != null ? str_replace('public', 'storage',$agenda->thumbnail) : 'assets/images/exampleContent.jpg')}} class="w-96 laptop:h-[142px] h-56 object-cover rounded-l-lg" alt="">
            <div class="laptop:p-1 p-3">
                <div>
                    <a href="{{ route('agendaDetail', ['id' => $agenda->id]) }}" id="title" class="font-bold hover:text-blue-500 text-base laptop:text-xl break-words line-clamp-2">{{ $agenda->title }}</a>
                </div>
                <div class="flex flex-col laptop:flex-row laptop:items-center gap-4 mt-4">
                    <div class="flex flex-row items-center gap-2">
                        <h1 class="font-bold text-xs laptop:text-base truncate">{{ $agenda->author }}</h1>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <div class="laptop:w-3 laptop:h-3 w-2 h-2 bg-green-400 rounded-full shadow-sm"></div>
                        <p class="text-gray-400 text-xs laptop:text-base truncate">{{ date('d M Y', strtotime($agenda->created_at)) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @empty

    @endforelse
    {{-- <div class="bg-white rounded-lg shadow-md border">
        <div class="flex flex-row items-center gap-4">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="w-96 laptop:h-[142px] h-56 bg-center bg-cover"></div>
            <div class="p-1">
                <div>
                    <a href="{{ route('agendaDetail') }}" id="title" class="font-bold hover:text-blue-500 text-base laptop:text-xl break-words line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                </div>
                <div class="flex flex-col laptop:flex-row laptop:items-center gap-4 mt-4">
                    <div class="flex flex-row items-center gap-2">
                        <div style="background: url('../assets/images/exampleContent.jpg')" class="laptop:w-8 laptop:h-8 h-2 w-2 rounded-full bg-center bg-cover"></div>
                        <h1 class="font-bold text-xs laptop:text-base truncate">Kylie Janner</h1>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <div class="laptop:w-3 laptop:h-3 w-2 h-2 bg-green-400 rounded-full shadow-sm"></div>
                        <p class="text-gray-400 text-xs laptop:text-base truncate">June 12, 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md border">
        <div class="flex flex-row items-center gap-4">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="w-96 laptop:h-[142px] h-56 bg-center bg-cover"></div>
            <div class="p-1">
                <div>
                    <a href="#" id="title" class="font-bold hover:text-blue-500 text-base laptop:text-xl break-words line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                </div>
                <div class="flex flex-col laptop:flex-row laptop:items-center gap-4 mt-4">
                    <div class="flex flex-row items-center gap-2">
                        <div style="background: url('../assets/images/exampleContent.jpg')" class="laptop:w-8 laptop:h-8 h-2 w-2 rounded-full bg-center bg-cover"></div>
                        <h1 class="font-bold text-xs laptop:text-base truncate">Kylie Janner</h1>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <div class="laptop:w-3 laptop:h-3 w-2 h-2 bg-green-400 rounded-full shadow-sm"></div>
                        <p class="text-gray-400 text-xs laptop:text-base truncate">June 12, 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
