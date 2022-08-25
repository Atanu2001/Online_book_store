<html>
<head>
<title>Search results</title>
<style><?php include'styles.css';?></style>
</head>
<body>
<?php
include('db_connect.php');
$search=$_GET['search'];
$button=$_GET['button'];

$result=mysqli_query($conns,"select * from book_details where Book_name like '%$search%'");

if(mysqli_num_rows($result)>0)
{
?>
<center>
<h2>Search Results.....</h2>
<table class='find'>
<tr>
	<th>Book Name</th>
	<th>Price</th>
	<th>Pages</th>
	<th>Publisher Name</th>
	<th>ISBN</th>
	<th>Author</th>
	<th>Ratings</th>
</tr>
<?php
	while($row=mysqli_fetch_array($result))
	{
	?>
	<tr>
		<td><?php echo $row['book_name'];?></td>
		<td><?php echo 'Rs.'.$row['price'];?></td>
		<td><?php echo $row['pages'];?></td>
		<td><?php echo $row['publisher'];?></td>
		<td><?php echo $row['isbn'];?></td>		
		<td><?php echo $row['author'];?></td>
		<td><?php echo $row['ratings'];?></td>
	</tr>	
<?php	
	}
?>
</table>
<?php
}
else
{
	echo '<h2>';
	echo $search.' is not available';
	echo '</h2>';
}

mysqli_close($conns);
?>
<br>
<br>
<button onclick="history.back()">Go Back</button>
</body>
</html>