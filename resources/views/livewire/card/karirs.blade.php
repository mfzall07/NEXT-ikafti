<div>
    <div class="flex flex-col laptop:grid grid-flow-row-dense grid-cols-4 grid-rows-3 items-center laptop:justify-center gap-5 flex-wrap">
        @forelse ($jobs as $job)
            <div class="bg-white rounded-lg shadow-md border w-full">
                <div style="background: url({{ url( $job->image != null ? str_replace('public', 'storage',$job->image) : 'assets/images/exampleContent.jpg')}})" class="h-56 bg-center bg-cover object-cover"></div>
                <div class="p-5">
                    <a href="{{ route('karirDetail', ['id' => $job->id]) }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">{{ $job->company_name }}</a>
                    <div class="flex flex-row items-center gap-2 mt-1">
                        <div class="bg-green-400 w-2 h-2 rounded-full"></div>
                        <span class="text-gray-400 text-xs">{{ date('d M Y', strtotime($job->created_at)) }}</span>
                    </div>
                    <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">{{ $job->description }}</p>
                    <div class="flex flex-row items-center gap-5 mt-1">
                        <div class="flex flex-row items-center gap-2 mt-1">
                            <i class="fa-solid fa-clock"></i>
                            <span class="text-gray-400 text-sm">{{ $job->job_type }}</span>
                        </div>
                        <div class="flex flex-row items-center gap-2 mt-1">
                            <span class="font-bold">Rp</span>
                            <span class="text-gray-400 text-sm">{{number_format($job->salary, 0, ',', '.')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @empty

        @endforelse

    </div>
    {{ $jobs->onEachSide(1)->links('livewire.custom-pagination-links-view', ['pageName' => $jobs->getPageName()]) }}
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
