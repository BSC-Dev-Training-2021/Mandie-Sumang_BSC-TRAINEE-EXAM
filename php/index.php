<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




	<title>Register
	</title>

</head>
<body>
	
<?php 
	include 'Connection.php' ;
  if (isset($_REQUEST['Description'])) {
		$description = $_GET['Description'];
	
		$price = $_GET['Price'];

		$quantity =$_GET['Quantity'];
	

        $query = "INSERT into db_image (Description, Price, Quantity) VALUES ('$description', '$price','$quantity')";
        $result = mysqli_query($conn,$query);
      
  }

        ?>


    <h1>Item Registry</h1>
    <form action="data.php" method="post">
  <div class="mb-3">
    <label class="form-label">Item Description</label>
    <input type="text" class="form-control" name="Description" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="Price" required>
   
  </div>
  <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="text" class="form-control" name="Quantity" required>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button type="submit" class="btn btn-primary" name="view"><a href="data.php" class="text-light" style="text-decoration:none">View Items</a></button>
</form>



















</body>
</html>