<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>IKAFTI</title>
    
    <script src="https://kit.fontawesome.com/4096ccc916.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body>
    <section class="sticky w-full z-20 top-0 border">
        <livewire:navbar.navbar-admin>
    </section>

    <section class="px-5 laptop:px-20 pt-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.waiting-list>
            </div>
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.alumni-list>
            </div>
        </div>
    </section>

    <section class="px-5 laptop:px-20 pt-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.content-list>
            </div>
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.job-list>
            </div>
        </div>
    </section>

    <section class="pt-10">
        <livewire:footer.footer>
    </section>

    {{-- Begin::Modal --}}
    <livewire:modal.add-admin>
    <livewire:modal.add-alumni>
    <livewire:modal.add-job>
    {{-- End::Modal --}}

    {{-- Begin::Livewire --}}
    @livewireScripts
    {{-- End::Livewire --}}

    {{-- Begin::Javascript --}}
    <script src="../assets/js/flowbite/dist/flowbite.js"></script>
    <script src="../assets/js/flowbite/dist/datepicker.js"></script>
    <script src="../assets/js/uploadImage/index.js"></script>
    <script src="../assets/js/table/adminList.js"></script>
    <script src="../assets/js/table/waitingList.js"></script>
    <script src="../assets/js/table/alumniList.js"></script>
    <script src="../assets/js/table/contentList.js"></script>
    {{-- End::Javascript --}}
</body>
</html>