<?php
session_start();
// Change this to your connection info.
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'project';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
else{
	if ( !isset($_POST['username'], $_POST['password']) )
		{
		// Could not get the data that should have been sent.
		exit('Please fill both the username and password fields!');
		}
	else
		{
			if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) 
			{
				// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
				$stmt->bind_param('s', $_POST['username']);
				$stmt->execute();
				$stmt->store_result();
				if ($stmt->num_rows > 0)
					{
						$stmt->bind_result($id, $password);
						$stmt->fetch();
							if ($_POST['password'] === $password) 
							{
								session_regenerate_id();
								$_SESSION['loggedin'] = TRUE;
								$_SESSION['name'] = $_POST['username'];
								$_SESSION['id'] = $id;
								header('Location: dash1.php');
							} 
							else {
									// Incorrect password
									echo 'Incorrect username and/or password! 123';
								}
					} 
				else {
						// Incorrect username
						echo 'Incorrect username and/or password!';
						}


			$stmt->close();
			}
		}
	}
?>
