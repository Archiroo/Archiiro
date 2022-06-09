<?php
    include('connect_database/connect.php');
    if(!isset($_SESSION['id_adminSession'])) //nếu chưa đăng nhập thì ra ngoài
    {
        header("Location:../SignInUp/login.php");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/update.css">
    <title>Archiiro Company</title>
</head>

<body>
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="fas fa-building"></span>
                <span>Archiiro</span>
            </h3>
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
            <!--nút 3 ghạch-->
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="fas fa-home"></span>
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="staff.php">
                        <span class="fas fa-user"></span>
                        <span>Nhân viên</span>
                    </a>
                </li>
                <li>
                    <a href="customer.php">
                        <span class="fas fa-user-friends"></span>
                        <span>Khách hàng</span>
                    </a>
                </li>
                <li>
                    <a href="typeHome.php">
                        <span class="fas fa-folder"></span>
                        <span>Loại căn hộ</span>
                    </a>
                </li>
                <li>
                    <a href="home.php">
                        <span class="fas fa-folder"></span>
                        <span>Căn hộ</span>
                    </a>
                </li>
                <li>
                    <a href="contract.php">
                        <span class="fas fa-paste"></span>
                        <span>Hợp đồng</span>
                    </a>
                </li>
                <li>
                    <a href="post.php">
                        <span class="fas fa-user-friends"></span>
                        <span>Bài viết</span>
                    </a>
                </li>
                <li>
                    <a href="account.php">
                        <i class="fa-solid fa-gear"></i>
                        <span>Tài khoản</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="fas fa-power-off"></span>
                        <span>Đăng xuất</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- SEARCH -->
    <div class="main-content">
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="text" placeholder="Tìm kiếm">
            </div>
            <div class="social-icons">
                <div>
                    <img src="../image/admin.jpg" alt="">
                </div>
            </div>
        </header> 
              