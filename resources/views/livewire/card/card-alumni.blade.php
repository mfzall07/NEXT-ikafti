<div>
    <div class="flex flex-col laptop:grid grid-cols-12 gap-5 mb-10">
        <div class="col-span-4 relative">
            <input type="text" class="rounded-full w-full border border-gray-400 pl-14" placeholder="Nama Lengkap">
            <i class="fa-solid fa-user-tie absolute left-5 top-1.5 text-xl"></i>
        </div>
        <div class="col-span-4 relative">
            <input type="text" class="rounded-full w-full border border-gray-400 pl-14" placeholder="Angkatan">
            <i class="fa-solid fa-calendar-days absolute left-5 top-1.5 text-xl"></i>
        </div>
        <div class="col-span-4 relative">
            <input type="text" class="rounded-full w-full border border-gray-400 pl-14" placeholder="Domisili">
            <i class="fa-solid fa-location-dot absolute left-5 top-1.5 text-xl"></i>
        </div>
    </div>
    <div class="flex flex-col laptop:grid grid-cols-12 items-center justify-between flex-wrap gap-5">
        @forelse ($alumnis as $alumni)
        <div class="bg-white rounded-xl border shadow-lg relative overflow-hidden w-full col-span-3">
            <div class="h-24 w-24 bg-red-300 absolute -bottom-12 -right-12 rounded-tr-full rounded-br-full rounded-bl-full z-20"></div>
            <div class="h-24 w-24 bg-red-400 absolute -bottom-10 -right-10 rounded-tr-full rounded-br-full rounded-bl-full z-10"></div>
            <div class="flex flex-col">
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url({{ url( $alumni->image != null ? str_replace('public', 'storage',$alumni->image) : 'assets/images/profile.jpg')}})" class="bg-cover bg-center w-full h-36 flex items-center justify-center">
                        <img src="{{ url( $alumni->image != null ? str_replace('public', 'storage',$alumni->image) : 'assets/images/profile.jpg')}}" class="w-28 h-28 rounded-full object-cover border-2 border-white shadow-xl" alt="">
                    </div>
                </div>
                <div class="flex flex-col gap-5 p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-user-tie"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">{{ $alumni->name ?? '-' }}</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-map-location-dot"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">{{ $alumni->address ?? '-' }}</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-house-circle-check"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">{{ $alumni->domicile ?? '-' }}</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-envelope"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">{{ $alumni->email ?? '-' }}</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-square-phone"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">{{ $alumni->phone ?? '-' }}</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-users"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">{{ $alumni->generation ?? '-' }}</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-building"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">{{ $alumni->company ?? '-' }}</h1>
                    </div>
                </div>
            </div>
        </div>
        @empty

        @endforelse
        {{-- <div class="bg-white rounded-xl border shadow-lg relative overflow-hidden w-full col-span-3">
            <div class="h-24 w-24 bg-red-300 absolute -bottom-12 -right-12 rounded-tr-full rounded-br-full rounded-bl-full z-20"></div>
            <div class="h-24 w-24 bg-red-400 absolute -bottom-10 -right-10 rounded-tr-full rounded-br-full rounded-bl-full z-10"></div>
            <div class="flex flex-col">
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url('../../assets/images/profile.jpg')" class="bg-cover bg-center w-full h-36 flex items-center justify-center">
                        <img src="../../assets/images/profile.jpg" class="w-28 h-28 rounded-full object-cover border-2 border-white shadow-xl" alt="">
                    </div>
                </div>
                <div class="flex flex-col gap-5 p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-user-tie"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">Muh Faizal</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-map-location-dot"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">Jl. Beringin</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-house-circle-check"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">Palu</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-envelope"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">faizal@gmail.com</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-square-phone"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">+6282xxxxxx</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-users"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">2017</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-building"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">PT. VIN PROTOCOL</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl border shadow-lg relative overflow-hidden w-full col-span-3">
            <div class="h-24 w-24 bg-red-300 absolute -bottom-12 -right-12 rounded-tr-full rounded-br-full rounded-bl-full z-20"></div>
            <div class="h-24 w-24 bg-red-400 absolute -bottom-10 -right-10 rounded-tr-full rounded-br-full rounded-bl-full z-10"></div>
            <div class="flex flex-col">
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url('../../assets/images/profile.jpg')" class="bg-cover bg-center w-full h-36 flex items-center justify-center">
                        <img src="../../assets/images/profile.jpg" class="w-28 h-28 rounded-full object-cover border-2 border-white shadow-xl" alt="">
                    </div>
                </div>
                <div class="flex flex-col gap-5 p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-user-tie"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">Muh Faizal</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-map-location-dot"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">Jl. Beringin</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-house-circle-check"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">Palu</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-envelope"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">faizal@gmail.com</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-square-phone"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">+6282xxxxxx</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-users"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">2017</h1>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <i class="col-span-2 mx-auto fa-solid fa-building"></i>
                        <h1 class="col-span-10 text-sm font-semibold text-gray-400">PT. VIN PROTOCOL</h1>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    {{ $alumnis->onEachSide(1)->links('livewire.custom-pagination-links-view', ['pageName' => $alumnis->getPageName()]) }}
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
