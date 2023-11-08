<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location: index.php');
}
$db=new mysqli('localhost','root','','e_business');
$footer_1=$db->query('select * from footer_1 order by id asc');
if(isset($_POST['logo'])){
    $logo=$_POST['logo'];
    $details=$_POST['details'];
    $i_1=$_POST['icon_1'];
    $i_2=$_POST['icon_2'];
    $i_3=$_POST['icon_3'];
    $i_4=$_POST['icon_4'];
  
    $query="INSERT INTO `footer_1` (`id`, `logo`, `details`, `icon_1`, `icon_2`, `icon_3`, `icon_4`) VALUES (NULL, '$logo', '$details', '$i_1', '$i_2', '$i_3', '$i_4')";
    $db->query($query);
    header('Location: footer_1.php');
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
                <h5 class="m-0">Add footer_1</h5>
              </div>
              <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">LOGO</label>
                        <input type="text" name="logo" class="form-control" id="exampleInputEmail1" placeholder="Enter LOgo" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Details</label>
                        <textarea class="summernote" name="details"></textarea>
                    </div>
                    
                    
              
                 
                    </div>
                    <div class="col-6">
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">icon_ One</label>
                      <input type="text" name="icon_1" class="form-control" id="exampleInputEmail1" placeholder="Enter icon ">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">icon Two</label>
                      <input type="text" name="icon_2" class="form-control" id="exampleInputEmail1" placeholder="Enter icon ">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">icon Three</label>
                      <input type="text" name="icon_3" class="form-control" id="exampleInputEmail1" placeholder="Enter icon ">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">icon Four</label>
                      <input type="text" name="icon_4" class="form-control" id="exampleInputEmail1" placeholder="Enter icon ">
                      </div>
                      
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
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
                <h5 class="m-0">Service List</h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Logo</th>
                        <th>Details</th>
                        <th>Icon_1</th>
                        <th>Icon_2</th>
                        <th>Icon_3</th>
                        <th>Icon_4</th>
                        <th>Action</th>
                    </tr>
                    <?php $i=0; while($data=$footer_1->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo ++$i ?></td>
                           
                            <td><?php echo $data['logo'] ?></td>
                            <td><?php echo $data['details'] ?></td>
                            <td><?php echo $data['icon_1'] ?></td>
                            <td><?php echo $data['icon_2'] ?></td>
                            <td><?php echo $data['icon_3'] ?></td>
                            <td><?php echo $data['icon_4'] ?></td>
                                                      
    <td>
    
    <a href="edit_footer_1.php?id=<?php echo $data['id'] ?>" class="btn btn-xs btn-success">Edit</a>   
    <a href="delete_footer_1.php?id=<?php echo $data['id'] ?>" class="btn btn-xs btn-danger"
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
<script>
  $(function () {
    // Summernote
    $('.summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>
