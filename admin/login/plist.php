<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- CSS Libraries -->
  
	<title>Project List</title>
	<link rel="stylesheet" href="1style.css">
	<script type="text/javascript" lang="javascript" src="./responsiveRegistaration.js"></script>
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
     
<body>
<?php
			if(isset($_SESSION['status']) && $_SESSION != '')
			{
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Dear Admin </strong> <?php echo $_SESSION['status']; ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
				unset($_SESSION['status']);
			}
		?>
<br>
<h1 align="center" style="font-size:x-large; color: white;"><b><u> Projects List </u></b></h1>
<div class="container">
<div class="col-lg-12">
<br>
<table  style="color: black; font-size:large;" id="tabledata" class=" table table-striped table-hover table-bordered" >

<tr class="bg-dark text-white text-center">

<th> #ID </th>
<th> Project Name </th>
<th> Supervior's Name </th>
<th colspan="2"> OPTIONS </th>
</tr >

<?php

include 'conn.php'; 
$q = "select * from product";

$query = mysqli_query($con,$q);

while($res = mysqli_fetch_array($query)){
?>
<tr class="text-center">
<td> <?php echo $res['id'];  ?> </td>
<td> <?php echo $res['PName'];  ?> </td>
<td> <?php echo $res['Sname'];  ?> </td>
<td>  <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"><button class="btn-danger btn">  Delete </button></a> </td>
<td>  <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"><button class="btn-primary btn">  Update </button></a> </td>

</tr>
<?php 
}
 ?>

</table>  
<br>
</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
$('#tabledata').DataTable();
}) 

</script>

</body>

</html>
