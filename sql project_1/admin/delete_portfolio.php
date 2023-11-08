<?php
$con=new mysqli('localhost','root','','e_business');
$id=$_GET['id'];
$query="delete from portfolio where id=".$id;
$con->query($query);
header('Location: portfolio.php');