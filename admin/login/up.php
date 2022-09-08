<?php
session_start();
$error = array();
$conn=mysqli_connect("localhost","root","","project");

if(isset($_POST['submit'])) 
{	$id = $_POST['id'];
	$PName = $_POST['PName'];
	$SName = $_POST['SName'];
	$ECost = $_POST['ECost'];
	$doc = $_POST['doc'];
	$about = $_POST['about'];
	//updating

	$query="UPDATE product SET PName='$PName',SName='$SName',ECost='$ECost',doc='$doc',about='$about' WHERE id='$id' ";
	$query_run= mysqli_query($conn,$query);
	


	if($query_run)
	{
		echo "yes";
		$_SESSION['status']="Project $id Updated Succesfully!!";
		header("Location: plist.php");

	}
	else
	{
		echo "no";
		$_SESSION['status']="Not $id Updated Succesfully!!";
		header("Location: plist.php");
		
	}	
}

?>
