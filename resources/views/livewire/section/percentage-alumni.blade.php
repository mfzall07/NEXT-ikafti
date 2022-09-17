<div class="bg-zinc-100 w-full p-5 shadow-lg">
    <div data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <h1 class="font-bold text-3xl text-center text-black">Percentage Total Alumni</h1>
        <div class="w-full flex flex-col laptop:flex-row laptop:gap-20 gap-5 items-center justify-center mt-20">
            <div class="radial-progress bg-gradient-to-tr from-red-500 to-pink-500 text-white font-bold text-xl" style="--value:{{ $total ? ($chart1 / $total) * 100 : 0}}; --size:12rem; --thickness: 2rem;">
                <h1 class="text-xl text-center">{{ $total ? ($chart1 / $total) * 100 : 0}}%</h1>
                <p class="text-base text-center">1987-1996</p>
            </div>
            <div class="radial-progress bg-gradient-to-tr from-red-500 to-pink-500 text-white font-bold text-xl" style="--value:{{ $total ? ($chart2 / $total) * 100 : 0}}; --size:12rem; --thickness: 2rem;">
                <h1 class="text-xl text-center">{{ $total ? ($chart2 / $total) * 100 : 0}}%</h1>
                <p class="text-base text-center">1997-2006</p>
            </div>
            <div class="radial-progress bg-gradient-to-tr from-red-500 to-pink-500 text-white font-bold text-xl" style="--value:{{ $total ? ($chart3 / $total) * 100 : 0}}; --size:12rem; --thickness: 2rem;">
                <h1 class="text-xl text-center">{{ $total ? ($chart3 / $total) * 100 : 0}}%</h1>
                <p class="text-base text-center">2007-2016</p>
            </div>
            <div class="radial-progress bg-gradient-to-tr from-red-500 to-pink-500 text-white font-bold text-xl" style="--value:{{ $total ? ($chart4 / $total) * 100 : 0}}; --size:12rem; --thickness: 2rem;">
                <h1 class="text-xl text-center">{{ $total ? ($chart4 / $total) * 100 : 0}}%</h1>
                <p class="text-base text-center">2017-2018</p>
            </div>
        </div>
    </div>
</div>
