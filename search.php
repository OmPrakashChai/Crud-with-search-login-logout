<?php
include "dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
       <title>Search Record</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<form action="" method="GET">
<div class="container">
<h2>Student Details</h2>
<input type="text" class="form-control" name="search" placeholder="Search here">
<button type="submit" class="btn btn-primary">Search</button>
<table class="table">
<thead>
<?php 
if (isset($_GET['search'])) {
   $filtervalue=$_GET['search'];
   $filterdata="SELECT * FROM students2 WHERE CONCAT(name) LIKE '$filtervalue' ";
   $filterdata_run =mysqli_query($conn,$filterdata);
   if (mysqli_num_rows($filterdata_run)>0) 
    { foreach ($filterdata_run as $row) 
         {
?>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th> 
    </tr>       
   <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['email']; ?></td>
   </tr>
<?php
}
       
}
else{
    ?>
      <tr>
       <td colspan="4">Record not found</td>    
      </tr>
<?php
}
}
?> 
       
</tbody>
</thead>
</table>
</div>
</form>
</body>
</html>






                




















