<?php
    include('header.php');
?>
    <main>
        <a href="add_user.php" class="btn btn-add"><i class="fas fa-user-plus"></i> Thêm người dùng</a>
        <div>
            <!-- <h2 style="font-weight: 400; color:green; margin-top: 2rem;">Thêm thành công!</h2> -->
        </div>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Quản lý tài khoản người dùng</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Họ & tên</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Ngày sinh</th>
                                    <th>Cập nhật cuối</th>                                   
                                    <th>Chức vụ</th>
                                    <th>Trạng thái</th>
                                    <th>Cập nhật</th>
                                    <th>Xóa bỏ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_user where status != 3";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_user = $row['id_user'];
                                                $firstName = $row['firstName'];
                                                $lastName = $row['lastName'];
                                                $email = $row['email'];
                                                $user_pass = $row['user_pass'];
                                                $phone = $row['phoneNumber'];
                                                $gender = $row['gender'];
                                                $birthday =  $row['birthday'];
                                                $date = $row['regisdate'];
                                                $level = $row['levelUser'];
                                                $status = $row['status'];
                                                $address = $row['address'];
                                             
                                                
                                ?>
                                                <tr>
                                                    <td><?php echo $id_user; ?></td>
                                                    <td><?php echo $firstName. " ".$lastName ?></td>                                                                
                                                    <td><?php echo $email; ?></td> 
                                                    <td><?php echo $phone; ?></td>       
                                                    <td>
                                                        <?php
                                                            if($birthday== null)
                                                            {
                                                                 ?>
                                                                <span>Không có dữ liệu</span>
                                                                 <?php
                                                                }  
                                                                else{
                                                                    ?>
                                                                    <span> <?php echo $birthday = date("d-m-Y", strtotime($birthday));; ?> </span>
                                                                    <?php
                                                                }
                                                        ?>
                                                    </td>    
                                                    <td>
                                                        <?php
                                                            if($date== null)
                                                            {
                                                                 ?>
                                                                <span>Không có dữ liệu</span>
                                                                 <?php
                                                                }  
                                                                else{
                                                                    ?>
                                                                    <span> <?php echo $date = date("d-m-Y", strtotime($date));; ?> </span>
                                                                    <?php
                                                                }
                                                        ?>
                                                    </td>   
                                                    <td>
                                                        <?php
                                                            if($level== null)
                                                            {
                                                                ?>
                                                                <span>Không có dữ liệu</span>
                                                                <?php
                                                            }
                                                            if($level == 1)
                                                            {
                                                                ?>
                                                                <span>Admin</span>
                                                                <?php
                                                            }
                                                            if($level== 2)
                                                            {
                                                                ?>
                                                                <span>Nhân viên</span>
                                                                <?php
                                                            }
                                                            if($level== 3)
                                                            {
                                                                ?>
                                                                <span>Khách hàng</span>
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>              
                                                    <td>
                                                        <?php
                                                            if($status == 2)
                                                            {
                                                                ?>
                                                                <span class="badge success">Active</span>
                                                                <?php
                                                            }
                                                            if($status == 1 || $status == null)
                                                            {
                                                                ?>
                                                                <span class="badge warning">Chưa đủ dữ liệu</span>
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>                                                                
                                                    <td>
                                                        <a href="update_user.php?id_user=<?php echo $id_user; ?>" class="update-icon">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                            <a href="delete_user.php?id_user=<?php echo $id_user; ?>" class="delete-icon">
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