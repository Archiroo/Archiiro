<?php
include('header.php');
$id_admin = $_SESSION['id_staffSession'];
?>
<section class="view" id="order">
    <section class="recent" style="margin: 8rem 0 0 1rem;">
        <div class="activity-grid">
            <div class="activity-card">
                <h3>Thêm bài viết</h3>
            </div>
        </div>
    </section>
    <form action="" method="POST" class="register">
        <?php
            if (isset($_POST['submit'])) {
                $title = $_POST['title'];
                $content = $_POST['content'];

                $sql1 = "INSERT INTO tb_post(postTitle, postContent, idWriter, status)
                        VALUES('$title', '$content', $id_admin, 1)";
                $res1 = mysqli_query($conn, $sql1);
                if ($res1 == TRUE) {
                    header("Location:post.php");
                } else {

                    header("Location:add_post.php");
                }
            }
        ?>
        <div class="inputBox">
            <div class="input">
                <span>Tiêu đề</span>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="input">
            </div>
        </div>

        <div class="inputBox">
            <div class="input" style="margin-top: 1rem;">
                <span>Nội dung bài viết</span>
                <textarea cols="30" name="content" rows="5"></textarea>
            </div>
        </div>
        <input style="padding: 0.9rem 2rem;" type="submit" name="submit" value="Tạo bài viết" class="btn">
        <a href="post.php" class="btn btn-add btn-cancel">Hủy bỏ</a>
    </form>

</section>
<?php
include('footer.php');
?>