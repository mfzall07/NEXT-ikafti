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
        <livewire:navbar.navbars>
    </section>
    
    <section class="px-5 laptop:px-20 mt-5">
        <h1 class="mb-6 font-bold text-3xl">Add Content</h1>
        <textarea id="editor"></textarea>
        <div class="mt-7 flex items-center justify-end gap-5">
            <button class="bg-transparent border border-red-500 rounded-full px-4 py-1 text-black font-semibold">Cancel</button>
            <button class="bg-red-500 rounded-full px-4 py-1 text-white font-semibold">Upload Content</button>
        </div>
        {{-- <livewire:form.add-content> --}}
    </section>

    <section class="pt-10">
        <livewire:footer.footers>
    </section>

    {{-- Begin::Livewire --}}
    @livewireScripts
    {{-- End::Livewire --}}

    {{-- Begin::Javascript --}}
    <script src="../assets/js/ckeditor/ckeditor.js"></script>
    <script src="../assets/js/flowbite/dist/flowbite.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    {{-- End::Javascript --}}
</body>
</html>