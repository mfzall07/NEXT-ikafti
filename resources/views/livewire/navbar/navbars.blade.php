<nav class="bg-white px-2 py-2.5 left-0 border-b border-gray-200">
    <div class="px-5 laptop:px-20 flex flex-wrap justify-between items-center mx-auto">
        <a href="/ikafti/Dashboard-SA" class="flex items-center">
            <img src="../../assets/images/logo/IkaftiBlack.png" class="mr-3 h-10" alt="Flowbite Logo">
        </a>
        <div class="flex laptop:order-1">
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg laptop:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full laptop:flex laptop:w-auto laptop:order-2" id="navbar-sticky">
            <ul class="flex flex-col mt-4 bg-gray-50 rounded-lg border border-gray-100 laptop:flex-row laptop:space-x-8 laptop:mt-0 laptop:text-sm laptop:font-medium laptop:border-0 laptop:bg-white">
                <li>
                    <a href="/ikafti/Dashboard-SA" class="block bg-red-500 hover:bg-red-600 text-center text-white px-4 py-1 rounded-full">Home</a>
                </li>
                <li>
                    <div class="hidden laptop:block py-4 border-r-2 border-gray-400"></div>
                </li>
                <li>
                    <button type="button" wire:click="logout" class="block border w-full border-red-500 text-center text-black px-4 py-1 rounded-full mt-5 laptop:mt-0">Logout</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
