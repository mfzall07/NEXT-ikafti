<div>
    <!-- Main modal -->
    <div id="edit-alumni" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="edit-alumni">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">edit Alumni</h3>
                    <form class="space-y-6" action="#">
                        <div class="flex flex-col gap-4 mb-6 col-span-4 items-center justify-center">
                            <div class="bg-gray-200 rounded-full shadow-xl w-fit" x-data="showImage()">
                                <div class="flex items-center justify-center">
                                    <label class="flex justify-center items-center relative w-32 h-32 rounded-full shadow-lg cursor-pointer hover:text-blue-500">
                                        @if ($image_temp)
                                            @if($errors->has('image_temp'))
                                                <img src="{{ url( $image != null ? str_replace('public', 'storage',$image) : 'assets/images/profile.jpg') }}" id="preview" class="absolute rounded-full w-32 h-32 object-cover brightness-75">
                                            @else
                                                <img src="{{ $image_temp->temporaryUrl() }}" id="preview" class="absolute rounded-full w-32 h-32 object-cover brightness-75">
                                            @endif
                                        @else
                                            <img src="{{ url( $image != null ? str_replace('public', 'storage',$image) : 'assets/images/profile.jpg') }}" id="preview" class="absolute rounded-full w-32 h-32 object-cover brightness-75">
                                        @endif
                                        <div class="absolute bg-white text-blue-500 hover:text-blue-600 w-12 h-12 text-xl rounded-full flex items-center justify-center"><i class="fa-solid fa-user-pen"></i></div>
                                        <input type="file" wire:model="image_temp" class="opacity-0" accept="image/*" />
                                    </label>
                                </div>
                            </div>
                            <div wire:loading wire:target="image_temp">
                                Uploading...
                            </div>
                            @error('image_temp') <span class="text-red-500">{{ $message }}</span> @enderror
                            <h1 class="mb-2 text-sm font-medium text-gray-900">Upload Image</h1>
                        </div>
                        <div class="flex flex-col laptop:flex-row items-center gap-5">
                            <div class="w-full">
                                <label for="edit_fullname" class="block mb-2 text-sm font-medium text-gray-900">Fullname</label>
                                <input type="text" wire:model.defer="fullname" name="edit_fullname" id="edit_fullnames" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Fullname" required>
                                @error('fullname') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="edit_current_company" class="block mb-2 text-sm font-medium text-gray-900">Current Company</label>
                                <input type="text" wire:model.defer="current_company" name="edit_current_company" id="edit_current_companys" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Current Company" required>
                                @error('current_company') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="flex flex-col laptop:flex-row items-center gap-5">
                            <div class="w-full">
                                <label for="edit_address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                                <input type="text" wire:model.defer="address" name="edit_address" id="edit_addresss" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Address" required>
                                @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="edit_domicile" class="block mb-2 text-sm font-medium text-gray-900">Domicile</label>
                                <input type="text" wire:model.defer="domicile" name="edit_domicile" id="edit_domiciles" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Domicile" required>
                                @error('domicile') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="edit_email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="email" wire:model.defer="email" name="edit_email" id="edit_emails" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@company.com" required>
                                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="edit_phone" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                                <input type="text" wire:model.defer="phone" name="edit_phone" id="edit_phones" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone Number" required>
                                @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="flex flex-col laptop:flex-row items-center gap-5">
                            <div class="w-full">
                                <label for="edit_birth_place" class="block mb-2 text-sm font-medium text-gray-900">Birth Place</label>
                                <input type="text" wire:model.defer="birth_place" name="edit_birth_place" id="edit_birth_places" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Birth Place" required>
                                @error('birth_place') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="edit_birth_date" class="block mb-2 text-sm font-medium text-gray-900">Birth Date</label>
                                <input type="date" wire:model.defer="birth_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Birth Date">
                                @error('birth_date') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="edit_generation" class="block mb-2 text-sm font-medium text-gray-900">Generation</label>
                                <input type="number" wire:model.defer="generation" name="edit_generation" id="edit_generations" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Generation" required>
                                @error('generation') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="edit_program_studi" class="block mb-2 text-sm font-medium text-gray-900">Program Studi</label>
                                <select id="edit_program_studi" wire:model.defer="program_studi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="" selected>Program Studi</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Kimia">Teknik Kimia</option>
                                    <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                                    <option value="PII">PII</option>
                                </select>
                                @error('program_studi') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="w-full flex">
                            @if ($proof)
                                    <a class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer" wire:click="download('{{ str_replace('public/proof/', '', $proof) }}')">Download File</a>
                            @endif
                        </div>
                        <button type="submit" wire:click.prevent="update" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit Alumni</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
