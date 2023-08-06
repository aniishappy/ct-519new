<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Final 852 My Hobbies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <?php 
        include ('navbar.php');
    ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">MY HOBBIES</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">MY</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">HOBBIES</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <div class="container-fluid py-5 d-flex flex-column align-items-center justify-content-center" >
    <h2>ADD HOBBIES</h2>
    <form action="add_hobbies.php" method="POST" enctype="multipart/form-data">
        <label for="sequence">NO : </label>
        <input type="number" id="sequence" name="sequence" required><br>

        <label for="image">UPLOAD PICTURE:</label>
        <input type="file" id="image" name="image" required><br>

        <label for="name">HOBBIES NAME:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="description">DESCRIPTION :</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="SAVE">
    </form>
    </div>
    <div class="container-fluid py-5 d-flex flex-column align-items-center justify-content-center" >
    
            <h1 class="display-4 text-uppercase text-center mb-5">MY DRAWING</h1>
    <?php 
        include ('hobbies1.php');
    ?>
</div>
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">IN MY FREETIME</h1>
            <div class="row">
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4"> <span class="d-block text-body">READING</span></h4>
                        <p class="m-0">Reading stimulates brain activity, reduces stress, and enhances focus and concentration on various subjects.</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4"> <span class="d-block text-body">PLAYING</span></h4>
                        <p class="m-0">Playing games helps develop emotional regulation skills. It enhances focus and memory.</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4"> <span class="d-block text-body">DRAWING</span></h4>
                        <p class="m-0">Art brings about profound emotions, relieving stress and the complexities that preceded it. </p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-regular fa-eye text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4"> <span class="d-block text-body">SLEEPING</span></h4>
                        <p class="m-0">Sleeping aids in the relaxation of the body's organ systems, particularly the heart and blood vessels.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

<!-- Portfolio Start 
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">MY DRAWING</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star text-primary mr-2"></i>ALL
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".first">
                            <i class="fa fa-laptop-code text-primary mr-2"></i>SOMETIME FINISH
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".second">
                            <i class="fa fa-mobile-alt text-primary mr-2"></i>SOMETIME NO
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/4.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/3.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/2.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/6.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/6.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/5.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/5.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/7.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/7.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Portfolio End -->

    <!-- Footer Start -->
    <?php 
        include('footer.php');
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>