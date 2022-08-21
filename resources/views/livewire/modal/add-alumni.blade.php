<div>
    <!-- Main modal -->
    <div id="add-alumni" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="add-alumni">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">Add Alumni</h3>
                    <form class="space-y-6" action="#">
                        <div class="flex flex-col gap-4 mb-6 col-span-4 items-center justify-center">
                            <div class="bg-gray-200 rounded-full shadow-xl w-fit" x-data="showImage()">
                                <div class="flex items-center justify-center">
                                    <label class="flex justify-center items-center relative w-32 h-32 rounded-full shadow-lg cursor-pointer hover:text-blue-500">
                                        <img src="../../assets/images/profile.jpg" id="preview" class="absolute rounded-full w-32 h-32 object-cover brightness-75">
                                        <div class="absolute bg-white text-blue-500 hover:text-blue-600 w-12 h-12 text-xl rounded-full flex items-center justify-center"><i class="fa-solid fa-user-pen"></i></div>
                                        <input type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                                    </label>
                                </div>
                            </div>
                            <h1 class="mb-2 text-sm font-medium text-gray-900">Upload Image</h1>
                        </div>
                        <div class="flex flex-col laptop:flex-row items-center gap-5">
                            <div class="w-full">
                                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Fullname</label>
                                <input type="text" wire:model.defer="fullname" name="fullname" id="fullnames" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Fullname" required>
                                @error('fullname') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="current_company" class="block mb-2 text-sm font-medium text-gray-900">Current Company</label>
                                <input type="text" wire:model.defer="current_company" name="current_company" id="current_company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Current Company" required>
                                @error('current_company') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="flex flex-col laptop:flex-row items-center gap-5">
                            <div class="w-full">
                                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                                <input type="text" wire:model.defer="address" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Address" required>
                                @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="domicile" class="block mb-2 text-sm font-medium text-gray-900">Domicile</label>
                                <input type="text" wire:model.defer="domicile" name="domicile" id="domicile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Domicile" required>
                                @error('domicile') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="email" wire:model.defer="email" name="email" id="emails" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@company.com" required>
                                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                                <input type="text" wire:model.defer="phone" name="phone" id="phones" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone Number" required>
                                @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="flex flex-col laptop:flex-row items-center gap-5">
                            <div class="w-full">
                                <label for="birth_place" class="block mb-2 text-sm font-medium text-gray-900">Birth Place</label>
                                <input type="text" wire:model.defer="birth_place" name="birth_place" id="birth_place" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Birth Place" required>
                                @error('birth_place') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900">Birth Date</label>
                                <input value="" id="birth_date" wire:model.defer="birth_date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Birth Date">
                                @error('birth_date') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="generation" class="block mb-2 text-sm font-medium text-gray-900">Generation</label>
                                <input type="text" wire:model.defer="generation" name="generation" id="generation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Generation" required>
                                @error('generation') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="program_studi" class="block mb-2 text-sm font-medium text-gray-900">Program Studi</label>
                                <select id="program_studi" wire:model.defer="program_studi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="" selected>Program Studi</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Kimia">Teknik Kimia</option>
                                    <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                                    <option value="PII">PII</option>
                                </select>
                                @error('program_studi') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-center items-center w-full">
                                <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-28 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                        <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload the proof</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG & PDF</p>
                                    </div>
                                    <input id="dropzone-file" type="file" class="hidden" />
                                </label>
                            </div>
                        </div>
                        <button type="submit" wire:click.prevent="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Alumni</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
