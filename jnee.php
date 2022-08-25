<?php
session_start();
include('db_connect.php');
$status="";
if (isset($_POST['isbn']) && $_POST['isbn']!=""){
$isbn = $_POST['isbn'];
$result = mysqli_query($conns,"SELECT * FROM `book_details` WHERE `isbn`='$isbn'");
$row = mysqli_fetch_assoc($result);
$name = $row['book_name'];
$isbn = $row['isbn'];
$price = $row['price'];
$image = $row['image'];

$cartArray=array($isbn=>array('bookname'=>$name,'isbn'=>$isbn,'price'=>$price,'quantity'=>1,'image'=>$image));

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($isbn,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

<html>
<head>
<title>JEE & NEET</title>
<style><?php include 'styles.css';?></style>
</head>
<body>
<h2>JEE & NEET</h2>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart.jpg" width='100px' height='100px'/> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}

$result = mysqli_query($conns,"SELECT * FROM `book_details`where book_category='jnee'");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='isbn' value=".$row['isbn']." />
			  <div class='image'><img src='".$row['image']."'width='100px' height='150px' /></div>
			  <div class='name'>Book Name: ".$row['book_name']."</div>
			  <div class='pages'>Pages :".$row['pages']."</div>
			  <div>Publisher:".$row['publisher']."</div>
			  <div>Author: ".$row['author']."</div>
		   	  <div>ISBN: ".$row['isbn']."</div>
		   	  <div>Price: Rs".$row['price']."</div>
			  <button type='submit' class='buy'>Add to cart</button>
			  </form>
		   	  </div>";
        }
mysqli_close($conns);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<center>
<button onClick="history.back()">Go Back</button>
</body>
</html>
