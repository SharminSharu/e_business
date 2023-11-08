<?php
$db=new mysqli('localhost','root','','e_business');
$footer_2=$db->query('select * from footer_2 order by id asc');
$data=$db->query('select * from general_info')->fetch_assoc();
?>
 <div class="footer-area">
      <div class="container">
        <div class="row">
         <?php include('footer_1.php'); ?>
          <div class="col-md-4">
          <?php while($d=$footer_2->fetch_assoc()){ ?>
            <div class="footer-content">
              <div class="footer-head">
                <h4><?php echo $d['title'] ?></h4>
                <p>
                 <?php echo $d['details'] ?>
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> <?php echo $d['tel'] ?> </p>
                  <p><span>Email:</span> <?php echo $data['email'] ?></p>
                  <p><span>Working Hours:</span>  <?php echo $d['hour'] ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>