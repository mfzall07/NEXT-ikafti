<div>
    <!-- Main modal -->
    <div id="view-alumni" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Alumni Detail
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="view-alumni">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-5 flex items-center gap-5">
                    <div style="background-image: url('../../assets/images/profile.jpg')" class="w-56 h-56 rounded-lg bg-cover bg-no-repeat shadow-lg"></div>
                    <div class="self-baseline grid grid-cols-12 gap-5 w-full">
                        <div class="col-span-4 font-bold text-black w-full">
                            <h1 class="mb-2">Fullname</h1>
                            <h1 class="mb-2">Current Company</h1>
                            <h1 class="mb-2">Address</h1>
                            <h1 class="mb-2">Domicile</h1>
                            <h1 class="mb-2">Email</h1>
                            <h1 class="mb-2">Phone Number</h1>
                            <h1 class="mb-2">Birth Place</h1>
                            <h1 class="mb-2">Birth Date</h1>
                            <h1 class="mb-2">Generation</h1>
                            <h1 class="mb-2">Program Study</h1>
                            <h1 class="mb-2">Alumni Proof</h1>
                        </div>
                        <div class="col-span-8 w-full">
                            <h1 class="mb-2">{{ $alumni->name ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->company ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->address ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->domicile ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->email ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->phone ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->birth_place ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->birth_date ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->generation ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->program_studi ?? '-' }}</h1>
                            <h1 class="mb-2">{{ $alumni->proof ?? '-' }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
