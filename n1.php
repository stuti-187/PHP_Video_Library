<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>-->
<?php
   $dbc = mysqli_connect("localhost","abc","stuti","dbproject") OR die('Error: '.mysqli_connect_error());

   if(!empty($_POST['query']))
	{
	$search= $_POST['query'];
	//echo "vzvxgs";  
	//echo $search;
	
    //mysql_select_db("stuti") or die(mysql_error());
    /* tutorial_search is the name of database we've created */

  // $value= mysqli_real_escape_string($dbc,trim('$search'));
   $find_liked= mysqli_query($dbc,"SELECT * FROM 'videos' WHERE 'vname' LIKE'%$search%'") ;
  // while($row = mysql_fetch_assoc($dbc,$find_liked))
	  
 $row = mysqli_fetch_array($find_liked);
   if($row!=null)
   {
$name= $row['vname'];
echo "<a href='#'</a>$name<br/>";  

  }
	}
/*
<?php
$dbc = mysqli_connect("localhost","abc","stuti","dbproject") OR die('Error: '.mysqli_connect_error());
 if(!empty($_POST['userid'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
 {
    $userid = $_POST['userid'];
	$password = $_POST['pass'];	 
 $query = mysqli_query($dbc,"SELECT * FROM users where user_id = '$userid' AND password = '$password'") or die('Error');
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