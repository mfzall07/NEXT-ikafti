<div>
    <!-- Main modal -->
    <div id="add-job" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="add-job">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">Add Job</h3>
                    <form class="space-y-6" action="#">
                        <div class="flex flex-col gap-4 mb-6 col-span-4 items-center justify-center">
                            <div class="bg-gray-200 rounded-full shadow-xl w-fit" x-data="showImage()">
                                <div class="flex items-center justify-center">
                                    <label class="flex justify-center items-center relative w-32 h-32 rounded-full shadow-lg cursor-pointer hover:text-blue-500">
                                        @if ($image)
                                            @if($errors->has('image'))
                                                <img src="{{ url('assets/images/profile.jpg') }}" id="preview" class="absolute rounded-full w-32 h-32 object-cover brightness-75">
                                            @else
                                            <img src="{{ $image->temporaryUrl() }}" id="preview" class="absolute rounded-full w-32 h-32 object-cover brightness-75">
                                            @endif
                                        @else
                                            <img src="{{ url('assets/images/profile.jpg') }}" id="preview" class="absolute rounded-full w-32 h-32 object-cover brightness-75">
                                        @endif
                                        <div class="absolute bg-white text-blue-500 hover:text-blue-600 w-12 h-12 text-xl rounded-full flex items-center justify-center"><i class="fa-solid fa-user-pen"></i></div>
                                        <input type="file" wire:model="image" class="opacity-0" accept="image/*"  />
                                    </label>
                                </div>
                            </div>
                            <div wire:loading wire:target="image">
                                Loading...
                            </div>
                            @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                            <h1 class="mb-2 text-sm font-medium text-gray-900">Upload Company Logo</h1>
                        </div>
                        <div class="flex flex-col laptop:flex-row items-center gap-5">
                            <div class="w-full">
                                <label for="company_name" class="block mb-2 text-sm font-medium text-gray-900">Company Name</label>
                                <input type="text" wire:model.defer="company_name" name="company_name" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Company Name" required>
                                @error('company_name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                                <input type="text" wire:model.defer="phone" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone Number" required>
                                @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="flex flex-col laptop:flex-row items-center gap-5">
                            <div class="w-full">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Job Position</label>
                                <input type="text" wire:model.defer="title" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Job Position" required>
                                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="job_type" class="block mb-2 text-sm font-medium text-gray-900">Job Type</label>
                                <select id="job_type" wire:model.defer="job_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="" selected>Job Type</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                                @error('job_type') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="flex flex-col laptop:flex-row items-center gap-5">
                            <div class="w-full">
                                <label for="placement" class="block mb-2 text-sm font-medium text-gray-900">Placement</label>
                                <input type="text" wire:model.defer="placement" name="placement" id="placement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Placement" required>
                                @error('placement') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full">
                                <label for="salary" class="block mb-2 text-sm font-medium text-gray-900">Salary</label>
                                <input type="number" wire:model.defer="salary" name="salary" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Salary" required>
                                @error('salary') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div>
                            <label for="desc" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                            <textarea type="text" wire:model.defer="description" name="desc" id="desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Description" required></textarea>
                            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" wire:click.prevent="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Job</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
