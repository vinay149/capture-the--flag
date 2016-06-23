<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="css/table.css" rel='stylesheet' type='text/css' />
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
.jumbotron {
    position: relative;
    background: #3399FF url("jumbotron-bg.png") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
}
.table {
    position: relative;
    background: #3399FF url("jumbotron-bg.png") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
}

</style>

</head>
<body background="images/bg.jpg">

<div class="container">
  <div class="jumbotron">
    <h1 col>SCOREBOARD</h1>
  </div>      
    <?php
	echo "<table class= 'table' >
	
    <thead>
      <tr>
        <th><h3>TEAM</h3></th>
        <th><h3>NAME </h3></th>
        <th><h3>SERVICE 1</h3></th>
        <th><h3>SERVICE 2</h3></th>
		 <th><h3>SERVICE 3</h3></th>
        <th><h3>TOTALSCORE</h3></th>
      </tr>
    </thead>";
	
	error_reporting(E_ALL ^ E_DEPRECATED);
     $connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('game_server');

$query = "SELECT * FROM score  ORDER BY total DESC"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
echo "<div class='table-responsiv'> ";
//echo "<table class = 'table'>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr class='danger' bordercolor= '#000000'  ><td>" . $row['team_no'] . "</td><td>" . $row['name'] . "</td><td>" . $row['service_1'] . "</td><td>" . $row['service_2'] . "</td><td>" . $row['service_3'] . "</td><td>" . $row['total'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div>";
mysql_close(); //Make sure to close out the database connection
?>
</table>
    </body>
    </html>