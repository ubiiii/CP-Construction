<?php
session_start();
include 'conn.php';
$con=mysqli_connect('localhost','root','','project');
$id = $_GET['id'];

$query= " DELETE FROM `product` WHERE id =$id ";
$query_run=mysqli_query($con, $query);

if($query_run)
	{
		//echo "yes";
		
		$_SESSION['status']=" Project $id Deleted Succesfully!!";
		header("Location: plist.php");
		

	}
	else
	{
		//echo "no";
		$_SESSION['status']="Not Deleted Succesfully!!";
		header("Location: plist.php");
		
	}	

?>  