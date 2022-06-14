<?php 
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
    <link href="css/style1.css" rel="stylesheet">
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
                   <?php
                    $sql2 = "SELECT * FROM `tb_user` WHERE 1";
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
                                <a href="personal_information.php?id_user=1" class="dropdown-item">Thông tin cá nhân</a>
                                <a href="history_contract.php?id_user=1" class="dropdown-item">Lịch sử đặt cọc</a>
                                <a href="change_password.php?id_user=1" class="dropdown-item">Đổi mật khẩu</a>
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
        
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Update Information personl -->
        <form method="POST" enctype="multipart/form-data">
        <div class="main-content">

        <div class="container">

            <div class="view-account">
                <section class="module">
                    <div class="module-inner">
                        <div class="side-bar">
                        </div>

                        <div class="content-panel">
                            
                                    <h3 class="fieldset-title">Thông tin cá nhân</h3>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3 col-xs-12 control-label">Số ID</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input name="cardNumber" type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3 col-xs-12 control-label">Ngày cấp</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input name="dateRange" type="date" class="form-control" >
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset">                    
                                    <div class="form-group">
                                        <label class="col-md-2  col-sm-3 col-xs-12 control-label">Nơi cấp</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input name="isuseBy" type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2  col-sm-3 col-xs-12 control-label">Ảnh mặt trước</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input name="imageFront" type="file" class="form-control" >
                                        </div>
                                        <label class="col-md-2  col-sm-3 col-xs-12 control-label">Ảnh mặt sau</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input name="imageBack" type="file" class="form-control" >
                                        </div>
                                    </div>

                                </fieldset>
                                <hr>
                                <div class="form-group">
                                    <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                        <button name="update" class="btn btn-primary" type="submit" >Gửi thông tin xác thực</button>
                                    </div>
                                </div>                        
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>
        <?php
        if (isset($_POST['update'])) {
           
            $cardnumber = $_POST['cardNumber'];
            $daterange = $_POST['dateRange'];
            $isuseby = $_POST['isuseBy'];
            $imagefront = $_FILES['imageFront']['name'];
            if ($imagefront != null) {
                $path = "../img/";
                $tmp_name = $_FILES['imageFront']['tmp_name'];
                move_uploaded_file($tmp_name,$path.$imagefront);
            }
            $imageback = $_FILES['imageBack']['name'];
            if ($imageback != null) {
                $path = "../img/";
                $tmp_name = $_FILES['imageBack']['tmp_name'];
                move_uploaded_file($tmp_name,$path.$imageback);
            }
    
            // Bước 2 câu lệnh truy vấn
            $sql1 = "INSERT INTO `tb_customer`(`id_customer`, `cardNumber`, `dateRange`, `isuseBy`, `imageFront`, `imageBack`) 
            VALUES (1,'$cardnumber','$daterange',N'$isuseby','$imagefront','$imageback')";
            $res1 = mysqli_query($conn, $sql1);
            if ($res1 == true) { 
               
                 $_SESSION['status'] = "Gửi yêu cầu xác thực thành công";
                 $_SESSION['status_code'] = "success";
               
                } else { 
                    $_SESSION['status'] = "Gửi yêu xác thực thất bại";
                    $_SESSION['status_code'] = "error";
                 }
            }
            ?>    
        }
        ?>
        </form>
        <!-- End Update Information personl -->

       

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <h5 class="text-white mb-4">Liên lạc</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>175 Tây Sơn, Đống Đa, Hà Nội</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0346785893</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>aqdz01@gmail.com</p>
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
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
                        
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <?php
        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
            ?>
        <script> 
            // window.location.assign('homeindex.php'), 
            Swal.fire({
            icon: "<?php echo $_SESSION['status_code'];?>",
            title: "<?php echo $_SESSION['status'];?>" ,
            footer: '<a class="btn btn-success" href="index_home.php?id_user=1">Xong</a>',
            showConfirmButton: false,
            });     
                
        </script>
        <?php 
            unset($_SESSION['status']);
         }
    ?>