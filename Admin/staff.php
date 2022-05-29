<?php
    include('header.php');
?>
    <main>
        <a href="add_staff.php" class="btn btn-add"><i class="fas fa-user-plus"></i> Thêm nhân viên</a>
        <div>
            <!-- <h2 style="font-weight: 400; color:green; margin-top: 2rem;">Thêm thành công!</h2> -->
        </div>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Quản lý nhân viên</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Họ & tên đệm</th>
                                    <th>Tên</th>
                                    <th>Giới tính</th>
                                    <th>Lương /ngày</th>
                                    <th>Làm từ ngày</th>
                                    <th>Số hợp đồng</th>
                                    <th>Hình ảnh</th>
                                    <th>Cập nhật</th>
                                    <th>Xóa bỏ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * from tb_user, tb_staff WHERE tb_user.id_user = tb_staff.id_staff AND levelUser = 2 AND status = 2";
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
                                                $image = $row['image'];
                                                $gender = $row['gender'];
                                                $daySalary = $row['daySalary'];
                                                $dayStart = $row['dayStart'];
                                                $numberContract = $row['numberContract'];
                                                
                                ?>
                                                <tr>
                                                    <td><?php echo $id_user;?></td>
                                                    <td><?php echo $firstName; ?></td>            
                                                    <td><?php echo $lastName; ?></td>      
                                                    <td>
                                                       <?php
                                                            if($gender == null){
                                                                ?>
                                                                <span>Không có dữ liệu</span>
                                                                <?php
                                                            }
                                                            if($gender == 1){
                                                                ?>
                                                                <span>Nam</span>
                                                                <?php
                                                            }
                                                            if($gender == 2){
                                                                ?>
                                                                <span>Nữ</span>
                                                                <?php
                                                            }
                                                       ?>
                                                    </td>                                                      
                                                    <td><?php echo $daySalary;?> VND</td>    
                                                                    
                                                    <td>
                                                        <?php
                                                            if($dayStart== null)
                                                            {
                                                                 ?>
                                                                <span>Không có dữ liệu</span>
                                                                 <?php
                                                                }  
                                                                else{
                                                                    ?>
                                                                    <span> <?php echo $dayStart = date("d-m-Y", strtotime($dayStart)); ?> </span>
                                                                    <?php
                                                                }
                                                        ?>
                                                    </td> 
                                                    <td>
                                                        <?php
                                                        if($numberContract == null || $numberContract == 0){
                                                            ?>
                                                            <span>Không có dữ liệu</span>
                                                            <?php
                                                        }
                                                        else{
                                                            ?>
                                                            <span><?php echo $numberContract?></span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="td-team">
                                                        <div class="img-1 img_alone">
                                                            <img style = "margin-left: 10px;" src="../image/<?php echo $image?>" alt="">
                                                        </div>
                                                    </td>   
                                                                                                
                                                    <td>
                                                        <a href="update_staff.php?id_user=<?php echo $id_user; ?>" class="update-icon">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                            <a href="delete_staff.php?id_user=<?php echo $id_user; ?>" class="delete-icon">
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