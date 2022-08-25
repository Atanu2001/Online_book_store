<?php
$conns=new mysqli("localhost","root","","project");
if($conns->connect_error)
{
	die('unable to connect:'.$conns->connect_error);
}
?>