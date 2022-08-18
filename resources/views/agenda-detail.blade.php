<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>IKAFTI</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/4096ccc916.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body>
    <section class="sticky w-full z-20 top-0 border">
        <livewire:navbar.navbar>
    </section>

    <section class="px-5 laptop:px-20 pt-10">
        <livewire:card.detail-agenda>
    </section>

    <section class="px-5 laptop:px-20 pt-10">
        <livewire:card.another-agenda>
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
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    {{-- End::CDN --}}

    {{-- Begin::Javascript --}}
    <script src="../../assets/js/activatedNav/index.js"></script>
    <script src="../../assets/js/flowbite/dist/flowbite.js"></script>
    <script src="../../assets/js/flowbite/dist/datepicker.js"></script>
    <script src="../../assets/js/carousel/index.js"></script>
    {{-- End::Javascript --}}
</body>
</html>