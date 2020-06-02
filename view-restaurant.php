<?php
    $conn = mysqli_connect('localhost','root','','restaurant_db');
    $sql = "SELECT * FROM restaurant";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Restaurant</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 30px;">
	<div class="row"> 
		 <div class="col-md-8">
		 	<a href="add-restaurant.php">Add Restaurant Data</a>
		 	<h3>View Restaurant Information</h3>
		 	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Restaurant Id</th>
      <th scope="col">Restaurant Name</th>
      <th scope="col">Email</th>
      <th scope="col">Adderss</th>
      <th scope="col">Branch</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	    while($rows = $result->fetch_assoc()){
 	?>
    <tr>
      <th scope="row"><?php echo $rows['id']; ?></th>
      <td><?php echo $rows['restaurant_name']; ?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><?php echo $rows['address']; ?></td>
      <td><?php echo $rows['branch']; ?></td>
      <td>
      	  <a href="edit-restaurant.php?id=<?php echo $rows['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a> || <a href="delete-restaurant.php?id=<?php echo $rows['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i>
    </a>
      	 
      </td>
    </tr>

<?php   } ?>
  </tbody>
</table>
		 </div>
	</div>
	
</div>
</body>
</html>