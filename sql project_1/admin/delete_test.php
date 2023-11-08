<?php
$con=new mysqli('localhost','root','','e_business');
$id=$_GET['id'];
$query="delete from testimonial where id=".$id;
$con->query($query);
header('Location: testimonial.php');