<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>IKAFTI</title>

    <link rel="icon" type="image/x-icon" sizes="16x16" href="../../assets/images/logo/favicon.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4096ccc916.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body class="overflow-x-hidden bg-white">
    <section class="sticky w-full z-20 top-0 border">
        <livewire:navbar.navbar-admin>
    </section>

    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <div class="flex flex-col items-center laptop:grid grid-flow-col auto-cols-auto gap-5">
            <div class="w-full">
                <livewire:card.total-alumni>
            </div>
            <div class="w-full">
                <livewire:card.total-content>
            </div>
            <div class="w-full">
                <livewire:card.total-job>
            </div>
            <div class="w-full">
                <livewire:card.waiting-approval>
            </div>
        </div>
    </section>

    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.waiting-list>
            </div>
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.alumni-list>
            </div>
        </div>
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

    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.announcement-banner>
            </div>
            <div class="col-span-12 laptop:col-span-6">
                <livewire:table.partnership>
            </div>
        </div>
    </section>

    <section class="pt-10">
        <livewire:footer.footers>
    </section>

    {{-- Begin::Modal --}}
    <livewire:modal.view-alumni>
    <livewire:modal.add-admin>
    <livewire:modal.add-alumni>
    <livewire:modal.add-job>
    <livewire:modal.add-announcement>
    <livewire:modal.add-partnership>
    <livewire:modal.edit-admin>
    <livewire:modal.edit-alumni>
    <livewire:modal.edit-job>
    <livewire:modal.edit-announcement>
    <livewire:modal.edit-partnership>
    <livewire:modal.accept>
    <livewire:modal.decline>
    <livewire:modal.delete>
    <livewire:modal.change-password>
    {{-- End::Modal --}}

    {{-- Begin::Livewire --}}
    @livewireScripts
    {{-- End::Livewire --}}

    {{-- Begin::Javascript CDN --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- End::Javascript CDN --}}

    {{-- Begin::Javascript --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../assets/js/flowbite/dist/flowbite.js"></script>
    <script src="../assets/js/flowbite/dist/datepicker.js"></script>
    <script src="../assets/js/uploadImage/index.js"></script>
    <script src="../assets/js/table/adminList.js"></script>
    <script src="../assets/js/table/waitingList.js"></script>
    <script src="../assets/js/table/alumniList.js"></script>
    <script src="../assets/js/table/contentList.js"></script>
    <script src="../assets/js/table/announcementList.js"></script>
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
        window.livewire.on('delete-job', function(){
            $('[modal-delete-job]').trigger('click');
        });
        window.livewire.on('jobDeleted', function(){
            $('[modal-delete-job]').trigger('click');
        });
    </script>
    <script>
        window.livewire.on('approve', function(){
            $('[modal-approve-alumni]').trigger('click');
        });
        window.livewire.on('alumniApproved', function(){
            $('[modal-approve-alumni]').trigger('click');
        });
        window.livewire.on('decline', function(){
            $('[modal-decline-alumni]').trigger('click');
        });
        window.livewire.on('alumniDeclined', function(){
            $('[modal-decline-alumni]').trigger('click');
        });
    </script>
    <script>
        window.livewire.on('add-announcement', function(){
            $('[modal-add-announcement]').trigger('click');
        });
        window.livewire.on('announcementStored', function() {
            $('[modal-add-announcement]').trigger('click');
        });
        window.livewire.on('edit-announcement', function(){
            $('[modal-edit-announcement]').trigger('click');
        });
        window.livewire.on('announcementEdited', function(){
            $('[modal-edit-announcement]').trigger('click');
        });
        window.livewire.on('delete-announcement', function(){
            $('[modal-delete-announcement]').trigger('click');
        });
        window.livewire.on('announcementDeleted', function(){
            $('[modal-delete-announcement]').trigger('click');
        });
        window.livewire.on('delete-content', function(){
            $('[modal-delete-content]').trigger('click');
        });
        window.livewire.on('contentDeleted', function(){
            $('[modal-delete-content]').trigger('click');
        });
        window.livewire.on('change-password', function(){
            $('[modal-change-password]').trigger('click');
        });
        window.livewire.on('resultChangePassword', function(){
            $('[modal-change-password]').trigger('click');
        });
    </script>
    <script>
        window.livewire.on('add-partnership', function(){
            $('[modal-add-partnership]').trigger('click');
        });
        window.livewire.on('partnershipStored', function() {
            $('[modal-add-partnership]').trigger('click');
        });
        window.livewire.on('edit-partnership', function(){
            $('[modal-edit-partnership]').trigger('click');
        });
        window.livewire.on('partnershipEdited', function(){
            $('[modal-edit-partnership]').trigger('click');
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
