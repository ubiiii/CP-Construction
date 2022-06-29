<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?><!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
        $(document).ready(function()
        {
        $('form').ajaxForm(function()
        {
        alert("Uploaded SuccessFully");
        });
        });
        function preview_image()
        {
        var total_file=document.getElementById("images").files.length;
        for(var i=0;i<total_file;i++)
        {
        var img = $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' height='300px' width=' 540px'><br><br>");
        $(".btnsave").click(function(){
            $("img").addClass('d_none');
        });
        }
        }
        </script>
        <style>
        body {
            background-image: url('back2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }
        </style>  
        <style>
            .d_none{
                display: none;
            }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" conte>
    <!DOCTYPE html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS Libraries -->
  
	<title>Dashboard </title>
	<link rel="stylesheet" href="1style.css">
    </head>
       
    <body>
	<div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="logo">
                            <br><a href="dash1.php">
                                <h2 style="color: white; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">CP Constructions Admin Panel</h2>
                                </a><!-- <img src="img/logo.jpg" alt="Logo"> -->
                        </div>
                    </div>
                   
                </div>
                    </div>
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
                                <a href="form.php" class="nav-item nav-link active">Add Project</a>
                                <a href="plist.php" class="nav-item nav-link active">Project List</a>
                            </div>
                            <a href="logout.php" style="color:white"><button class="btn">Sign Out </button></a>
                            </div>
                        </div>
                    </nav>
                </div>
				<br>
			<p align="center" style="font-size:x-large; color: white;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
				<b><u>Welcome To CP Constructions...</u></b>
			</p>
			<div class="container">
            <p> Dear Admin, You can do Following operations in this admin panel..<br>
            <br>
                1.Upload New Projects with the help of <b>"Add Project"</b> feature in navigation menu.<br>
                2.Update or Edit old projects with <b>"Update"</b> option in "Project List" feature in navigation menu.<br>
                3.Delete projects with <b>"Delete"</b> option in "Project List" feature in navigation menu.<br>
                4.The changes you made with projects like Update/Delete/Inserting will be <b>affected on Font end of the website</b> (Project Section of the website).
            </p>    
        </div>
        <br>
        <br>
        <br>
        <br>
        
</body>
</html>
