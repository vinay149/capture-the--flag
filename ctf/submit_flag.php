<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername ="localhost";
$username = "root";
$password = "";
$database="game_server";
$tbl_name="flag";
$conn=mysql_connect($servername , $username , $password);
if(!$conn)
{
	echo "DATABASE ERROR";
}
$db=mysql_select_db($database, $conn);
session_start();

// Include database connection settings
if($db)
{
	$a=$_POST['team_no'];
	$b = $_POST['flag'];
	
	$login = mysql_query("SELECT * FROM flag WHERE  flag_1 = '$b'");
	
	if (mysql_num_rows($login) == 1) { 
	$query=" UPDATE score SET service_1 = 100 WHERE team_no ='$a';";
    $result=mysql_query($query);
	$e1 = mysql_query("select service_1 where team_no = '$a';");
	$e2 = mysql_query("select service_2 where team_no = '$a';");
	$e3 = mysql_query("select service_3 where team_no = '$a';");
	$q=" UPDATE score SET total = service_1 + service_2 + service_3 WHERE team_no ='$a';";
    $r=mysql_query($q);
	
 echo "<h1>connected</h1>";
 header('Location: scoreboard.php'); 
 }
 
$login = mysql_query("SELECT * FROM flag WHERE  flag_2 = '$b'");
	
	if (mysql_num_rows($login) == 1) {
		
    $query=" UPDATE score SET service_2 = 100 WHERE team_no ='$a';";
    $result=mysql_query($query);
	$e1 = mysql_query("select service_1 where team_no = '$a';");
	$e2 = mysql_query("select service_2 where team_no = '$a';");
	$e3 = mysql_query("select service_3 where team_no = '$a';");
	
	 $q=" UPDATE score SET total = service_1 + service_2 + service_3 WHERE team_no ='$a';";
    $r=mysql_query($q);
	
	echo "<h1>connected</h1>";
	header('Location: scoreboard.php');  
 
 }
 
 $login = mysql_query("SELECT * FROM flag WHERE  flag_3 = '$b'");
	
	if (mysql_num_rows($login) == 1) {
    
	$query=" UPDATE score SET service_3 = 100 WHERE team_no ='$a';";
    $result=mysql_query($query);
	$e1 = mysql_query("select service_1 where team_no = '$a';");
	$e2 = mysql_query("select service_2 where team_no = '$a';");
	$e3 = mysql_query("select service_3 where team_no = '$a';");
	$q=" UPDATE score SET total = service_1 + service_2 + service_3 WHERE team_no ='$a';";
    $r=mysql_query($q);
	
 echo "<h1>connected</h1>";
 header('Location: scoreboard.php'); 
 }
}
if (mysql_num_rows($login) != 1)
{
	header('Location: error.html'); 
}
?>
