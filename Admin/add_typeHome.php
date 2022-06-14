<?php
include('header.php');
?>
<section class="view" id="order">
    <section class="recent" style="margin: 8rem 0 0 1rem;">
        <div class="activity-grid">
            <div class="activity-card">
                <h3>Thêm loại căn hộ</h3>
            </div>
        </div>
    </section>
    <form action="" method="POST">
        <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['nameTypeHome'];
                $sql = "INSERT INTO tb_typeHome(name_typeHome, status) VALUES('$name', 1)";
                $res = mysqli_query($conn, $sql);
                if ($res == true) {
                    header("Location:typeHome.php");
                } else {
                    header("Location:add_typeHome.php");
                }
        }

        ?>
        <div class="inputBox">
            <div class="input">
                <span>Loại căn hộ</span>
                <input type="text" name="nameTypeHome" placeholder="Nhập loại căn hộ">
            </div>
        </div>


        <input style="padding: 0.9rem 2rem;" type="submit" name="submit" value="Thêm mới" class="btn">
        <a href="account.php" class="btn btn-add btn-cancel">Hủy bỏ</a>
    </form>

</section>
<?php
include('footer.php');
?>