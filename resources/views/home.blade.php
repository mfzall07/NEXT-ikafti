<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>IKAFTI</title>

    <link rel="icon" type="image/x-icon" sizes="16x16" href="../../../assets/images/logo/favicon.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/4096ccc916.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body class="bg-white">
    <section class="sticky w-full z-20 top-0 border">
        <livewire:navbar.navbar>
    </section>

    <section>
        <livewire:carousel.header>
    </section>

    <section class="">
        <livewire:section.percentage-alumni>
    </section>

    <section class="px-5 laptop:px-20 py-5">
        <livewire:section.informasi-terkini>
    </section>

    <section class="px-5 laptop:px-20 pt-5">
        <livewire:section.karir-dan-agenda>
    </section>

    <section class="px-5 laptop:px-20 pt-10 pb-5">
        <h1 class="font-bold text-3xl text-center text-black py-5">Our Partnership</h1>
        <div class="grid grid-cols-12 gap-5">
            @forelse ($partnerships as $partnership)
                <div class="w-full col-span-3">
                    <livewire:card.partnership :partnership="$partnership" :wire:key="$partnership->id">
                </div>
            @empty
                {{-- <div class="w-full col-span-3">
                    <livewire:card.partnership>
                </div>
                <div class="w-full col-span-3">
                    <livewire:card.partnership>
                </div>
                <div class="w-full col-span-3">
                    <livewire:card.partnership>
                </div>
                <div class="w-full col-span-3">
                    <livewire:card.partnership>
                </div> --}}
            @endforelse
        </div>
    </section>

    <section class="pt-10">
        <livewire:footer.footer>
    </section>

    {{-- Begin::Modal --}}
    <livewire:modal.login>
    {{-- End::Modal --}}

    {{-- Begin::Livewire --}}
    @livewireScripts
    {{-- End::Livewire --}}

    {{-- Begin::CDN --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    {{-- End::CDN --}}

    {{-- Begin::Javascript --}}
    <script src="../assets/js/activatedNav/index.js"></script>
    <script src="../assets/js/flowbite/dist/flowbite.js"></script>
    <script src="../assets/js/carousel/index.js"></script>
    <script>
        AOS.init();
    </script>
    {{-- End::Javascript --}}
</body>
</html>
