<?php
    include('header.php');
?>
    <main>
        <a href="add_post.php" class="btn btn-add"><i class="fas fa-user-plus"></i> Thêm bài viết</a>
        <div>
            <!-- <h2 style="font-weight: 400; color:green; margin-top: 2rem;">Thêm thành công!</h2> -->
        </div>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>User management</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <th>Người viết</th>
                                    <th>Ngày thêm</th>
                                    <th>Cập nhật cuối</th>
                                    <th>Trạng thái</th>
                                    <th>Duyệt bài</th>
                                    <th>Cập nhật</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_post where status != 3";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_post = $row['id_post'];
                                                $id_writer = $row['idWriter'];
                                                $title = $row['postTitle'];
                                                $content = $row['postContent'];
                                                $date1 = $row['dateCreate'];
                                                $date2 = $row['lastUpdate'];
                                                $status = $row['status'];
                                                
                                ?>
                                                <tr>
                                                    <td><?php echo $title; ?></td>
                                                    <td>
                                                       <?php
                                                            $sql1 = "SELECT * FROM tb_user where id_user = $id_writer ";
                                                            $res1 = mysqli_query($conn, $sql1);
                                                            $count1 = mysqli_num_rows($res1);
                                                            if($count1 == 1){
                                                                $row1 = mysqli_fetch_assoc($res1);
                                                                $firstName1 = $row1['firstName'];
                                                                $lastName1 = $row1['lastName'];
                                                            }

                                                            echo $firstName1. " " .$lastName1;
                                                       ?>
                                                    </td>            
                                                    <td><?php echo $date1 = date("d-m-Y", strtotime($date1));; ?></td>                                                        
                                                    <td><?php echo $date2 = date("d-m-Y", strtotime($date2));; ?></td>                                                        
                                                         
                                                    <td>
                                                        <?php
                                                            if($status==1)
                                                            {
                                                                ?>
                                                                <span class="badge success">Đã duyệt</span>
                                                                <?php
                                                            }
                                                            if($status == 2)
                                                            {
                                                                ?>
                                                                <span class="badge warning">Chờ duyệt</span>
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>     
                                                    <td>
                                                        <a href="check_post.php?id_post=<?php echo $id_post; ?>" class="update-icon">
                                                             <i class="fa-solid fa-check"></i>
                                                        </a>
                                                    </td>                                                          
                                                    <td>
                                                        <a href="update_post.php?id_post=<?php echo $id_post; ?>" class="update-icon">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                            <a href="delete_post.php?id_post=<?php echo $id_post; ?>" class="delete-icon">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                <?php
                                            }
                                        }
                                        else
                                        {

                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
include('footer.php');
?>