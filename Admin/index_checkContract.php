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
                                    <th>Khách hàng</th>
                                    <th>Người xử lý</th>
                                    <th>Tên căn hộ</th>
                                    <th>Cập nhật lúc</th>
                                    <th>Trạng thái</th>
                                    <th>Duyệt yêu cầu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_contract where status = 2";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_contract = $row['id_contract'];
                                                $id_home = $row['id_home'];
                                                $id_customer = $row['id_customer'];
                                                $id_staff = $row['id_staff'];
                                                $status = $row['status'];
                                                $lastDay = $row['dateCreate']
                                                
                                ?>
                                                <tr>
                                                    <td><?php echo $id_contract; ?></td>
                                                    <td>
                                                       <?php
                                                            $sql2 = "SELECT * FROM tb_user where id_user = $id_customer ";
                                                            $res2 = mysqli_query($conn, $sql2);
                                                            $count2 = mysqli_num_rows($res2);
                                                            if($count2 == 1){
                                                                $row2 = mysqli_fetch_assoc($res2);
                                                                $firstName1 = $row2['firstName'];
                                                                $lastName1 = $row2['lastName'];
                                                            }

                                                            echo $firstName1. " " .$lastName1;
                                                       ?>
                                                    </td>   

                                                    <td>
                                                       <?php
                                                            $sql3 = "SELECT * FROM tb_user where id_user = $id_staff ";
                                                            $res3 = mysqli_query($conn, $sql3);
                                                            $count3 = mysqli_num_rows($res3);
                                                            if($count3 == 1){
                                                                $row3 = mysqli_fetch_assoc($res3);
                                                                $firstName2 = $row3['firstName'];
                                                                $lastName2 = $row3['lastName'];
                                                            }

                                                            echo $firstName2. " " .$lastName2;
                                                       ?>
                                                    </td>  
                                                    
                                                    <td>
                                                       <?php
                                                            $sql3 = "SELECT * FROM tb_home where id_home = $id_home ";
                                                            $res3 = mysqli_query($conn, $sql3);
                                                            $count3 = mysqli_num_rows($res3);
                                                            if($count3 == 1){
                                                                $row3 = mysqli_fetch_assoc($res3);
                                                                $nameHome = $row3['name_home'];
                                                            }

                                                            echo $nameHome;
                                                       ?>
                                                    </td>        
                                                    
                                                    
                                                    <td> <?php echo $lastDay = date("d-m-Y", strtotime($lastDay)); ?></td>
                                                    <td>
                                                        <?php
                                                            if($status==1)
                                                            {
                                                                ?>
                                                                <span class="badge success">Thành công</span>
                                                                <?php
                                                            }
                                                            if($status == 2)
                                                            {
                                                                ?>
                                                                <span class="badge warning">Đang chờ duyệt</span>
                                                                <?php
                                                            }
                                                            if($status == 3)
                                                            {
                                                                ?>
                                                                <span class="badge warning">Khách hàng xử lý</span>
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>   
                                                    <td>
                                                        <a href="check_Contract.php?id_contract=<?php echo $id_contract; ?>" class="update-icon">
                                                             <i class="fa-solid fa-check"></i>
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

<?php
    include('footer.php');
?>