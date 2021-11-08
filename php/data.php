


<!DOCTYPE html>
<html>
<head>
<title>Item List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body >
<h1>Product List</h1>
	<br>
	<div>
			<table class="table">
            <thead>
      <th scope="col">ID</th>
      <th scope="col">Item Description</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      
    </th> </thead>
			<tbody>
				<?php
					include('Connection.php');
					$query=mysqli_query($conn,"select * from `db_image`");
					while($row=mysqli_fetch_array($query)){
						?>
				
   
 
  
    <tr>
    <td><?php echo $row['ID']; ?></td>		
    <td><?php echo $row['Description']; ?></td>
    <td><?php echo $row['Price']; ?></td>
    <td><?php echo $row['Quantity']; ?></td>
    <td>
    <a href="edit.php?id=<?php echo $row['ID']; ?>">Edit</a>
    <a href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a>
    </td>
    </tr>
						<?php
					}
				?>
			</tbody>
		</table>
  
<br><br>
	

 




        <button type="submit" class="btn btn-primary" name="view"><a href="index.php" class="text-light" style="text-decoration:none">Add Item</a></button>

	</div>


























</body>
</html>