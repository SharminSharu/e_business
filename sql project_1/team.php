<?php
$db=new mysqli('localhost','root','','e_business');
$team=$db->query('select * from team order by id desc');
$data=$db->query('select * from general_info')->fetch_assoc();
?>


<!-- ======= Team Section ======= -->
 <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our special Team</h2>
            </div>
          </div>
        </div>
        <div class="row">
        <?php while($d=$team->fetch_assoc()){ ?>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/<?php echo $d['photo'] ?>" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4><?php echo $d['name'] ?></h4>
                <p><?php echo $d['designation'] ?></p>
              </div>
            </div>
          </div>
          <!-- End column -->
    <?php } ?>
       
        </div>
      </div>
    </div><!-- End Team Section -->