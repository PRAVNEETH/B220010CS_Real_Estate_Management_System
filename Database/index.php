<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--	Title
	=========================================================-->
<title>Homex - Real </title>
</head>
<body>

<!--	Page Loader  -->
<!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
<!--	Page Loader  -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
		
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/banner/04.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mb-4"><span class="text-primary">Find</span><br>
                                Your dream house</h1>
                            <form method="post" action="propertygrid.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
                                                <option value="">Select Type</option>
												<option value="appartment">Apartment</option>
												<option value="house">House</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype">
                                                <option value="">Select Status</option>
												<option value="sale">Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="Enter City or Enter State" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-primary w-100">Search Property</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Selling Service</a></h5>
                                <p>Let us handle the sale of your property. Our expert team ensures a seamless selling experience, connecting you with potential buyers.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-for-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Rental Service</a></h5>
                                <p>Our rental services simplify property hunting. Find your ideal rental property with ease and get support throughout the leasing process.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Property Listing</a></h5>
                                <p>Explore our extensive property listings. From homes to commercial spaces, discover diverse real estate options tailored to your needs.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Legal Investment</a></h5>
                                <p>Trust our legal experts for property-related matters. We provide guidance on contracts, regulations, and ensure smooth transactions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>Choose us because we have a team of experienced real estate professionals who know the market inside and out. With years of experience in the industry, we have a deep understanding of local neighborhoods, property values, and market trends.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Personalized Service</h5>
										<p>Choose us for the personalized service and attention to detail we provide. We believe that every client's needs are unique, and we tailor our approach to meet your specific goals.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Results That Matter</h5>
										<p>Our track record of successful transactions, satisfied clients, and market expertise speaks for itself. We are dedicated to helping you achieve your real estate goals, whether it's finding the perfect home, selling at the best price, or making strategic investments.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	why choose us -->
		
		<!--	How it work -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Potential buyers engage in discussions and negotiations with the seller, covering price, terms, contingencies, and requirements. Effective communication and negotiation skills are vital for a successful agreement.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                            <p>After negotiations, a comprehensive files review begins. It scrutinizes property documentation, including title deeds, history, dues, and encumbrances to ensure legality and resolve any issues with legal experts' help.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                            <p>Transfer ownership, complete legal formalities, and become the property owner. Professional guidance is recommended for a smooth process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Popular Places</h2></div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/1.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='gujarat'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/2.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='Uttar Pradesh'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/3.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='Karnataka'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/4.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='Maharashtra'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="full-row">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="content-sidebar p-4">
							<div class="mb-3 col-lg-12">
								<h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonial</h4>
									<div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-primary">
								
										<div class="item">
											<div class="p-4 bg-primary down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i>	ShinState made my life easy. It helped me with the search for my first ever investment i.e. 1BHK apartment in Lanka. Thanks to the team for providing relevant tools like EMI calculator and smart search.<i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-primary d-table text-capitalize">shinobi</span> <span class="text-capitalize">Admin</span>
											</div>
										</div>

                                        <div class="item">
											<div class="p-4 bg-primary down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i>I was looking for a flat in Varanasi and ShinState website helped me get one smoothly. I could choose not just the property but also check what others had to say about the area. The site is simple and user friendly.<i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-primary d-table text-capitalize">disha</span> <span class="text-capitalize">Client</span>
											</div>
										</div>

                                        <div class="item">
											<div class="p-4 bg-primary down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i>The constant touch through other true calls really surprised me.They sent their officer to get the photographs of my shop & promptly posted all the pics which helped me in getting the tenant fast. Hats off to ShinState.<i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-primary d-table text-capitalize">aryan</span> <span class="text-capitalize">Builder</span>
											</div>
										</div>

                                        <div class="item">
											<div class="p-4 bg-primary down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i>I moved to Varanasi from Delhi early this year and I looked online for a suitable apartment for rent in areas near my workplace in Andheri. Thanks ShinState for giving me so many options with Travel Time search.<i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-primary d-table text-capitalize">balwant</span> <span class="text-capitalize">Client</span>
											</div>
										</div>
									</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
		<?php include("include/footer.php");?>
        <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>