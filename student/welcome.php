<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>




<!DOCTYPE html>
<html>
  <body>
        <form method="post" action="process.php">
                      <h2 align=center>Student Details</h2>
                             <table align=center>
                                    <tr>
		<td>sno:</td>
		<td><input type="text" name="sno"></td>
                                  </tr>
	                 <br>
                                  <tr>
		<td>id:</td>
		<td><input type="text" name="id"></td>
                                  </tr>
	                 <br>
                                  <tr>
		<td>name:</td>
		<td><input type="text" name="name"></td>
                                  </tr>
	                  <br>
                                  <tr>
                                   <td> branch:</td>
		<td><input type="text" name="branch"></td>
                                  </tr>
		<br>
                                  <tr>
		<td>year:</td>
		<td><input type="text" name="year"></td>
                                  </tr>
		<br>
                                  <tr>
		<td>sem:</td>
		<td><input type="text" name="sem"></td>
                                  </tr>
		<br>
                                  <tr>
                                   <td>sec:</td>
		<td><input type="text" name="sec"></td>
                                  </tr>
		<br>
                                  <tr>
                                    <td>Textarea_content:</td>
		<div>
			<td><textarea rows="10" cols="60" name="content" required></textarea></td>
		</div>
                                  </tr>
		<tr><td><input type="submit" value="Submit" name="save" style="position: absolute; z-index: 5; left: 1000px; top:   650px"></td></tr>
                                    <a href ="retrieve.php">Problems to be solved</a>
                                    <a href ="admin/index.php">Problems to be solved</a>
                                   
                                    
	</table>
                             
         </form>
  </body>
</html>














