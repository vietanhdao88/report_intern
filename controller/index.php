<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DashBoard</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <!-- <link href="assets/css/custom.css" rel="stylesheet" /> -->
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
          <a class="navbar-brand">FinishLine controller</a>
        </div>
        <div class="header-logo" style="margin-left: 30px;">
          <img src="./assets/images/logo.png" alt="logo">
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
              <a href="logout.php">
              <span class="las la-power-off" style="color: #000"></span>
              <span style="font-size: 20px; color: #000">Logout</span>
              </a>
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
                <a  href="index.html">
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
              <h1 class="page-head-line">Dashboard Admin FinishLine</h1>
            </div>
          </div>
          <!-- /. ROW  -->
          <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="content">
                <!-- Navbar -->
                <main>
                    <!-- Insight -->
                    <ul class="insight">
                        <li>
                            <i class='bx bx-calendar-check' ></i>
                            <span class="info">
                                <h3>1.074</h3>
                                <p>Pair Order</p>
                            </span>
                        </li>
                        <li>
                            <i class='bx bx-show-alt' ></i>
                            <span class="info">
                                <h3>3.944</h3>
                                <p>Site Visit</p>
                            </span>
                        </li>
                        <li>
                            <i class='bx bx-line-chart' ></i>
                            <span class="info">
                                <h3>14.721</h3>
                                <p>Searches</p>
                            </span>
                        </li>
                        <li>
                            <i class='bx bx-dollar-circle' ></i>
                            <span class="info">
                                <h3>$6,742</h3>
                                <p>Total Sales</p>
                            </span>
                        </li>
                    </ul>
                    <!-- End of insight -->
        
                    <div class="bottom-data">
                        <div class="orders">
                            <div class="header">
                                <i class='bx bx-receipt' ></i>
                                <h3>Recent Orders</h3>
                                <i class='bx bx-filter' ></i>
                                <i class='bx bx-search-alt-2' ></i>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="https://cdn.dribbble.com/userupload/10809004/file/original-e0c26b671af97259a731f1321364110f.jpg?crop=522x259-1086x682&resize=400x300&vertical=center" alt="">
                                            <p>Dao Viet Anh</p>
                                        </td>
                                        <td>
                                            08-08-2003
                                        </td>
                                        <td>
                                            <span class="status complete">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <img src="https://cdn.dribbble.com/userupload/10809004/file/original-e0c26b671af97259a731f1321364110f.jpg?crop=522x259-1086x682&resize=400x300&vertical=center" alt="">
                                            <p>Dao Viet Anh</p>
                                        </td>
                                        <td>
                                            08-08-2003
                                        </td>
                                        <td>
                                            <span class="status pending">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <img src="https://cdn.dribbble.com/userupload/10809004/file/original-e0c26b671af97259a731f1321364110f.jpg?crop=522x259-1086x682&resize=400x300&vertical=center" alt="">
                                            <p>Dao Viet Anh</p>
                                        </td>
                                        <td>
                                            08-08-2003
                                        </td>
                                        <td>
                                            <span class="status processing">Processing</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End of Orders -->
        
                        <!-- Reminders -->
                        <div class="reminders">
                            <div class="header">
                                <i class='bx bx-note' ></i>
                                <h3>Reminders</h3>
                                <i class='bx bx-filter' ></i>
                                <i class='bx bx-plus' ></i>
                            </div>
                            <ul class="task-list">
                                <li class="completed">
                                    <div class="task-title">
                                        <i class='bx bx-check-circle' ></i>
                                        <p>Start Our Meeting</p>
                                        <i class='bx bx-dots-vertical-rounded' ></i>
                                    </div>
                                </li>
                                <li class="completed">
                                    <div class="task-title">
                                        <i class='bx bx-check-circle' ></i>
                                        <p>Analyse Our Site</p>
                                        <i class='bx bx-dots-vertical-rounded' ></i>
                                    </div>
                                </li>
                                <li class="danger">
                                    <div class="task-title">
                                        <i class='bx bx-x-circle' ></i>
                                        <p>Play Football</p>
                                        <i class='bx bx-dots-vertical-rounded' ></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </main>
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
    <script src="assets/js/app.js"></script>
  </body>
</html>
