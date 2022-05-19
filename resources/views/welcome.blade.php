<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dapensi Trio Usaha</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>

    <link rel="stylesheet" href="{{ asset('css/app.css?v=' . time()) }}">
</head>

<body>
    <div class="hidden py-2 text-white md:block bg-dark">
        <div class="flex items-center justify-between max-w-6xl m-auto text-sm font-roboto">
            <span class="uppercase">pt. dapensi trio usaha</span>
            <span class="capitalize">marketing hotline - (022) 720 5892</span>
        </div>
    </div>

    <header class="shadow-md">
        <div class="max-w-6xl m-auto">
            <div class="items-center justify-between hidden mt-3 font-medium md:flex md:justify-end space-x-14">
                <div class="flex space-x-3 item-center">
                    <img src="{{ asset('images/mail-icon.svg') }}" alt="">
                    <span>info@dtu.co.id</span>
                </div>
                <div class="flex space-x-3 item-center">
                    <img src="{{ asset('images/phone-icon.svg') }}" alt="">
                    <span>(022) 720 5982 / (022) 721 1996</span>
                </div>
            </div>
            <nav x-data="{ open: false }"
                class="relative flex items-center justify-between px-4 pb-0 text-sm font-medium lg:pb-3 lg:px-0 font-roboto">
                <img src="{{ asset('images/logo.png') }}" alt="">
                <ul class="items-center hidden space-x-10 lg:flex">
                    <li>Beranda</li>
                    <li>Tentang Kami</li>
                    <li>Tim Kami</li>
                    <li>Produk +</li>
                    <li>Jaringan Perusahaan</li>
                    <li>Partner Kami</li>
                    <li>Sertifikasi</li>
                    <li>
                        <button
                            class="px-6 py-3 text-sm font-bold text-white transition-all rounded bg-primary font-roboto hover:bg-dark">
                            Hubungi Kami
                        </button>
                    </li>
                </ul>
                <button x-on:click="open=true" class="block lg:hidden">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM64 256C64 238.3 78.33 224 96 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H96C78.33 288 64 273.7 64 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                    </svg>
                </button>
                <div x-cloak x-show="open"
                    class="fixed top-0 bottom-0 left-0 right-0 z-50 flex flex-col justify-start overflow-x-hidden overflow-y-auto bg-white h-modal">

                    <div class="flex justify-between px-4 lg:px-0">
                        <div class="">
                            <img src="{{ asset('images/logo.png') }}" alt="">
                        </div>
                        <button x-on:click="open=false">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z" />
                            </svg>
                        </button>
                    </div>
                    <ul class="flex flex-col px-4 mt-5 space-y-5">
                        <li>Beranda</li>
                        <li>Tentang Kami</li>
                        <li>Tim Kami</li>
                        <li>Produk +</li>
                        <li>Jaringan Perusahaan</li>
                        <li>Partner Kami</li>
                        <li>Sertifikasi</li>
                        <li>
                            <button
                                class="px-6 py-3 text-sm font-bold text-white transition-all rounded bg-primary font-roboto hover:bg-dark">
                                Hubungi Kami
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section class="relative px-5 md:px-0">
        <div class="flex flex-col-reverse items-center justify-between max-w-6xl mx-auto md:flex-row ">
            <div class="flex flex-col w-full space-y-6 md:w-1/3">
                <div class="">
                    <span class="font-bold font-roboto text-primary">\\ Produk</span>
                    <h1 class="text-5xl font-bold font-raleway">Security Service</h1>
                </div>
                <p class="font-bold font-raleway">Kami memberikan solusi untuk menangani seluruh permasalahan perawatan
                    gedung, hotel, rumah,
                    perkantoran/tempat usaha, properti lainnya baik indoor maupun outdoor.
                </p>
                <div class="">
                    <button
                        class="px-6 py-3 font-bold text-white transition-all rounded bg-primary font-roboto hover:bg-dark">Selengkapnya</button>
                </div>
                <div class="flex space-x-2">
                    <span class="w-3 h-3 rounded-full bg-slate-400"></span>
                    <span class="w-3 h-3 rounded-full bg-slate-400"></span>
                    <span class="h-3 rounded-full w-7 bg-primary"></span>
                    <span class="w-3 h-3 rounded-full bg-slate-400"></span>
                </div>
            </div>
            <div class="z-10 flex justify-end w-full md:w-2/3">
                <img src="{{ asset('images/security-service.png') }}" alt="">
            </div>
        </div>

        <div class="absolute top-0 hidden md:block right-20">
            <img src="{{ asset('images/rectangle-shapes.svg') }}" alt="">
        </div>

        <div class="absolute hidden md:block right-20 -bottom-52">
            <img src="{{ asset('images/triangle-shapes.svg') }}" alt="">
        </div>
    </section>

    <section class="relative px-4 md:px-0">
        <div class="absolute z-0 hidden md:block">
            <img src="{{ asset('images/curve-shapes.svg') }}" alt="">
        </div>
        <div class="absolute z-0 hidden md:block top-28 left-16">
            <img src="{{ asset('images/rectangle-shapes.svg') }}" alt="">
        </div>
        <div class="z-10 flex flex-col items-center justify-between max-w-6xl pt-40 mx-auto md:flex-row">
            <div class="z-10 flex justify-end w-full md:w-1/3">
                <img src="{{ asset('images/profile.png') }}" alt="">
            </div>
            <div class="flex flex-col w-full pl-0 mt-3 space-y-6 md:mt-0 md:pl-10 md:w-2/3">
                <div class="">
                    <span class="font-bold font-roboto text-primary">\\ Profile</span>
                    <h1 class="text-4xl font-bold font-raleway">Profile<span class="text-primary">.</span></h1>
                </div>
                <p class="font-bold font-raleway">
                    PT Dapensi Trio Usaha (PT DTU) yang didirikan pada tanggal 21 Januari 1992 berdasarkan Akta Notaris
                    Wiratni Ahmadi, SH di Bandung, tanggal 21 Januari 1992 Nomor 55, yang disahkan oleh Menteri
                    Kehakiman Republik Indonesia dengan Surat Keputusan Pengesahan Menteri Kehakiman & HAM RI, Tahun
                    1995 Nomor : C2-3976.HT.01.01.TH.95.
                </p>
                <p class="font-bold font-raleway">Sebagai anak usaha Yayasan Dana Pensiun PT Pos Indonesia (Dapenpos)
                    dan selaku affiliasi PT Pos
                    Indonesia (Persero), pada awalnya PT DTU diposisikan sebagai supplier barang dan jasa untuk
                    mendukung aktivitas operasional PT Pos Indonesia (Persero).
                </p>
                <div class="">
                    <button
                        class="px-6 py-3 font-bold text-white transition-all rounded bg-primary font-roboto hover:bg-dark">Selengkapnya</button>
                </div>
            </div>
        </div>
    </section>

    <section class="relative px-4 md:px-0">
        <div class="absolute z-0 hidden md:block top-20 left-5">
            <img src="{{ asset('images/dot-shapes.svg') }}" alt="">
        </div>
        <div class="flex flex-col items-center space-y-2 mt-36">
            <h1 class="text-4xl font-bold font-raleway">Produk<span class="text-primary">.</span></h1>
            <div class="">
                <img src="{{ asset('images/wave.svg') }}" alt="">
            </div>
        </div>
        <div class="z-10 flex flex-col items-center justify-between max-w-6xl mx-auto mt-24 md:flex-row">
            <div class="z-10 flex justify-center w-full pr-0 md:justify-end md:pr-10 md:w-1/3">
                <img src="{{ asset('images/produk-cleaning-service.png') }}" alt="">
            </div>
            <div class="flex flex-col w-full pl-0 mt-3 space-y-6 md:mt-0 md:pl-10 md:w-2/3">
                <div class="">
                    <span class="font-bold font-roboto text-primary">\\ Produk</span>
                    <h1 class="text-2xl font-bold font-raleway">Cleaning Service
                    </h1>
                </div>
                <p class="font-roboto">
                    Puji syukur senantiasa dipanjatkan kepada Allah SWT yang selalu melimpahkan rahmat-Nya sehingga PT
                    Dapensi Trio Usaha sebagai perusahaan yang bergerak di bisnis cleaning service, security service ,
                    jasa keagenan, perdagangan umum, dan jasa pemborongan pekerjaan telah mampu memberikan solusi,
                    pelayanan terbaik dan nilai tambah bagi seluruhnya.
                </p>
                <div class="flex justify-center md:justify-start">
                    <button
                        class="px-6 py-3 font-bold text-white transition-all rounded bg-primary font-roboto hover:bg-dark">Selengkapnya</button>
                </div>
            </div>
        </div>
        <div class="z-10 flex flex-col items-center justify-between max-w-6xl mx-auto mt-16 md:flex-row">
            <div class="z-10 flex justify-center w-full pr-0 md:justify-end md:pr-10 md:w-1/3">
                <img src="{{ asset('images/produk-security-service.png') }}" alt="">
            </div>
            <div class="flex flex-col w-full pl-0 mt-3 space-y-6 md:mt-0 md:pl-10 md:w-2/3">
                <div class="">
                    <span class="font-bold font-roboto text-primary">\\ Produk</span>
                    <h1 class="text-2xl font-bold font-raleway">Cleaning Service
                    </h1>
                </div>
                <p class="font-roboto">
                    Puji syukur senantiasa dipanjatkan kepada Allah SWT yang selalu melimpahkan rahmat-Nya sehingga PT
                    Dapensi Trio Usaha sebagai perusahaan yang bergerak di bisnis cleaning service, security service ,
                    jasa keagenan, perdagangan umum, dan jasa pemborongan pekerjaan telah mampu memberikan solusi,
                    pelayanan terbaik dan nilai tambah bagi seluruhnya.
                </p>
                <div class="flex justify-center md:justify-start">
                    <button
                        class="px-6 py-3 font-bold text-white transition-all rounded bg-primary font-roboto hover:bg-dark">Selengkapnya</button>
                </div>
            </div>
        </div>
        <div class="z-10 flex flex-col items-center justify-between max-w-6xl mx-auto mt-16 md:flex-row">
            <div class="z-10 flex justify-center w-full pr-0 md:justify-end md:pr-10 md:w-1/3">
                <img src="{{ asset('images/produk-business-process-outsourcing.png') }}" alt="">
            </div>
            <div class="flex flex-col w-full pl-0 mt-3 space-y-6 md:mt-0 md:pl-10 md:w-2/3">
                <div class="">
                    <span class="font-bold font-roboto text-primary">\\ Produk</span>
                    <h1 class="text-2xl font-bold font-raleway">Business Process Outsourcing
                    </h1>
                </div>
                <p class="font-roboto">
                    Puji syukur senantiasa dipanjatkan kepada Allah SWT yang selalu melimpahkan rahmat-Nya sehingga PT
                    Dapensi Trio Usaha sebagai perusahaan yang bergerak di bisnis cleaning service, security service ,
                    jasa keagenan, perdagangan umum, dan jasa pemborongan pekerjaan telah mampu memberikan solusi,
                    pelayanan terbaik dan nilai tambah bagi seluruhnya.
                </p>
                <div class="flex justify-center md:justify-start">
                    <button
                        class="px-6 py-3 font-bold text-white transition-all rounded bg-primary font-roboto hover:bg-dark">Selengkapnya</button>
                </div>
            </div>
        </div>
        <div class="mt-10 text-center">
            <button
                class="px-6 py-3 font-bold transition-all bg-white rounded shadow-lg hover:text-white font-roboto hover:bg-dark">Lihat
                Semua Produk <span class="text-primary">></span></button>
        </div>
    </section>

    <section class="flex flex-col items-center max-w-6xl px-4 mx-auto md:px-0">
        <div class="flex flex-col items-center space-y-2 mt-36">
            <h1 class="text-4xl font-bold font-raleway">Jaringan Kami<span class="text-primary">.</span></h1>
            <div class="">
                <img src="{{ asset('images/wave.svg') }}" alt="">
            </div>
        </div>
        <div class="mt-10">
            <img src="{{ asset('images/indonesia.png') }}" alt="">
        </div>
    </section>

    <section class="relative pb-32 mt-32 bg-gray-100">
        <div class="absolute hidden md:block -top-14 right-20">
            <img src="{{ asset('images/rectangle-shapes.svg') }}" alt="">
        </div>
        <div class="flex flex-col items-center px-4 md:px-0">
            <div class="flex flex-col items-center mt-20 space-y-2">
                <h1 class="text-4xl font-bold font-raleway">Mitra Kami</h1>
            </div>
            <div class="mt-10 max-w-7xl">
                <div class="flex space-x-0 md:space-x-6">
                    <div class="hidden md:block">
                        <div class="p-10 mt-10 bg-white shadow-lg opacity-50 rounded-2xl">
                            <div class="flex justify-between">
                                <div class="">
                                    <img src="{{ asset('images/logo-pos.png') }}" alt="">
                                </div>
                                <div class="flex flex-col items-end font-raleway">
                                    <span class="text-2xl font-bold text-dark">Pos Indonesia</span>
                                    <span class="-mt-2 text-lg text-primary">Security Services</span>
                                </div>
                            </div>
                            <div class="flex mt-3 space-x-2">
                                <span class="-ml-5 font-serif text-orange-300 text-8xl">&ldquo;</span>
                                <p class="mt-5 font-roboto">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis fuga autem odio
                                    nostrum
                                    officia, cum aspernatur sapiente vel, vitae optio minus nemo harum cumque debitis
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="p-5 bg-white shadow-lg md:p-10 rounded-2xl">
                            <div class="flex justify-between">
                                <div class="">
                                    <img src="{{ asset('images/logo-mandiri.png') }}" alt="">
                                </div>
                                <div class="flex flex-col items-end font-raleway">
                                    <span class="text-2xl font-bold text-dark">Mandiri</span>
                                    <span class="-mt-2 text-lg text-primary">Security Services</span>
                                </div>
                            </div>
                            <div class="flex mt-3 space-x-2">
                                <span class="-ml-5 font-serif text-orange-300 text-8xl">&ldquo;</span>
                                <p class="mt-5 font-roboto">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis fuga autem odio
                                    nostrum
                                    officia, cum aspernatur sapiente vel, vitae optio minus nemo harum cumque debitis
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="p-10 mt-10 bg-white shadow-lg opacity-50 rounded-2xl">
                            <div class="flex justify-between">
                                <div class="">
                                    <img src="{{ asset('images/logo-lippo.png') }}" alt="">
                                </div>
                                <div class="flex flex-col items-end font-raleway">
                                    <span class="text-2xl font-bold text-dark">Lippo Group</span>
                                    <span class="-mt-2 text-lg text-primary">Security Services</span>
                                </div>
                            </div>
                            <div class="flex mt-3 space-x-2">
                                <span class="-ml-5 font-serif text-orange-300 text-8xl">&ldquo;</span>
                                <p class="mt-5 font-roboto">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis fuga autem odio
                                    nostrum
                                    officia, cum aspernatur sapiente vel, vitae optio minus nemo harum cumque debitis
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-3 md:mt-0">
                    <div class="flex items-center p-2 space-x-2 border-8 border-white text-8xl">
                        <button class="flex items-center justify-center px-4 py-3 bg-white">
                            <img src="{{ asset('images/previous.svg') }}" alt="">
                        </button>
                        <button class="flex items-center justify-center p-3 bg-white">
                            <img src="{{ asset('images/next.svg') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center max-w-6xl mx-auto mt-10 rounded-lg bg-dark">
            <div class="flex flex-col items-center space-y-2 mt-28">
                <h1 class="text-4xl font-bold text-white font-raleway">Hubungi Kami<span
                        class="text-primary">.</span></h1>
                <div class="">
                    <img src="{{ asset('images/wave.svg') }}" alt="">
                </div>
            </div>
            <form action="" class="w-full px-4 my-20 md:px-32">
                <div class="flex flex-wrap">
                    <div class="relative flex items-center w-full pr-0 md:pr-5 md:w-1/2">
                        <div class="absolute pl-5">
                            <img src="{{ asset('images/person-icon.svg') }}" alt="">
                        </div>
                        <input class="w-full py-3 pl-16 font-bold rounded focus:outline-none font-roboto" type="text"
                            placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="relative flex items-center w-full pl-0 mt-6 md:pl-5 md:mt-0 md:w-1/2">
                        <div class="absolute pl-5">
                            <img src="{{ asset('images/mail-icon.svg') }}" alt="">
                        </div>
                        <input class="w-full py-3 pl-16 font-bold rounded focus:outline-none font-roboto" type="text"
                            placeholder="Masukkan Email Anda">
                    </div>
                    <div class="relative flex items-center w-full pr-0 mt-6 md:pr-5 md:w-1/2">
                        <div class="absolute pl-5">
                            <img src="{{ asset('images/phone-icon.svg') }}" alt="">
                        </div>
                        <input class="w-full py-3 pl-16 font-bold rounded focus:outline-none font-roboto" type="text"
                            placeholder="Masukkan No Telp / WA Anda">
                    </div>
                    <div class="relative flex items-center w-full pl-0 mt-6 md:pl-5 md:w-1/2">
                        <div class="absolute pl-5">
                            <img src="{{ asset('images/subject-icon.svg') }}" alt="">
                        </div>
                        <input class="w-full py-3 pl-16 font-bold rounded focus:outline-none font-roboto" type="text"
                            placeholder="Subjek Pengiriman">
                    </div>
                    <div class="w-full mt-6">
                        <div class="absolute pl-5 mt-3">
                            <img src="{{ asset('images/pencil-icon.svg') }}" alt="">
                        </div>
                        <textarea class="w-full py-3 pl-16 font-bold rounded focus:outline-none font-roboto" name="" id="" cols="30" rows="10"
                            placeholder="Masukkan Deskripsi Pengiriman"></textarea>
                    </div>
                </div>

                <button
                    class="px-20 py-3 mt-5 font-bold transition-all bg-white rounded shadow-lg hover:text-white font-roboto hover:bg-primary">Kirim
                </button>
            </form>
        </div>
    </section>

    <footer class="pt-20 bg-dark">
        <div
            class="flex flex-col justify-between max-w-6xl px-4 pb-20 mx-auto space-y-5 md:space-y-0 md:px-0 md:flex-row">
            <div class="flex flex-col">
                <div class="flex items-center justify-center py-2 bg-white">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
                <span class="mt-1 font-bold text-center text-white uppercase md:text-left font-roboto">PT. DAPENSI TRIO
                    USAHA</span>
            </div>
            <div class="flex flex-col text-white font roboto">
                <span class="mb-3 font-bold">Tentang Kami<span class="text-primary">.</span></span>
                <span class="font-bold">Kantor Pusat:</span>
                <span class="text-sm">Kantor Pusat: Jl. PHH. Mustofa No. 72 Bandung</span>
                <div class="flex items-center space-x-2">
                    <div class=""><img src="{{ asset('images/phone-icon-2.svg') }}" alt=""></div>
                    <span class="text-sm">(022) 720 5982 - (022) 721 1996 </span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class=""><img src="{{ asset('images/company-icon.svg') }}" alt=""></div>
                    <span class="text-sm">(022) 727 1857</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class=""><img src="{{ asset('images/mail-icon-2.svg') }}" alt=""></div>
                    <span class="text-sm">dapensi_trio@dtu.co.id </span>
                </div>
            </div>
            <div class="flex flex-col text-white font roboto">
                <span class="mb-3 font-bold">Link<span class="text-primary">.</span></span>
            </div>
            <div class="flex flex-col text-white font roboto">
                <span class="mb-3 font-bold">Sertifikasi<span class="text-primary">.</span></span>
                <div class="flex space-x-2">
                    <div class="">
                        <img src="{{ asset('images/logo-itcc-1.png') }}" alt="">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/logo-itcc-2.png') }}" alt="">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/logo-ioa.png') }}" alt="">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/logo-abujapi.png') }}" alt="">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/logo-apklindo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 bg-black">
            <div class="flex flex-col items-center justify-between max-w-6xl px-4 mx-auto md:px-0 md:flex-row">
                <span class="font-bold text-center text-white font-roboto">Copyright 2022 © PT DAPENSI TRIO USAHA - All
                    Right
                    Reserved </span>
                <div class="mt-2 md:mt-0">
                    <img src="{{ asset('images/moto.png') }}" alt="">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
