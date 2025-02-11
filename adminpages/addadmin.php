<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <script src="../lib/jquery/jquery.min.js"></script>
    <title>Admins - Royal Recipe Restaurant</title>
    <link href="../img/profile.png" rel="icon">
<style>
.lblerror{
	color: #f03c44;
	font-size: 17px;
	font-weight: 500;
	float: right;
	padding-right: 50px;
	display: none;
}


</style>






<script>
        $(document).ready(function(){
            $("#repass").keyup(function(){


                 var pass = $("#pass").val();
                 var repass = $("#repass").val();

                if((pass!=repass)||(pass=="")||(repass="")){
                    $("#errmsg").css("display","block");
                    $("#btn").attr('disabled', 'disabled');
                }
                else{
                    $("#errmsg").css("display","none");
                    $("#btn").removeAttr('disabled');
                }

            });


            $("#repass").focus(function(){


                var pass = $("#pass").val();
                var repass = $("#repass").val();

                if((pass!=repass)||(pass=="")||(repass="")){
                    $("#errmsg").css("display","block");
                    $("#btn").attr('disabled', 'disabled');
                }
                else{
                    $("#errmsg").css("display","none");
                    $("#btn").removeAttr('disabled');
                }

            });
        });

</script>





</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-dark fixed-top">
                <a class="navbar-brand" href="admin.php"><img src="../img/logo4.png" alt="logo" width="120%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </nav>
        </div>
  
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="../admin.php"><i class="fa fa-fw fas fa-desktop"></i>Dashboard</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="users.php"><i class="fa fa-fw fas fa-users"></i>Users</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw  fas fa-shopping-basket"></i>Items</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="additem.php">Add Items</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="items.php">Manage Items</a>
                                        </li>
                                        </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-shopping-cart"></i>Orders</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables.php">Table Reservations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="foodorders.php">Food Orders</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fas fa-user"></i>Admins</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="addadmin.php">Add Admin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manageadmins.php">Manage Admins</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#"><i class="fa fa-fw fas fa-envelope"></i>Messages</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="../index.html"><i class="fa fa-fw far fa-arrow-alt-circle-right"></i>Go To Web Page</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#"><i class="fa fa-fw  fas fa-power-off"></i>Log Out</a>
                            </li>

                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Add an Admin</h2>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                                    
                                    <div class="card-body">
                                        <form method="POST" action="newadmin.php">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Username</label>
                                                <input id="inputText3" type="text" class="form-control" name="uname" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Email</label>
                                                <input id="inputText3" type="email" class="form-control" name="email" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Password</label>
                                                <input type="password" class="form-control" id="pass" name="pass" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="repass" name="repass" required>
                                                <label class="lblerror" id="errmsg">Password doesn't Match</label>
                                            </div>

                                            

                                           

                                             
                                            



                                            <div class="form-group">
                                                <input type="submit" id="btn" value="Add Admin" class="btn btn-success" name="submit">
                                            
                                            </div>
                                            
                                            
                                            
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>





        
                









                </div>

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
              <!-- ============================================================== -->
    </div>
            
            </div>





            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Royal Recipe Restaurant. All rights reserved. Created by <a href="https://www.facebook.com/dulaj.nadawa">Dulaj Nadawa</a>.
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>