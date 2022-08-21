<div>
    <!-- Main modal -->
    <div id="edit-announcement" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="edit-announcement">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">Edit Announcement</h3>
                    <form class="space-y-6" action="#">
                        <div class="flex flex-col gap-4 mb-6 col-span-4 items-center justify-center">
                            <div class="bg-gray-200 rounded-full shadow-xl w-full" x-data="showImage()">
                                <div class="flex items-center justify-center w-full ">
                                    <label class="flex justify-center items-center relative w-full h-32 shadow-lg cursor-pointer hover:text-blue-500">
                                        <img src="../../assets/images/profile.jpg" id="preview" class="absolute w-full h-32 object-cover brightness-75">
                                        <div class="absolute bg-white text-blue-500 hover:text-blue-600 w-12 h-12 text-xl rounded-full flex items-center justify-center"><i class="fa-solid fa-user-pen"></i></div>
                                        <input type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                                    </label>
                                </div>
                            </div>
                            <h1 class="mb-2 text-sm font-medium text-gray-900">Upload Banner</h1>
                        </div>
                        <div>
                            <label for="edit_title_announc" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input type="text" name="title" id="edit_title_announc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Title" required>
                        </div>
                        <div>
                            <label for="edit_desc_announc" class="block mb-2 text-sm font-medium text-gray-900">Decription</label>
                            <input type="text" wire:model.defer="desc_announc" name="desc_announc" id="edit_desc_announc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Description" required>
                        </div>
                        <button type="submit" wire:click.prevent="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit Announcement</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
