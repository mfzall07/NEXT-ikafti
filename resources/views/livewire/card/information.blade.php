<div>
    <div class="flex flex-col laptop:grid grid-flow-row-dense grid-cols-4 grid-rows-3 items-center laptop:justify-center gap-5 flex-wrap">
        @forelse ($infos as $info)
            <div class="bg-white rounded-lg shadow-md border w-full">
                {{-- <div style="background: url({{ url( $info->thumbnail != null ? str_replace('public', 'storage',$info->thumbnail) : 'assets/images/exampleContent.jpg')}})" class="h-56 bg-center bg-cover object-cover"></div> --}}
                <img src={{ url( $info->thumbnail != null ? str_replace('public', 'storage',$info->thumbnail) : 'assets/images/exampleContent.jpg')}} class="h-56 bg-center bg-cover object-cover rounded-t-lg w-full" alt="">
                <div class="p-5">
                    <a href="{{ route('informationDetail', ['id' => $info->id]) }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">{{ $info->title }}</a>
                    <div class="flex flex-row items-center gap-2 mt-1">
                        <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                        <span class="text-gray-400 text-xs">{{ date('d M Y', strtotime($info->created_at)) }}</span>
                    </div>
                    {{-- <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">{!! $info->body !!}</p> --}}
                </div>
            </div>
        @empty

        @endforelse
        {{-- <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border w-full">
            <div style="background: url('../assets/images/exampleContent.jpg')" class="h-56 bg-center bg-cover"></div>
            <div class="p-5">
                <a href="{{ route('informationDetail') }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus libero quam </a>
                <div class="flex flex-row items-center gap-2 mt-1">
                    <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                    <span class="text-gray-400 text-xs">22 Aug 2022</span>
                </div>
                <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div> --}}
    </div>
    {{ $infos->onEachSide(1)->links('livewire.custom-pagination-links-view', ['pageName' => $infos->getPageName()]) }}
    {{-- <div class="text-xs text-gray-700 bg-white dark:bg-gray-800 dark:text-gray-400 rounded-b-lg px-6 mt-10 flex flex-col laptop:flex-row items-center justify-between gap-4 ">
        <span class="text-sm text-gray-700 dark:text-gray-400">
            Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span class="font-semibold text-gray-900 dark:text-white">8</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span> Entries
        </span>
        <nav aria-label="Page navigation example">
            <ul class="inline-flex items-center -space-x-px">
                <li>
                    <a href="#" class="block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Previous</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="z-10 py-2 px-3 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Next</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div> --}}
</div>
