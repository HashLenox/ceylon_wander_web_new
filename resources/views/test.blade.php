<!DOCTYPE html>
<html>

<head>
    <title>Furnics Furniture Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Poppins:wght@200;300;400;500&display=swap"
        rel="stylesheet">

    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
</head>

<body class="bg-body" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true" tabindex="0">


    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

        <symbol id="heart" viewBox="0 0 16 16">
            <path d="M8 14s-6-4.35-6-7.5S4.35 1 8 1s6 2.65 6 5.5S8 14 8 14Z" />
        </symbol>

        <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="m13.281 6.781l-8.5 8.5l-.687.719l.687.719l8.5 8.5l1.438-1.438L7.938 17H28v-2H7.937l6.782-6.781z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M18.719 6.781L17.28 8.22L24.063 15H4v2h20.063l-6.782 6.781l1.438 1.438l8.5-8.5l.687-.719l-.687-.719z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="shipping-fast" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M0 6v2h19v15h-6.156c-.446-1.719-1.992-3-3.844-3c-1.852 0-3.398 1.281-3.844 3H4v-5H2v7h3.156c.446 1.719 1.992 3 3.844 3c1.852 0 3.398-1.281 3.844-3h8.312c.446 1.719 1.992 3 3.844 3c1.852 0 3.398-1.281 3.844-3H32v-8.156l-.063-.157l-2-6L29.72 10H21V6zm1 4v2h9v-2zm20 2h7.281L30 17.125V23h-1.156c-.446-1.719-1.992-3-3.844-3c-1.852 0-3.398 1.281-3.844 3H21zM2 14v2h6v-2zm7 8c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2zm16 0c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-cart" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M5 7c-.55 0-1 .45-1 1s.45 1 1 1h2.219l2.625 10.5c.222.89 1.02 1.5 1.937 1.5H23.25c.902 0 1.668-.598 1.906-1.469L27.75 10H11l.5 2h13.656l-1.906 7H11.781L9.156 8.5A1.983 1.983 0 0 0 7.22 7zm17 14c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm-9 0c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm0 2c.563 0 1 .438 1 1c0 .563-.438 1-1 1c-.563 0-1-.438-1-1c0-.563.438-1 1-1zm9 0c.563 0 1 .438 1 1c0 .563-.438 1-1 1c-.563 0-1-.438-1-1c0-.563.438-1 1-1z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="gift" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M12 5c-1.645 0-3 1.355-3 3c0 .352.074.684.188 1H4v6h1v13h22V15h1V9h-5.188A2.95 2.95 0 0 0 23 8c0-1.645-1.355-3-3-3c-1.75 0-2.938 1.328-3.719 2.438c-.105.148-.187.292-.281.437c-.094-.145-.176-.29-.281-.438C14.938 6.329 13.75 5 12 5zm0 2c.625 0 1.438.672 2.063 1.563c.152.218.128.23.25.437H12c-.566 0-1-.434-1-1c0-.566.434-1 1-1zm8 0c.566 0 1 .434 1 1c0 .566-.434 1-1 1h-2.313c.122-.207.098-.219.25-.438C18.563 7.673 19.375 7 20 7zM6 11h20v2h-9v-1h-2v1H6zm1 4h18v11h-8V16h-2v10H7z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="return" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13h-2c0 6.086-4.914 11-11 11S5 22.086 5 16S9.914 5 16 5c3.875 0 7.262 1.984 9.219 5H20v2h8V4h-2v3.719C23.617 4.844 20.02 3 16 3z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 24 24">
            <path fill="currentColor" d="m15 17l2-4h-4V6h7v7l-2 4h-3Zm-9 0l2-4H4V6h7v7l-2 4H6Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
            <path
                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
    </svg>



    <div id="preloader">
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
    </div>



    <header id="header" class="text-black site-header">
        <nav id="header-nav" class="px-3 mb-3 navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="i#">
                    <img src="{{ asset('assets/images/landing/main-logo.png') }}" class="logo">
                </a>
                <button class="order-3 p-2 navbar-toggler d-flex d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg class="navbar-icon" width="50" height="50">
                        <use xlink:href="#navbar-icon"></use>
                    </svg>
                </button>


            </div>
        </nav>
    </header>

    <section id="billboard" class="overflow-hidden">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-item"
                                    style="background-image: url('{{ asset('assets/images/landing/banner-image1.jpg') }}'); background-repeat: no-repeat; background-position: right; height: 682px;">
                                    <div class="banner-content padding-large">
                                        <h1 class="pb-2 display-1 text-uppercase text-dark">Find Your Next Adventure.
                                        </h1>
                                        <p>Embark on a journey through Sri Lanka with real-time traveler updates, cozy
                                            rest houses, authentic dining venues, and captivating destinations. Enjoy
                                            luxurious amenities, immaculate lodgings, and personalized hospitality,
                                            enhancing your exploration of this iconic destination.</p>
                                        <a href="#" class="mt-5 btn btn-medium btn-arrow position-relative">
                                            <span class="text-uppercase">Explore more</span>
                                            <svg class="arrow-right position-absolute" width="18" height="20">
                                                <use xlink:href="#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-item"
                                    style="background-image:url('{{ asset('assets/images/landing/banner-image1.jpg') }}'); background-repeat: no-repeat; background-position: right; height: 682px;">
                                    <div class="banner-content padding-large">
                                        <h1 class="pb-2 display-1 text-uppercase text-dark">Empower Your Business.</h1>
                                        <p>Tailored for corporate travelers, Ceylon Wander provides seamless solutions
                                            with curated accommodations, dining options, and locations designed to boost
                                            productivity and ensure comfort throughout every journey.
                                        </p>
                                        <a href="#" class="mt-5 btn btn-medium btn-arrow position-relative">
                                            <span class="text-uppercase">Login now</span>
                                            <svg class="arrow-right position-absolute" width="18" height="20">
                                                <use xlink:href="#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination position-absolute"></div>
    </section>

    <section id="company-services" class="padding-large">
        <div class="container-fluid">
            <div class="row">
                <div class="pb-3 col-lg-3 col-md-6">
                    <div class="icon-box d-flex align-items-center">
                        <div class="pt-3 pb-3 icon-box-icon pe-3 ps-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
                            </svg>
                        </div>
                        <div class="icon-box-content ps-3">
                            <h3 class="card-title text-uppercase text-dark">Travelers' Feed</h3>
                        </div>
                    </div>
                </div>
                <div class="pb-3 col-lg-3 col-md-6">
                    <div class="icon-box d-flex align-items-center">
                        <div class="pt-3 pb-3 icon-box-icon pe-3 ps-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg>
                        </div>
                        <div class="icon-box-content ps-3">
                            <h3 class="card-title text-uppercase text-dark">Location Discovery</h3>
                        </div>
                    </div>
                </div>
                <div class="pb-3 col-lg-3 col-md-6">
                    <div class="icon-box d-flex align-items-center">
                        <div class="pt-3 pb-3 icon-box-icon pe-3 ps-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                width="16" height="16">
                                <path
                                    d="M169.7 .9c-22.8-1.6-41.9 14-47.5 34.7L110.4 80c.5 0 1.1 0 1.6 0c176.7 0 320 143.3 320 320c0 .5 0 1.1 0 1.6l44.4-11.8c20.8-5.5 36.3-24.7 34.7-47.5C498.5 159.5 352.5 13.5 169.7 .9zM399.8 410.2c.1-3.4 .2-6.8 .2-10.2c0-159.1-128.9-288-288-288c-3.4 0-6.8 .1-10.2 .2L.5 491.9c-1.5 5.5 .1 11.4 4.1 15.4s9.9 5.6 15.4 4.1L399.8 410.2zM176 208a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm64 128a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM96 384a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </div>
                        <div class="icon-box-content ps-3">
                            <h3 class="card-title text-uppercase text-dark">authentic dining </h3>
                        </div>
                    </div>
                </div>
                <div class="pb-3 col-lg-3 col-md-6">
                    <div class="icon-box d-flex align-items-center">
                        <div class="pt-3 pb-3 icon-box-icon pe-3 ps-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707z" />
                                <path
                                    d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018" />
                            </svg>
                        </div>
                        <div class="icon-box-content ps-3">
                            <h3 class="card-title text-uppercase text-dark">personalized hospitality</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between g-5">
                <div class="col-lg-6">
                    <div class="mb-4 image-holder jarallax">
                        <img src="{{ asset('assets/images/landing/about-us.jpg') }}" alt="single"
                            class="img-fluid jarallax-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5 detail">
                        <div class="display-header">
                            <h2 class="pb-2 display-2 text-uppercase text-dark">About Ceylon Wander</h2>
                            <p class="pb-3">Ceylon Wander is a premier mobile application designed to connect
                                travelers with the vibrant experiences of Sri Lanka. Our mission is to be the most
                                trusted source for travel and exploration in the region. Utilizing advanced technology
                                and local insights, we provide users with rich content, personalized travel guidance,
                                and a comprehensive platform for discovering destinations, dining, and accommodations.
                            </p>
                            <p>Ceylon Wander operates as a family of features, including Discover Locations, Nearby
                                Restaurants, Nearby Rest houses, and a dynamic social Feed. With Ceylon Wander, embark
                                on an unforgettable journey through Sri Lanka, supported by the most reliable travel
                                companion. </p>
                            {{-- <a href="#" class="mt-3 btn btn-medium btn-arrow outline-dark position-relative">
                                <span class="text-uppercase">About us</span>
                                <svg class="arrow-right position-absolute" width="18" height="20">
                                    <use xlink:href="#arrow-right"></use>
                                </svg>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="collections" class="position-relative padding-large">
        <div class="container-fluid">
            <div class="row">
                <div class="swiper collection-swiper">
                    <div class="swiper-wrapper">
                        <div class="overflow-hidden swiper-slide">
                            <div class="product-card">
                                <div class="pt-3 card-detail d-flex justify-content-between align-items-baseline">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Tourist Attractions</a>
                                    </h3>
                                </div>
                                <div class="image-overlay position-relative">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/images/landing/img-1.jpg') }}" alt="product-item"
                                            class="product-image img-fluid">

                                        <div class="text-box box-slide position-absolute">
                                            <div class="p-5 text-content bg-light">
                                                <h3>About</h3>
                                                <p>Assumenda temporibus quidem ipsam. fuga corporis iusto similique
                                                    voluptates sint quibusdam.</p>
                                                <ul>
                                                    <li>Lorem ipsum dolor sit.</li>
                                                    <li>Lorem ipsum dolor sit amet.</li>
                                                    <li>Lorem, ipsum dolor.</li>
                                                </ul>
                                                <a href="#" class="mt-3 btn btn-normal">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-image -->
                                </div>
                            </div>
                        </div>
                        <div class="overflow-hidden swiper-slide">
                            <div class="product-card">
                                <div class="pt-3 card-detail d-flex justify-content-between align-items-baseline">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">exquisite dining </a>
                                    </h3>
                                </div>
                                <div class="image-overlay position-relative">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/images/landing/img-2.jpg') }}" alt="product-item"
                                            class="product-image img-fluid">

                                        <div class="text-box box-slide position-absolute">
                                            <div class="p-5 text-content bg-light">
                                                <h3>About</h3>
                                                <p>Assumenda temporibus quidem ipsam. fuga corporis iusto similique
                                                    voluptates sint quibusdam.</p>
                                                <ul>
                                                    <li>Lorem ipsum dolor sit.</li>
                                                    <li>Lorem ipsum dolor sit amet.</li>
                                                    <li>Lorem, ipsum dolor.</li>
                                                </ul>
                                                <a href="#" class="mt-3 btn btn-normal">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-image -->
                                </div>
                            </div>
                        </div>
                        <div class="overflow-hidden swiper-slide">
                            <div class="product-card">
                                <div class="pt-3 card-detail d-flex justify-content-between align-items-baseline">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Spotless residence</a>
                                    </h3>
                                </div>
                                <div class="image-overlay position-relative">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/images/landing/img-3.jpg') }}" alt="product-item"
                                            class="product-image img-fluid">

                                        <div class="text-box box-slide position-absolute">
                                            <div class="p-5 text-content bg-light">
                                                <h3>About</h3>
                                                <p>Assumenda temporibus quidem ipsam. fuga corporis iusto similique
                                                    voluptates sint quibusdam.</p>
                                                <ul>
                                                    <li>Lorem ipsum dolor sit.</li>
                                                    <li>Lorem ipsum dolor sit amet.</li>
                                                    <li>Lorem, ipsum dolor.</li>
                                                </ul>
                                                <a href="#" class="mt-3 btn btn-normal">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-image -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center swiper-pagination position-absolute"></div>
    </section>

    <section id="testimonials" class="position-relative">
        <div class="container">
            <div class="row">
                <div class="review-content position-relative">
                    <div
                        class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center justify-content-center">
                        <svg class="icon-arrow" width="25" height="25">
                            <use xlink:href="#arrow-left" />
                        </svg>
                    </div>
                    <div class="swiper testimonial-swiper">
                        <div class="text-center quotation">
                            <svg class="quote">
                                <use xlink:href="#quote" />
                            </svg>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="text-center swiper-slide d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote class="fs-4">“Tempus oncu enim pellen tesque este pretium in neque,
                                        elit morbi sagittis lorem habi mattis Pellen tesque pretium feugiat vel morbi
                                        suspen dise sagittis lorem habi tasse morbi.”</blockquote>
                                    <div class="author-detail">
                                        <div class="pt-2 name text-primary text-uppercase">Hana Kimusaki</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center swiper-slide d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote class="fs-4">“A blog is a digital publication that can complement a
                                        website or exist independently. A blog may include articles, short posts,
                                        listicles, infographics, videos, and other digital content.”</blockquote>
                                    <div class="author-detail">
                                        <div class="pt-2 name text-primary text-uppercase">Jennie Rose</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center justify-content-center">
                        <svg class="icon-arrow" width="25" height="25">
                            <use xlink:href="#arrow-right" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center swiper-pagination position-absolute"></div>
    </section>

    <section id="best-locations" class="product-store position-relative padding-large">
        <div class="container-fluid">
            <div class="row">
                <div class="flex-wrap pb-3 display-header d-flex justify-content-between col-md-12">
                    <h2 class="display-2 text-dark text-uppercase">All-time Best Locations</h2>
                    {{-- <a href="#" class="btn btn-medium btn-arrow btn-normal position-relative">
                        <span class="text-uppercase">Shop All</span>
                        <svg class="arrow-right position-absolute" width="18" height="20">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a> --}}
                </div>
            </div>
            <div class="row">
                <div id="featured-swiper" class="product-swiper col-md-12">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="flex-wrap product-card image-zoom-effect link-effect d-flex">
                                    <div class="image-holder">
                                        <img src="{{ asset('assets/images/landing/best-location-1.jpg') }}"
                                            alt="product-item" class="product-image img-fluid">
                                    </div>
                                    <div class="cart-concern">
                                        <h3 class="pt-3 card-title text-uppercase text-primary">
                                            <a href="#" class="text-primary">Location 1</a>
                                        </h3>
                                        <div class="cart-info">
                                            <a class="pseudo-text-effect" href="#"
                                                data-after="SOME TEXT"><span>Some Text</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex-wrap product-card image-zoom-effect link-effect d-flex">
                                    <div class="image-holder">
                                        <img src="{{ asset('assets/images/landing/best-location-1.jpg') }}"
                                            alt="product-item" class="product-image img-fluid">
                                    </div>
                                    <div class="cart-concern">
                                        <h3 class="pt-3 card-title text-uppercase text-primary">
                                            <a href="#" class="text-primary">Location 1</a>
                                        </h3>
                                        <div class="cart-info">
                                            <a class="pseudo-text-effect" href="#"
                                                data-after="SOME TEXT"><span>Some Text</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex-wrap product-card image-zoom-effect link-effect d-flex">
                                    <div class="image-holder">
                                        <img src="{{ asset('assets/images/landing/best-location-1.jpg') }}"
                                            alt="product-item" class="product-image img-fluid">
                                    </div>
                                    <div class="cart-concern">
                                        <h3 class="pt-3 card-title text-uppercase text-primary">
                                            <a href="#" class="text-primary">Location 1</a>
                                        </h3>
                                        <div class="cart-info">
                                            <a class="pseudo-text-effect" href="#"
                                                data-after="SOME TEXT"><span>Some Text</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex-wrap product-card image-zoom-effect link-effect d-flex">
                                    <div class="image-holder">
                                        <img src="{{ asset('assets/images/landing/best-location-1.jpg') }}"
                                            alt="product-item" class="product-image img-fluid">
                                    </div>
                                    <div class="cart-concern">
                                        <h3 class="pt-3 card-title text-uppercase text-primary">
                                            <a href="#" class="text-primary">Location 1</a>
                                        </h3>
                                        <div class="cart-info">
                                            <a class="pseudo-text-effect" href="#"
                                                data-after="SOME TEXT"><span>Some Text</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex-wrap product-card image-zoom-effect link-effect d-flex">
                                    <div class="image-holder">
                                        <img src="{{ asset('assets/images/landing/best-location-1.jpg') }}"
                                            alt="product-item" class="product-image img-fluid">
                                    </div>
                                    <div class="cart-concern">
                                        <h3 class="pt-3 card-title text-uppercase text-primary">
                                            <a href="#" class="text-primary">Black Sofa Set</a>
                                        </h3>
                                        <div class="cart-info">
                                            <a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
                                                <span>$200</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex-wrap product-card image-zoom-effect link-effect d-flex">
                                    <div class="image-holder">
                                        <img src="https://images.unsplash.com/photo-1645032868393-0a4dfc1481ef?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="product-item" class="product-image img-fluid">
                                    </div>
                                    <div class="cart-concern">
                                        <h3 class="pt-3 card-title text-uppercase text-primary">
                                            <a href="#" class="text-primary">Minimal Sofa</a>
                                        </h3>
                                        <div class="cart-info">
                                            <a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
                                                <span>$200</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe-content padding-large">
                        <div class="subscribe-header">
                            <h2 class="display-4">Get offers & discounts by subscribing us</h2>
                        </div>
                        <form id="form">
                            <input type="text" name="email" placeholder="Enter Your Email Addresss"
                                class="border-0 w-100 bg-light ps-5 fst-italic">
                            <button class="btn btn-full btn-black text-uppercase">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="brand-collection" class="mb-0 overflow-hidden padding-small border-top border-bottom margin-large">
        <div class="container">
            <div class="flex-wrap gap-3 d-flex justify-content-between align-items-center">
                <a href="#"><img src="images/brand-logo-1.svg" alt="brand"></a>
                <a href="#"><img src="images/brand-logo-2.svg" alt="brand"></a>
                <a href="#"><img src="images/brand-logo-3.svg" alt="brand"></a>
                <a href="#"><img src="images/brand-logo-4.svg" alt="brand"></a>
                <a href="#"><img src="images/brand-logo-5.svg" alt="brand"></a>
            </div>
        </div>
    </section>

    <footer id="footer" class="overflow-hidden padding-large">
        <div class="container-fluid">
            <div class="row">
                <div class="flex-wrap row d-flex justify-content-between">
                    <div class="pb-3 col-lg-5 col-sm-6 pe-4">
                        <div class="footer-menu">
                            <img src="{{ asset('assets/images/landing/main-logo.png') }}" alt="logo"
                                class="pb-3">
                            <p>Mi facilisis facilisis orci vitae. Cum nisi morbi integer tincidunt ornare ac praesent
                                in. Dolor tempus arcu sit quis nunc arcu facilisis quis eget nisi morbi integer.</p>
                        </div>
                        <div class="copyright">
                            <p>© Copyright 2024. Design by <a href="https://ceylonwander.com/">Ceylon Wander</a>
                            </p>
                        </div>
                    </div>
                    <div class="pb-3 col-lg-4 col-sm-6">
                        <div class="footer-menu text-uppercase">
                            <h5 class="pb-2 widget-title">Quick Links</h5>
                            <ul class="menu-list list-unstyled text-uppercase">
                                <li class="pb-2 menu-item">
                                    <a href="#billboard">Home</a>
                                </li>
                                <li class="pb-2 menu-item">
                                    <a href="#about-us">About</a>
                                </li>
                                <li class="pb-2 menu-item">
                                    <a href="#company-services">Services</a>
                                </li>
                                <li class="pb-2 menu-item">
                                    <a href="#latest-blog">Blogs</a>
                                </li>
                                <li class="pb-2 menu-item">
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-menu contact-item">
                            <h5 class="pb-2 widget-title text-uppercase">Contact Us</h5>
                            <p><a href="">+ 12(0) 34 56 78 910</a></p>
                            <p><a href="mailto:">hello@ceylonwander.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>

    <script src="https://kit.fontawesome.com/fa3a04a598.js" crossorigin="anonymous"></script>
</body>

</html>
