<div class="bg-white rounded-lg shadow-md border">
    <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
    <div class="p-5">
        <a href="{{ route('informationDetail', ['id' => $info->id]) }}" id="title" class="font-bold text-xl break-words hover:text-blue-500 line-clamp-2">{{ $info->title }}</a>
        {{-- <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p> --}}
    </div>
</div>
