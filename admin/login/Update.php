<?php

 include 'conn.php';
 $id = isset($_GET['id']) ? $_GET['id'] : '';
 $q = "select * from product  where id= '$id'";

 $query = mysqli_query($con,$q);
 $res = mysqli_fetch_array($query);


?>

<html lang="en" dir="ltr">
  <head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="1style.css">
    <meta name="viewport">
    
        <style>
        body {
            background-image: url('back2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        </style>  
        <style>
            .d_none{
                display: none;
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
	<!-- CSS Libraries -->
  
	<title>CP Contructions</title>
	
    </head>
       
    <body>
    
	<div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="logo">
                            <br>
                                <h2  style="color: white; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">CP Constructions Admin Panel</h2>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
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
                            <a href="logout.php" style="color:white"><span><button class="btn">Sign Out </button></span></a>
                            </div>
                    </div>
                    </nav>
     </div>
     <br>
     <h1 align="center" style="font-size:x-large; color: white;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><b><u>Update Project Details</u></b></h1>
	<form action="up.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="align-left">
                    <label for="pname">&nbsp;&nbsp;&nbsp;Project Name:</label>
                </div>
                <div class="align-right">
                    <label for="Sname">&nbsp;&nbsp;&nbsp;Supervisor's Name:</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $res['id'];?>">
                <div class="align-container-left">
                    <input type="text" value="<?php echo $res['PName'];?>" id="Pname" name="PName" placeholder="Enter Project Name"  />
                </div>
                <div class="align-container-right">
                    <input type="text" value="<?php echo $res['Sname'];?>" id="Sname" name="SName" placeholder="Enter Supervisor's name"  />
                </div>
                
            </div>
            <div class="row">
                <div class="align-left">
                    <label for="email">&nbsp;&nbsp;&nbsp;Estimated Cost:</label>
                </div>
                <div class="align-right">
                    <label for="dob">&nbsp;&nbsp;&nbsp;Date Of Project Completion:</label>
                </div>
                <div class="align-container-left">
                    <input type="text" value="<?php echo $res['ECost'];?>" id="Ecost" name="ECost" placeholder="Enter Estimated Cost"  />
                </div>
                <div class="align-container-right">
                    <input type="Date" value="<?php echo $res['doc'];?>" id="doc" name="doc">
                </div>
            </div>
            <div class="row">
                <div class="align-left">
                    <label for="address">&nbsp;&nbsp;&nbsp;About Project</label>
                </div>
                <div class="col-90">
                    <input type="text" name="about" value="<?php echo $res['about'];?>"id="about" size=" 50">
                </div>
            </div>
            <br>
            <p><b>Note:- Dear Admin to make major changes in project like <i>Adding/Deleting Images</i> you have to Delete this Project and use add project to reupload the project...
        </b><br>
			<div class="save">
            <center><button class="btn btn-success" type="submit" name="submit"> Update </button><br>
            
            </center></div>  
	
        </div>  
		
		</form>
      
</body>
</html>