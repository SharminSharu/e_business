<?php

$db=new mysqli('localhost','root','','e_business');
$data=$db->query('select * from general_info')->fetch_assoc();
$slider=$db->query('select * from slider order by id desc');
?>

<!-- ======= hero Section ======= -->
 <section id="hero">
    <div class="hero-container">
    <?php  $i=1; while($d=$slider->fetch_assoc()){ ?>
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
     
        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
     
        <div class="carousel-inner" role="listbox">
          
          <div class="carousel-item <?php if($i==1){ echo 'active';}
          ?>" style="background-image: url(assets/img/hero-carousel/<?php echo $d['photo'] ?>)">
            <div class="carousel-container">
              <div class="container">
             
                <h2 class="animate__animated animate__fadeInDown"><?php echo $d['title_1'] ?> 
              </h2>
                <p class="animate__animated animate__fadeInUp"><?php echo $d['title_2'] ?><?php echo $d['title_3'] ?></p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>
          
        </div>
        <?php  
          $i++;
        } 
        ?>
        
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
        
      </div>
    </div>
   
  </section><!-- End Hero Section -->