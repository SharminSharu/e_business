<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location: index.php');
}
$db=new mysqli('localhost','root','','e_business');

$price_2=$db->query('select * from price_details order by id asc');

if(isset($_POST['feature'])){
    $f=$_POST['feature'];
    $status=$_POST['status'];
    $id=$_POST['id'];
   
    $query="INSERT INTO `price_details` (`id`, `id_1`, `feature`, `feature_status`) VALUES (NULL, '$id', '$f', '$status')";
    $db->query($query);
    header('Location: pricing_2.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php
  require('menu.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Add Pricing</h5>
              </div>
              <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row"
                    <div class="col-8" class="pr">
                
                    <div class="form-group">
                      <label for="exampleInputEmail1">id_1</label>
                      <input type="text" name="id" class="form-control" id="exampleInputEmail1" placeholder="Enter id ">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">feature</label>
                      <input type="text" name="feature" class="form-control" id="exampleInputEmail1" placeholder="Enter feature">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">status</label>
                      <input type="text" name="status" class="form-control" id="exampleInputEmail1" placeholder="Enter status">
                      </div>
                      <button id="btn">+</button>
                
                      
                  
                  </div>
                  </div>
                
                  <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="submit" class="btn btn-primary btn-block" value="Save">
                    </div>
                </div>
            </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
        <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">pricing List</h5>
              </div>
              <div class="card-body">
                        <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>id</th>
                        <th>feature</th>
                        <th>status</th>
                        
                        <th>Action</th>
                    </tr>
                    <?php $i=0; while($data=$price_2->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo ++$i ?></td>
                           
                            <td><?php echo $data['id'] ?></td>
                            <td><?php echo $data['feature'] ?></td>
                            <td><?php echo $data['feature_status'] ?></td>
                            
                          
                                                      
    <td>
    
    <a href="edit_pricing_2.php?id=<?php echo $data['id'] ?>" class="btn btn-xs btn-success">Edit</a>   
    <a href="delete_pricing_2.php?id=<?php echo $data['id'] ?>" class="btn btn-xs btn-danger"
    onclick="return confirm('Are you sure?')">Delete</a>
</td>
                        </tr>
                    <?php } ?>
                </table>
             
              </div>
            </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>

</script>
<button id="btn">Click</button>
<script src="./jquery-3.6.1.min.js"></script>
<script>
    let i=0;
    $(document).ready(function(){
        $('#btn').click(function(){
let ht=`<tr>
     <th> </th>
     <th> </th>
     <th> </th>

        
      
    </tr>`
    $('.price').append(ht)
    

        })
    })

</script>
</body>
</html>
