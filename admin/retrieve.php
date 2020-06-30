<!DOCTYPE html>
<html>
<head>
<title>Selecting Rows from MySQL Table using checkbox PHP, MySQLi</title>
</head>
<body>
	<h2>Select Problems that solved:</h2>
	<div>
	<form method="POST">
	<table border="1">
		
                                     <?php
                                     include('conn.php');
                                             $query=mysqli_query($conn,"select * from `textarea_value2`");
	                           while($row=mysqli_fetch_array($query)){
                                     ?>
                                     <tr>
                                     <td><input type="checkbox" value="<?php echo $row['sno']; ?>" name="sno[]"></td>
                                     <td><?php echo $row['id']; ?></td>
                                     <td><?php echo $row['name']; ?></td>
                                     <td><?php echo $row['branch']; ?></td>
                                     <td><?php echo $row['year']; ?></td>
                                     <td><?php echo $row['sem']; ?></td>
                                     <td><?php echo $row['sec']; ?></td>
                                     <td><?php echo $row['textarea_content']; ?></td>
                                     </tr>
                                     <?php
		         }
	                   ?>
                                    
	</table>
	<br>
                           <input type="submit" name="submit" value="Submit">
                 </form>
                 </div>
                 <div>
                <h2>problems to be solved</h2>
                 <?php
                  if(isset($_POST['submit'])){
                        foreach ($_POST['sno'] as $sno):
                               $sq=mysqli_query($conn,"select * from `textarea_value2` where sno=$sno");
                               $srow=mysqli_fetch_array($sq);
                               echo $srow['textarea_content']. "<br>";
                               endforeach;
                 
                  }
     
                  ?>
                  </div>
</body>
</html>
