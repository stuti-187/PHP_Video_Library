<?php
$dbc = mysqli_connect("localhost","abc","stuti","dbproject") OR die('Error: '.mysqli_connect_error());
 if(!empty($_POST['searchvalue'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
 {
    $searchvalue= $_POST['searchvalue'];
	//$password = $_POST['pass'];	 
 $query = mysqli_query($dbc,"SELECT * FROM users where vname= '$searchvalue'") or die('Error');
 //echo $query;
 $row = mysqli_fetch_array($query); 
 if($row==null)
 {
	 echo "Wrong Password";
 }
 else
 {
		echo "Succesful";
 }
 }
 /*if(!empty($row['userid']) AND !empty($row['pass'])) 
 { $_SESSION['userid'] = $row['pass'];
 echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
 } else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } } */

?>