
<?php
$con=new mysqli('localhost','root','','e_business');
$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];

// if(move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/'.$file)){
// $query="update form set photo='$file', title_1='$t_1',title_2='$t_2',title_3='$t_3' where 
// id=".$id;}
// else{
//     $query="update form set title_1='$t_1',title_2='$t_2',title_3='$t_3' where id=".$id;
// };
   
$query="update form set name='$name',email='$email',subject='$subject', msg='$msg' where id=".$id;
$con->query($query);
header('Location: message.php');
