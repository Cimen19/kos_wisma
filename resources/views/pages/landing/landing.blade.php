<!doctype html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
    <meta name="author" content="Holger Koenemann">
    <meta name="generator" content="Eleventy v2.0.0">
    <meta name="HandheldFriendly" content="true">
    <title>{{ Config('app.name') }}</title>
    <link rel="stylesheet" href="/assets/css/theme.min.css">

    <style>
        /* inter-300 - latin */
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local(''),
                url('./assets/fonts/inter-v12-latin-300.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
                url('./assets/fonts/inter-v12-latin-300.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: local(''),
                url('./assets/fonts/inter-v12-latin-500.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
                url('./assets/fonts/inter-v12-latin-500.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: local(''),
                url('./assets/fonts/inter-v12-latin-700.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
                url('./assets/fonts/inter-v12-latin-700.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll">

    <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
        <div class="container">
            <a class="navbar-brand pe-4 fs-4" href="/">
                <span class="ms-1 fw-bolder">{{ Config('app.name') }}</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#booking" aria-label="Brings you to the frontpage">
                            Cara Booking
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">
                            Informasi Kost
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">
                            Galeri Kost
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">
                            Testimoni
                        </a>
                    </li>

                </ul>
                <a href="{{ url('/login') }}" data-splitbee-event="Login" aria-label="Login"
                    class="link-dark pb-1 link-fancy me-2">
                    Login
                </a>
                <a href="{{ url('/register') }}" data-splitbee-event="Register" aria-label="Register"
                    class="link-dark pb-1 link-fancy me-2">
                    Daftar
                </a>
            </div>
        </div>
    </nav>

    <main>
        <div class="w-100 overflow-hidden bg-gray-100" id="top">

            <div class="container position-relative">
                <div class="col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left"
                    style="background-image: url(assets/img/webp/interior11.webp);">

                </div>
                <div class="row">

                    <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
                        <h1 class="display-1 fw-bold mt-5">Kost Wisma: Solusi Mudah Pencarian Kost</h1>
                        <p class="lead">Kost Wisma menawarkan pilihan kost terbaik dengan fasilitas lengkap, harga terjangkau dan proses booking online yang mudah dan cepat</p>
                        <a href="{{ url('/register') }}" class="btn btn-dark btn-xl shadow me-3 rounded-0 my-5">Pesan
                            Kamar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="small py-vh-3 w-100 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up">
                        <div class="d-flex">
                            <div class="col-md-3 flex-fill pt-3 pe-3 pe-md-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                    fill="currentColor" class="bi bi-box-seam" viewbox="0 0 16 16">
                                    <path
                                        d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                </svg>
                            </div>
                            <div class="col-md-9 flex-fill">
                                <h3 class="h5 my-2">Proses booking yang cepat dan mudah</h3>
                                <p>Kost Wisma menawarkan fitur-fitur yang akan membuat proses penyewaan kost menjadi lebih mudah dan nyaman. Proses booking yang cepat dan mudah dapat dilakukan dengan hanya beberapa klik saja melalui website atau aplikasi kami. Anda dapat dengan mudah memilih kost yang sesuai dengan kebutuhan dan lokasi yang diinginkan, lalu melakukan pemesanan dan pembayaran secara online.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up" data-aos-delay="200">
                        <div class="d-flex">
                            <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                    fill="currentColor" class="bi bi-card-checklist" viewbox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </div>
                            <div class="col-md-9 flex-fill">
                                <h3 class="h5 my-2">Pantau Tagihan Kost Dengan Aplikasi</h3>
                                <p>Fitur selanjutnya adalah pantau tagihan kost dengan aplikasi. Dengan fitur ini, Anda dapat dengan mudah melihat tagihan kost Anda kapan saja dan di mana saja. Anda juga dapat melakukan pembayaran secara online melalui aplikasi tersebut.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="d-flex">
                            <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                    fill="currentColor" class="bi bi-window-sidebar" viewbox="0 0 16 16">
                                    <path
                                        d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    <path
                                        d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z" />
                                </svg>
                            </div>
                            <div class="col-md-9 flex-fill">
                                <h3 class="h5 my-2">Keamanan Anda Terjamin</h3>
                                <p>Keamanan Anda juga terjamin di Kost Wisma, karena kami menggunakan teknologi keamanan yang mutakhir untuk menjaga privasi dan informasi Anda aman. Selain itu, kami juga memiliki tim customer service yang siap membantu Anda dalam mengatasi masalah yang mungkin Anda hadapi.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="py-vh-5 w-100 overflow-hidden" id="booking">
            <div class="container">
                <div class="row d-flex justify-content-end">
                    <div class="col-lg-8" data-aos="fade-down">
                        <h2 class="display-6">Tersedia berbagai jenis pilihan kamar terbaik yang bisa kamu booking,
                            dengan Kost Wisma anda dapat menyewa dan memantau tagihan kost anda lewat aplikasi.</h2>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <span class="h5 fw-lighter">01.</span>
                        <h3 class="py-5 border-top border-dark">Register Aplikasi</h3>
                        <p>Langkah pertama dalam proses booking di Kost Wisma adalah register aplikasi dan menunggu verifikasi data diri. Anda dapat mendaftar dengan mengisi formulir yang tersedia dan mengunggah dokumen yang diperlukan seperti KTP atau SIM. Setelah verifikasi selesai, Anda akan menerima notifikasi dan dapat mulai memesan kamar.</p>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 py-vh-4 pb-0" data-aos="fade-up" data-aos-delay="400">
                        <span class="h5 fw-lighter">02.</span>
                        <h3 class="py-5 border-top border-dark">Pilih kamar favorit anda</h3>
                        <p>Langkah kedua adalah memilih kamar favorit Anda. Kami menyediakan beragam pilihan kost yang dapat Anda pilih sesuai dengan fasilitas dan harga yang Anda inginkan. Anda dapat mengecek ketersediaan kamar dan melihat foto kamar melalui gallery kost yang kami sediakan.</p>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 py-vh-6 pb-0" data-aos="fade-up" data-aos-delay="600">
                        <span class="h5 fw-lighter">03.</span>
                        <h3 class="py-5 border-top border-dark">Lakukan pembayaran untuk memulai booking</h3>
                        <p>Langkah ketiga adalah melakukan pembayaran untuk memulai booking. Setelah memilih kamar yang diinginkan, Anda dapat melakukan pembayaran secara online melalui aplikasi kami. Kami menyediakan beragam metode pembayaran yang aman dan mudah seperti transfer bank dll.</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
            <div class="container">

                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="row gx-5 d-flex">
                            <div class="col-md-11">
                                <div class="shadow ratio ratio-16x9 rounded bg-cover bp-center align-self-end"
                                    data-aos="fade-right"
                                    style="background-image: url(assets/img/webp/people15.webp);--bs-aspect-ratio: 50%;">
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="shadow ratio ratio-1x1 rounded bg-cover mt-5 bp-center float-end"
                                    data-aos="fade-up"
                                    style="background-image: url(assets/img/webp/interior42.webp);">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12 shadow ratio rounded bg-cover mt-5 bp-center" data-aos="fade-left"
                                    style="background-image: url(assets/img/webp/people4.webp);--bs-aspect-ratio: 150%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="py-5 border-top border-dark" data-aos="fade-left">Kost Wisma: Memanfaatkan Teknologi untuk Mempermudah Pencarian dan Penyewaan Kost</h3>
                        <p data-aos="fade-left" data-aos-delay="200">Kost Wisma hadir sebagai salah satu informasi untuk menjawab perkembangan teknologi tersebut. Kami percaya bahwa perkembangan teknologi dapat mempermudah hidup kita dalam segala hal, terutama dalam hal pencarian dan penyewaan kost. Kami menyediakan solusi penyewaan kost yang mudah dan nyaman. Proses booking dan pembayaran dapat dilakukan secara online melalui aplikasi atau website kami, yang membuat proses penyewaan kost menjadi lebih mudah dan cepat. Anda juga dapat melakukan pembayaran secara online dan pantau tagihan kost dengan aplikasi kami. </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="position-relative overflow-hidden w-100 bg-light" id="gallery">
            <div class="container-fluid">
                <div class="row overflow-scroll">
                    <div class="col-12">
                        <div class="row vw-100 px-0 py-vh-5 d-flex align-items-center scrollx">
                            <div class="col-md-2" data-aos="fade-up">
                                <img src="assets/img/webp/interior37.webp" class="rounded shadow img-fluid"
                                    alt="nice gallery image" width="512" height="341">
                            </div>

                            <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/webp/people1.webp" class="img-fluid rounded shadow"
                                    alt="nice gallery image" width="1164" height="776">
                            </div>

                            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                                <img src="assets/img/webp/people2.webp" class="img-fluid rounded shadow"
                                    alt="nice gallery image" width="844" height="1054">
                            </div>

                            <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                                <img src="assets/img/webp/interior29.webp" class="img-fluid rounded shadow"
                                    alt="nice gallery image" width="844" height="562">
                            </div>

                            <div class="col-md-2" data-aos="fade-up" data-aos-delay="800">
                                <img src="assets/img/webp/people23.webp" class="rounded shadow img-fluid"
                                    alt="nice gallery image" width="512" height="341">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container py-vh-4 w-100 overflow-hidden">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5">
                    <h3 class="py-5 border-top border-dark" data-aos="fade-right">Pendiri Kost Wisma</h3>
                </div>
                <div class="col-md-7" data-aos="fade-left">
                    <blockquote>
                        <div class="fs-4 my-3 fw-light pt-4 border-bottom pb-3">"Kost Wisma hadir untuk memberikan solusi penyewaan kost yang mudah dan nyaman dengan menggunakan teknologi terbaru. Kami percaya bahwa dengan perkembangan teknologi, kita dapat menciptakan ide-ide baru yang dapat mempermudah kehidupan kita. Kami hadir untuk memanfaatkan peluang ini dan memberikan pengalaman penyewaan kost yang inovatif dan terdepan bagi para penyewa."</div>
                        <img src="assets/img/webp/n.jpg" width="64" height="64"
                            class="img-fluid rounded-circle me-3" alt="" data-aos="fade">
                        <span><span class="fw-bold">Irfan Angkasa,</span>
                            Pengembang Web Kost Wisma</span>
                    </blockquote>
                </div>

            </div>
        </div>

        <div class="py-vh-6 bg-gray-900 text-light w-100 overflow-hidden" id="bergabung">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8 text-center" data-aos="fade">
                            <h2 class="display-6 mb-5">Kontak Kost</h2>
                            <p class="display-6 mb-5">Jika kamu memiliki pertanyaan atau masukan, jangan ragu untuk menghubungi kami.</p>
                            {{-- <ul>
                            <li>Email: <a href="mailto:contact@kostwisma.com">contact@kostwisma.com</a></li>
                            <li>WhatsApp: <a href="tel:+123456 7890">+123 456 7890</a></li>
                            <li>Instagram: <a href="https://www.instagram.com/kostwisma">@kostwisma</a></li>
                            <li>Facebook: <a href="https://www.facebook.com/KostWisma">Kost Wisma</a></li>
                            </ul> --}}
                        </div>
                        <div class="col-12">
                            <a href="https://wasap.at/x3TXSG" class="btn btn-warning btn-xl shadow me-3 mt-4"
                                data-aos="fade-down">Hubungi kami</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-light w-100 overflow-hidden" id="testimoni">
            <div class="container py-vh-6">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8 text-center">
                        <h2 class="display-6">Testimoni orang mengenai Kost Wisma</h2>
                        <p class="lead">banyak orang telah merasakan manfaat dan kemudahan memesan kost melalui Kost Wisma</p>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="row row-cols-1 row-cols-md-2 g-5 d-flex align-items-center">

                            <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-right">
                                <div class="card p-4 mt-3 border-0">
                                    <div class="card-body">
                                        <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                            </svg>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>"That service is really really good. And I don´t say that because they
                                                pay me a lot of money. I say that because they don´t pay me more money
                                                anymore if I don´t say it..."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <div>
                                                <span class="h6 fw-5">Jane Doemunsky</span><br>
                                                <small class="text-muted">COO, The Boo Corp.</small>
                                            </div>
                                            <img src="assets/img/webp/person9.webp" width="48" height="48"
                                                class="rounded-circle" alt="" data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card p-4 shadow mt-3 border-0" data-aos="fade-down">
                                    <div class="card-body">
                                        <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>"I really don´t get what they do. Something with Crypto, NFT´s, SaaS and
                                                Cyber Security. Maybe an App for Kids...? But they have this nice
                                                website...so who cares what they do as long as they are good at it."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <p class="card-text">
                                                <span class="h6 fw-5">Jenny Matrix</span><br>
                                                <small class="text-muted">Daughter of Col. John Matrix,
                                                    Commando.</small>
                                            </p>
                                            <img src="assets/img/webp/person3.webp" width="48" height="48"
                                                class="rounded-circle" alt="" data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card p-4 mt-3 border-0" data-aos="fade-left">
                                    <div class="card-body">
                                        <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>"I don´t know if they are good at what they do. But they have nice coffee
                                                and a shiny brand new startup office with bikes on the wall and all that
                                                stuff."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <p class="card-text">
                                                <span class="h6 fw-5">Rustin Cohle</span><br>
                                                <small class="text-muted">Detective, Somewhere in the swamps</small>
                                            </p>
                                            <img src="assets/img/webp/person8.webp" width="48" height="48"
                                                class="rounded-circle" alt="" data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </main>

    <footer>
        <div class="container small border-top">
            <div class="row py-5 d-flex justify-content-center">
                <div class="col-12 col-lg-6 col-xl-3 border-end p-5">
                    <address class="text-secondary mt-3">
                        <strong>Kost Wisma</strong><br>
                        Jln. Dodokan XIV No.1<br>
                        Pagesangan Bar., Kota Mataram Mataram, Nusa Tenggara Bar. 83115<br>
                        <abbr title="Phone">Phone:</abbr>
                        (123) 456-7890
                    </address>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 p-5">
                    <h3 class="h6 mb-3">Kost Wisma</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" aria-current="page" href="#booking">Cara Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#aboutus">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#gallery">Galeri Kost</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#bergabung">Bergabung Dengan Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#testimoni">Testimoni</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // values from 0 to 3000, with step 50ms
        });
    </script>

    <script>
        let scrollpos = window.scrollY
        const header = document.querySelector(".navbar")
        const header_height = header.offsetHeight

        const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
        const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")

        window.addEventListener('scroll', function() {
            scrollpos = window.scrollY;

            if (scrollpos >= header_height) {
                add_class_on_scroll()
            } else {
                remove_class_on_scroll()
            }

            console.log(scrollpos)
        })
    </script>

</body>

</html>
