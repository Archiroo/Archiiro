<?php
    include('header.php');
?>
    <main>
        <a href="add_home.php" class="btn btn-add"><i class="fas fa-user-plus"></i> Thêm mới căn hộ</a>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Thông tin căn hộ</h3>
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
    </div>

<?php
include('footer.php');
?>