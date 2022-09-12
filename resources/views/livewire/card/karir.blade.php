<div class="flex flex-col gap-5">
    @forelse ($jobs as $job)
        <div class="bg-white rounded-lg shadow-md border">
            <div class="flex flex-col laptop:flex-row items-center gap-4">
                {{-- <div style="background: url({{ url( $job->image != null ? str_replace('public', 'storage',$job->image) : 'assets/images/exampleContent.jpg')}})" class="w-96 h-56 bg-center bg-cover object-cover"></div> --}}
                <img src={{ url( $job->image != null ? str_replace('public', 'storage',$job->image) : 'assets/images/exampleContent.jpg')}} class="w-96 h-56 bg-center bg-cover object-cover rounded-l-lg">
                <div class="p-5">
                    <div>
                        <a href="{{ route('karirDetail', ['id' =>$job->id]) }}" id="title" class="font-bold hover:text-blue-500 text-xl break-words line-clamp-1">{{ $job->company_name }}</a>
                        <p id="desc" class="text-gray-400 text-sm break-words mt-4 line-clamp-3">{{ $job->description }}</p>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <div class="w-3 h-3 bg-green-400 rounded-full shadow-sm"></div>
                        <p class="text-gray-400">{{ date('d M Y', strtotime($job->created_at)) }}</p>
                    </div>
                </div>
            </div>
        </div>
    @empty

    @endforelse
</div>
