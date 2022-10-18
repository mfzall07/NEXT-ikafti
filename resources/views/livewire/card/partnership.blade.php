<div class="bg-white rounded-lg shadow-lg min-w-[330px] h-[400px]">
    <img src="{{ url( $partnership->image != null ? str_replace('public', 'storage',$partnership->image) : 'assets/images/exampleContent.jpg')}}" class="object-cover h-3/5 w-full rounded-t-lg" alt="">
    <div class="p-5">
        <h1 class="font-bold text-xl line-clamp-4">{{ $partnership->title }}</h1>
    </div>
</div>
