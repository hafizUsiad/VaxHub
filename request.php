<?php session_start();?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminpanel/dashmin/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 12:43:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.html" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="../../cdns/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../../jsdeliver/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include "sidebar.php"?>

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include "navbar.php"?>

            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <!-- <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Table</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <!-- <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Accented Table</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <!-- <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Hoverable Table</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <!-- <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Color Table</h6>
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <!-- <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Bordered Table</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <!-- <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Table Without Border</h6>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
            <h6 class="mb-4">Requests</h6>
            <?php if($_SESSION["role"] == "3")
                    {
                        
                  ?>
            <a type="button" class="btn btn-outline-primary m-2" href="parentrequest.php"><i class="fa fa-plus me-2"></i>Request</a>
            <?php  }?>
        </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Child Name</th>
                                            <th scope="col">Vacine </th>
                                            <th scope="col">Hospital</th>
                                            <th scope="col">Date and Time</th>
                                            <th scope="col">Parent name</th>
                                            <?php if($_SESSION["role"] == "1" or $_SESSION["role"] == "3")
                  {?>
                                            <th scope="col">Status</th><?php }?>


                                            <?php if($_SESSION["role"] == "1" or $_SESSION["role"] == "2")
                    {

                  ?>
                                            <th scope="col">Actions</th>     <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tbody>
                  <?php
                  include "connect.php";
                  if($_SESSION["role"] == "1")
                  {
                    $sql = "select r.*,r.id as rid,c.name as cname,v.name as vname,h.name as hname,u.name as uname,c.id,v.id,u.id,h.id from request r,vaccine v,hospital h,user u,child c where child = c.id and vaccine = v.id and parent = u.id and hospital = h.id and status='Pending'";
                  }
                  else if($_SESSION["role"] == "3"){
                    $sql = "select r.*,r.id as rid,c.name as cname,v.name as vname,h.name as hname,u.name as uname,c.id,v.id,u.id,h.id from request r,vaccine v,hospital h,user u,child c where child = c.id and vaccine = v.id and parent = u.id and hospital = h.id and parent = '".$_SESSION["userid"]."' ";
                  }
                  else
                  {
                    $sql = "select r.*,r.id as rid,c.name as cname,v.name as vname,h.name as hname,u.name as uname,c.id,v.id,u.id,h.id from request r,vaccine v,hospital h,user u,child c where child = c.id and vaccine = v.id and parent = u.id and hospital = h.id and hospital = '".$_SESSION["userid"]."'and status='Approved'";
                  }
                  $record = mysqli_query($con,$sql);
                //   print_r(mysqli_fetch_array($record));
                  
                  while($row = $record->fetch_array(MYSQLI_ASSOC))
                  {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $row ["rid"]?></th>
                    <td><?php echo $row ["cname"]?></td>
                    <td><?php echo $row ["vname"]?></td>
                    <td><?php echo $row ["hname"]?></td>
                    <td><?php echo $row ["date"]?> <?php echo $row ["time"]?></td>
                    <td><?php echo $row ["uname"]?></td>
                    <?php if($_SESSION["role"] == "1" or $_SESSION["role"] == "3")
                  {?>
                    <td><?php echo $row ["status"]?></td><?php }?>
                    <td>
                    <?php if($_SESSION["role"] == "2")
                    {?>
                        <a href="complete.php?id=<?php echo $row["rid"] ?>" type="button" class="btn btn-outline-success btn-sm">Done</a>
                 <?php } ?>
                    <?php if($_SESSION["role"] == "1")
                    {
                        
                  ?>
                    <a href="approve.php?id=<?php echo $row["rid"] ?>" type="button" class="btn btn-outline-success btn-sm">Approve</a>
                    <a href="decline.php?id=<?php echo $row["rid"] ?>" onclick="return confirm ('Are You Sure?'); " type="button" class="btn btn-outline-danger btn-sm">Decline</a>
                  <?php } ?>
                  </td>
                    
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">VAXHUB</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="#">Waniya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="../../jquery/jquery-3.4.1.min.js"></script>
    <script src="../../jsdeliver/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from adminpanel/dashmin/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 12:43:51 GMT -->
</html>