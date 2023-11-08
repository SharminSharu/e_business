<?php
$db=new mysqli('localhost','root','','e_business');
$blog=$db->query('select * from blog order by id desc');
$data=$db->query('select * from general_info')->fetch_assoc();
?>

  <!-- ======= Blog Section ======= -->
  <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Latest News</h2>
              </div>
            </div>
          </div>
          <div class="row">
          <?php while($d=$blog->fetch_assoc()){ ?>
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/<?php echo $d['photo'] ?>" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2022-12-12 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html"><?php echo $d['title']?></a>
                  </h4>
                  <p>
                  <?php echo $d['description'] ?>
                  </p>
                </div>
                <span>
                  <a href="blog_3.php" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>

            <!-- End Left Blog-->
           
            <!-- End Right Blog-->
            <?php } ?>
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->