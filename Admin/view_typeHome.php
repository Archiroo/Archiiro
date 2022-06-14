<?php
include('header.php');
?>
<section class="view" id="order">

    <?php
        if (isset($_GET['id_typeHome'])) {
            $id_typeHome = $_GET['id_typeHome'];
        }
        $sql = "select * from tb_typeHome Where status = 1 and id_typeHome = $id_typeHome";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count == 1) {
            $row = mysqli_fetch_assoc($res);
            $nameTypeHome = $row['name_typeHome'];
    }

    ?>
    <section class="recent" style="margin: 8rem 0 0 1rem;">
        <div class="activity-grid">
            <div class="activity-card">
                <h3>Thông tin tài khoản</h3>
            </div>
        </div>
    </section>
    <form action="" method="POST" class="register" enctype="multipart/form-data">
        <!-- Update -->
        <?php
            if (isset($_POST['submit'])) {
                $nameTypeHome1 = $_POST['nameTypeHome'];
                $sql2 = "UPDATE tb_typeHome SET name_typeHome = '$nameTypeHome1' Where id_typeHome = $id_typeHome";
                $res2 = mysqli_query($conn, $sql2);
                if ($res2 == true) {
                    header("Location:typeHome.php");
                } else {
                    header("Location:view_typeHome.php");
                }
        }

        ?>
        <div class="inputBox">
            <div class="input">
                <span>Tên loại căn hộ</span>
                <input type="text" name="nameTypeHome" value="<?php echo $nameTypeHome; ?>">
            </div>
        </div>

        <input style="padding: 0.9rem 2rem;" type="submit" name="submit" value="Cập nhật" class="btn">
        <a href="typeHome.php" class="btn btn-add btn-cancel">Hủy bỏ</a>
    </form>

</section>
<?php
include('footer.php');
?>