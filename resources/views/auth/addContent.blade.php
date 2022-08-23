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

    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <h1 class="text-4xl font-bold uppercase">Add Content</h1>
        <div class="border-b-2 border-b-black w-full"></div>
    </section>
    
    <section class="px-5 laptop:px-20 mt-5">
        <form method="post">
            <div class="mb-6 space-x-10 flex items-center w-full">
                <div class="space-x-3 w-full flex items-center">
                    <label for="title" class="font-semibold">Title</label>
                    <input type="text" class="rounded-xl bg-gray-200 border-0 w-full" id="title" placeholder="Title">
                </div>
                <div class="space-x-3 w-full flex items-center">
                    <label for="author" class="font-semibold">Author</label>
                    <input type="text" class="rounded-xl bg-gray-200 border-0 w-full" id="author" placeholder="Author">
                </div>
            </div>
            <textarea id="mytextarea">Put your content here !!!</textarea>
            <div class="mt-5 flex items-center justify-end gap-5">
                <button class="rounded-lg bg-red-500 px-4 py-1 text-white font-bold">Cancel</button>
                <button class="rounded-lg bg-green-400 px-4 py-1 text-white font-bold">Upload</button>
            </div>
        </form>
    </section>

    <section class="pt-10">
        <livewire:footer.footers>
    </section>

    {{-- Begin::Livewire --}}
    @livewireScripts
    {{-- End::Livewire --}}

    {{-- Begin::Javascript --}}
    <script src="../assets/js/flowbite/dist/flowbite.js"></script>
    <script src="https://cdn.tiny.cloud/1/xp2p6y270jp2h4cn3l01prwr1k70g163uko8xf3hm2kl7f4l/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea',
          plugins: [
            'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
            'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
            'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
          ],
          toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>
</body>
</html>