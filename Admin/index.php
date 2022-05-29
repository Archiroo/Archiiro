<?php
    include('header.php');
?>
    <main>
        <h2 class="dash-title">Overiew</h2>
        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-user-graduate"></span>
                    <div>
                        <?php
                            $sql = "SELECT * FROM tb_user, tb_staff where tb_user.id_user = tb_staff.id_staff and levelUser = 2 and status = 2";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
                        ?>
                        <h5>Nhân viên</h5>
                        <h4><?php echo $count; ?></h4>
                        <a href="index.php">
                            View all
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-book-open"></span>
                    <div>
                        <?php
                            $sql1 = "SELECT * FROM tb_home where status =1";
                            $res1 = mysqli_query($conn, $sql1);
                            $count1 = mysqli_num_rows($res1);
                        ?>
                        <h5>Số căn hộ</h5>
                        <h4><?php echo $count1; ?></h4>
                        <a href="indexHome.php">
                            View all
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-folder"></span>
                    <div>
                        <?php
                            $sql3 = "Select * from tb_contract where status = 1 ";
                            $res3 = mysqli_query($conn, $sql3);
                            $count3 = mysqli_num_rows($res3);
                        ?>
                        <h5>Số hợp đồng</h5>
                        <h4><?php echo $count3;?></h4>
                        <a href="indexContract.php">
                            View all
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-user-tie"></span>
                    <div>
                        <h5>Duyệt hợp đồng</h5>
                        <?php
                            $sql2 = "SELECT * FROM tb_contract where status = 2";
                            $res2 = mysqli_query($conn, $sql2);
                            $count2 = mysqli_num_rows($res2);
                        ?>
                        <h4><?php echo $count2;?></h4>
                        <a href="index_checkContract.php">
                            View all
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Thông tin nhân viên</h3>
                    <div class="table-responsive">
                    <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Họ & tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Giới tính</th>
                                    <th>Lương /ngày</th>
                                    <th>Làm từ ngày</th>
                                    <th>Số hợp đồng</th>
                                    <th>Hình ảnh</th>
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
                                                $email = $row['email'];
                                                $phone = $row['phoneNumber'];
                                                $gender = $row['gender'];
                                                $daySalary = $row['daySalary'];
                                                $dayStart = $row['dayStart'];
                                                $numberContract = $row['numberContract'];
                                                
                                ?>
                                                <tr>
                                                    <td><?php echo $id_user;?></td>
                                                    <td><?php echo $firstName. " ".$lastName; ?></td>            
                                                    <td><?php echo $email; ?></td>      
                                                    <td><?php echo $phone; ?></td>      
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

<?php
    include('footer.php');
?>