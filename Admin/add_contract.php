<?php
include('header.php');
?>
<main>
        <form action="" method="POST" class="register">
            <?php
            if (isset($_POST['submit'])) {
                $id_homee = $_POST['id_home'];
                $id_stafff = $_POST['id_staff'];
                $id_customerr = $_POST['id_customer'];

                $sql3 = "INSERT INTO tb_contract(id_home, id_customer,id_staff, status) VALUES($id_homee, $id_customerr, $id_stafff, 1)";
                $res3 = mysqli_query($conn, $sql3);
                if($res3 == true){
                    header("Location:contract.php");
                }
                else{
                    header("Location:add_contract.php");
                }

            }

            ?>
            <div class="form-group">
                <span>Tên căn hộ</span>
                <select name="id_home" style="display:block;">
                    <?php
                    $sql = "SELECT * FROM tb_home WHERE status = 1";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res)) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<option value="' . $row['id_home'] . '">' . $row['name_home'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <span>Tên khách hàng</span>
                <select name="id_customer" style="display:block;">
                    <?php
                    $sql1 = "SELECT * FROM tb_user, tb_customer WHERE tb_user.id_user = tb_customer.id_customer and tb_user.levelUser = 3 and tb_customer.status = 1";
                    $res1 = mysqli_query($conn, $sql1);
                    if (mysqli_num_rows($res1)) {
                        while ($row1 = mysqli_fetch_assoc($res1)) {
                            $id_customer = $row1['id_customer'];
                            $firstName1 = $row1['firstName'];
                            $lastName1 = $row1['lastName'];
                            echo '<option value="' . $id_customer . '">' . $firstName1 . " " . $lastName1 . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <span>Tên nhân viên</span>
                <select name="id_staff" style="display:block;">
                    <?php
                    $sql2 = "SELECT * FROM tb_user, tb_staff WHERE tb_user.id_user = tb_staff.id_staff and tb_user.levelUser = 2 and tb_user.status = 2";
                    $res2 = mysqli_query($conn, $sql2);
                    if (mysqli_num_rows($res2)) {
                        while ($row2 = mysqli_fetch_assoc($res2)) {
                            $id_staff = $row2['id_staff'];
                            $firstName2 = $row2['firstName'];
                            $lastName2 = $row2['lastName'];
                            echo '<option value="' . $id_staff . '">' . $firstName2 . " " . $lastName2 . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <input type="submit" name="submit" value="Add user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
        </form>
<?php
    include('footer.php');
?>