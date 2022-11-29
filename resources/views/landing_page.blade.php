<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{$data['NamaWebsite']}}">
    <meta name="keywords" content="{{$data['NamaWebsite']}}, Desain Website, Create Website, Buat Wesbite, Cortofolio, Creative, Freelance">
    <meta name="author" content="{{$data['author']}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data['NamaWebsite']}} | Branding Design Studio</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/"><img src="{{asset('img/logo.png')}}" alt="" width="150"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="#home">Home</a></li>
                                <li><a href="#service" class="scroll">Services</a></li>
                                <li><a href="#team" class="scroll">Team</a></li>
                                <li><a href="#porto" class="scroll">Portfolio</a></li>
                                <li><a href="#blog" class="scroll">Blog</a></li>
                                <li><a href="#testi" class="scroll">Testimoni</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="https://www.Instagram.com/decreativeart"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero" id="home">
        <div class="hero__slider owl-carousel">
            <div class="set-bg" data-setbg="{{asset('img/hero/hero-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="img-hidden">
                            <img src="{{asset('img/hero/hero-img.png')}}" alt="">
                        </div>
                        <div class="hero__item col-lg-6">
                            <div class="hero__text">
                                <span>- Layanan & Jasa</span>
                                <h2>BANGUN BRAND ANDA SEKARANG JUGA!</h2>
                                <a href="https://api.whatsapp.com/send?phone=6283870000035&text=Saya%20ingin%20konsultasi!" class="primary-btn">Konsultasi Sekarang</a>
                            </div>
                        </div>
                        <div class="hero_img_item col-lg-6">
                            <img src="{{asset('img/hero/hero-img.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Logo Begin -->
    <div class="logo spad bg-warning">
        <div class="container">
            <div class="logo__carousel owl-carousel">
                <a href="#" class="logo__item"><img src="{{asset('img/partner/logo111.png')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('img/partner/logo222.png')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('img/partner/logo333.png')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('img/partner/logo444.png')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('img/partner/logo555.png')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('img/partner/logo666.png')}}" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Logo End -->

    <!-- Services Section Begin -->
    <section class="services spad" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span>Pelayanan Kami</span>
                            <h2>Apa yang akan kami tawarkan?</h2>
                        </div>
                        <p>{{$data['NamaWebsite']}} menawarkan layanan yang cepat, tepat, dan profesional. Kami akan selalu memberikan full service yang sangat maksimal. Tujuan kami adalah menciptakan citra dan desain modern untuk bisnis Anda.</p>
                        <a href="{{ route('InstagramFeed') }}" class="primary-btn">Jasa Instagram Feeds</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="{{asset('img/icons/website.png')}}" alt="" width="45">
                                </div>
                                <h4>Website</h4>
                                <p>Kami mengkhususkan diri dalam membuat situs web yang menarik untuk perusahaan B2C dan B2B. Tim kami terdiri dari para profesional dinamis yang percaya bahwa situs web Anda harus mewakili kualitas pekerjaan Anda dan mengembangkan bisnis Anda.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="{{asset('img/icons/logo-design.png')}}" alt="" width="45">
                                </div>
                                <h4>Logo</h4>
                                <p>Logo Anda adalah jantung dan wajah merek Anda. Kesan pertama itu penting! Desainer logo profesional kami akan membuat desain logo yang menarik yang akan membantu merek Anda menonjol dari pesaing.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="{{asset('img/icons/animation.png')}}" alt="" width="45">
                                </div>
                                <h4>Animation</h4>
                                <p>Menciptakan Animasi Logo adalah terobosan paling ampuh untuk meyakinkan client/konsumen agar lebih yakin dengan brand Anda dan membuat wujud brand/usaha Anda semakin profesional.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="{{asset('img/icons/digital-marketing.png')}}" alt="" width="45">
                                </div>
                                <h4>Digital Marketing</h4>
                                <p>Pentingnya jika perusahaan/usaha Anda lebih tertarget sesuai dengan produk yang Anda jual. Kami akan selalu membantu Anda dalam penargetan yang sangat akurat dengan algoritma SEO.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Team Section Begin -->
    <section class="team spad set-bg" data-setbg="{{asset('img/team-bg.jpg')}}" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Team Profesional</span>
                        <h2>{{$data['NamaWebsite']}} Agency</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 mx-auto">
                        <div class="de_card">
                            <img src="{{asset('img/team/dehendrik.jpg')}}" alt="" class="mx-auto d-block rounded-circle">
                            <h4 class="text-light">De Hendrik</h4>
                            <p>Founder</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.Instagram.com/decreativeart"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 mx-auto">
                        <div class="de_card">
                            <img src="{{asset('img/team/anggi1.jpg')}}" alt="" class="mx-auto d-block rounded-circle">
                            <h4 class="text-light">Anggi</h4>
                            <p>Design Feeds</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 mx-auto">
                        <div class="de_card">
                            <img src="{{asset('img/team/agung.jpg')}}" alt="" class="mx-auto d-block rounded-circle">
                            <h4 class="text-light">Agung Dwi Sahputra</h4>
                            <p>Web Developer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 mx-auto">
                        <div class="de_card">
                            <img src="{{asset('img/team/ryan.jpg')}}" alt="" class="mx-auto d-block rounded-circle">
                            <h4 class="text-light">Ryan Aditya</h4>
                            <p>UI UX Design</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 mx-auto">
                        <div class="de_card">
                            <img src="{{asset('img/team/afriandi.jpg')}}" alt="" class="mx-auto d-block rounded-circle">
                            <h4 class="text-light">Muhammad Afriandi</h4>
                            <p>Video Animation</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 mx-auto">
                        <div class="de_card">
                            <img src="{{asset('img/team/valen.jpg')}}" alt="" class="mx-auto d-block rounded-circle">
                            <h4 class="text-light">Valencia Salim</h4>
                            <p>Writing</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 mx-auto">
                        <div class="de_card">
                            <img src="{{asset('img/team/deka.jpg')}}" alt="" class="mx-auto d-block rounded-circle">
                            <h4 class="text-light">Deka Kurnia</h4>
                            <p>Design NFT</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 mx-auto">
                        <div class="de_card">
                            <img src="{{asset('img/team/anita.jpg')}}" alt="" class="mx-auto d-block rounded-circle">
                            <h4 class="text-light">Anita Sari</h4>
                            <p>Video Editing</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Link Section -->
    <section class="bg-warning spad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 py-2">
                    <a href="rekrut/">
                        <div class="de_card-link p-3">
                            <div class="card-body text-center">
                                <img src="{{asset('img/icons/recruitment.png')}}" alt="" class="img-fluid w-50 d-block mx-auto pb-3">
                                <h4 class="card-title text-light"><b>Rekrut Kami Sekarang Juga</b></h4>
                                <p class="card-text text-light">Anda bisa merekrut kami menggunakan Situs Rekber (Rekening Bersama) yang menengahi transaksi kita agar lebih aman dan nyaman.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 py-2">
                    <a href="">
                        <div class="de_card-link p-3">
                            <div class="card-body text-center">
                                <img src="{{asset('img/icons/nft.png')}}" alt="" class="img-fluid w-50 d-block mx-auto pb-3">
                                <h4 class="card-title text-light"><b>Koleksi Desain NFT</b><br><br></h4>
                                <p class="card-text text-light">Berbagai koleksi Desain NFT yang Team kami buat menggunakan satu karakter dengan berbeda - beda outfits serta konsepnya.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 py-2">
                    <a href="">
                        <div class="de_card-link p-3">
                            <div class="card-body text-center">
                                <img src="{{asset('img/icons/shop.png')}}" alt="" class="img-fluid w-50 d-block mx-auto pb-3">
                                <h4 class="card-title text-light"><b>Toko Kami</b><br><br></h4>
                                <p class="card-text text-light">Kami menjual beberapa produk desain seperti desain font, desain mockup, berbagai template keren, dll dengan berlisensi.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Link Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="{{asset('img/icons/completed.png')}}" alt="" width="90">
                                <h2 class="counter_num">523</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="{{asset('img/icons/costumer.png')}}" alt="" width="90">
                                <h2 class="counter_num">505</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="{{asset('img/icons/customer-care.png')}}" alt="" width="90">
                                <h2 class="counter_num">490</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="{{asset('img/icons/star-rating.png')}}" alt="" width="90">
                                <h2 class="counter_num">100%</h2>
                                <p>Satisfied</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio spad" id="porto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Tentang kami</span>
                        <h2>Portofolio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".logo">Logo Design</li>
                        <li data-filter=".font">Design Font</li>
                        <li data-filter=".packaging">Packaging</li>
                        <li data-filter=".video-editing">Video Editing</li>
                        <li data-filter=".web-design">Web Design</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio__gallery de_gallery">

                @foreach($data['portfolio'] as $data)
                @if($data->link == null)
                <div class="col-lg-4 col-md-6 col-sm-6 mix {{$data->kategori}} py-0">
                    <div class="portfolio__item">
                        <a href="{{url('storage/app/public/portfolio/'.$data->file)}}" class="portfolio__item__video set-bg">
                            <img src="{{url('storage/app/public/portfolio/'.$data->file)}}" alt="">
                        </a>
                        <div class="portfolio__item__text">
                            <h4>{{$data->nama}}</h4>
                            <ul>
                                <li>{{$data->jenis}}</li>
                                <li>{{$data->keterangan}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-4 col-md-6 col-sm-6 mix {{$data->kategori}} py-0">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{url('storage/app/public/portfolio/'.$data->file)}}">
                            <a href="{{$data->link}}" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>{{$data->nama}}</h4>
                            <ul>
                                <li>{{$data->jenis}}</li>
                                <li>{{$data->keterangan}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Blog Kami</span>
                        <h2>Seputar Branding</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="blog__item">
                            <h4>5 Cara Jitu Membangun Personal Branding</h4>
                            <ul>
                                <li>Agust 03, 2019</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>Di era digital yang semakin canggih, manusia mulai tidak bisa lepas dari media sosial. Akibat keterikatan...</p>
                            <a href="https://blog.decreativeart.com/personalbranding/5-cara-membangun-personal-branding/">Selengkapnya <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item2">
                            <h4>Peran dan Pentingnya Logo Dalam Membangun Brand</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>03 Comment</li>
                            </ul>
                            <p>Salah satu cara membangun brand perusahaan yaitu dengan menciptakan logo yang berkualitas, simple, elegant dan sangat mudah di ingat....</p>
                            <a href="https://blog.decreativeart.com/personalbranding/peran-dan-pentingnya-logo-dalam-membangun-brand/">Selengkapnya <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item3">
                            <h4>Bisnis Online Instagram Kamu Macet? Yuk Coba 5 Tips Ini</h4>
                            <ul>
                                <li>Octo 03, 2021</li>
                                <li>10 Comment</li>
                            </ul>
                            <p>Di era digital seperti sekarang ini, beberapa platform media sosial telah menambah fungsi khusus bagi para pelaku bisnis....</p>
                            <a href="https://blog.decreativeart.com/bisnis-online/bisnis-online-instagram-kamu-macet-yuk-coba-5-tips-ini/">Selengkapnya <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item4">
                            <h4>Jualan Praktis Lewat Online? Pakai Jasa Digital Marketing Aja Yuk!</h4>
                            <ul>
                                <li>Octo 20, 2021</li>
                                <li>02 Comment</li>
                            </ul>
                            <p>Digital Marketing merupakan dua kata yang sangat terkenal belakangan ini. Bagaimana tidak?....</p>
                            <a href="https://blog.decreativeart.com/bisnis-online/jualan-praktis-lewat-internet-pakai-jasa-digital-marketing-aja-yuk/">Selengkapnya <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item5">
                            <h4>Pemain Baru di Bisnis Online? Yuk Simak Tipsnya!</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>Siapa bilang pemain baru di bisnis online tidak bisa laris manis jualannya? ...</p>
                            <a href="https://blog.decreativeart.com/bisnis-online/pemain-baru-di-bisnis-online-yuk-simak-tipsnya/">Selengkapnya <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item6">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Selengkapnya <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item7">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Selengkapnya <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg="{{asset('img/testimonial-bg.jpg')}}" id="testi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Pelanggan kami</span>
                        <h2>Apa kata mereka?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Thanks team {{$data['NamaWebsite']}}, pelayanan sangat sesuai dengan perkataan, perfect. Hasil juga sangat memuaskan dan pengerjaan sangat cepat.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset('img/testimonial/arif.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Arif Santoso</h5>
                                    <span>Project Logo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Fast, efficient, and easy to work with. A great company, especially if you are in urgent need of logo or concept for your business. Prices are absolutely affordable and they never try to push a design on you that you don’t want with enough choices and revisions to make anyone happy.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset('img/testimonial/ta-2.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Saya dari dulu bingung mau bikin logo untuk brand sya, gak pernah dapet logo yg simple tp elegan. Ga sengaja saya klik iklan {{$data['NamaWebsite']}}, saya coba kontak.. setelah berdiskusi akhirnya dia memberikan design logo yg gk pernah terbayangkan oleh saya sebelumnya. Simple dan elegan banget, Pelayananya juga sangat memuaskan, orangnya ramah banget..
                                    Good Job mas, semoga makin sukses ya 😎😁</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset('img/testimonial/fajar.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Fajar Heri Setiawan</h5>
                                    <span>Project Logo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Fast, efficient, and easy to work with. A great company, especially if you are in urgent need of logo or concept for your business. Prices are absolutely affordable and they never try to push a design on you that you don’t want with enough choices and revisions to make anyone happy.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset('img/testimonial/ta-2.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="{{asset('img/logo.png')}}" alt="" width="200"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>Tentang Kami</h5>
                            <p>{{$data['NamaWebsite']}} berdiri pada tahun 2019 awal. Masih tergolong cukup muda, namun mimpi kami sangat besar.
                                Team kecil tapi berjiwa keprofesionalan yang tinggi.</p>
                            <a href="#" class="read__more">Toko kami <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Hubungi kami</h5>
                            <ul>
                                <li><a href="#">Whatsapp</a></li>
                                <li><a href="#">Telegram</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Line</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Our work</h5>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Browse Archive</a></li>
                                <li><a href="#">Video for web</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>Newsletter</h5>
                            <p>Dapatkan artikel dan materi seputar branding dan designer.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Copyright &copy; 2019
                            {{$data['NamaWebsite']}} Agency | This website is made by <a href="https://github.com/AgungDwiSahputra">Team {{$data['NamaWebsite']}}</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript">
        $('.scroll').on('click', function(e) {

            var nunjukHref = $(this).attr('href');

            //Tangkap Elemen dari Href tersebut
            var elemenHref = $(nunjukHref);

            $('html, body').animate({
                scrollTop: elemenHref.offset().top + 50
            }, 1300, 'easeInOutExpo');

            e.preventDefault();
        });
    </script>
</body>

</html>