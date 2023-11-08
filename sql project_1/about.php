<?php
$db=new mysqli('localhost','root','','e_business');
$about=$db->query('select * from about order by id asc');
$data=$db->query('select * from about')->fetch_assoc();
?>

   
   <!-- ======= About Section ======= -->

   <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About eBusiness</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/blog/<?php echo $data['photo'] ?>"" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head"><?php echo $data['title'] ?></h4>
                </a>
                <p>
                <?php echo $data['brife'] ?>
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i><?php echo $data['point_1'] ?>
                  </li>
                  <li>
                    <i class="bi bi-check"></i> <?php echo $data['point_2'] ?>
                  </li>
                  <li>
                    <i class="bi bi-check"></i><?php echo $data['point_3'] ?>
                  </li>
                  <li>
                    <i class="bi bi-check"></i><?php echo $data['point_4'] ?>
                  </li>
               
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

