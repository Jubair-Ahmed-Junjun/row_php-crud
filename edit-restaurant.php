<?php
   
   if (isset($_GET['id'])) {
   	$id = $_GET['id'];
   	$conn = mysqli_connect('localhost','root','','restaurant_db');
   	$sql = "SELECT * FROM restaurant WHERE id = $id";
   	$result = mysqli_query($conn,$sql);
   	$row = $result->fetch_assoc();
   }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit restaurant</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<!-- Default form contact -->
<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-8">
			<form action="update-restaurant.php" method="post">
    
    <p class="h4 mb-4"><h1>Edit Restaurant</h1></p><br>
    <a href="view-restaurant.php">View Restaurant Information</a> || 
     <a href="add-restaurant.php">Add Restaurant</a>
    <!-- Name -->
    <div class="form-group">
    	<label>Restaurant Name:</label>
    	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    	<input type="text" value="<?php echo $row['restaurant_name']; ?>"  name="restaurant_name" class="form-control mb-4" placeholder="Enter Restaurant Name">
    </div>

    <!-- Email -->
    <div class="form-group">
    	<label>Email:</label>
    	<input type="email" value="<?php echo $row['email']; ?>" name="email" class="form-control mb-4" placeholder="Enter your email">
    </div>
     <div class="form-group">
    	<label>Address:</label>
    	<input type="text" value="<?php echo $row['address']; ?>" name="address" class="form-control mb-4" placeholder="Enter Your Address">
    </div>

    <!-- Subject -->
 <div class="form-group">
 	   <label>Branch</label>
    <select name="branch" class="browser-default custom-select mb-4">
        <option value="" >---Select----</option>
        <option <?php echo $row['branch']=='Dhaka'?'selected':'' ?> value="Dhaka">Dhaka</option>
        <option <?php echo $row['branch']=='Chittagong'?'selected':'' ?> value="Chittagong">Chittagong</option>
        <option <?php echo $row['branch']=='Barisal'?'selected':'' ?> value="Barisal">Barisal</option>
        <option <?php echo $row['branch']=='Rajshahi'?'selected':'' ?> value="Rajshahi">Rajshahi</option>
    </select>

 </div>
    <!-- Message -->

    <!-- Copy -->

    <!-- Send button -->
    <button name="update" class="btn btn-info btn-success" type="submit">Update</button>

</form>
<!-- Default form contact -->
		</div>
	</div>
	
</div>
</body>
</html>