<?PHP
                        
                            $con = mysqli_connect('localhost','root');
                            mysqli_select_db($con,'project');
                        
                            //if($con){
                            //echo "connection succussful";
                            // }else{
                            //	echo "no connection";
                            //}
                            $q = "SELECT * FROM product";
                            $fire=mysqli_query($con,$q);
                            $query = mysqli_query($con,$q);

                            $num = mysqli_num_rows($query);
                                    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CP Constructions</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <h2><b> CP Constructions</b></h2>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>Mon - Sat, 8:00AM - 6:00PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+91-9916568028 / +91-8748840267</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p><a href="mailto: jarvisrider@gmail.com" style="color:black">lakshataraassociate@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.html" class="nav-item nav-link">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="team.html" class="nav-item nav-link">Partners</a>
                                <a href="portfolio.php" class="nav-item nav-link active">Project</a>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a href="admin/login/index.html" class="btn">Sign In</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Our Projects</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <?php
        if($num > 0){
            while($data = mysqli_fetch_array($query))
                {
                    $items=$data['images'];
                    $res=explode(" ", $items);
                    
                    $value=$data['images'];
                   
                    ?>     
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <h2><?php echo $data['PName'];  ?></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <p style="color:white;"><b>Images -</b></p>
                        <?php    
                        for ($x=0; $x < count($res)-1; $x++)
                         {?>

                            <img src="./admin/login/upload/<?php echo $res[$x]. "";?>" height="180px" width="253px">
                        <?php   
                        }
                          
                            ?>
                    </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                     <div class="control-group">
                                     <p style="color:white;"><b>Project Name -  <?php echo $data['PName'];?></b></p>
                                        
                                    </div>
                                    <div>
                                        <p style="color:white;">Supervisior's Name -  <?php echo $data['Sname'];  ?></p>
                                    </div>
                                    <div class="control-group">
                                    <p style="color:white;">Date of Complition -  <?php echo $data['doc'];  ?></p>
                                    </div>
                                    <div class="control-group">
                                    <p style="color:white;">Estimated Cost -  <?php echo $data['ECost'];  ?></p>
                                    </div>
                                    <div class="control-group">
                                    <p style="color:white;">Description -</p> 
                                    <p style="color:white;"> <?php echo $data['about'];  ?></p>
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php		
                
        }
        ?>
           <?php
        }
            else{
                echo"<center> <b> Opps!! Looks like we are working on our projects !!!</b> </center>";
            }
            ?>
            <!-- Portfolio End -->
			
			
			<!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Shop no 63, Star Tower, Khanapur Road Opposite Canara Bank, Tilakwadi, Belgaum, 590006</p>
                                <p><i class="fa fa-phone-alt"></i>+91-9916568028 / +91-8748840267</p>
                                <p><i class="fa fa-envelope"></i><a href="mailto: jarvisrider@gmail.com" style="color:white">lakshataraassociate@gmail.com</a></p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Civil Work</a>
                                <a href="">Interior Design</a>
                                <a href="">Fabrication</a>
                                <a href="">Architecture</a>
                                <a href="">Water Proofing</a>
								<a href="">Painting</a>
                            </div>
                        </div>
						<div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="about.html">About Us</a>
                                <a href="Contact.html">Contact Us</a>
                                <a href="team.html">Our Team</a>
                                <a href="portfolio.php">Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">CP Constructions</a>, All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
