<?php
$con=new mysqli('localhost','root','','e_business');

$id=$_GET['id'];

$query="delete from price_title where id=".$id;

$con->query($query);

header('Location: pricing.php');
