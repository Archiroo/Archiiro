<?php
    include('header.php');
?>
    <main>
        <form action="" method="POST" class="register">
            <?php
                if(isset($_POST['submit'])){
                    $title = $_POST['title'];
                    $content = $_POST['content'];

                    $sql1 = "INSERT INTO tb_post(postTitle, postContent, idWriter, status)
                    VALUES('$title', '$content', 1, 1)";
                    $res1 = mysqli_query($conn, $sql1);
                    if($res1==TRUE){
                    header("Location:post.php");
                    }
                    else{
                    
                    header("Location:add_post.php");
                    }
                }
            ?>
            <div class="form-group first-span">
                <span>Tiêu đề</span>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group first-span">
                <span>Nội dung</span>
                <input type="text" class="form-control" name="content">
            </div>
            <input type="submit" name="submit" value="Add user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
        </form>      
<?php
    include('footer.php');
?>