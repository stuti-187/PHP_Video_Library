<!DOCTYPE html>
<html>
<head>
    <title>VIDCAFE</title>
</head>
<body>
<?php
$dbc = mysqli_connect("localhost","abc","stuti","test") OR die('Error: '.mysqli_connect_error());
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
} 
//echo "Connected successfully";
if(!empty($_POST["link"])) 
	{ 
			$link = $_POST["link"]; 
			 
				$data = mysqli_query($dbc,"INSERT INTO liked(link) VALUES ('$link')");
				
			if($data) 
				{ 
					echo "VIDEO ADDED TO FAVOURITES...";  
				} 
		
		else 
			{ 
				echo "VIDEO ALREADY IN FAVOURITES..."; 
			} 
		} 
mysqli_close($dbc);
?>
<form>
<input type="image" src="http://localhost/dhb/pic/512px-Thumbs_up_font_awesome.svg.jpg" height="35" width="35" >
</form>
</body>
</html>
