<?php
$db=new mysqli('localhost','root','','e_business');
$d=$db->query('select * from extra_add')->fetch_assoc();

?>
    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area">
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="assets/img/blog/fd.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2><?php echo $d['title_1']?></h2>
            <h5><?php echo $d['title_2']?></h5>
            <a href="contact_2.php" class="ready-btn scrollto">Contact us</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->
