<!DOCTYPE html>
<html>
<title>
		Anonymous
</title>
<head>
<link rel="stylesheet" href="styles.css">
<script><?php include 'photo.js';?></script>
</head>

<body>
<center>
	<img src='logo.gif'>
	<br>
	<br>
	<form name="search"action="search.php" method="get">
	<div class="topnav">
		  <a class="active" href="home.php">Home</a>
		  <a href="logout.php">sign out</a>
		  <a href="cart.php">Cart</a>
		  <input type="text" name="search" placeholder="search....">
		  <input type ="submit" name="button" value="search">
		  </div>		  
  	</form>
	
	<br>
	<br>
	<br>
	<br>
	<img src="category.jpg" width="30%">
	<br>
	<br>
	<a href="novels.php"><button class="btn info">Novels</button></a>
	<a href="bio.php"><button class="btn info">Biographies & Autobiographies</button></a>
	<a href="poem.php"><button class="btn info">Poems</button></a>
	<a href="jnee.php"><button class="btn info">JEE/NEET</button></a>
	<a href="child.php"><button class="btn info">Children Books</button></a>
	<a href="classX.php"><button class="btn info">Class X</button></a>
	<a href="12.php"><button class="btn info">Class XII</button></a>
	<a href="sch.php"><button class="btn info">School Books</button></a>
	<br>
	<br>
	<img src="img.jpg"  style="width:100%;max-width:200px">
	<img src="img5.jpg"  style="width:100%;max-width:250px">
	<img src="img2.jpg"  style="width:100%;max-width:200px">
	<img src="img3.jpg"  style="width:100%;max-width:200px">
	<img src="img4.jpg"  style="width:100%;max-width:200px">
<div class="topnav">
<a href="about.php">About</a>
<a href="contact.php">Contact</a>
</div>
</body>
</html>