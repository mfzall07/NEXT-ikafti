<div>
    <div class="py-3 border-t-2 w-full">
        <h1 class="text-xl font-bold">Another Career</h1>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-5">
        @forelse ($jobs as $job)
            <div class="col-span-3">
                <img src="{{ url( $job->image != null ? str_replace('public', 'storage',$job->image) : 'assets/images/header/banner1.jpg') }}" class="w-full h-56 object-cover" alt="">
                <a href="{{ route('karirDetail', ['id' => $job->id]) }}" class="text-black text-sm line-clamp-2 text-center">{{ $job->description }}</a>
            </div>
        @empty

        @endforelse


    </div>
</div>
