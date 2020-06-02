<?php
     $message = '';
     if (isset($_POST['btn'])) {

     $restaurant_name = $_POST['restaurant_name'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $branch = $_POST['branch'];

     $conn = mysqli_connect('localhost','root','','restaurant_db');
     $sql = "INSERT INTO restaurant(restaurant_name,email,address,branch)VALUES(' $restaurant_name','$email','$address','$branch')";
     $result = mysqli_query($conn,$sql);
     if ($result===TRUE) {
     	$message = "Data Inserted Successfully";
     }else{
     	echo "Data Not Inserted";
     }

     }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add restaurant</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<!-- Default form contact -->
<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-8">
			<form action="" method="post">
				<?php
				echo $message;
				?>
    
    <p class="h4 mb-4"><h1>Add Restaurant</h1></p><br>
    <a href="view-restaurant.php">View Restaurant Information</a>
    <!-- Name -->
    <div class="form-group">
    	<label>Restaurant Name:</label>
    	<input type="text" name="restaurant_name" class="form-control mb-4" placeholder="Enter Restaurant Name">
    </div>

    <!-- Email -->
    <div class="form-group">
    	<label>Email:</label>
    	<input type="email" name="email" class="form-control mb-4" placeholder="Enter your email">
    </div>
     <div class="form-group">
    	<label>Address:</label>
    	<input type="text" name="address" class="form-control mb-4" placeholder="Enter Your Address">
    </div>

    <!-- Subject -->
 <div class="form-group">
 	   <label>Branch</label>
    <select name="branch" class="browser-default custom-select mb-4">
        <option value="" >---Select----</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Barisal">Barisal</option>
        <option value="Rajshahi">Rajshahi</option>
    </select>

 </div>
    <!-- Message -->

    <!-- Copy -->

    <!-- Send button -->
    <button name="btn" class="btn btn-info btn-success" type="submit">Submit</button>

</form>
<!-- Default form contact -->
		</div>
	</div>
	
</div>
</body>
</html>