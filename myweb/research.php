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
        <h1 class="display-3 text-uppercase mb-3">RESEARCH</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">MY</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">RESEARCH</h6>
        </div>
    </div>
    <!-- Page Header Start -->


     <!-- About Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="img/8.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h4 class="display-4 text-uppercase mb-4">Integrating deep learning and rule-based systems into a smart devices
decision support system for visual inspection in production</h4>
                    <h6 class="text-uppercase text-primary mb-3">As one of the most impactful emerging technologies, big data analytics and its related applications are powering
the development of information technologies and are significantly shaping thinking and behavior in today's
interconnected world.</h6>
                    <p class="mb-4"> Due to the increasing implementation of cyber physical systems and the internet of things in industry, there is a trend towards flexible, multivariant
production with a very high degree of automation to strengthen the resilience of the company. Each variant is subject to high quality
requirements that must be checked to ensure quality. A common means for this is quality assurance through visual inspections, which are carried
out manually. Visual inspections are time-consuming yet prone to wrong decisions, since they are subjective, inconsistent, and susceptible to
uncertainties. The quality of the inspection relies heavily on the experience of the personnel. This work addresses this issue through the concept
and design of a system for objective decision making in visual inspection by integrating Deep Learning (DL) models with a Belief Rule Based
Expert System (BRBES) inside a smart devices application. Smart devices like tablets and smartphones serve to generate information by recording
and evaluating image material of the components being inspected. Based on this data, DL models are trained and used to classify defects on new
image material to automate part of the inspection process. Furthermore, smart devices serve to provide context-dependent decision
recommendations in the visual inspection process, which were calculated by the BRBES with the inclusion of uncertainties. The knowledge base
of the BRBES is fed by the expert knowledge of experienced visual inspectors using knowledge elicitation techniques. The system
can enable optimized and objectified visual inspection based on the data-driven and knowledge-driven approaches used. </p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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