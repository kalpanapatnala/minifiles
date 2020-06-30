<?php include "config.php"; ?>
<div class='container'>
<html>
<body>
  <!-- Form -->
  <form method='post' action=''>
    <input type='submit' value='Delete' name='but_delete'><br><br>

    <!-- Record list -->
    <table border='1'  style='border-collapse: collapse;' >
      <tr style='background: whitesmoke;'>
        <th>sno</th>
        <th>id</th>
        <th>name</th>
        <th>branch</th>
       <th>year</th>
        <th>sem</th>
        <th>sec</th>
        <th>textarea_content</th>
        <th>&nbsp;</th>
     </tr>

     <?php 
     $query = "SELECT * FROM textarea_value2";
     $result = mysqli_query($con,$query);
     
     while($row = mysqli_fetch_array($result) ){
        $sno = $row['sno'];
        $id = $row['id'];
        $name = $row['name'];
        $branch = $row['branch'];
        $year = $row['year'];
        $sem = $row['sem'];
        $sec= $row['sec'];
        $textarea_content = $row['textarea_content'];
     ?>
     <tr sno='tr_<?= $sno ?>'>

        <td><?= $id ?></td>
        <td><?= $name ?></td>
        <td><?= $branch ?></td>
        <td><?= $year ?></td>
        <td><?= $sem ?></td>
        <td><?= $sec ?></td>
        <td><?= $textarea_content ?></td>

        <!-- Checkbox -->
        <td><input type='checkbox' name='delete[]' value='<?= $sno ?>' ></td>
 
    </tr>
    <?php
    }
    ?>
   </table>
 </form>
</div>
</body>
</html>
