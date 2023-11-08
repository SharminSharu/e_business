<?php
$con=new mysqli('localhost','root','','e_business');
$id=$_GET['id'];
$query="delete from footer_3 where id=".$id;
$con->query($query);
header('Location: footer_3.php');