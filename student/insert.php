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
			<td><textarea rows="10" cols="60" name="textarea_content" required></textarea></td>
		</div>
                                  </tr>
		<tr><td><input type="submit" name="save" value="submit"></td></tr>
                           </table>
         </form>
  </body>
</html>