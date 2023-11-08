<?php
$db=new mysqli('localhost','root','','e_business');
$footer_3=$db->query('select * from footer_3 order by id asc');
$data=$db->query('select * from general_info')->fetch_assoc();
?>
         

    <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
              <?php while($d=$footer_3->fetch_assoc()){ ?>
                <h4><?php echo $d['title'] ?></h4>
                <div class="flicker-img">
                <a href="#"><img src="assets/img/portfolio/<?php echo $d['photo'] ?>" alt=""></a>
                  <!-- <a href="#"><img src="assets/img/portfolio/k.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/l.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/o.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/u.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/y.jpg" alt=""></a> -->
                </div>
                <?php } ?>
              </div>
          
            </div>
          </div>
        </div>
      </div>
    </div>