<?php
	session_start();	
?>
<html>
<head>
	<title>payment</title>
<style><?php include'styles.css'?></style>
</head>
<body>
<center>
<img src="pay.jpg" width=350px>
<br>
<br>
<br>

<table class="tab">
<tr>
	<td><select name="menu">
	<option value="--select a bank--">--select a bank--
	<option value="State Bank of India">State Bank of India
	<option value="Axis Bank">Axis Bank
	<option value="Union Bank">Union Bank
	<option value="Canara Bank">Canara Bank
	</select>
	</td>
</tr>
<tr>
	<td><input type="text" placeholder="Enter the card number"></td>
<tr>
	<td><input type="password" placeholder="CVV"></td>
</tr>
<tr>
	<td><input type="month" placeholder="expiry date"></td>
</tr>
<tr>
	<td>Amount</td>
</tr>
<tr>
	<td><input type="submit" value="PAY NOW"></td>
</tr>
</center>
</table>
</body>
</html>