<?php
    include('header.php');
?>
    <main>
        <a href="add_typeHome.php" class="btn btn-add"><i class="fa-solid fa-house-chimney"></i> Thêm loại nhà</a>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Quản lý loại nhà</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Loại nhà</th>
                                    <th>Tổng số căn</th>
                                    <th>Đã bán được</th>
                                    <th>Cập nhật</th>
                                    <th>Xóa bỏ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "select * from tb_typeHome Where status = 1 Order by id_typeHome";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_typeHome = $row['id_typeHome'];
                                                $name_typeHome = $row['name_typeHome'];
                                                
                                ?>
                                                <tr>
                                                    <td><?php echo $name_typeHome; ?></td>   
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="view_typeHome.php?id_typeHome=<?php echo $id_typeHome; ?>" class="delete-icon">
                                                            <i class="fas fa-edit"></i>
                                                    </td>                                                           
                                                    <td>
                                                            <a href="delete_typeHome.php?id_typeHome=<?php echo $id_typeHome; ?>" class="delete-icon">
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