
<?php
$dbc = mysqli_connect("localhost","abc","stuti","test") OR die('Error: '.mysqli_connect_error());
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
} 
//echo "Connected successfully";
if(!empty($_POST["link"])) 
	{ 

			$link = $_POST["link"]; 
			$userid=$_POST["user_id"];
			$username=$_POST["username"];
				
				$data = mysqli_query($dbc,"INSERT INTO profile(user_id, username, favourites) VALUES ('$userid','$username','$link')");
				
			if($data) 
				{ 
					echo "VIDEO ADDED TO FAVOURITES...";  
				} 
		
			/*else 
			{ 
				echo "VIDEO ALREADY IN FAVOURITES..."; 
			} */
		} 
mysqli_close($dbc);
?>