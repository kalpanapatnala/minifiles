<?php 
$conn = mysqli_connect('localhost','root','','demo');

if(!$conn)
{
	die(mysqli_error());
}

if(isset($_POST['submit']))
{
	$textareaValue = trim($_POST['content']);
	
	$sql = "insert into textarea_value (textarea_content) values ('".$textareaValue."')";
	$rs = mysqli_query($conn, $sql);
	$affectedRows = mysqli_affected_rows($conn);
	
	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>how to store textarea value in database in php</title>
<style>
body{
	font-family:verdana;
}

label{
	font-weight:400;
	margin:10px 0px;
	display:block;
	color:#ee0000;
}

textarea{
	border:1px solid #eeeeee;
}

input[type=submit]{
	background:#ee0000;
	border:1px solid #ee0000;
	color:#ffffff;
	height:30px;
	display:block;
	margin:10px 0px;
}

input[type=submit]:hover{
	background:#ff5858;
	border:1px solid #ff5858;
	cursor:pointer;
}

.success-msg{
	background:#15a869;
	border:1px solid #15a869;
	color:#ffffff;
	width:33%;
}
</style>

</head>
<body>
	<?php 
		if(isset($successMsg))
		{
			echo "<div class='success-msg'>";
			print_r($successMsg);
			echo "</div>";
		}
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		
		<label>Textarea:</label>
		
		<div>
			<textarea rows="10" cols="60" name="content" required></textarea>
		</div>
		
		<input type="submit" name="submit" value="Submit">
		
	</form>
</body>
</html>