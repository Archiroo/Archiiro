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
                                <a href="ifuser.php?id_user=1" class="dropdown-item">Thông tin cá nhân</a>
                                <a href="changepassword.php?id_user=1" class="dropdown-item">Đổi mật khẩu</a>

                                <div style=" margin-left:15px; width:130px; height:0.2px; background-color:black;" class="lane"></div>
                               <?php if($cc == 1 )
                                    {
                                        ?>
                                        <a  class="dropdown-item" style="color: red;" href="active.php"> Xác thực tài khoản</a>
                                        <?php
                                    }else if($cc == 2)
                                    {
                                        ?>
                                        <span class="dropdown-item" style="color: green; font-style: italic;"> Đã xác thực</span>
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


        <!-- Header Start -->
        <!-- Header End -->
        <!-- Information personl -->
        <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img id="phongto" class="rounded-circle mt-5" src="../img/<?php echo $row2['image'] ?>" style="width :100px ;height :100px ;">
                    <span class="font-weight-bold"></span>
                    <span class="text-black-50"></span><br>
                    <span><label for="image" class="btn btn-secondary"> Ảnh đại diện</label><input disabled id="image" type="file" name="image" style="display:none;"></span>
                </div>
            </div>
            <div class="col-md-7 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h4 style="margin-left:110px" class="text-right">Thông tin cá nhân</h4>
                                                </div>
                                                <div class="row mt-6">
                                                    <div class="col-md-6"><label class="labels"> Fist Name</label>
                                                        <input disabled name="user_name" type="text" class="form-control" placeholder="Full Name" value="<?php echo $row2['firstName']; ?>">
                                                    </div>
                                                    <div class="col-md-6"><label class="labels"> Last Name</label>
                                                        <input disabled name="user_name" type="text" class="form-control" placeholder="Full Name" value="<?php echo $row2['lastName']; ?>">
                                                    </div>
                                                    <br>
                                                    <div class="col-md-6"> <label class="labels">Giới tính</label>
                                                        <div class="form-control">
                                                            <input disabled <?php if ($row2['gender'] == 1) {
                                                                                echo "checked";
                                                                            } ?> type="radio" name="gender" value="1">
                                                            <label>Nam</label>
                                                            <input disabled <?php if ($row2['gender'] == 2) {
                                                                                echo "checked";
                                                                            } ?> type="radio" name="gender" value="0">
                                                            <label>Nữ</label>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"> <label class="labels"> Birthday</label>
                                                        <input disabled class="form-control" type="date" id="user_birthday" name="birthday" value="<?php echo $date = date("Y-m-d", strtotime($row2['birthday'])); ?>">
                                                    </div>
                                                    <div class="col-md-6"><label class="labels">Địa chỉ</label>
                                                        <input disabled name="user_phone" type="text" class="form-control" placeholder="Nhập SDT" value="<?php echo $row2['address'] ?>">
                                                    </div>
                                                    <div class="col-md-6"><label class="labels">Số điện thoại</label>
                                                        <input disabled name="user_phone" type="text" class="form-control" placeholder="Nhập SDT" value="<?php echo $row2['phoneNumber'] ?>">
                                                    </div>

                                                    <div class="col-md-6"><label class="labels">Email</label>
                                                        <input disabled name="user_email" type="email" class="form-control" placeholder="nhập email" value="<?php echo $row2['email'] ?>">
                                                    </div>                                 
                                                </div>
                                                <!-- <div class="row mt-3">
                                                                                                                               
                                                </div> -->
                                                <div class="col-md-6"><label class="labels"> Trạng thái</label>
                                                    <?php if($cc == 1 )
                                                        {
                                                            ?>
                                                            <a  class="dropdown-item" style="color: red;" href="active.php"> Xác thực tài khoản</a>
                                                            <?php
                                                        }else if($cc == 2)
                                                        {
                                                            ?>
                                                            <span class="dropdown-item" style="color: green; font-style: italic;"> Đã xác thực</span>
                                                            <?php
                                                        }

                                                        ?>
                                                    </div>
                                                <div class="mt-5 text-center">
                                                    <a href="updateifuser.php?id_user=1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            Sửa thông tin
                                                        </button></a>
                                                    <!-- Modal -->
                                                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered ">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn lưu không ?</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                                    <button type="submit" class="btn btn-primary" name="btn-luu">Lưu</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
        <!-- End Information personl -->

       

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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>