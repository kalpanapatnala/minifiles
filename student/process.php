<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
                   $sno = $_POST['sno'];
	 $id = $_POST['id'];
	 $name = $_POST['name'];
	 $branch = $_POST['branch'];
	 $year = $_POST['year'];
                   $sem = $_POST['sem'];
                   $sec = $_POST['sec'];
                   $textareaValue = ($_POST['content']);
	 $sql = "INSERT INTO textarea_value2 (sno,id,name,branch,year,sem,sec,textarea_content)
	 VALUES ('$sno','$id','$name','$branch','$year','$sem','$sec','$textareaValue')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>