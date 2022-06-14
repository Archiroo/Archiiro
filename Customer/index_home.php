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
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <form action="" method="POST">
                <div class="container">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <select name="type_home" id="type_home" class="form-select border-0 py-3 ">
                                        <?php
                                        $sql_type = "select * from tb_typehome";
                                        $qr_type = mysqli_query($conn, $sql_type);
                                        if ($qr_type) {
                                            while ($row = mysqli_fetch_assoc($qr_type)) {
                                        ?>
                                                <option  value="<?= $row['id_typeHome'] ?>"><?= $row['name_typeHome'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <!-- <option value="1">List Home</option>
                                    <option value="2">List Type</option>
                                    <option value="3">List Agent</option>  -->
                                </div>
                                <div class="col-md-6">
                                    <select name="area_home" id="area_home" class="form-select border-0 py-3 ">
                                        <?php
                                        $sql_home = "select * from tb_home group by area_home";
                                        $qr_home = mysqli_query($conn, $sql_home);
                                        if ($qr_home) {
                                            while ($row = mysqli_fetch_assoc($qr_home)) {
                                        ?>
                                                <option value="<?= $row['area_home'] ?>"><?= $row['area_home'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                        <button type="button" class="btn btn-dark border-0 w-100 py-3 search_house">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Search End -->
      
        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Các dạng căn hộ</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <?php
                    $sql = "Select tb_typehome.name_typeHome, Count(tb_home.id_home) AS number_Home From tb_home, tb_typeHome
                    Where tb_home.id_typeHome  = tb_typeHome.id_typeHome  Group By tb_typeHome.id_typeHome ";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
                        while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                                    <div class="rounded p-4">
                                        <div class="icon mb-3">
                                            <img class="img-fluid" src="../img/icon-luxury.png" alt="Icon">
                                        </div>
                                        <h6><?= $row['name_typeHome'] ?></h6>
                                        <span><?= $row['number_Home'] ?> căn hộ</span>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Category End -->

        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">NTT HOME</h1>
                            <p>Ngôi nhà mà bạn mơ ước đang trong tầm tay. Hãy tận hưởng những đêm ấm cúng cùng gia đình bạn.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
               
                    <?php
                    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:6;
                    $current_page = isset($_GET['page'])?$_GET['page']:1;
                    $offset = ($current_page - 1) * $item_per_page;
                    $sql1 = "SELECT * FROM tb_home WHERE status = 1 ORDER BY 'id_home' ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
                    $res1 = mysqli_query($conn,$sql1);               
                    $sqlsp = mysqli_query($conn,"SELECT * FROM `tb_home`");
                    $totalsp = mysqli_num_rows($sqlsp);                  
                    $totalpage = ceil($totalsp / $item_per_page);
                    ?>
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">          
                            <?php while($row = mysqli_fetch_array($res1)){
                           ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="detail_home.php?id_home=<?=$row['id_home']?>"><img style="height:230px;" class="img-fluid" src="../img/<?php echo $row['image'] ?>" alt=""></a>
                                    </div>
                                    <div class="p-2">
                                        <a style="margin-top:30px; padding-bottom:10px;" class=" d-flex align-items-center  h5 mb-2" href="detail_home.php?id_home=<?=$row['id_home']?>"><?php echo $row['name_home']?></a>
                                        <h6 class="d-flex align-items-center text-primary mb-3"><span><?=$row['price']?> VNĐ</h5>
                                        <p class="d-flex align-items-center"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row['address_home']?></p>                                      
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i><?php echo $row['area_home']?> m2</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i><?php echo $row['numberBedRoom']?> Phòng ngủ</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i><?php echo $row['numberBathRoom']?> Phòng tắm</small>
                                    </div>
                                </div>
                            </div>
                        <?php }?>                        
                </div>
                <?php
                        include "page.php";
                        ?>                
            </div>
            <div class="tab-content search_house_page">

            </div>
        </div>
        <!-- Property List End -->

        <!-- Post -->
        <div class="container-xxl py-5">
           <div class="container">
               <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                   <h1 class="mb-3">Bài viết</h1>
                   <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
               </div>
               <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                   <?php
                    $sql = "SELECT * FROM `tb_post` limit 0,6";
                    $qr = mysqli_query($conn, $sql);
                    if ($qr) {
                        while ($row = mysqli_fetch_assoc($qr)) {
                    ?>
                           <div class="testimonial-item bg-light rounded p-3">
                               <div class="bg-white border rounded p-4">
                                   <p><?= substr($row['postContent'], 0, 200) ?> ... </p> 
                                   <a  href="./post_detail.php?id_post=<?=$row['id_post']?>">Read more</a>

                                 
                                   <div class="d-flex align-items-center">
                                       <img class="img-fluid flex-shrink-0 rounded" src="../img/<?= $row['img_post'] ?>" style="width: 45px; height: 45px;">
                                       <div class="ps-3">
                                           <h6 class="fw-bold mb-1"><?= $row['postTitle'] ?></h6>
                                           <small>Profession</small>
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
       <!-- End Post -->

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
        <a href="tel:+84346785893" class="btn btn-lg btn-primary btn-lg-square back-to-top single"><i class="fa-solid fa-phone-flip"></i></a>
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
    <script>
            $(document).ready(function() {
                action = "nothing"
                search(action)
                $(".search_house").on("click", function() {
                    type_house = $("#type_home").val()
                    area_house = $("#area_home").val()
                    action = "search"
                    search(type_house, area_house, action)
                    $("search_house").on("submit", function() {
                        return false
                    })
                    $('html, body').animate({
                        scrollTop: $(".search_house_page").offset().top
                    }, 1000);
                })

                function search(type_house, area_house, action) {
                    $.ajax({
                        url: "http://localhost/Archiiro/Customer/search_house.php",
                        method: "post",
                        data: {
                            action: action,
                            type_house: type_house,
                            area_house: area_house,
                        },
                        success: function(dt) {
                            $(".search_house_page").html(dt)
                        }
                    })
                }
            })
        </script>