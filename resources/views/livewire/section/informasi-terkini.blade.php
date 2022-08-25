<div>
    <div class="flex items-center justify-between pb-5">
        <h1 class="font-bold tracking-wider text-xl laptop:text-3xl uppercase">Information</h1>
        <a href="{{ route('information') }}" class="text-red-500 hover:text-red-600 truncate">See all</a>
    </div>

    <div class="flex flex-col gap-5 laptop:gap-0 laptop:grid grid-cols-12">
        <div class="col-span-5 laptop:pr-10" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        @if ($infos->count() > 0)

        <livewire:card.informasi-left :info="$infos->first()">
        @endif
        </div>
        <div class="col-span-7 laptop:pl-10 laptop:border-l-2 border-t-2 laptop:border-t-0"  data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
            <livewire:card.informasi-right :infos="$infos->skip(1)">
        </div>
    </div>

</div>
