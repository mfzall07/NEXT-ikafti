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
        <h1 class="text-4xl font-bold uppercase text-black">About</h1>
        <div class="border-b-2 border-b-black w-full"></div>
    </section>

    <section class="px-5 laptop:px-20 pt-5">
        <div class="grid grid-cols-12">
            <div class="col-span-12 laptop:col-span-8 gap-5 order-2 laptop:order-1" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                <h1 class="text-base laptop:text-3xl font-bold text-black">IKAFTI (Ikatan Alumni Fakultas Teknik Industri)</h1>
                <div class="py-5 space-y-5">
                    <p class="text-justify text-sm laptop:text-base text-black">
                        Sejarah terbentuknya IKA FTI UMI, berdasar dari keingin bersama untuk menghimpun para alumni-alumni yang telah menyelesaikan Studi di fakultas Teknologi Industri Universitas Muslim Indonesia. 
                    </p>
                    <p class="text-justify text-sm laptop:text-base text-black">
                        Pada tahun 1994 terbentuk lah IKA FTI UMI, yang dimana telah dselengarakan dengan cara Musyawarah mufakat & terpilihlah Ir. Larisang selaku ketua umum pertama ika fti umi dengan masa kepengurusan 1994-1996. lalu dilanjutkan kembali oleh Ir. Wiyono sebagai ketua umum dengan masa kepengurusan Pada tahun 1996-1998, seiring berjalannya waktu kepengurusan ika fti umi sempat vakum sementara, lalu diangkat lah Ir. Suradi sebagai pejabat sementara ketua umum ika fti umi untuk kurung waktu yang tidak ditentukan. Lalu pada tahun 2017 bersamaan dengan diselengarakannya Silatnas IKA FTI UMI, digelar lah Musyawarah ke 2 IKA FTI UMI. Yg mn mendaulat Ir. Fahrudin Wahid sebagai ketua umum ika fti umi dengan masa periode 2017-2021. Lalu pada tahun 2022 terselengarahlah Musyawarah yg ke III dimana terpilihlah Ir Amran Wahid sbg ketua umum ika fti umi periode 2022-2026.
                    </p>
                </div>
            </div>
            <div class="col-span-12 laptop:col-span-4 m-auto order-1 laptop:order-2 py-10 laptop:py-0" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                <img src="../assets/images/logo/IkaftiBlack.png" class="w-96 self-center" alt="">
            </div>
        </div>
    </section>
    
    <section class="px-5 laptop:px-20 pt-5" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
        <div class="grid grid-cols-12 gap-5">
            <img src="../assets/images/about/about1.jpeg" class="rounded-xl shadow-lg object-cover col-span-12 laptop:col-span-4 w-full h-full" alt="">
            <img src="../assets/images/about/about2.jpeg" class="rounded-xl shadow-lg object-cover col-span-12 laptop:col-span-4 w-full h-full" alt="">
            <img src="../assets/images/about/about3.jpeg" class="rounded-xl shadow-lg object-cover col-span-12 laptop:col-span-4 w-full h-full" alt="">
        </div>
    </section>

    <section class="pt-10 fixed-bottom">
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