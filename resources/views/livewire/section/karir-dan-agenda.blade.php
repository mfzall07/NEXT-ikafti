<div>
    <div class="flex flex-col laptop:grid grid-cols-12">
        <div class="col-span-6 laptop:pr-10">
            <div class="flex items-center justify-between">
                <h1 class="font-bold tracking-wider text-xl laptop:text-3xl uppercase">Career</h1>
                <a href="{{ route('karir') }}" class="text-red-500 hover:text-red-600 truncate">See all</a>
            </div>
            <div class="mt-5">
                <livewire:card.karir>
            </div>
        </div>
        <div class="col-span-6 laptop:pl-10 laptop:border-l-2 border-t-2 laptop:border-t-0 pt-10 laptop:py-0">
            <div class="flex items-center justify-between">
                <h1 class="font-bold tracking-wider text-xl laptop:text-3xl uppercase">Agenda</h1>
                <a href="{{ route('agenda') }}" class="text-red-500 hover:text-red-600 truncate">See all</a>
            </div>
            <div class="mt-5">
                <livewire:card.agenda>
            </div>
        </div>
    </div>
</div>