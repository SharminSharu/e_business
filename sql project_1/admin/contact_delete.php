<?php
$con=new mysqli('localhost','root','','prixima');
$id=$_GET['id'];
$query="delete from contact where id=".$id;
$con->query($query);
header('Location: contact.php');