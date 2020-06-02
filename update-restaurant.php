<?php
   if (isset($_POST['update'])) {
       echo "<pre>";
       print_r($_POST);

      $id = $_POST['id'];
      $restaurant_name = $_POST['restaurant_name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $branch = $_POST['branch'];

      $conn = mysqli_connect('localhost','root','','restaurant_db');
      $sql = "UPDATE restaurant SET restaurant_name= '$restaurant_name',email = '$email',address='$address',branch='$branch' WHERE id =  $id ";
      $result = mysqli_query($conn,$sql);
      if($result === TRUE)
      {

          header('location:view-restaurant.php');

      }else{
      	  echo "Error:".mysql_errno($conn);
      }
   }

?>