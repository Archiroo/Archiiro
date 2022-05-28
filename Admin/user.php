<?php
    include('header.php');
?>
    <main>
        <a href="add_user.php" class="btn btn-add"><i class="fas fa-user-plus"></i> Add user</a>
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
                                    <th>ID</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Birthday</th>
                                    <th>Last update</th>
                                    <th>Status</th>
                                    <th>Level</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_user";
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
                                                $phone = $row['phoneNumber'];
                                                $birthday =  $row['birthday'];
                                                $date = $row['regisdate'];
                                                $level = $row['levelUser'];
                                                $status = $row['status'];
                                                
                                ?>
                                                <tr>
                                                    <td><?php echo $id_user; ?></td>
                                                    <td><?php echo $firstName; ?></td>            
                                                    <td><?php echo $lastName; ?></td>                                                        
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
                                                            if($status==1)
                                                            {
                                                                ?>
                                                                <span class="badge success">Success</span>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                <span class="badge warning">Processing</span>
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if($level== null)
                                                            {
                                                                ?>
                                                                <span class="badge warning">Processing</span>
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