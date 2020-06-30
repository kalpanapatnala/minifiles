<?php 
if(isset($_POST['but_delete'])){

  if(isset($_POST['delete'])){
    foreach($_POST['delete']){

      $deleteUser = "DELETE from taxtarea_value2;
      mysqli_query($con,$deleteUser);
    }
  }
 
}
?>