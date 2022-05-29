<?php
    include('header.php');
?>
    <main>
        <?php
            if(isset($_GET['id_typeHome']))
            {
                $id_typeHome = $_GET['id_typeHome'];
            }
            $sql = "select * from tb_typeHome Where status = 1 and id_typeHome = $id_typeHome";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                $row = mysqli_fetch_assoc($res);
                $nameTypeHome = $row['name_typeHome'];
            }
            
        ?>
        <!-- CODE PHP -->

        <form action="" method="POST" class="register" enctype="multipart/form-data">
            <?php
                if(isset($_POST['submit']))
                {
                    $nameTypeHome1 = $_POST['nameTypeHome'];
                    $sql2 = "UPDATE tb_typeHome SET name_typeHome = '$nameTypeHome1' Where id_typeHome = $id_typeHome";
                    $res2 = mysqli_query($conn, $sql2);
                    if($res2 == true){
                        header("Location:typeHome.php");
                    }
                    else
                    {
                        header("Location:update_typeHome.php");
                    }
                }
            
            ?>
            <div class="form-group first-span">
                <span>ID</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_typeHome;?>">
            </div>
            <div class="form-group first-span">
                <span>Tên loại nhà</span>
                <input type="text" class="form-control" name="nameTypeHome" value="<?php echo $nameTypeHome?>">
            </div>
            <input type="submit" name="submit" value="Update user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
            <div style="margin-bottom: 5rem;">
            </div>
        </form>
<?php
    include('footer.php');
?>
