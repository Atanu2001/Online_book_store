<html>
<head>
<title>Insert Data</title>
<style><?php include 'styles.css';?></style>
</head>
<body>
<?php
$conns=new mysqli("localhost","root","","project");
if($conns->connect_error)
{
	die('unable to connect:'.$conns->connect_error);
}
$result=mysqli_query($conns,"select * from member_details");
$rowcount=mysqli_num_rows($result);
$rowcount=$rowcount+1;
$mid='M'.$rowcount;
$result=mysqli_query($conns,"select * from member_details where member_id='".$mid."'");
if(mysqli_num_rows($result)==0)
{
	$sqlquery="INSERT INTO member_details(member_id,name,address,contact_no,e_mail,password)values('$mid','$_POST[name]','$_POST[add]','$_POST[contact]','$_POST[mail]','$_POST[pass]')";
	if($conns->query($sqlquery)==true)
	{
	echo'<h1>';
	echo'<font color="red">';
	echo 'You are successfully registered';
	echo '<br>';
	echo 'Please note your member id for future reference '.$mid;
	echo'</h1>';
	echo'<button onclick="history.back()">Go Back</button>';
	 session_start();	 
	 $_SESSION['member_id']=$mid;
	 
	}
	else
	{
	echo "error".$conns->error;
	}
}
else
{
	$rowcount=$rowcount+1;
	$mid='M'.$rowcount;
	$sqlquery="INSERT INTO member_details(member_id,name,address,contact_no,e_mail,password)values('$mid','$_POST[name]','$_POST[add]','$_POST[contact]','$_POST[mail]','$_POST[pass]')";
		if($conns->query($sqlquery)==true)
		{
		echo'<h1>';
		echo 'You are successfully registered';
		echo '<br>';
		echo 'Please note your member id for future reference '.$mid;
		echo'</h1>';
	     session_start();	   
	     $_SESSION['member_id']=$mid;
	     
	}
}
mysqli_close($conns);
?>

<a href="index.php"><button>Login<button></a>
</body>
</html>