<?php
include 'inc/database.php';
$db = new Database();
$categories = $db->select("categories", "*", ['show_in_menu' => 1]);
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>E-GramPanchayat</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.png">
        <!-- NewsBoard CSS  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/widgets.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
            .modal-header,  .close {
                background: linear-gradient(-135deg, #c850c0, #4158d0);

                text-align: center;
                font-size: 30px;

            }
            .modal-footer {

                background: linear-gradient(-135deg, #c850c0, #4158d0);
                box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
            }
            .container .close-btn:hover{
                color: #3498db;
            }


/* Style for Login/Logout button */
.btn-default {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
}

/* Style for Login/Logout button on hover */
.btn-default:hover {
  background-color: #fff;
  color: #111;
}
        </style>

    </head>

    <body>
        <div class="scroll-progress primary-bg"></div>
        <!-- Start Preloader -->
        <!--     <div class="preloader text-center">
            <div class="circle"></div>
        </div> -->
        <!--Offcanvas sidebar-->
        <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
            <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>


            <!--Ads-->

        </aside>
        <!-- Start Header -->
        <header class="main-header header-style-1 font-heading">
            <div class="header-top">
                <div class="container">
                    <div class="row pt-20 pb-20">
                        <div class="col-md-3 col-xs-6">
                            <a href="index.php"><img class="logo" src="assets/imgs/theme/minister-of-housing-logo.jpg" alt=""></a>
                        </div>
                        <div  class="col-md-9 col-xs-6 text-right header-top-right or ">
                            <ul  class="list-inline nav-topbar d-none d-md-inline">

                                <li class="list-inline-item "><a href="index.php"><h5>Home</h5></a></li>
                            </ul>
                            <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>

                            <ul class="list-inline nav-topbar d-none d-md-inline">

                                <li class="list-inline-item"><a href="about.php"><h5>About</h5></a></li>
                            </ul>
                            <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>

                            <ul class="list-inline nav-topbar d-none d-md-inline">

                                <li class="list-inline-item"><a href="contact-us.php"><h5>Contact</h5></a></li>
                            </ul>

                            <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>

                            <ul class="list-inline nav-topbar d-none d-md-inline">

                                <li class="list-inline-item"><a href="benificiary.php"><h5>Benificiary</h5></a></li>

                            </ul>
                            <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                            <ul  class="list-inline nav-topbar d-none d-md-inline">

                                <li class="list-inline-item "><a href="complaint.php"><h5>Complaint</h5></a></li>
                            </ul>
                            <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                            <ul class="list-inline nav-topbar d-none d-md-inline">

                                <li class="list-inline-item"><a href="yojna.php"><h5>All Yojana</h5></a></li>

                            </ul>
                            <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                            <ul class="list-inline nav-topbar d-none d-md-inline">
                                <?php if (!isset($user)) { ?>
                                    <li class="list-inline-item">  <button type="button" class="btn btn-default btn-lg"  data-toggle="modal" data-target="#exampleModal"><h5>Login</h5></button></li>
                                <?php } else { ?>
                                    <li class="list-inline-item">  <a href="logout.php"><button type="button" class="btn btn-default btn-lg"  >Logout</button></a></li>

                                <?php }
                                ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-sticky">
                <div class="container align-self-center position-relative">
                    <div class="mobile_menu d-lg-none d-block"></div>
                    <div class="main-nav d-none d-lg-block float-left">
                        <nav>
                            <!--Desktop menu-->

                            <!--Mobile menu-->
                            <ul id="mobile-menu" class="d-block d-lg-none text-muted">

                                <li> <a href="index.php">Home</a> </li>
                                <li> <a href="index.php">Home</a> </li>
                                <li> <a href="about.php">About</a> </li>
                                <li> <a href="benificiary.php">Benificiary List</a> </li>
                                <li class="list-inline-item"><a href="yojna.php">All Yojana</a></li>


                                <?php if (!isset($user)) { ?>
                                    <li class="list-inline-item">  <button type="button" class="btn btn-default btn-lg"  data-toggle="modal" data-target="#exampleModal">Login</button></li>
                                <?php } else { ?>
                                    <li class="list-inline-item">  <a href="logout.php"><button type="button" class="btn btn-default btn-lg"  >Logout</button></a></li>

                                <?php } ?>
                            </ul>
                        </nav>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </header>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-content">
                            <div class="modal-footer" style="padding:35px 50px;">
                                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                            </div>
                            <div class="modal-body" style="padding:40px 50px;">
                                <form role="form" action="login-validate.php" method="post">
                                    <div class="form-group">
                                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Mobile No</label>
                                        <input type="text" class="form-control" name="user_name" id="usrname" placeholder="Enter Mobile No.">
                                    </div>
                                    <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                        <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password">
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" checked>Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block color-royalblue"><span class="glyphicon glyphicon-off"></span> Login</button>
                                    <br>   <p>Not a member? <a href="signup.php">Sign Up</a></p>

                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Start search form-->