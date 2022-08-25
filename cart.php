<?php
session_start();
$print="";
if (isset($_POST['action']) && $_POST['action']=='remove')
{
	if(!empty($_SESSION['booking']))
	{
		foreach($_SESSION['booking'] as $key=>$value)
		{
			if($_POST["isbn"]==$key)
			{
				unset($_SESSION['booking']['$key']);
				$print="<div class ='box' style='color:red;'>Product is removed from your cart!</div>";
			}
			if(empty($_SESSION['booking']))
				unset($_SESSION['booking']);
		}
	}
}
if (isset($_POST['action']) && $_POST['action']=="change")
{
	foreach($_SESSION['booking'] as $value)
	{
		if($value['isbn']==$_POST['isbn'])
		{
			$value['quantity']=$_POST['quantity'];
			break;
		}
	}
}
?>

<html>
<head>
<title>Cart</title>
<style><?php include 'styles.css';?></style>
</head>
<body>
<h2>CART</h2>
<?php
	if(!empty($_SESSION['booking'])){
	$value_count = count(array_keys($_SESSION['booking']));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart.jpg" width='100px' height='100px'/> Cart<span><?php echo $value_count; ?></span></a>
</div>
<?php
}
?>
<div class="cart">
<?php
if(isset($_SESSION['booking']))
{
	$tot_price=0;
	?>
	<table class="table">
	<tbody>
	<tr>
	<td></td>
	<td>BOOK NAME</td>
	<td>QUANTITY</td>
	<td>UNIT PRICE</td>
	<td>ITEMS TOTAL</td>
</tr>	
<?php
foreach($_SESSION['booking'] as $book)
{
?>
<tr>
<td><img src='<?php echo $book["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $book["bookname"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='isbn' value="<?php echo $book["isbn"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>

<td>
<form method='post' action=''>
<input type='hidden' name='isbn' value="<?php echo $book["isbn"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($book["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($book["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($book["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($book["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($book["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>

<td><?php echo "Rs.".$book["price"]; ?></td>
<td><?php echo "Rs.".$book["price"]*$book["quantity"]; ?></td>
</tr>
<?php
$tot_price += ($book["price"]*$book["quantity"]);
$_SESSION['booking']=$tot_price;
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Rs.".$tot_price; ?></strong>
</td>
</tr>
</tbody>
</table>	
 <?php
}
else
	{
	echo "<h2>Your cart is empty!</h2>";
	}
?>
</div>
<div style="clear:both;"></div>
<div class="message_box" style="margin:10px 0px;">
<?php echo $print; ?>
</div>
<center>
<a href="home.php"><button>Home</button></a>
<a href="payment.php"><button>Click to pay</button></a>

</body>
</html>