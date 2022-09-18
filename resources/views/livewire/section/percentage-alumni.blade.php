<div class="bg-zinc-100 w-full p-5 shadow-lg">
    <div data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <h1 class="font-bold text-3xl text-center text-black">Percentage Total Alumni</h1>
        <div class="w-full hidden laptop:flex flex-col laptop:flex-row laptop:gap-20 gap-5 items-center justify-center mt-10">
            <div class="radial-progress bg-gradient-to-tr from-red-500 to-pink-500 text-white font-bold text-xl" style="--value:{{ round($total ? ($chart1 / 2900) * 100 : 0, 2)}}; --size:12rem; --thickness: 2rem;">
                <h1 class="text-xl text-center">{{ round($total ? ($chart1 / 2900) * 100 : 0, 2)}}%</h1>
                <p class="text-base text-center">1987-1996</p>
            </div>
            <div class="radial-progress bg-gradient-to-tr from-red-500 to-pink-500 text-white font-bold text-xl" style="--value:{{ round($total ? ($chart2 / 1900) * 100 : 0, 2)}}; --size:12rem; --thickness: 2rem;">
                <h1 class="text-xl text-center">{{ round($total ? ($chart2 / 1900) * 100 : 0, 2)}}%</h1>
                <p class="text-base text-center">1997-2006</p>
            </div>
            <div class="radial-progress bg-gradient-to-tr from-red-500 to-pink-500 text-white font-bold text-xl" style="--value:{{ round($total ? ($chart3 / 3250) * 100 : 0, 2)}}; --size:12rem; --thickness: 2rem;">
                <h1 class="text-xl text-center">{{ round($total ? ($chart3 / 3250) * 100 : 0, 2)}}%</h1>
                <p class="text-base text-center">2007-2016</p>
            </div>
            <div class="radial-progress bg-gradient-to-tr from-red-500 to-pink-500 text-white font-bold text-xl" style="--value:{{ round($total ? ($chart4 / 1000) * 100 : 0, 2)}}; --size:12rem; --thickness: 2rem;">
                <h1 class="text-xl text-center">{{ round($total ? ($chart4 / 1000) * 100 : 0, 2)}}%</h1>
                <p class="text-base text-center">2017-2018</p>
            </div>
        </div>
        <div class="mt-5 block laptop:hidden">
            <div class="mb-5">
                <div class="text-base font-medium dark:text-white mb-2">1987-1996</div>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: {{ round($total ? ($chart1 / 2900) * 100 : 0, 2)}}%"></div>
                </div>
            </div>
            <div class="mb-5">
                <div class="text-base font-medium dark:text-white mb-2">1997-2006</div>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: {{ round($total ? ($chart2 / 1900) * 100 : 0, 2)}}%"></div>
                </div>
            </div>
            <div class="mb-5">
                <div class="text-base font-medium dark:text-white mb-2">2007-2016</div>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: {{ round($total ? ($chart3 / 3250) * 100 : 0, 2)}}%"></div>
                </div>
            </div>
            <div class="mb-5">
                <div class="text-base font-medium dark:text-white mb-2">2017-2018</div>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: {{ round($total ? ($chart4 / 1000) * 100 : 0, 2)}}%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
