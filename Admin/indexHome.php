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
                                    <th>Loại nhà</th>
                                    <th>Tên nhà</th>
                                    <th>Giá</th>
                                    <th>Diện tích</th>
                                    <th>Địa chỉ</th>
                                    <th>Phòng khách</th>
                                    <th>Phòng ngủ</th>
                                    <th>Phòng tắm</th>
                                    <th>Cập nhật</th>
                                    <th>Xóa bỏ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_typeHome, tb_home Where tb_typeHome.id_typeHome = tb_home.id_typeHome and tb_typeHome.status = 1 and tb_home.status = 1";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_home = $row['id_home'];
                                                $name_typeHome = $row['name_typeHome'];
                                                $name_home = $row['name_home'];
                                                $price = $row['price'];
                                                $area = $row['area_home'];
                                                $address = $row['address_home'];
                                                $numberRoom = $row['numberRoom'];
                                                $numberBedRoom = $row['numberBedRoom'];
                                                $numberBathRoom = $row['numberBathRoom'];    
                                                
                                ?>
                                                <tr>
                                                    <td><?php echo $name_typeHome; ?></td>
                                                    <td><?php echo $name_home; ?></td>            
                                                    <td><?php echo $price; ?> VND</td>                                                        
                                                    <td><?php echo $area; ?> m2</td>   
                                                    <td><?php echo $address; ?></td>   
                                                    <td class = "center">
                                                        <?php echo $numberRoom; ?>
                                                    </td>   
                                                    <td class = "center">
                                                        <?php echo $numberBedRoom; ?>
                                                    </td>   
                                                    <td class = "center">
                                                        <?php echo $numberBathRoom; ?>
                                                    </td>  
                                                    <td>
                                                        <a href="update_home.php?id_home=<?php echo $id_home; ?>" class="update-icon">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                            <a href="delete_home.php?id_home=<?php echo $id_home; ?>" class="delete-icon">
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

<?php
    include('footer.php');
?>