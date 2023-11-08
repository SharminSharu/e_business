<?php
$con=new mysqli('localhost','root','','e_business');
$id=$_GET['id'];
$query="delete from slider where id=".$id;
$con->query($query);
header('Location: slider.php');