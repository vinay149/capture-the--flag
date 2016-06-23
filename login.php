<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername ="localhost";
$username = "root";
$password = "";
$database="user";
$tbl_name="login";
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
	$a=$_POST['username'];
	$p = $_POST['password'];
	$login = mysql_query("SELECT * FROM login WHERE (user = '" .     mysql_real_escape_string($_POST['username']) . "') and (password = '" .     mysql_real_escape_string($_POST['password']) . "')");
	
	if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['username'] = $_POST['username'];
// Jump to secured page
 echo $a;
 //header('Location: ngo.php');
}
else {
echo "not connected";
// Jump to login page
//header('Location: home.html');
}}
?>