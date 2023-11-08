<?php
$db=new mysqli('localhost','root','','e_business');
$data=$db->query('select * from general_info')->fetch_assoc();
$slider=$db->query('select * from slider order by id desc');
$about=$db->query('select * from about order by id asc');
$blog=$db->query('select * from blog order by id desc');
$testimonial=$db->query('select * from testimonial order by id desc');
$portfolio=$db->query('select * from portfolio order by id desc');
$service=$db->query('select * from services order by id desc');
$form=$db->query('select * from form order by id asc');
$footer_1=$db->query('select * from footer_1 form order by id asc');
$footer_2=$db->query('select * from footer_2 form order by id asc');
$footer_3=$db->query('select * from footer_3 form order by id asc');
$d=$db->query('select * from extra_add')->fetch_assoc();
$price_1=$db->query('select * from price_title order by id asc');
$price_2=$db->query('select * from price_details order by id asc');
?>

       <!-- <header section > -->
       <?php include ('header.php') ?>  
       <!-- <end header section> -->

  <!-- ======= hero Section ======= -->
  <?php include('slider.php') ?>
 <!-- End Hero Section -->
  

  <main id="main">

    <!-- ======= About Section ======= -->
   
    <?php include('about.php'); ?>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
   <?php include('service.php'); ?>
    <!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <?php include('team.php') ?>
    <!-- End Team Section -->

    <!-- ======= Rviews Section ======= -->
    <?php include('add_2.php') ?>
 <!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
<?php include('portfolio.php') ?>
<!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
 
  <!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
   <?php include('testimonial.php') ?><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
   <?php include('blog.php')?><!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <?php include('add.php')?>
<!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call:  <?php echo $data['phone'] ?><br>
                    <span> <?php echo $data['time'] ?></span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email:  <?php echo $data['email'] ?><br>
                    <span>Web: <?php echo $data['web'] ?></span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                  <?php echo $data['address'] ?><br>
                   
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
              <iframe src=" <?php echo $data['map'] ?>" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
        <?php include('message.php') ?>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>

   <?php include('footer_2.php') ?>
          <!-- end single footer -->
    <?php include('footer_3.php')?>

     
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
         
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html> 