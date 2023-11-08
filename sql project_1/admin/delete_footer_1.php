<?php
$con=new mysqli('localhost','root','','e_business');
$id=$_GET['id'];
$query="delete from footer_1 where id=".$id;
$con->query($query);
header('Location: footer_1.php');