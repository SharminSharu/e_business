<?php
$con=new mysqli('localhost','root','','e_business');
$id=$_GET['id'];
$query="delete from form where id=".$id;
$con->query($query);
header('Location: message.php');