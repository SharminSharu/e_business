<?php
$db=new mysqli('localhost','root','','e_business');
$testimonial=$db->query('select * from testimonial order by id desc');
$data=$db->query('select * from general_info')->fetch_assoc();
?>
    <!-- ======= Testimonials Section ======= -->
<div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">
          <?php while($d=$testimonial->fetch_assoc()){ ?>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/<?php echo $d['photo'] ?>" class="testimonial-img" alt="">
                <h3><?php echo $d['name'] ?></h3>
                <h4><?php echo $d['designation'] ?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $d['description'] ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

<!-- End testimonial item -->
 <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div>
    <!-- End Testimonials Section -->