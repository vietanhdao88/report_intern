<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update User</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div id="wrapper">
      <nav
        class="navbar navbar-default navbar-cls-top"
        role="navigation"
        style="margin-bottom: 0"
      >
        <div class="navbar-header">
          <a class="navbar-brand">FinishLine Controller</a>
        </div>
        <div class="header-logo" style="margin-left: 30px">
          <img src="./assets/images/logo.png" alt="logo" />
        </div>
        <div class="header-right">
          <div class="header-menu">
            <div class="user">
              <div class="bg-img">
                <img
                  src="https://upload.wikimedia.org/wikipedia/vi/2/2b/Avengers_%28Marvel_Comics%29_vol_3_num_38.jpg"
                  alt=""
                  style="border-radius: inherit; width: 100%; height: 100%"
                />
              </div>
              <span class="las la-power-off" style="color: #000"></span>
              <span style="font-size: 20px; color: #000">Logout</span>
            </div>
          </div>
        </div>
      </nav>
      <!-- /. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="https://upload.wikimedia.org/wikipedia/vi/2/2b/Avengers_%28Marvel_Comics%29_vol_3_num_38.jpg" class="img-thumbnail" />

                    <div class="inner-text">
                        Dao Viet Anh
                    </div>
                </div>

            </li>
            <li>
                <a  href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width:30px ; height:30px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                      </svg>
                      
                    <span>Dashboard</span></a>
            </li>
            <li>
                <a href="list_user.php"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" style="width:30px ; height:30px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                    <span>User</span>
                </a>
            </li>
             <li>
                <a href="#" style="display: flex;align-items: center;justify-content: space-between !important;">
                    <div style="display: flex;align-items: center;column-gap: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 30px;height:30px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                          </svg>
                        <span>Product</span>
                    </div>
                    <span class="fa arrow"></span>
                </a>
                 <ul class="nav nav-second-level">
                    <li>
                        <a class="active-menu" href="product.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 30px;height:30px">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                              </svg>
                              <span>Add Product</span>
                        </a>
                    </li>
                    <li>
                        <a class="active-menu" href="list_product.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 30px;height:30px">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                              </svg>
                              <span>List Product</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                    <a href="#" style="display: flex;align-items: center;justify-content: space-between !important;">
                        <div style="display: flex;align-items: center;column-gap: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 30px;height:30px">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                              </svg>
                            <span>Brand</span>
                        </div>
                        <span class="fa arrow"></span>
                    </a>
                     <ul class="nav nav-second-level">
                        <li>
                            <a class="active-menu" href="brand.php">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 30px;height:30px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                                  </svg>
                                  <span>Add Brand</span>
                            </a>
                        </li>
                        <li>
                            <a class="active-menu" href="list_brand.php">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 30px;height:30px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                                  </svg>
                                  <span>List Brand</span>
                            </a>
                        </li>
                    </ul>
            </li>
        </ul>
            
        </div>
      </nav>
      <!-- /. NAV SIDE  -->
      <div id="page-wrapper">
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <h1 class="page-head-line">Update User</h1>
              
            </div>
          </div>
          <?php 
                include ('control.php');
                $get_data = new data();
                $select = $get_data ->
                select_id('user' , $_GET['update_user']); foreach($select as
          $se) ?>
          <!-- /. ROW  -->
          <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="panel panel-info">
                <div class="panel-heading">Update Product</div>
                <div class="panel-body">
                  <form role="form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>FirstName</label>
                      <input
                        class="form-control"
                        type="text"
                        name="firstname"
                        value="<?php echo $se['firstname'] ?>"
                      />
                    </div>
                    <div class="form-group">
                      <label>LastName</label>
                      <input
                        class="form-control"
                        type="text"
                        name="lastname"
                        value="<?php echo $se['lastname'] ?>"
                      />
                    </div>

                    <div class="form-group">
                      <label>Birthdate</label>
                      <div class="form-group">
                      <input
                        class="form-control"
                        type="date"
                        name="birthdate"
                        value="<?php echo $se['birthdate'] ?>"
                        style="width:300px"
                      />
                      </div>
                     
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input
                        class="form-control"
                        name="email"
                        value="<?php echo $se['email'] ?>"
                      ></input>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input
                        class="form-control"
                        type="text"
                        name="password"
                        value="<?php echo $se['password'] ?>"
                      />
                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <input
                        class="form-control"
                        type="number"
                        name="role"
                        value="<?php echo $se['role'] ?>"
                        style="width:50px"
                      />
                    </div>
                    <button type="submit" class="btn btn-info" name="btn-up" style="background-color: #6A5AF9;padding: 12px 15px;border-radius: 10px;">
                       Update User
                    </button>
                  </form>
                  <?php
                 
                  if(isset($_POST['btn-up'])){
                   
                    $update = $get_data ->
                  update_user($_POST['firstname'], $_POST['lastname'] ,
                  $_POST['birthdate'] , $_POST['email'] , $_POST['password'] ,$_POST['role'],
                   $_GET["update_user"]);
                    if($update){ 
                      echo "<script>alert('Cập nhật User thành công')
                      window.location ='list_user.php'</script>"; }else{ echo "update user that bai"; }
                  } ?>
                </div>
              </div>
            </div>
          </div>
          <!--/.ROW-->
        </div>
        <!-- /. PAGE INNER  -->
      </div>
      <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
      &copy;Viet Anh Degign</a>
  </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
  </body>
</html>

