<?php
// $db=new mysqli('localhost','root','','e_business');
// $form=$db->query('select * from form order by id asc');
// $data=$db->query('select * from form')->fetch_assoc();

// session_start();
// if(!isset($_SESSION['username'])){
//   header('Location: index.php');
// }
$db = new mysqli('localhost', 'root', '', 'e_business');
$form = $db->query('select * from form order by id desc');
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];


  // $file=$_FILES['photo']['name'];
  // move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/'.$file);

  $query = "INSERT INTO `form` (`id`, `name`, `email`,`subject`, `msg`) VALUES (NULL, '$name', '$email', '$subject','$msg')";
  $db->query($query);
  header('Location:message.php');
}
?>

<!-- Start  contact -->
<div class="col-md-6">
  <div class="form contact-form">
    <form action="message.php" method="post" role="form" class="php-email-form">
      <div class="form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
      </div>
      <div class="form-group mt-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="msg" rows="5" placeholder="Message" required>      </textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
  </div>
</div>
<!-- End Left contact -->