<div>
    <div class="py-3 border-b-2 ">
        <h1 class="text-2xl font-bold uppercase text-black">{{ $content->title ?? '-'}}</h1>
    </div>
    <div class="flex items-center gap-5 mt-5">
        <div class="flex items-center gap-3">
            <div class="w-3 h-3 rounded-full bg-green-400"></div>
            <h1 class="text-gray-400">{{ $content->author }}</h1>
        </div>
        <div class="flex items-center gap-3">
            <div class="w-3 h-3 rounded-full bg-blue-400"></div>
            <h1 class="text-gray-400">{{ date('d M Y', strtotime($content->created_at)) }}</h1>
        </div>
    </div>
    <p class="text-black text-justify mt-5">
        {!! $content->body !!}
    </p>
</div>
