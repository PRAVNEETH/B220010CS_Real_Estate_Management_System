<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Homex template">
    <meta name="keywords" content="">
    <meta name="author" content="Unicoder">
    <link rel="shortcut icon" href="images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Real Estate Template</title>
</head>

<body>

    <!--	Page Loader -->
    <!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div> -->

    <div id="page-wrapper">
        <div class="row">
            <?php include("include/header.php"); ?>

            <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>About US</b></h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Balaji-RealEstates Limited</h3>
                        </div>
                    </div>
                    <div class="row about-company">
                        <div class="col-md-12 col-lg-7">
                            <div class="about-content">
                                <p>Balaji-RealEstates Limited : Pioneering Excellence in Real Estate Web Solutions. Balaji-RealEstates Limited stands as a formidable force in the realm of real estate, redefining industry standards through its innovative and comprehensive web solutions. Headquartered in Ahmedabad, Gujarat, India, Balaji-RealEstates Limited has emerged as a real estate giant dedicated to providing cutting-edge technology to elevate the digital presence of real estate businesses.</p>

                                <p>With a rich portfolio of services, Balaji-RealEstates Limited is positioned as the go-to partner for all IT needs within the real estate sector. The company's expertise encompasses a wide spectrum, ranging from bespoke web development and PHP solutions to leveraging ASP.NET and various programming languages. This real estate powerhouse excels in delivering end-to-end web solutions, including web design, dynamic PHP development, impactful e-commerce solutions, multimedia integration, and print publication services.</p>
                                <p>
                                    What sets Balaji-RealEstates Limited apart is its unwavering dedication to innovation, delivering high-quality, cost-effective solutions that cater specifically to the unique needs of the real estate industry. The company's proven expertise, combined with a nationwide reach, positions it as a trusted partner for real estate businesses across India.
                                </p>
                                <p>
                                    As a real estate giant, Balaji-RealEstates Limited continues to empower clients through transformative web experiences, enabling them to showcase their properties effectively and connect with a broader audience. By choosing Balaji-RealEstates Limited, real estate businesses gain not only a technological ally but a strategic partner committed to their success in the digital landscape.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5 mt-5">
                            <div class="about-img">
                                <img src="admin/upload/condos-pool.png" alt="about image">
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <?php include("include/footer.php"); ?>
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>