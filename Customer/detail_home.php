<?php
 session_start();
 $iduser = $_SESSION['id_customerSession'];
include('../config/config.php');
?>

<head>
    <title>Thông tin căn hộ</title>
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
<link rel="stylesheet" type="text/css" href="./css/lightbox.min.css">
<script type="text/javascript" src="./js/lightbox-plus-jquery.min.js"></script>
    <style>
        #gallery {
            margin-top: 10px;
        }

        #gallery ul {
            margin: 0;
            padding: 0;
        }

        #gallery ul li {
            width: 150px;
            float: left;
            list-style: none;
            margin-right: 5px;
            margin-bottom: 5px;
            height: 100px;
            text-align: center;
            padding: 3px;
            border-radius: 8px;
            border: 2px solid #355C7D;
            background: #fafafb;
        }

        #gallery ul li img {
            max-width: 100%;
            max-height: 100%;
            vertical-align: middle;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>
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
                    $sql2 = "SELECT * FROM `tb_user` WHERE id_user = '$iduser'";
                    $res2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($res2);
                    $cc = $row2['status'];
                    

                    ?>
                    <div class="nav-item dropdown">
                        <div style="display:flex;" class="ifuser">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $row2['firstName']?> <?php echo $row2['lastName']?></a>
                            <img style="width:40px; height:40px; border-radius:50%;" class="img-fluid" src="../img/<?php echo $row2['image'] ?>" alt="">
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
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Thông tin</h1>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img-fluid" src="img/header.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Search Start -->
                                </br>
    <div style=" margin-left:15px; width:98%; height:12px; background-color:#5ad1b5; border-radius: 5px" class="lane"></div>
    <!-- Search End -->


    <!-- Property List Start -->
    <form action="" method="POST"> 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h2 class="mb-3">Thông tin chi tiết</h2>
                    </div>
                </div>

            </div>
            <?php
            $idhome = $_GET['id_home'];
            $sql1 = "SELECT * FROM `tb_home` WHERE id_home = '$idhome'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($res1);
            $idtypehome = $row1['id_typeHome'];
            $sql5 = "SELECT * FROM `tb_typehome` WHERE id_typeHome = '$idtypehome'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_assoc($res5);
            $nametypehome = $row5['name_typeHome'];
            ?>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img style="width:100%; height:350px;" class="" src="../img/<?php echo $row1['image'] ?>" alt="Đéo có ảnh thêm mệt vl"></a>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top:0" class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div style="transform: translateY(-0.6rem);">
                                <h1><?php echo $row1['name_home'] ?></h1>
                            </div>
                            <h6>Loại nhà: <?php echo $nametypehome ?></h1>
                            </h6>
                            <labe><h5 style="color:#63d076;;"><?= $row1['price']?></h5></label>
                            <div id="gallery">
                                <ul>
                                    <li><a href="../img/<?php echo $row1['image2'] ?>" data-lightbox="mygallery"><img src="../img/<?php echo $row1['image2'] ?>" /></a></li>
                                    <li><a href="../img/<?php echo $row1['image3'] ?>" data-lightbox="mygallery"><img src="../img/<?php echo $row1['image3'] ?>" /></a></li>
                                    <li><a href="../img/<?php echo $row1['image4'] ?>" data-lightbox="mygallery"><img src="../img/<?php echo $row1['image4'] ?>" /></a></li>
                                    <li><a href="../img/<?php echo $row1['image5'] ?>" data-lightbox="mygallery"><img src="../img/<?php echo $row1['image5'] ?>" /></a></li>
                                </ul>
                            </div>
                            <!-- condition request -->
                            <?php if($cc == 1 )
                                    {
                            ?>
                                        <div style="margin-top:205px; padding-left: 20px;"><a class="btn btn-danger" href="active.php?id_user=1">Xác thực tài khoản</a></div>
                                        <span class="dropdown-item" style="color: red; font-style: italic;">Lưu ý: Xác thực tài khoản để có thể yêu cầu đặt cọc</span>       
                            <?php
                                    }else if($cc == 2)
                                    {
                            ?> 
                           <div style="margin-top:205px; padding-left: 20px;"><button name="submit" type="button" id="add-contract" class="btn btn-primary add-contract">Yêu cầu đặt cọc</button></div>                                                                        
                            
                            <div class="insert"></div>
                            <?php
                                    }
                                    else if($cc == 4)
                                    {
                                        ?>
                                        <div style="margin-top:205px; padding-left: 20px;" ><span  style= "color: #FADB0D; font-style: italic;"> Đang chờ xác thực</span></div>
                                        <span class="dropdown-item" style="color: red; font-style: italic;">Lưu ý: Xác thực tài khoản để có thể yêu cầu đặt cọc</span>       
                                        <?php
                                    }

                            ?>                                               
                            <!-- end condition request -->
                            <!-- gán dữ liệu -->
                            <div class="input-group mb-3">      
                                <input  name="id_home" value="<?php echo $idhome ?>" type="hidden" class="form-control id_home">
                                <input  name="id_customer" value="<?php echo $iduser ?>" type="hidden" class="form-control id_customer">
                            </div>
                            <!-- end gán dữ liệu -->           
                        </div>


                        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h2>Mô tả</h2>
                            <p><?php echo $row1['description'] ?></p>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h4>Căn hộ liên quan</h4></br>
                            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                                <?php
                                $sql = "SELECT * FROM `tb_home` WHERE status = 1 and id_typeHome = '$idtypehome'";
                                $qr = mysqli_query($conn, $sql);
                                if ($qr) {
                                    while ($row = mysqli_fetch_assoc($qr)) {
                                        ?>
                                                <div class="testimonial-item bg-light rounded p-3">
                                                    <div class="bg-white border rounded p-4">                                                                   
                                                        <div class="d-flex align-items-center">
                                                           <a href="detail_home.php?id_home=<?= $row['id_home'] ?>"><img style="width:200px; height:200px;" class="img-fluid rounded" src="../img/<?= $row['image'] ?>" style="width: 45px; height: 45px;"></a>
                                                            <div class="ps-3">
                                                                <div style="transform: translateY(-3.5rem);">
                                                                <h5  class="fw-bold mb-1"><?= $row['name_home']?></h5>
                                                                <h6 class="fw-bold mb-1"><?=$row['price']?> VNĐ</h6>
                                                                </div>
                                                                <a style="transform: translateY(3.3rem);" class="btn btn-success" href="./detail_home.php?id_home=<?= $row['id_home'] ?>">Xem nhà</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                            </div>
                            </div>
                        </div>


                    <!-- Hết phần hiển thị -->
                </div>
            </div>
             </form>
            <!-- Property List End -->


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
            <a href="tel:+84397433097" class="btn btn-lg btn-primary btn-lg-square back-to-top single"><i class="fa-solid fa-phone-flip"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
<script>
    $(document).ready(function() {
        action = "add"
        $(".add-contract").on("click", function() {
            id_home   = $(".id_home").val()
            id_customer = $(".id_customer").val()
            swal({
                    title: "Bạn có chắc chắn muốn gửi yêu cầu đặt cọc không?",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {


                        $.ajax({
                            url: "http://localhost/Archiiro/Customer/contract.php",
                            method: "post",
                            data: {
                                id_home: id_home,
                                id_customer: id_customer,
                                action: action
                            },
                            success: function(dt) {
                                swal("Gửi yêu cầu đặt cọc thành công!", {
                                    icon: "success",                              
                                    footer:  '<a href="index_home.php">Quay trở lại trang chủ</a>'
                                });
                                $(".insert").html(dt)
                            }
                        })
                    } else {
                        swal("Hủy thao tác!");
                    }
                });
        })

     
    })
</script>      