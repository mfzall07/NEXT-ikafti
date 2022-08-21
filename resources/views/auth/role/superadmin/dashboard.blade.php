<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>IKAFTI</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4096ccc916.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body>
    <section class="sticky w-full z-20 top-0 border">
        <livewire:navbar.navbars>
    </section>

    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.admin-list>
            </div>
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.waiting-list>
            </div>
        </div>
    </section>

    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-top" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <livewire:table.alumni-list>
    </section>

    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
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
        <livewire:footer.footers>
    </section>

    {{-- Begin::Modal --}}
    <livewire:modal.view-admin>
    <livewire:modal.view-alumni>
    <livewire:modal.add-admin>
    <livewire:modal.add-alumni>
    <livewire:modal.add-job>
    <livewire:modal.edit-admin>
    <livewire:modal.edit-alumni>
    <livewire:modal.edit-job>
    <livewire:modal.accept>
    <livewire:modal.delete>
    {{-- End::Modal --}}

    {{-- Begin::Livewire --}}
    @livewireScripts
    {{-- End::Livewire --}}

    {{-- Begin::Javascript --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../assets/js/flowbite/dist/flowbite.js"></script>
    <script src="../assets/js/flowbite/dist/datepicker.js"></script>
    <script src="../assets/js/uploadImage/index.js"></script>
    <script src="../assets/js/table/adminList.js"></script>
    <script src="../assets/js/table/waitingList.js"></script>
    <script src="../assets/js/table/alumniList.js"></script>
    <script src="../assets/js/table/contentList.js"></script>
    <script>
        window.livewire.on('add-admin', function(){
            $('[modal-add-admin]').trigger('click');
        });
        window.livewire.on('adminStored', function() {
            $('[modal-add-admin]').trigger('click');
        });
        window.livewire.on('view-admin', function(){
            $('[modal-view-admin]').trigger('click');
        });
        window.livewire.on('edit-admin', function(){
            $('[modal-edit-admin]').trigger('click');
        });
        window.livewire.on('adminEdited', function(){
            $('[modal-edit-admin]').trigger('click');
        });
        window.livewire.on('delete-admin', function(){
            $('[modal-delete-admin]').trigger('click');
        });
        window.livewire.on('adminDeleted', function(){
            $('[modal-delete-admin]').trigger('click');
        });
    </script>
    <script>
        window.livewire.on('add-alumni', function(){
            $('[modal-add-alumni]').trigger('click');
        });
        window.livewire.on('alumniStored', function() {
            $('[modal-add-alumni]').trigger('click');
        });
        window.livewire.on('view-alumni', function(){
            $('[modal-view-alumni]').trigger('click');
        });
        window.livewire.on('edit-alumni', function(){
            $('[modal-edit-alumni]').trigger('click');
        });
        window.livewire.on('alumniEdited', function(){
            $('[modal-edit-alumni]').trigger('click');
        });
        window.livewire.on('delete-alumni', function(){
            $('[modal-delete-alumni]').trigger('click');
        });
        window.livewire.on('alumniDeleted', function(){
            $('[modal-delete-alumni]').trigger('click');
        });
    </script>
    <script>
        window.livewire.on('add-job', function(){
            $('[modal-add-job]').trigger('click');
        });
        window.livewire.on('jobStored', function() {
            $('[modal-add-job]').trigger('click');
        });
        window.livewire.on('edit-job', function(){
            $('[modal-edit-job]').trigger('click');
        });
        window.livewire.on('jobEdited', function(){
            $('[modal-edit-job]').trigger('click');
        });
    </script>
    <script>
        window.addEventListener('alert', event => {
            toastr[event.detail.type](event.detail.message,
            event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        });
    </script>
    <script>
        AOS.init();
    </script>
    {{-- End::Javascript --}}
</body>
</html>
