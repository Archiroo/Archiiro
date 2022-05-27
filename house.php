<?php
$conn = mysqli_connect("localhost", "root", "", "qlpm");
if ($_POST['action'] == "get_data") {


    $sql_post = "select * from tb_post";
    $query_post = mysqli_query($conn, $sql_post);

    if (mysqli_num_rows($query_post) > 0) {
        while ($row_post = mysqli_fetch_assoc($query_post)) {
?>
            <article class="post vt-post">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                        <div class="post-type post-img">
                            <a href="#"><img src="<?= $row_post['image_post'] ?>" class="img-responsive" alt="image post"></a>
                        </div>
                        <div class="author-info author-info-2">
                            <ul class="list-inline">
                                <li>
                                    <div class="info">
                                        <p>Posted on: <?= $row_post['date_post'] //Mar 21, 2015 
                                                        ?></p>
                                        <strong> </strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                        <div class="caption">
                            <h3 class="md-heading"><a href="#"><?= $row_post['name_post'] ?></a></h3>
                            <p> <?= $row_post['content_post'] ?> </p>

                            <!-- Button trigger modal -->
                            <button id_post="<?= $row_post['id_post'] ?>" name="display" type="button" class="btn btn-warning update" data-bs-toggle="modal" data-bs-target="#fix">
                                Sửa bài viết
                            </button>
                            <button type="button" id="<?= $row_post['id_post']?>" class="btn btn-info del_post">Xóa</button>
                            <!-- Modal -->



            </article>
<?php

        }
    }
}

if ($_POST['action'] == "add_data") {
    $name_post = $_POST['name_post'];
    $content = $_POST['content'];
    $name_nv = $_POST['name_nv'];
    $img = $_POST['img'];

    $sql = " INSERT INTO tb_post(id_post, name_post, content_post, staff_post, image_post) 
    VALUES ('','$name_post','$content',' $name_nv',' $img ')";
    $qr = mysqli_query($conn, $sql);
    if ($qr) {
        echo "Thêm   thành  công";
    } else {
        echo $sql;
        echo "thêm thất bại";
    }
}
if ($_POST['action'] == "get_data_id") {
    $id = $_POST['id_post'];
    $sql = "SELECT*from   tb_post  where id_post=  $id";
    $qr = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($qr);
    echo json_encode($row);
}
if ($_POST['action'] == "update_data") {
    // name_post1 : name_post1,
    // content_post1 :content_post1,
    // name_staff1 :name_staff1,
    // img_post1 :img_post1 ,
    $name_post1 = $_POST['name_post1'];
    $content_post1 = $_POST['content_post1'];
    $name_staff1 = $_POST['name_staff1'];
    $img_post1 = $_POST['img_post1'];
    $id_post = $_POST['id_post'];
    $sql_update = "UPDATE `tb_post` SET `name_post`='$name_post1',
    `content_post`='$content_post1',`staff_post`='$name_staff1',`image_post`='$img_post1' WHERE `id_post`='$id_post'";
    $qery_update = mysqli_query($conn, $sql_update);
    if ($qery_update) {
        echo "Sửa thành công";
    } else {
        echo "sửa thất bại";
    }
   
}
if($_POST['action']=="delete_post")
{
    $id_post = $_POST['id_post'];
    $sql_del = "DELETE FROM `tb_post` WHERE id_post = $id_post";
    $query_del = mysqli_query($conn,$sql_del);
    if($query_del)
    {
        echo "Xóa thành công";
    }else {
        echo "Xóa thất bại";
    }
}
?>