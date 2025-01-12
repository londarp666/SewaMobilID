<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Web Persewaan Mobil" />
    <meta name="author" content="londar pamungkas" />
    <title>SewaMobil | ID</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .masthead {
            background: linear-gradient(to right, #007bff, #6610f2);
            padding: 100px 0;
        }
        .masthead h1 {
            font-size: 3.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .masthead p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        .portfolio-item {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .portfolio-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }
        .footer h4 {
            margin-bottom: 20px;
        }
        .footer a {
            color: #f8f9fa;
            transition: color 0.3s;
        }
        .footer a:hover {
            color: #007bff;
        }
    </style>
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">SewaMobil ID</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#mobil">CATALOG</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#tentang">ABOUT</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#hubungi">CONTACT</a></li>
                    @if (Auth::check())
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="/dashboard">Dashboard</a>
                    </li>
                    @else
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('auth') }}">Login </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <img class="masthead-avatar mb-5" src="https://cdn-icons-png.flaticon.com/512/2389/2389215.png" alt="Photo Mobil" />
            <h1 class="masthead-heading text-uppercase mb-0">SewaMobil ID</h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <p class="masthead-subheading font-weight-light mb-0">Sewa Mobil Terlengkap & Termurah Se-Indonesia</p>
        </div>
    </header>
    <section class="page-section portfolio" id="mobil">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Daftar Mobil</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#mobil1">
                        <img class="img-fluid" src="https://img.remediosdigitales.com/4a66ff/toyota-avanza-2022_6/1366_2000.jpg" alt="Toyota Avanza" />
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#mobil2">
                        <img class="img-fluid" src="https://www.automobilesreview.com/gallery/2015-honda-hr-v-suv/2015-honda-hr-v-suv-01.jpg" alt="Honda HR-V" />
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#mobil3">
                        <img class="img-fluid" src="https://img.remediosdigitales.com/1a1ba9/suzuki-ertiga-2023-precio-mexico_/1024_2000.jpg" alt="Suzuki Ertiga" />
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#mobil4">
                        <img class="img-fluid" src="https://imgcdnblog.carmudi.com.ph/wp-content/uploads/2021/11/23153412/Daihatsu-Xenia-1.3-X.jpg?resize=700x333" alt="Daihatsu Xenia" />
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#mobil5">
                        <img class="img-fluid" src="https://cdn.euroncap.com/media/72831/nissan-x-trail.png" alt="Nissan X-Trail" />
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#mobil6">
                        <img class="img-fluid" src="https://images.carexpert.com.au/resize/3000/-/app/uploads/2022/12/2023-mitsubishi-pajero-sport-7.jpeg" alt="Mitsubishi Pajero Sport" />
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-primary text-white mb-0" id="tentang">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-white">Tentang</h2>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">SewaMobil ID adalah perusahaan yang bergerak di bidang persewaan mobil.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">Dengan pilihan mobil terlengkap & termurah se-Indonesia.</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="/sewa">
                    <i class="fas fa-car me-2"></i>
                    Sewa Sekarang!
                </a>
            </div>
        </div>
    </section>
    <section class="page-section" id="hubungi">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Hubungi Kami</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form id="contactForm">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nama Lengkap</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Nama wajib diisi.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Email wajib diisi.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Nomor Telepon</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor telepon wajib diisi.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Pes an</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Pesan wajib diisi.</div>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Formulir Berhasil dikirim!</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Gagal mengirimkan pesan!</div>
                        </div>
                        <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Lokasi Kami</h4>
                    <p class="lead mb-0">
                        Jl. Mawar No. 123
                        <br />
                        Jakarta, Indonesia
                    </p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Ikuti Kami di Media Sosial</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-youtube"></i></a>
                </div>
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Tentang Kami</h4>
                    <p class="lead mb-0">
                        Kami adalah perusahaan persewaan mobil yang menyediakan berbagai jenis mobil untuk disewakan. Kami menawarkan harga yang kompetitif dan pelayanan yang memuaskan.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Hak Cipta &copy; SewaMobil ID</small></div>
    </div>

    <div class="portfolio-modal modal fade" id="mobil1" tabindex="-1" aria-labelledby="mobil1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Toyota Avanza</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="https://img.remediosdigitales.com/4a66ff/toyota-avanza-2022_6/1366_2000.jpg" alt="Toyota Avanza" />
                                <p class="mb-4">Toyota Avanza adalah salah satu mobil MPV terpopuler di Indonesia, ideal untuk keluarga atau perjalanan kelompok. Dengan ruang kabin yang luas dan kenyamanan yang tinggi, Avanza cocok untuk perjalanan jarak jauh maupun sehari-hari.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Tutup Jendela
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="mobil2" tabindex="-1" aria-labelledby="mobil2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Honda HR-V</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="https://www.automobilesreview.com/gallery/2015-honda-hr-v-suv/2015-honda-hr-v-suv-01.jpg" alt="Honda HR-V" />
                                <p class="mb-4">Honda HR-V adalah SUV yang menawarkan desain modern dan performa yang baik. Cocok untuk berbagai kebutuhan, HR-V memberikan kenyamanan dan fleksibilitas, membuatnya menjadi pilihan tepat untuk perjalanan di kota maupun luar kota.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Tutup Jendela
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="mobil3" tabindex="-1" aria-labelledby="mobil3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Suzuki Ertiga</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="https://img.remediosdigitales.com/1a1ba9/suzuki-ertiga-2023-precio-mexico_/1024_2000.jpg" alt="Suzuki Ertiga" />
                                <p class="mb-4">Suzuki Ertiga adalah MPV yang cocok untuk keluarga, menawarkan kapasitas hingga tujuh penumpang. Dikenal dengan efisiensi bahan bakar yang baik dan interior yang nyaman, Ertiga menjadi pilihan yang sangat baik untuk perjalanan bersama keluarga.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Tutup Jendela
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="mobil4" tabindex="-1" aria-labelledby="mobil4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Daihatsu Xenia</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="https://imgcdnblog.carmudi.com.ph/wp-content/uploads/2021/11/23153412/Daihatsu-Xenia-1.3-X.jpg?resize=700 ```html
x333" alt="Daihatsu Xenia" />
                                <p class="mb-4">Daihatsu Xenia adalah mobil MPV yang populer di kalangan keluarga. Dengan desain yang fungsional dan interior yang luas, Xenia menawarkan kenyamanan dalam perjalanan panjang dan merupakan pilihan yang ekonomis.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Tutup Jendela
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="mobil5" tabindex="-1" aria-labelledby="mobil5" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Nissan X-Trail</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="https://cdn.euroncap.com/media/72831/nissan-x-trail.png" alt="Nissan X-Trail" />
                                <p class="mb-4">Nissan X-Trail adalah SUV yang menawarkan performa off-road dan kenyamanan yang tinggi. Dikenal dengan fitur keselamatan yang canggih, mobil ini sangat cocok untuk petualangan keluarga di alam terbuka.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Tutup Jendela
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="mobil6" tabindex="-1" aria-labelledby="mobil6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mitsubishi Pajero Sport</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="https://images.carexpert.com.au/resize/3000/-/app/uploads/2022/12/2023-mitsubishi-pajero-sport-7.jpeg" alt="Mitsubishi Pajero Sport" />
                                <p class="mb-4">Mitsubishi Pajero Sport adalah SUV tangguh yang siap untuk segala jenis perjalanan. Dikenal dengan kenyamanan dan kemampuannya di medan berat, Pajero Sport adalah pilihan ideal untuk perjalanan jauh dan off-road.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Tutup Jendela
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>