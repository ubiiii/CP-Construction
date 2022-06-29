<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
	<div class="col-lg-9">
                        <div class="logo">
                                <h2>CP Constructions Admin Panel</h2>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                        </div>
                    </div>
		<div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
								<a href="dash1.php" class="nav-item nav-link active"> Dashboard</a>
                                <a href="form.php" class="nav-item nav-link active">Add PRoject</a>
                                <a href="" class="nav-item nav-link active">Edit PRoject</a>
                                <a href="" class="nav-item nav-link active">Delete Project</a>
                                <a href="" class="nav-item nav-link active">Change Password</a>
                            </div>
                                <a href="logout.php"><span style="color:white">Sign Out</span></a>
                            </div>
		</nav>
	</body>
</html>