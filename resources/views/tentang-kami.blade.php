<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>IKAFTI</title>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/4096ccc916.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body class="bg-white">
    <section class="sticky w-full z-20 top-0 border">
        <livewire:navbar.navbar>
    </section>

    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <h1 class="text-4xl font-bold uppercase">About</h1>
        <div class="border-b-2 border-b-black w-full"></div>
    </section>

    <section class="px-5 laptop:px-20 pt-5">
        <div class="grid grid-cols-12">
            <div class="col-span-12 laptop:col-span-8 gap-5 order-2 laptop:order-1" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                <h1 class="text-base laptop:text-2xl font-bold">IKAFTI (Ikatan Alumni Fakultas Teknik Industri)</h1>
                <p class="text-justify text-sm laptop:text-base">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit numquam quae aspernatur adipisci ab? Ab, dolores! Blanditiis aut labore 
                    perspiciatis sit vero mollitia aperiam facere! Aspernatur accusantium itaque sed dicta suscipit, eligendi fugiat incidunt dolores dignissimos 
                    similique. Ipsa suscipit sunt nobis exercitationem doloremque voluptas molestiae quia ducimus repudiandae nostrum blanditiis tempore omnis, 
                    commodi voluptatem debitis labore error mollitia iste sint quasi? Quae quasi atque sint ad numquam quidem voluptate distinctio illum, explicabo 
                    cupiditate, unde dolore, deserunt harum consequuntur sapiente aliquam animi excepturi tempora omnis voluptatibus labore accusamus reprehenderit 
                    culpa? Voluptatum quia recusandae accusantium explicabo officiis expedita nisi? Hic, quam sapiente rem assumenda culpa voluptate nobis nihil? 
                    Molestias voluptatem aliquam, quos accusantium exercitationem at a possimus maxime minus aperiam. Voluptates minus a alias possimus deleniti 
                    corrupti dolore aliquid quidem error repudiandae, velit excepturi atque et, quod molestias quam molestiae odit ipsa tenetur assumenda, esse 
                    numquam animi ullam. Hic impedit quod similique delectus rerum rem? Eius unde autem dolore numquam! Vitae architecto nemo ullam? Et, delectus? 
                    Corporis tempora blanditiis voluptatum veniam perferendis error sunt pariatur exercitationem debitis veritatis. Iste itaque vel rem suscipit eum 
                    numquam, necessitatibus error deserunt! Possimus asperiores ducimus labore sequi nemo! Unde officia eaque earum magni nisi harum velit similique 
                    sapiente quis, voluptas voluptatibus, odit delectus voluptate hic, maxime atque asperiores fugiat! Nisi accusamus aspernatur voluptatum, 
                    necessitatibus excepturi magni labore, ducimus omnis, nostrum reprehenderit saepe. Numquam blanditiis neque sequi doloremque facilis provident 
                    omnis molestiae rerum cumque fugiat enim vitae eos repellat, maxime temporibus eveniet harum aliquid iste molestias? Saepe modi deleniti nisi 
                    adipisci quod nihil provident itaque, amet nobis quaerat velit incidunt, numquam odio temporibus voluptate rerum delectus? Eveniet corporis sit 
                    placeat voluptas alias, consectetur unde illo architecto temporibus a odit wire natus quos id pariatur accusantium earum dignissimos voluptatem, 
                    optio magni nemo sequi ducimus. Laborum autem repellat nostrum deserunt?
                </p>
            </div>
            <div class="col-span-12 laptop:col-span-4 m-auto order-1 laptop:order-2 py-10 laptop:py-0" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                <img src="../assets/images/logo/IkaftiBlack.png" class="w-56 self-center" alt="">
            </div>
        </div>
    </section>
    
    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <div class="grid grid-cols-12 gap-5">
            <img src="../assets/images/header/banner1.jpg" class="w-full rounded-xl shadow-lg object-cover col-span-12 laptop:col-span-2" alt="">
            <img src="../assets/images/header/banner1.jpg" class="w-full rounded-xl shadow-lg object-cover col-span-12 laptop:col-span-2" alt="">
            <img src="../assets/images/header/banner1.jpg" class="w-full rounded-xl shadow-lg object-cover col-span-12 laptop:col-span-2" alt="">
            <img src="../assets/images/header/banner1.jpg" class="w-full rounded-xl shadow-lg object-cover col-span-12 laptop:col-span-2" alt="">
            <img src="../assets/images/header/banner1.jpg" class="w-full rounded-xl shadow-lg object-cover col-span-12 laptop:col-span-2" alt="">
            <img src="../assets/images/header/banner1.jpg" class="w-full rounded-xl shadow-lg object-cover col-span-12 laptop:col-span-2" alt="">
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
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- End::CDN --}}

    {{-- Begin::Javascript --}}
    <script src="../assets/js/activatedNav/index.js"></script>
    <script src="../assets/js/flowbite/dist/flowbite.js"></script>
    <script src="../assets/js/flowbite/dist/datepicker.js"></script>
    <script src="../assets/js/carousel/imageSlide.js"></script>
    <script>
        AOS.init();
    </script>
    {{-- End::Javascript --}}
</body>
</html>