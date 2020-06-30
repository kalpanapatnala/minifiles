<?php 
if(isset($_POST['but_delete'])){

  if(isset($_POST['delete'])){
    foreach($_POST['delete' as $deletesno]){

      $deleteUser = "DELETE from textarea_value2 where sno=".$deletesno;
      mysqli_query($con,$deleteUser);
    }
  }
 
}
?>