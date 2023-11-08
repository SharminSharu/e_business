<?php
$db=new mysqli('localhost','root','','e_business');
$footer_1=$db->query('select * from footer_1 order by id asc');
$data=$db->query('select * from general_info')->fetch_assoc();
?>
 <div class="col-md-4">

            <div class="footer-content">
              <div class="footer-head">
              <?php while($d=$footer_1->fetch_assoc()){ ?>
                <div class="footer-logo">
          
                  <h2><?php echo $d['logo'] ?></h2>
                </div>
          

                <p><?php echo $d ['details'] ?></p>
               
                <div class="footer-icons">
         
                  <ul>
                    <li>
                      <a href="#"><i class="<?php echo $d['icon_1'] ?>"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="<?php echo $d['icon_2'] ?>"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="<?php echo $d['icon_3'] ?>"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="<?php echo $d['icon_4'] ?>"></i></a>
                    </li>
                
                  </ul>
                </div>
              
              </div>
            </div>
            <?php }?>
          </div>
       
          <!-- end single footer -->