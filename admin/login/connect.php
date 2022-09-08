<?php
session_start();
$error = array();
$conn=mysqli_connect("localhost","root","","project");
$mysqli = new mysqli('localhost', 'root', '', 'project');
if (isset($_POST['save_img'])) {
	$PName=$_POST['PName'];
	$Sname=$_POST['Sname'];
	$ECost=$_POST['ECost'];
	$doc=$_POST['doc'];
	$about=$_POST['about'];
	 $file='';
	 $file_tmp='';
	 $location="upload/";
	 $data='';
	 foreach($_FILES['images']['name'] as $key=>$val)
	{
	 $file=$_FILES['images']['name'][$key];
	 $file_tmp=$_FILES['images']['tmp_name'][$key];
	 move_uploaded_file($file_tmp,$location.$file);
	 $data .=$file." ";
	}
	$query="INSERT into product (PName, Sname, ECost, doc, about, images) values('$PName','$Sname','$ECost','$doc','$about','$data')";
	$fire=mysqli_query($conn,$query);
	if($fire)
		{
			$_SESSION['status']="Project Saved Successfully";
			header('Location: plist.php');
		}
		else{
			$_SESSION['status']= "Ops!! Some Problem Occured....";
			header('Location: plist.php');
		}
}

// use following for displaying data
//SELECT * FROM products LEFT JOIN products_images ON products.id=products_images.id;


