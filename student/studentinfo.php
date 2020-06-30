<?php
$link=mysqli_connect("localhost","root","","kalpana");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
$Department=mysqli_real_escape_string($link,$_REQUEST['Department']);
$Year=mysqli_real_escape_string($link,$_REQUEST['Year']);
$SEM=mysqli_real_escape_string($link,$_REQUEST['SEM']);
$Section=mysqli_real_escape_string($link,$_REQUEST['Section']);
$ProblemType=mysqli_real_escape_string($link,$_REQUEST['ProblemType']);

$sql="INSERT INTO studentinfo(department,year,sem,section,problemtype) VALUES ('$Department', '$Year', '$SEM', '$Section', '$ProblemType')";
if(mysqli_query($link, $sql)) 
{
	echo "Records addded successfully";
}
else
{
	echo "ERROR: could not able to execute $sql." .mysqli_error($link);
}
mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Record</title>
</head>
<body>
<form name="form" method="post">
<h1 align="center">STUDENT INFO</h1>
<table align="center">


<tr>
<td>Department: </td>
<td>
<select name="dep">
<option value="-1">Select</option>
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="EEE">EEE</option>
<option value="IT">IT</option>
<option value="CIVIL">CIVIL</option>
<option value="MECH">MECH</option>
</select>
</td>
</tr>


<tr>
<td>Branch/Year: </td>
<td>
<select name="year">
<option value="-1">Select</option>
<option value="1 year">1 Year</option>
<option value="2 year">2 Year</option>
<option value="3 year">3 Year</option>
<option value="4 year">4 Year</option>
</select>
</td>
</tr>


<td>SEM: </td>
<td>
<select name="SEM">
<option value="-1">Select</option>
<option value="1 year 1 SEM">1-1</option>
<option value="1 year 2 SEM">1-2</option>
<option value="2 year 1 SEM">2-1</option>
<option value="2 year 2 SEM">2-2</option>
<option value="3 year 1 SEM">3-1</option>
<option value="3 year 2 SEM">3-2</option>
<option value="4 year 1 SEM">3-1</option>
<option value="4 year 2 SEM">3-2</option>
</select>
</td>
</tr>

<tr>
<td>Section: </td>
<td>
<select name="sec">
<option value="-1">Select</option>
<option value="A ">A section</option>
<option value="B">B section</option>
<option value="C">C section</option>
<option value="D">D section</option>
</select>
</td>
</tr>


<tr>
<td>ProblemType: </td>
<td>
<select name="type">
<option value="-1">Select</option>
<option value="Technical">Technical</option>
<option value="Non-Technical">Non-Technical</option>
<option value="Both">Both</option>
</select>
</td>
</tr>

<input type="submit" value="Submit" name="send" style="position: absolute; z-index: 5; left: 900px; top:   450px">
<?php
	$query=mysqli_query($conn,"select * from `user`");
	while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><input type="checkbox" value="<?php echo $row['userid']; ?>" name="id[]"></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['fullname']; ?></td>
</tr>
<?php
	}
?>
 
</body>
</table>
<br>
<input type="submit" name="submit" value="Submit">
</form>

<h2>You Selected:</h2>
<?php
	if (isset($_POST['submit'])){
		foreach ($_POST['id'] as $id):
 		$sq=mysqli_query($conn,"select * from `user` where userid='$id'");
		$srow=mysqli_fetch_array($sq);
		echo $srow['fullname']. "<br>";
		endforeach;
	}
?>

</table>
</form>
</body>
</html>
