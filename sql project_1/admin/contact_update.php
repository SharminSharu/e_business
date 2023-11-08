<?php
$con=new mysqli('localhost','root','','prixima');
$id=$_GET['id'];
$first=$_POST['first'];
$last=$_POST['last'];
$email = $_POST['email'];
$msg=$_POST['msg'];

// if(move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/'.$file)){
// $query="update form set photo='$file', title_1='$t_1',title_2='$t_2',title_3='$t_3' where 
// id=".$id;}
// else{
//     $query="update form set title_1='$t_1',title_2='$t_2',title_3='$t_3' where id=".$id;
// };
   
$query="update contact set first='$first',last='$first',email='$email', msg='$msg' where id=".$id;
$con->query($query);
header('Location:contact.php');