<script type="text/javascript" src="js/jquery-1.6.2.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#checkBoxAll').click(function() {
			if ($(this).is(":checked"))
				$('.chkCheckBoxId').prop('checked', true);
			else
				$('.chkCheckBoxId').prop('checked', false);
		});
	});
</script>
<?php
require 'connection.php';
if(isset($_POST['buttonDelete'])) {
	if(isset($_POST['sno'])) {
		foreach ($_POST['sno'] as $sno) {
			$stmt = $conn->prepare('delete from textarea_value2 where sno = :sno');
			$stmt->bindValue('sno', $sno);
			$stmt->execute();
		}
	}
}
$stmt = $conn->prepare('select * from textarea_value2');
$stmt->execute();

?>


<form method="post" action="index.php">
                
	<input type="submit" name="buttonDelete" style="position: absolute; z-index: 5; left: 1150px; top:   200px" value="Delete" onclick="return confirm('Are you sure?')" />
                 <h2 align="center">Problems to be solved</h2>
	<table align="center" cellpadding="2" cellspacing="2" border="1">
		<tr>
			<th><input type="checkbox" id="checkBoxAll" /></th>
			<th>sno</th>
			<th>id</th>
			<th>name</th>
                                                      <th>branch</th>
			<th>year</th>
			<th>sem</th>
			<th>sec</th>
			<th>textarea_content</th>
		</tr>
		<?php while($account = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
		<tr>
			<td><input type="checkbox" class="chkCheckBoxId"
				value="<?php echo $account->sno; ?>" name="sno[]" /></td>
			<td><?php echo $account->sno; ?></td>
			<td><?php echo $account->id; ?></td>
			<td><?php echo $account->name; ?></td>
 			<td><?php echo $account->branch; ?></td>
			<td><?php echo $account->year; ?></td>
			<td><?php echo $account->sem; ?></td>
			<td><?php echo $account->sec; ?></td>
			<td><?php echo $account->textarea_content; ?></td>
		</tr>
		<?php } ?>
	</table>
</form>
 </body>
</html>       




