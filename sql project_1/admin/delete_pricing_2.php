<?php
$con=new mysqli('localhost','root','','e_business');

$id=$_GET['id'];


$query="delete from price_details where id=".$id;
$con->query($query);

header('Location: pricing_2.php');