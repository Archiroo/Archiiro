<?php 
      include('../config/config.php');
?>
<head>
    <title>Makaan - Real Estate HTML Template</title>
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
                <a href="homeindex.php" class="navbar-brand d-flex align-items-center text-center">
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
                        <a href="homeindex.php" class="nav-item nav-link">Trang chủ</a>
                        <a href="about.html" class="nav-item nav-link">Chúng tôi</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Bất động sản</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.html" class="dropdown-item active">Property List</a>
                                <a href="property-type.html" class="dropdown-item">Property Type</a>
                                <a href="property-agent.html" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trang</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Error</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
                    </div>
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Đăng nhập</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Property List</h1> 
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        
        <!-- Search End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Gửi yêu cầu đặt cọc</h1>
                            <p>Ngôi nhà mà bạn mơ ước đang trong tầm tay. Hãy tận hưởng những đêm ấm cúng cùng gia đình bạn.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-content request">
                <form action="" method="POST">
                    <?php
                    if (isset($_POST['add'])) {
                        $idhome = $_GET['id_home'];
                        $idcontract = $_POST['id_contract'];
                        $content = $_POST['content'];
                        $status = $_POST['status'];       
                        $sql1 = "INSERT INTO `tb_contract`(`id_contract`, `id_home`, `id_customer`, `id_staff`, `content`, `status`) 
                        VALUES ('$idcontract','$idhome','1','1',N'$content','$status')";
                        $res1 = mysqli_query($conn, $sql1); 
                        $sql2 = "UPDATE `tb_home` SET `status`='2' WHERE id_home = '$idhome'";
                        $res2 = mysqli_query($conn, $sql2);
                    if ($res1 == true && $res2 == true) { 
                        echo $_SESSION['error'] = '<h4 style="color: green;">Gửi yêu cầu đặt cọc thành công.<h4>';
                        } else { 
                        echo $_SESSION['error'] = '<h4 style="color: red;">Đặt cọc không thành công.<h4>';
                         }
                    }
                    ?>    
                    <h4>Thông tin khách hàng</h4></br>
                        <input name="id_contract"></input>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Yêu cầu của khách hàng</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="deadlineBTL" placeholder="Enter deadlineBTL" name="status" value="2">
                        </div>
                    <div style="margin-top:25px;"><button name="add" type="submit" class="btn btn-primary" id="submit">Gửi yêu cầu</button></div>
                    </form>
                </div>
            
            </div>
        </div>
        <!-- Property List End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-12 col-md-6">
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
                </div>
            </div>
            <div class="container">
                <form action="" method="POST">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
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
                </form>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/main.js"></script>
    <script>
    //    $(document).ready(function (){
    //     $('.delete_btn_ajax').click(function (e){
    //         e.preventDefault();
    //         console.log("Đặt cọc hông");
    //         // var $request = $(this).closest().find()
    //     });
    //    });
   
    </script>
    <?php
    if(isset($_SESSION['succses'])){
    ?>
        <script>
                Swal({
                icon: 'success',
                title: '<?php echo $_SESSION['succses']?>',
                showConfirmButton: false,
                timer: 1500
                });
        </script>
    <?php
    }
    ?>
