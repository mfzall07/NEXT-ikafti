<div class="relative bg-white border shadow-lg p-5 rounded-xl overflow-hidden">
    <div class="flex flex-col laptop:flex-row gap-4 laptop:items-center laptop:justify-between py-5">
        <div class="flex flex-row justify-between items-center laptop:items-start laptop:flex-col">
            <div class="flex items-center gap-4">
                <h1 class="font-bold text-xl text-black ">Content</h1>
                <a href="{{ route('addContent') }}">
                    <i class="fa-solid fa-circle-plus mt-1"></i>
                </a>
            </div>
            <span class="text-gray-400 font-semibold text-sm">10 Content</span>
        </div>
        <div class="flex items-center laptop:w-auto w-full">   
            <label for="searchContentList" class="sr-only">Search</label>
            <div class="flex items-center gap-5">
                <div class="relative w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="searchContentList" onkeyup="searchContentList()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Search" required>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-auto h-[34vh] laptop:h-[45vh]">
        <table class="w-full text-sm text-left text-gray-500" id="ContentList">
            <thead class="text-xs text-gray-700 uppercase bg-white">
                <tr>
                    <th scope="col" class="py-3 px-6 truncate rounded-tl-lg">
                        No
                        <i class="fa-solid fa-sort hover:text-blue-500 ml-4 hover:cursor-pointer hidden laptop:inline-block"></i>
                    </th>
                    <th scope="col" class="py-3 px-6 truncate">
                        Title
                        <i class="fa-solid fa-sort hover:text-blue-500 ml-4 hover:cursor-pointer hidden laptop:inline-block"></i>
                    </th>
                    <th scope="col" class="py-3 px-6 truncate">
                        Upload Date
                        <i class="fa-solid fa-sort hover:text-blue-500 ml-4 hover:cursor-pointer hidden laptop:inline-block"></i>
                    </th>
                    <th scope="col" class="py-3 px-6 truncate">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
                <tr class="bg-white border-b">
                    <td class="py-4 px-6">
                        <h1 class="font-semibold truncate">1</h1>
                    </td>
                    <td class="py-4 px-6">
                        <h1 class="font-semibold truncate">Content 1</h1>
                    </td>
                    <td class="py-4 px-6">
                        <h1 class="font-semibold truncate">22 Dec 2022</h1>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center gap-4">
                            <a href="{{ route('informationDetails') }}" data-tooltip-target="view_content" class="w-7 h-7 flex items-center justify-center rounded-full font-semibold text-white bg-green-400">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <div id="view_content" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                View
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <a href="{{ route('editContent') }}" data-tooltip-target="edit_content" class="w-7 h-7 flex items-center justify-center rounded-full font-semibold text-white bg-blue-500">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <div id="edit_content" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Edit
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <button type="button" data-tooltip-target="delete_content" data-modal-toggle="delete" class="w-7 h-7 flex items-center justify-center rounded-full font-semibold text-white bg-red-500">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            <div id="delete_content" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Delete
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-xs text-gray-700 bg-white rounded-b-lg px-6 pt-5 flex flex-col laptop:flex-row items-center justify-between gap-4">
        <span class="text-sm text-gray-700">
            Showing <span class="font-semibold text-gray-900 ">1</span> to <span class="font-semibold text-gray-900 ">10</span> of <span class="font-semibold text-gray-900 ">100</span> Entries
        </span>
        <nav aria-label="Page navigation example">
            <ul class="inline-flex items-center -space-x-px">
                <li>
                    <a href="#" class="block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="sr-only">Previous</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="z-10 py-2 px-3 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 ">1</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="sr-only">Next</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>