<?php
$db=new mysqli('localhost','root','','e_business');
$service=$db->query('select * from services order by id desc');
$data=$db->query('select * from general_info')->fetch_assoc();
?>

  <!-- ======= Services Section ======= -->
  <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
        <?php while($d=$service->fetch_assoc()){ ?>
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="<?php echo $d['logo'] ?>"></i>
                  </a>
                  <h4><?php echo $d['title'] ?></h4>
                  <p>
                  <?php echo $d['description'] ?>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <?php }?>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section -->
