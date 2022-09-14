<div class="flex flex-col gap-4">
    @forelse ($infos as $info)
    <div class="bg-white rounded-lg shadow-md border flex items-center gap-4">
        {{-- <div style="background: url({{ url( $info->thumbnail != null ? str_replace('public', 'storage',$info->thumbnail) : 'assets/images/exampleContent.jpg')}});" class="w-96 laptop:h-[139px] h-56 rounded-l-lg bg-center bg-cover object-cover"></div> --}}
        <img src={{ url( $info->thumbnail != null ? str_replace('public', 'storage',$info->thumbnail) : 'assets/images/exampleContent.jpg')}} class="w-96 laptop:h-[139px] h-56 rounded-l-lg bg-center bg-cover object-cover" alt="">
        <div class="p-1">
            <div>
                <a href="{{ route('informationDetail', ['id' => $info->id]) }}" id="title" class="font-bold text-xl hover:text-blue-500 break-words line-clamp-1">{{ $info->title }}</a>
                {{-- <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p> --}}
            </div>
            <div class="flex items-center gap-4 mt-4">
                <h1 class="font-bold">{{ $info->author }}</h1>
                <div class="w-3 h-3 bg-green-400 rounded-full shadow-sm"></div>
                <p class="text-gray-400">{{ date('d M Y', strtotime($info->created_at)) }}</p>
            </div>
        </div>
    </div>
    @empty

    @endforelse

    {{-- <div class="bg-white rounded-lg shadow-md border p-5 flex items-center gap-4">
        <div class="p-1">
            <div>
                <a href="{{ route('informationDetail', ['id' => $info->id]) }}" id="title" class="font-bold text-xl hover:text-blue-500 break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
            <div class="flex items-center gap-4 mt-4">
                <div style="background: url('../assets/images/exampleContent.jpg')" class="w-8 h-8 rounded-lg bg-center bg-cover"></div>
                <h1 class="font-bold">Kylie Janner</h1>
                <div class="w-3 h-3 bg-green-400 rounded-full shadow-sm"></div>
                <p class="text-gray-400">June 12, 2021</p>
            </div>
        </div>
    </div> --}}
</div>
