<?php
$server="localhost";
$user="root";
$pwd="";
$database="demo";
$table="textarea_value2";
$conn=mysqli_connect($server,$user,$pwd,$database) or die("Error occured while connecting to database");
echo "<center>successfully connected to the database";
$res=mysqli_query($conn,"select * from textarea_value2");
echo "<table cellpadding=7 border=2><tr><th>sno></th><th>id</th><th>name</th><th>branch</th><th>year</th><th>sem</th><th>sec</th><th>textarea_content</th></tr>";
while($temp=mysqli_fetch_array($res))
{
	echo "<tr><td><br>".$temp['sno']."</td><td><br>".$temp['id']."</td><td><br>".$temp['name']."</td><td><br>".$temp['branch']."</td><td><br>".$temp['year']."</td><td><br>".$temp['sem']."</td><td><br>".$temp['sec']."</td><td><br>".$temp['textarea_content']."</td></tr>";
}
echo "</center>";
?>