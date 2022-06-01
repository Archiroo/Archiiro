<?php
    include('header.php');
?>
    <main>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Thông tin khách hàng</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Họ & tên đệm</th>
                                    <th>Tên</th>
                                    <th>Số CCCD</th>
                                    <th>Ngày cấp</th>
                                    <th>Được cấp bởi</th>
                                    <th>Mặt trước</th>                                   
                                    <th>Mặt sau</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_user, tb_customer where tb_user.id_user = tb_customer.id_customer and levelUser = 3 and tb_user.status != 3 and tb_customer.status != 3";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_user = $row['id_customer'];
                                                $firstName = $row['firstName'];
                                                $lastName = $row['lastName'];
                                                $cardNumber = $row['cardNumber'];
                                                $dateRange = $row['dateRange'];
                                                $isuseBy =  $row['isuseBy'];
                                                $imgFront = $row['imageFront'];
                                                $imgBack = $row['imageBack'];
                                                $status = $row['status'];
                                                
                                ?>
                                                <tr>
                                                    <td><?php echo $id_user; ?></td>
                                                    <td><?php echo $firstName; ?></td>            
                                                    <td><?php echo $lastName; ?></td>                                                        
                                                    <td><?php echo $cardNumber; ?></td>   
                                                    <td>
                                                        <?php
                                                            if($dateRange== null)
                                                            {
                                                                 ?>
                                                                <span>Không có dữ liệu</span>
                                                                 <?php
                                                                }  
                                                                else{
                                                                    ?>
                                                                    <span> <?php echo $dateRange = date("d-m-Y", strtotime($dateRange));; ?> </span>
                                                                    <?php
                                                                }
                                                        ?>
                                                    </td>    
                                                    <td><?php echo $isuseBy; ?></td>   
                                                    <td>
                                                        <img src="../image/<?php echo $imgFront; ?>" alt="" width="100px">
                                                    </td>
                                                    <td>
                                                        <img src="../image/<?php echo $imgBack; ?>" alt="" width="100px">
                                                    </td>           
                                                    <td>
                                                        <?php
                                                            if($status==2)
                                                            {
                                                                ?>
                                                                <span class="badge success">Success</span>
                                                                <?php
                                                            }
                                                            if($status == 1 || $status == null)
                                                            {
                                                                ?>
                                                                <span class="badge warning">Processing</span>
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>                                                                
                                                    <td>
                                                            <a href="delete_customer.php?id_user=<?php echo $id_user; ?>" class="delete-icon">
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