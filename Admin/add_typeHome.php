<?php
    include('header.php');
?>
    <main>
        <form action="" method="POST" class="register" enctype="multipart/form-data">
            <?php
                if(isset($_POST['submit']))
                {
                    $name = $_POST['nameTypeHome'];
                    $sql = "INSERT INTO tb_typeHome(name_typeHome) VALUES('$name')";
                    $res = mysqli_query($conn, $sql);
                    if($res == true){
                        header("Location:typeHome.php");
                    }
                    else
                    {
                        header("Location:add_typeHome.php");
                    }
                }
            
            ?>
            <div class="form-group first-span">
                <span>Tên loại nhà</span>
                <input type="text" class="form-control" name="nameTypeHome" value="">
            </div>
            <input type="submit" name="submit" value="Update user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
            <div style="margin-bottom: 5rem;">
            </div>
        </form>
<?php
    include('footer.php');
?>
