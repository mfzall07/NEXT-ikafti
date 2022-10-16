<div>
    <div class="relative bg-white border shadow-lg p-5 rounded-xl overflow-hidden">
        <div class="flex flex-col laptop:flex-row gap-4 laptop:items-center laptop:justify-between py-5">
            <div class="flex flex-row justify-between items-center laptop:items-start laptop:flex-col">
                <div class="flex items-center gap-4">
                    <h1 class="font-bold text-xl text-black">Partnership</h1>
                    <button type="button" data-modal-toggle='add-partnership'>
                        <i class="fa-solid fa-circle-plus mt-1"></i>
                    </button>
                </div>
                <span class="text-gray-400 font-semibold text-sm">10 Partnerhip</span>
            </div>
        </div>
        <div class="overflow-auto pb-5">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-white">
                    <tr>
                        <th scope="col" class="py-3 px-6 truncate rounded-tl-lg">
                            No
                            {{-- <i class="fa-solid fa-sort hover:text-blue-500 ml-4 hover:cursor-pointer hidden laptop:inline-block"></i> --}}
                        </th>
                        <th scope="col" class="py-3 px-6 truncate">
                            Title
                            {{-- <i class="fa-solid fa-sort hover:text-blue-500 ml-4 hover:cursor-pointer hidden laptop:inline-block"></i> --}}
                        </th>
                        <th scope="col" class="py-3 px-6 truncate">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <td class="py-4 px-6">
                            <h1 class="font-semibold truncate">1</h1>
                        </td>
                        <td class="py-4 px-6">
                            <a href="#" class="font-bold text-black line-clamp-1">Title</a>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-4">
                                <button type="button" data-modal-toggle="edit-partnership" class="w-7 h-7 flex items-center justify-center rounded-lg font-semibold text-white bg-green-400">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <div id="edit_partner" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                    Edit
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>

                                <button type="button" data-modal-toggle="delete" class="w-7 h-7 flex items-center justify-center rounded-lg font-semibold text-white bg-red-500">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                                <div id="delete_partner" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                    Delete
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    {{-- @empty
                    <tr class="bg-white border-b">
                        <td class="py-4 px-6" colspan="4">
                            <h1 class="font-semibold truncate text-center">No Data Available</h1>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        {{-- {{ $announcements->onEachSide(1)->links('livewire.custom-pagination-links-view', ['pageName' => $announcements->getPageName()]) }} --}}
    </div>
</div>
