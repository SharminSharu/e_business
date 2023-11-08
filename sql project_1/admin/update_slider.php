<?php
$con=new mysqli('localhost','root','','e_business');
$id=$_GET['id'];
$t_1=$_POST['title_1'];
$t_2=$_POST['title_2'];
$t_3=$_POST['title_3'];
$file=$_FILES['photo']['name'];
if(move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/'.$file)){
$query="update slider set photo='$file', title_1='$t_1',title_2='$t_2',title_3='$t_3' where 
id=".$id;}
else{
    $query="update slider set title_1='$t_1',title_2='$t_2',title_3='$t_3' where id=".$id;
};
   

$con->query($query);
header('Location: slider.php');

