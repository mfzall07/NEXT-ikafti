<div>
    <div class="swiper mySwiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @forelse ($announcements as $ann)
                <div class="swiper-slide relative">
                    <div class="bg-cover w-full laptop:h-96 h-60 brightness-90 bg-center" style="background-image: url({{ url( $ann->image != null ? str_replace('public', 'storage',$ann->image) : 'assets/images/header/banner1.jpg')}})">
                        <div class="absolute bottom-20 laptop:bottom-1/4 left-14 laptop:left-44 w-full">
                            <h1 class="laptop:text-3xl text-base text-black font-bold tracking-wider w-3/4">{{ $ann->title }}</h1>
                            <p class="text-xs laptop:text-sm text-zinc-600 tracking-wider font-medium w-3/4 laptop:w-1/4">{{ $ann->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Slides -->
                <div class="swiper-slide relative">
                    <div class="bg-cover w-full laptop:h-96 h-60 brightness-90 bg-center" style="background-image: url(../assets/images/header/banner1.jpg)">
                        <div class="absolute bottom-20 laptop:bottom-1/4 left-14 laptop:left-44 w-full">
                            <h1 class="laptop:text-3xl text-base text-black font-bold tracking-wider w-3/4">Lorem Ipsum Dolor Set Amet</h1>
                            <p class="text-xs laptop:text-sm text-zinc-600 tracking-wider font-medium w-3/4 laptop:w-1/4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper aliquet id in tempus. Risus eu adipiscing nisl euismod lacus tortor vitae consequat diam.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative">
                    <div class="bg-cover w-full laptop:h-96 h-60 brightness-90 bg-center" style="background-image: url(../assets/images/header/banner2.jpg)">
                        <div class="absolute bottom-20 laptop:bottom-1/4 left-14 laptop:left-44 w-full">
                            <h1 class="laptop:text-3xl text-base text-black font-bold tracking-wider w-3/4">Lorem ipsum dolor sit amet consectetur.</h1>
                            <p class="text-xs laptop:text-sm text-zinc-600 tracking-wider font-medium w-3/4 laptop:w-1/4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper aliquet id in tempus. Risus eu adipiscing nisl euismod lacus tortor vitae consequat diam.</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
            <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
