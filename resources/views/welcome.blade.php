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

    <link rel="stylesheet" href="{{ asset('css/app.css?v=' . time()) }}">
</head>

<body>
    <div class="py-2 text-white bg-dark">
        <div class="flex items-center justify-between max-w-6xl m-auto text-sm font-roboto">
            <span class="uppercase">pt. dapensi trio usaha</span>
            <span class="capitalize">marketing hotline - (022) 720 5892</span>
        </div>
    </div>

    <header class="shadow-md">
        <div class="max-w-6xl m-auto">
            <div class="flex items-center justify-end mt-3 font-medium space-x-14">
                <div class="flex space-x-3 item-center">
                    <img src="{{ asset('images/mail-icon.svg') }}" alt="">
                    <span>info@dtu.co.id</span>
                </div>
                <div class="flex space-x-3 item-center">
                    <img src="{{ asset('images/phone-icon.svg') }}" alt="">
                    <span>(022) 720 5982 / (022) 721 1996</span>
                </div>
            </div>
            <nav class="flex items-center justify-between pb-3 text-sm font-medium font-roboto">
                <img src="{{ asset('images/logo.png') }}" alt="">
                <ul class="items-center hidden space-x-10 md:flex">
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
            </nav>
        </div>
    </header>

    <section class="relative">
        <div class="flex flex-col-reverse items-center justify-between max-w-6xl mx-auto md:flex-row ">
            <div class="flex flex-col w-1/3 space-y-6">
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
            <div class="z-10 flex justify-end w-2/3">
                <img src="{{ asset('images/security-service.png') }}" alt="">
            </div>
        </div>

        <div class="top-0 md:absolute right-20">
            <img src="{{ asset('images/rectangle-shapes.svg') }}" alt="">
        </div>

        <div class=" md:absolute right-20 -bottom-52">
            <img src="{{ asset('images/triangle-shapes.svg') }}" alt="">
        </div>
    </section>

    <section class="relative">
        <div class="absolute z-0">
            <img src="{{ asset('images/curve-shapes.svg') }}" alt="">
        </div>
        <div class="absolute z-0 top-28 left-16">
            <img src="{{ asset('images/rectangle-shapes.svg') }}" alt="">
        </div>
        <div class="z-10 flex items-center justify-between max-w-6xl pt-40 mx-auto">
            <div class="z-10 flex justify-end w-1/3">
                <img src="{{ asset('images/profile.png') }}" alt="">
            </div>
            <div class="flex flex-col w-2/3 pl-10 space-y-6">
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

    <section class="relative">
        <div class="absolute z-0 top-20 left-5">
            <img src="{{ asset('images/dot-shapes.svg') }}" alt="">
        </div>
        <div class="flex flex-col items-center space-y-2 mt-36">
            <h1 class="text-4xl font-bold font-raleway">Produk<span class="text-primary">.</span></h1>
            <div class="">
                <img src="{{ asset('images/wave.svg') }}" alt="">
            </div>
        </div>
        <div class="z-10 flex items-center justify-between max-w-6xl mx-auto mt-24">
            <div class="z-10 flex justify-end w-1/3 pr-10">
                <img src="{{ asset('images/produk-cleaning-service.png') }}" alt="">
            </div>
            <div class="flex flex-col w-2/3 pl-10 space-y-6">
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
                <div class="">
                    <button
                        class="px-6 py-3 font-bold text-white transition-all rounded bg-primary font-roboto hover:bg-dark">Selengkapnya</button>
                </div>
            </div>
        </div>
        <div class="z-10 flex items-center justify-between max-w-6xl mx-auto mt-16">
            <div class="z-10 flex justify-end w-1/3 pr-10">
                <img src="{{ asset('images/produk-security-service.png') }}" alt="">
            </div>
            <div class="flex flex-col w-2/3 pl-10 space-y-6">
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
                <div class="">
                    <button
                        class="px-6 py-3 font-bold text-white transition-all rounded bg-primary font-roboto hover:bg-dark">Selengkapnya</button>
                </div>
            </div>
        </div>
        <div class="z-10 flex items-center justify-between max-w-6xl mx-auto mt-16">
            <div class="z-10 flex justify-end w-1/3 pr-10">
                <img src="{{ asset('images/produk-business-process-outsourcing.png') }}" alt="">
            </div>
            <div class="flex flex-col w-2/3 pl-10 space-y-6">
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
                <div class="">
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

    <section class="flex flex-col items-center max-w-6xl mx-auto">
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
        <div class="absolute -top-14 right-20">
            <img src="{{ asset('images/rectangle-shapes.svg') }}" alt="">
        </div>
        <div class="flex flex-col items-center ">
            <div class="flex flex-col items-center mt-20 space-y-2">
                <h1 class="text-4xl font-bold font-raleway">Mitra Kami</h1>
            </div>
            <div class="mt-10 max-w-7xl">
                <div class="flex space-x-6">
                    <div class="">
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
                        <div class="p-10 bg-white shadow-lg rounded-2xl">
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
                    <div class="">
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
                <div class="flex justify-center">
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
            <form action="" class="w-full px-32 my-20">
                <div class="flex flex-wrap">
                    <div class="relative flex items-center w-1/2 pr-5">
                        <div class="absolute pl-5">
                            <img src="{{ asset('images/person-icon.svg') }}" alt="">
                        </div>
                        <input class="w-full py-3 pl-16 font-bold rounded focus:outline-none font-roboto" type="text"
                            placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="relative flex items-center w-1/2 pl-5">
                        <div class="absolute pl-5">
                            <img src="{{ asset('images/mail-icon.svg') }}" alt="">
                        </div>
                        <input class="w-full py-3 pl-16 font-bold rounded focus:outline-none font-roboto" type="text"
                            placeholder="Masukkan Email Anda">
                    </div>
                    <div class="relative flex items-center w-1/2 pr-5 mt-6">
                        <div class="absolute pl-5">
                            <img src="{{ asset('images/phone-icon.svg') }}" alt="">
                        </div>
                        <input class="w-full py-3 pl-16 font-bold rounded focus:outline-none font-roboto" type="text"
                            placeholder="Masukkan No Telp / WA Anda">
                    </div>
                    <div class="relative flex items-center w-1/2 pl-5 mt-6">
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
        <div class="flex justify-between max-w-6xl pb-20 mx-auto">
            <div class="flex flex-col">
                <div class="flex items-center justify-center py-2 bg-white">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
                <span class="mt-1 font-bold text-white uppercase font-roboto">PT. DAPENSI TRIO USAHA</span>
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
            <div class="flex items-center justify-between max-w-6xl mx-auto">
                <span class="font-bold text-white font-roboto">Copyright 2022 © PT DAPENSI TRIO USAHA - All Right
                    Reserved </span>
                <div class="">
                    <img src="{{ asset('images/moto.png') }}" alt="">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
