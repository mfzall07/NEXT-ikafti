<div>
    <div class="py-3 border-b-2 ">
        <h1 class="text-2xl font-bold uppercase">{{ $job->company_name }}</h1>
    </div>
    <div class="p-5">
        <div class="flex flex-row items-center gap-5 mt-1">
            <div class="flex flex-row items-center gap-2 mt-1">
                <i class="fa-solid fa-briefcase"></i>
                <span class="text-gray-400 text-sm">{{ $job->title }}</span>
            </div>
            <div class="flex flex-row items-center gap-2 mt-1">
                <i class="fa-solid fa-clock"></i>
                <span class="text-gray-400 text-sm">{{ $job->job_type }}</span>
            </div>
            <div class="flex flex-row items-center gap-2 mt-1">
                <span class="font-bold">Rp</span>
                <span class="text-gray-400 text-sm">{{ $job->salary }}</span>
            </div>
            <div class="flex flex-row items-center gap-2 mt-1">
                <i class="fa-solid fa-location-dot"></i>
                <span class="text-gray-400 text-sm">{{ $job->placement }}</span>
            </div>
            <div class="flex flex-row items-center gap-2 mt-1">
                <i class="fa-solid fa-square-phone"></i>
                <span class="text-gray-400 text-sm">{{ $job->phone }}</span>
            </div>
        </div>
        <p class="text-black text-justify mt-5">
            {{ $job->description }}
        </p>
    </div>
</div>
