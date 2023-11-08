<?php
$con=new mysqli('localhost','root','','e_business');
$id=$_GET['id'];
$query="delete from team where id=".$id;
$con->query($query);
header('Location: team.php');