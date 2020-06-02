<?php
    
     if (isset($_GET['id'])) {
     	$id = $_GET['id'];
     	$conn = mysqli_connect('localhost','root','','restaurant_db');
     	$sql = "DELETE FROM restaurant WHERE id = $id ";

     	$result = mysqli_query($conn,$sql);
     	if ($result==TRUE) {

     		header('location:view-restaurant.php');
     	}else{
     	    echo "Error:".mysql_errno($conn);	
     	}
     }
?>