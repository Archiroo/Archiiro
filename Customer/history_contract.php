<?php 
 session_start();
 $iduser = $_SESSION['id_customerSession'];
      include('../config/config.php');
?>
<head>
    <title>Trang chủ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index_home.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Archiiro</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index_home.php" class="nav-item nav-link">Trang chủ</a>
                        <a href="https://www.facebook.com/daihocthuyloi1959" class="nav-item nav-link">Chúng tôi</a>
                        <a href="tel:+84346785893" class="nav-item nav-link">Liên hệ</a>
                        
                    </div>
                    <!-- information user -->
                   <!-- information user -->
                   <?php
                    $sql2 = "SELECT * FROM `tb_user` WHERE id_user = '$iduser'";
                    $res2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($res2);
                    $cc = $row2['status'];
                    ?>
                    <div class="nav-item dropdown">
                        <div style="display:flex;" class="ifuser">
                            <img style="width:40px; height:40px; border-radius:50%;" class="img-fluid" src="../img/<?php echo $row2['image'] ?>" alt="">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $row2['firstName']?> <?php echo $row2['lastName']?></a>
                        </div>                        
                        <div class="dropdown-menu rounded-0 m-0">
                                <a href="personal_information.php?id_user=<?php echo $iduser;?>" class="dropdown-item">Thông tin cá nhân</a>
                                <a href="history_contract.php?id_user=<?php echo $iduser;?>" class="dropdown-item">Lịch sử đặt cọc</a>
                                <a href="change_password.php?id_user=<?php echo $iduser;?>" class="dropdown-item">Đổi mật khẩu</a>
                                <a href="index.php" class="dropdown-item">Đăng xuất</a>
                                <div style=" margin-left:15px; width:130px; height:0.2px; background-color:black;" class="lane"></div>
                                <?php if($cc == 1 )
                                    {
                                        ?>
                                        <a href="active.php?id_user=1" class="dropdown-item" style="color: red;" href="active.php"> Xác thực tài khoản</a>
                                        <?php
                                    }else if($cc == 2)
                                    {
                                        ?>
                                        <span class="dropdown-item" style="color: green; font-style: italic;"> Đã xác thực</span>
                                        <?php
                                    }
                                    else if($cc == 4)
                                    {
                                        ?>
                                        <span class="dropdown-item" style="color: #FADB0D; font-style: italic;"> Đang chờ xác thực</span>
                                        <?php
                                    }

                                    ?>
                               
                            </div>
                    </div>
                    <!-- End information user -->
                    <!-- End information user -->
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <!-- Header End -->
        <!-- Contact -->
        <?php
            $sql1 = "SELECT * FROM `tb_contract` WHERE  id_customer = '$iduser' ";
            $res1 = mysqli_query($conn, $sql1);      
        ?>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-4 border-right">
                
                </div>
                <div class="col-md-8 border-right">
                   
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 style="margin-left:110px" class="text-right">Tất cả giao dịch</h4>
                        </div>                                                                 
                    
                </div>
            </div>
        </div>
        <form action="" method="POST">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã giao dịch</th>
                <th scope="col">Tên nhà</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Nhân viên phụ trách</th>
                <th scope="col">Xác nhận</th>
                <th scope="col">Hủy</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
                while ($row1 =mysqli_fetch_array($res1)) { ?>                   
                    <tr>
                        <td><?php $idcontract = $row1['id_contract']; echo $idcontract ?></td>                                   
                        <td>
                            <!-- lấy thông tin nhà -->
                            <?php  $idhome = $row1['id_home']; 
                             $sql3 = "SELECT * FROM `tb_home` WHERE id_home = '$idhome'";
                             $res3 = mysqli_query($conn, $sql3);
                             $row3 = mysqli_fetch_array($res3);
                             $namehome = $row3['name_home'];
                             $image = $row3['image'];
                             echo $namehome;
                            ?>
                            <!-- end lấy thông tin nhà -->
                        </td>
                        <td><img class="img-fluid" alt="Ảnh nhà" style="width:auto; height:70px" src="../img/<?php echo $image?>"></td>     
                        <?php if($row1['id_staff'] == null)
                                    {
                                        ?>
                                            <td><span style="color: green; font-style: italic;">Đang chờ nhân viên phụ trách</span></td>
                                        <?php
                                    }else
                                    {
                                        ?>
                                         <td><span style="font-weight: bold;">
                                            <!-- lấy thông tin nhân viên phụ trách -->
                                            <?php 
                                                $idstaff = $row1['id_staff'];
                                                $sql5 = "SELECT * FROM `tb_user` WHERE id_user = '$idstaff'";
                                                $res5 = mysqli_query($conn, $sql5);
                                                $row5 = mysqli_fetch_array($res5);
                                                $fristname = $row5['firstName'];
                                                $lastname = $row5['lastName'];
                                                echo $fristname;
                                                echo " ";
                                                echo $lastname;
                                            ?></span></td>
                                            <!-- end lấy thông tin nhân viên phụ trách -->
                                        <?php
                                    }
                        ?>   
                        <?php if($row1['status'] == 3)
                                    {
                                        ?>
                                       <td><a href="confirm_contract.php?id_contract=<?php echo $row1['id_contract']; ?>"><button name="xacnhan" type="button" class="btn btn-warning">Xác nhận</button></a></td>
                                        <?php
                                    }else if($row1['status'] == 2)
                                    {
                                        ?>
                                         <td><span style="color: green; font-style: italic;">Chờ phản hồi từ công ty</span></td>
                                        <?php
                                    }
                                    else if($row1['status'] == 4)
                                    {
                                        ?>
                                         <td><span style="color: #FADB0D; font-style: italic;">Đang xử lý</span></td>
                                        <?php
                                    }
                                    else if($row1['status'] == 5)
                                    {
                                        ?>
                                         <td><span style="color: #FADB0D; font-style: italic;">Đang xử lý</span></td>
                                        <?php
                                    }
                                    else if($row1['status'] == 6)
                                    {
                                        ?>
                                         <td><span style="color: red; font-style: italic;">Đã hủy</span></td>
                                        <?php
                                    }
                                    else if($row1['status'] == 1)
                                    {
                                        ?>
                                         <td><span style="color: green; font-style: italic;">Thành công</span></td>
                                        <?php
                                    }
                                    else 
                                    {
                                        ?>
                                         <td><span style="color: green; font-style: italic;">.......</span></td>
                                        <?php
                                    }

                        ?>
                         <?php if($row1['status'] == 4 || $row1['status'] == 3)
                                    {
                                        ?>
                                      <td><a href="cancel_contract.php?id_contract=<?php echo $row1['id_contract']; ?>"><button name="huy" type="button" class="btn btn-danger text-white me-2">Hủy</button></a></td>                   
                                        <?php
                                    }else
                                    {
                                        ?>
                                         <td><span style="color: green; font-style: italic;">Khóa</span></td>
                                        <?php
                                    }
                        ?>                    
                    </tr>
            <?php             
            }
            ?>
            </tbody>
    </table>

</form>
        <!-- End Contact -->

       

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                            <h5 style="margin-left:40%; margin-top:40px" class="text-white mb-4">Liên lạc</h5>
                            <p style="margin-left:40%" class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>175 Tây Sơn, Đống Đa, Hà Nội</p>
                            <p style="margin-left:40%" class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0346785893</p>
                            <p style="margin-left:40%" class="mb-2"><i class="fa fa-envelope me-3"></i>aqdz01@gmail.com</p>
                            <div style="margin-left:44%;" class="d-flex pt-6">
                                <a class="btn btn-outline-light btn-social" href="https://twitter.com/QuauTn"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/quanqueo25"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/watch?v=byJEgtVJxk0&t=12s"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/watch?v=byJEgtVJxk0&t=12s"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    <div class="col-lg-6 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.636976405065!2d105.82263251481679!3d21.00718423601005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8109765ba5%3A0xb3be79f8f64a59f9!2zMTc1IFAuIFTDonkgU8ahbiwgVHJ1bmcgTGnhu4d0LCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1654858272464!5m2!1svi!2s" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>