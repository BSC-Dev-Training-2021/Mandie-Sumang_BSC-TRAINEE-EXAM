<?php
	include('Connection.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `db_image` where ID='$id'");
	$row=mysqli_fetch_array($query);



?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  




	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Price:</label><input type="text" value="<?php echo $row['Price']; ?>" name="price">
		<label>Quantity:</label><input type="text" value="<?php echo $row['Quantity']; ?>" name="quantity">
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
		<a href="data.php">Back</a>
	</form>
</body>
</html>