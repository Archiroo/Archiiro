<?php
$conn = mysqli_connect("localhost", "root", "", "qlpm");
session_start();
?>

<link rel="stylesheet" href="./style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Button trigger modal -->

<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Thêm bài viết
</button>
<div class="container">
    <div class="col-md-12 col-lg-12 data">
    </div>
</div>
<!-- modal thêm bài viết -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="form_add" action="" method="POST">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm bài viết</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tên bài viết</label>
                        <input name="name" type="text" class="form-control" id="name_post">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nội dung bài viết</label>
                        <input name="content" type="text" class="form-control" id="content_post">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tên nhân viên đăng bài</label>
                        <input name="staff" type="text" class="form-control" id="name_nv">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ảnh</label>
                        <input name="img" type="text" class="form-control" id="img">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="add_post" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>

    </div>
</div>

<!-- modal sửa bài viết -->
<div class="modal fade" id="fix" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fix">Sửa bài viết</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên bài viết</label>
                    <input value="" name="name" type="text" class="form-control" id="name_post1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nội dung bài viết</label>
                    <input name="content" type="text" class="form-control" id="content_post1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên nhân viên đăng bài</label>
                    <input name="staff" type="text" class="form-control" id="name_nv1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Ảnh</label>
                    <input name="img" type="text" class="form-control" id="img1">
                </div>
            </div>
            <!-- <?php
            $sql_update_post ="UPDATE `tb_post` SET `id_post`='[value-1]',`name_post`='[value-2]',
            `content_post`='[value-3]',`staff_post`='[value-4]',`image_post`='[value-5]',`date_post`='[value-6]' WHERE 1";
            ?> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="update_post" id="update_post" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- <a class="btn btn-default" href="#" role="button">Read More</a> -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on("click",".del_post",function(){
            id_post = $(this).attr("id")
            $.ajax({
                url :"house.php",
                method :"post",
                data :{
                    action :"delete_post",
                    id_post :id_post
                },success:function(dt)
                {
                    load_data("get_data")
                }
            })
        })
  
        $("#update_post").click(function(){
            name_post1 =$('#name_post1').val()
            content_post1 =$("#content_post1").val()
            name_staff1 = $("#name_nv1").val()
            img_post1 = $("#img1").val()
            $.ajax({
                url :"house.php",
                method : "post",
                data :{
                  id_post:id_post,
                  name_post1 : name_post1,
                  content_post1 :content_post1,
                  name_staff1 :name_staff1,
                  img_post1 :img_post1 ,
                  action : "update_data"
                },
                success:function(dt)
                { 
                    load_data("get_data")
                    $("#fix").modal("hide")
                }
                
                
        })
    })
        $('#add_post').click(function() {
            name_post = $('#name_post').val()
            content = $('#content_post').val()
            name_nv = $('#name_nv').val()
            img = $('#img').val();
            if (name_post != "" && content != "" && name_nv != "" && img != "") {
                $.ajax({
                    url: "house.php",
                    method: "POST",
                    data: {
                        name_post: name_post,
                        content: content,
                        name_nv: name_nv,
                        img: img,
                        action: "add_data"
                    },
                    success: function(dt) {
                        // alert(dt)
                        load_data("get_data")
                        $('#form_add').trigger("reset")
                    }
                })
            } else {
                alert("vui lòng nhập  thông tin")
            }

        })
        load_data("get_data")
        $(document).on("click",".update",function(){
            id_post=$(this).attr("id_post")
            $.ajax({
                url: "house.php",
                method: "POST",
                data: {
                    action: "get_data_id",
                    id_post:id_post
                },
                dataType:"Json",
                success: function(dt) {
                   
                   $('#name_post1').val(dt['name_post'])
                   $('#content_post1').val(dt['content_post'])
                   $('#name_nv1').val(dt['staff_post'])
                   $('#img1').val(dt['image_post'])

                }
            })
        })
        function load_data(action) {
            $.ajax({
                url: "house.php",
                method: "POST",
                data: {
                    action: action
                },
                success: function(dt) {
                    $('.data').html(dt)
                }
            })


        }
    })
</script>