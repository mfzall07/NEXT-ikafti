<div wire:ignore.self>
    <div class="flex flex-col laptop:grid grid-cols-12 gap-5">
        <div class="col-span-8 order-2 laptop:order-1">
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" wire:model.defer="name" name="nama-lengkap" id="nama-lengkap" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="nama-lengkap" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Lengkap</label>
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" wire:model.defer="address" name="alamat" id="alamat" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="alamat" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="email" wire:model.defer="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <select id="underline_select" wire:model.defer="program_studi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option value="" selected>Choose Program Studi</option>
                    <option value="Teknik Industri">Prodi Teknik Industri</option>
                    <option value="Teknik Kimia">Prodi Teknik Kimia</option>
                    <option value="Teknik Pertambangan">Prodi Teknik Pertambangan</option>
                    <option value="PII">Prodi PII</option>
                </select>
                <label for="program_syudi" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Program Studi</label>
                @error('program_studi') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 mb-6 w-full group">
                    <input type="text" wire:model.defer="birth_place" name="tenpat-lahir" id="tenpat-lahir" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="tenpat-lahir" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat Lahir</label>
                    @error('birth_place') <span class="text-red-500">{{ $message }}</span> @enderror
              </div>
              <div class="relative z-0 mb-6 w-full group">
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input wire:model.defer="birth_date" type="date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer pl-10" placeholder="Select date">
                </div>
                @error('birth_date') <span class="text-red-500">{{ $message }}</span> @enderror
              </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 mb-6 w-full group">
                    <input type="number" wire:model.defer="generation" name="angakatan" id="angakatan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="angakatan" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Angkatan</label>
                    @error('generation') <span class="text-red-500">{{ $message }}</span> @enderror
              </div>
              <div class="relative z-0 mb-6 w-full group">
                    <input type="text" wire:model.defer="domicile" name="domisili" id="domisili" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="domisili" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Domisili</label>
                    @error('domicile') <span class="text-red-500">{{ $message }}</span> @enderror
              </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <input type="tel" wire:model.defer="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon</label>
                    @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" wire:model.defer="company" name="company" id="company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Perusahaan Saat Ini</label>
                    @error('company') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <div class="flex justify-center items-center w-full">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            @if ($proof)
                                @if($errors->has('proof'))
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload the proof</span>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, JPEG & PDF</p>
                                @else
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Your proof has been uploaded</span>
                                @endif
                            @else
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload the proof</span>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, JPEG & PDF</p>
                            @endif
                        </div>
                        <input id="dropzone-file" wire:model="proof" type="file" accept=".png,.jpg,.jpeg,.pdf" class="hidden" />
                        <div wire:loading wire:target="proof">
                            Uploading...
                        </div>
                        @error('proof') <span class="text-red-500">{{ $message }}</span> @enderror
                    </label>
                </div>
            </div>
        </div>
        <div class="col-span-4 m-auto order-1 laptop:order-2">
            <div class="flex flex-col gap-4 mb-6 col-span-4 items-center justify-center">
                <div class="bg-gray-200 dark:bg-white rounded-full shadow-xl w-fit" x-data="showImage()">
                    <div class="flex items-center justify-center">
                        <label class="flex justify-center items-center relative w-56 h-56 rounded-full shadow-lg cursor-pointer hover:text-blue-500">
                            @if ($image)
                                @if($errors->has('image'))
                                    <img src="{{ url('assets/images/profile.jpg') }}" id="preview" class="absolute rounded-full w-56 h-56 object-cover brightness-75">
                                @else
                                <img src="{{ $image->temporaryUrl() }}" id="preview" class="absolute rounded-full w-56 h-56 object-cover brightness-75">
                                @endif
                            @else
                                <img src="{{ url('assets/images/profile.jpg') }}" id="preview" class="absolute rounded-full w-56 h-56 object-cover brightness-75">
                            @endif
                            <div class="absolute bg-white text-blue-500 hover:text-blue-600 w-12 h-12 text-xl rounded-full flex items-center justify-center"><i class="fa-solid fa-user-pen"></i></div>
                            <input type="file" wire:model="image" class="opacity-0" accept="image/*"/>
                        </label>
                    </div>
                </div>
                <div wire:loading wire:target="image">
                    Uploading...
                </div>
                @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                <h1 class="font-semibold">Upload Image</h1>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center gap-5 mt-10"   >
        <button class="bg-transparent rounded-full border border-red-500 px-4 py-1">kembali Ke Beranda</button>
        <button wire:click.prevent="submit" class="bg-transparent rounded-full border border-red-500 px-4 py-1">Submit</button>
    </div>
</div>
