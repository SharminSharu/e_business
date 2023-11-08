<?php
$db=new mysqli('localhost','root','','e_business');
$portfolio=$db->query('select * from portfolio order by id desc');
$data=$db->query('select * from general_info')->fetch_assoc();
?>


    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Portfolio</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">

     
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row awesome-project-content portfolio-container">
        <?php while($d=$portfolio->fetch_assoc()){ ?>
          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app filter-card filter-web portfolio-item">
        
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/<?php echo $d['photo']?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/<?php echo $d['photo']?>">
                      <h4><?php echo $d['title_1'] ?></h4>
                      <span><?php echo $d['title_2'] ?></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- portfolio-item end -->

          <!-- portfolio-item end -->

        </div>
      </div>
    </div><!-- End Portfolio Section -->