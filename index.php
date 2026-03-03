<!DOCTYPE html>
<html>
<?php require_once 'koneksi.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sadhana Computer</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.0"></script>
</head>

<body>
    <div id="preloader">
        <div class="preloader-content">
            <img src="assets/img/logo.PNG" alt="Sadhana Computer" class="preloader-logo">
            </div>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark header-bg fixed-top">
            <a class="navbar-brand" href="#">
                <img class="header-logo" src="assets/img/logo.PNG">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="home">
        <div class="jumbotron jumbotron-fluid jumbotron-img jumbotron-pad">
            <div class="container text-center">
                <h1 class="display-4 home-head" data-aos="fade-down" data-aos-duration="1000">
                    Welcome to Sadhana Computer!
                </h1>

                <p class="lead home-text mb-4" data-aos="fade-up" data-aos-duration="1200">
                    The place to find the most up-to-date electronic devices with affordable service prices.
                </p>

                <div data-aos="zoom-in" data-aos-delay="500">
                    <a href="#products" class="btn btn-primary btn-lg home-cta-btn">
                        See Our Products <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#contact" class="btn btn-outline-light btn-lg home-cta-btn-alt ml-3">
                        Contact Us
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section id="services" class="serv-bg py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="serv-head text-center mb-5" data-aos="fade-down">
                        <h3>We can provide you services such as,</h3>
                    </div>
                </div>
            </div>
            
            <?php include 'service_content.php'; ?>
        </div>
    </section>

    <section id="products" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pro-head">
                        <h3 class="pro-head-txt">Our Products</h3>
                    </div>
                </div>
            </div>

            <?php include 'products_content.php'; ?>
        </div>
    </section>

    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h2 class="display-4 font-weight-bold" id="about-title">About Us</h2>
                    <hr class="w-25 mx-auto bg-success">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-10 mx-auto text-center">
                    <p class="lead" id="about-lead-text">
                        Since its founding in 1999, Sadhana Computer has been committed to being your trusted partner
                        for all your technology needs. Our strengths lie in our experience, extensive network,
                        and focus on providing the best solutions.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 abt-texts" data-aos="fade-right">
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <div class="card abt-num shadow h-100 text-center">
                                <div class="card-body">
                                    <i class="fas fa-calendar-alt fa-2x mb-2 text-success"></i>
                                    <div class="abt-bla">Established Since 1999</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-4">
                            <div class="card abt-num shadow h-100 text-center">
                                <div class="card-body">
                                    <i class="fas fa-award fa-2x mb-2 text-success"></i>
                                    <div class="abt-bla">++20 Years of Experience</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-4">
                            <div class="card abt-num shadow h-100 text-center">
                                <div class="card-body">
                                    <i class="fas fa-network-wired fa-2x mb-2 text-success"></i>
                                    <div class="abt-bla">Has Extensive Connections</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-4">
                            <div class="card abt-num shadow h-100 text-center">
                                <div class="card-body">
                                    <i class="fas fa-tag fa-2x mb-2 text-success"></i>
                                    <div class="abt-bla">Best Experience & Prices</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 d-flex align-items-center justify-content-center" data-aos="fade-left"
                    data-aos-delay="200">
                    <div class="chart-container">
                        <canvas id="customerChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-bg">
        <div class="container-fluid px-5">
            <div class="row align-items-center">
                
                <div class="col-md-3 d-none d-md-block">
                    <div id="testi-left" class="testi-container">
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="form-serv">
                        <div class="form-head">
                            <h3>Rate Us</h3>
                        </div>
                        <div class="form-body">
                            <form method="POST" action="proses_rating.php">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="star-rating">
                                        <input type="radio" name="stars" id="star5" value="5"><label for="star5"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="stars" id="star4" value="4"><label for="star4"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="stars" id="star3" value="3"><label for="star3"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="stars" id="star2" value="2"><label for="star2"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="stars" id="star1" value="1"><label for="star1"><i class="fas fa-star"></i></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Share details of your own experience." name="comment" rows="3" required></textarea>
                                </div>
                                <div class="btn-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-none d-md-block">
                    <div id="testi-right" class="testi-container">
                        </div>
                </div>

            </div>
        </div>
        <?php include 'testimoni.php'; ?>
        <script>
            const allTestimonials = <?php echo json_encode($data_testi); ?>;
        </script>
    </section>

    <footer class="footer-bg">
        <div class="container py-4">
            <div class="row align-items-center justify-content-center g-0">
                <div class="col-md-5 d-flex justify-content-center justify-content-md-end">
                    <div class="map-clean-frame">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0532415508474!2d110.87144937504986!3d-7.569174792444922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17a13a070073%3A0x3e29868a79fedbfa!2sSadhana%20Computer!5e0!3m2!1sen!2sid!4v1772504197892!5m2!1sen!2sid"
                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <a href="https://maps.app.goo.gl/zQhex55KSKeTe29v6" target="_blank" class="map-touch-layer"></a>
                    </div>
                </div>

                <div class="col-md-5 d-flex flex-column justify-content-center ps-md-5">
                    
                    <div class="info-horizontal-row mb-3">
                        <div class="icon-bubble">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-description">
                            Jalan Raya Solo-Tawangmangu, Dagen, Jaten, Karanganyar, Jawa Tengah 57731
                        </div>
                    </div>

                    <div class="info-horizontal-row mb-3">
                        <div class="icon-bubble">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-description">
                            Open : 08.00 - 17.00 WIB
                        </div>
                    </div>

                    <a href="https://wa.me/6285725272990" target="_blank" class="info-horizontal-row wa-interaction">
                        <div class="icon-bubble">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="info-description">
                            Got any problems? Chat with us now!
                        </div>
                    </a>

                </div>
            </div>

            <hr class="footer-divider-glow mt-5 mb-4">

            <div class="row">
                <div class="col-12 text-center">
                    <p class="footer-copyright mb-0">Copyright © 2025 Sadhana Computer | Made by : Chaya Lintang Anarghya</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>

<?php $conn->close(); ?>
</html>