<?php
include("SignInUp/php/connect.php");
$status_home = $_POST['home_status'];
$tranghientai = $_POST['current_page'];

?>
<div id="tab-1" class="tab-pane fade show p-0 active">
    <div class="row g-4">
        <?php
        $limit = 2 ; 
        $start = ($tranghientai-1)*2;
        $sql_home = "select * from tb_home ,tb_typehome where tb_home.typeHome_id = tb_typehome.typeHome_id and home_status = $status_home limit $start,$limit ";

        $query_home = mysqli_query($conn, $sql_home);
        if (mysqli_num_rows($query_home) > 0) {
            while ($row = mysqli_fetch_assoc($query_home)) {
        ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><?php if ($row['home_status'] == 0) {
                                                                                                                            echo "Feature";
                                                                                                                        } else if ($row['home_status'] == 1) {
                                                                                                                            echo "For sell";
                                                                                                                        } else if ($row['home_status'] == 2) {
                                                                                                                            echo "For rent";
                                                                                                                        } ?></div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"><?= $row['typeHome_name'] ?></div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">$12,345</h5>
                            <a class="d-block h5 mb-2" href=""><?= $row['home_name'] ?></a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?= $row['home_address'] ?></p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i><?= $row['home_numberBedRoom'] ?> Room</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i><?= $row['home_numberBathRoom'] ?> Room</small>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>


        <div class="col-12 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item num_page" trang="<?php 
                        if($tranghientai == 1)
                        {
                            echo "1";
                        }else 
                        {
                           echo $tranghientai-1;
                        }
                    ?>">
                        <a  class="page-link " href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php
                  
                    $sql_trang = "select Count(tb_home.home_id) AS number_Home from tb_home where home_status = $status_home ";
                    $query_trang = mysqli_query($conn, $sql_trang);
                    $tongsobanghi = mysqli_fetch_assoc($query_trang)['number_Home'];
                    $banghi1trang = 2;
                    $tongsotrang = ceil($tongsobanghi / $banghi1trang);
                    for ($i = 1; $i <= $tongsotrang; $i++) {
                    ?>
                        <li trang="<?=$i?>" class="page-item num_page <?php
                        if($i == $tranghientai)
                        {
                            echo "active";
                        } 
                        ?>"><a class="page-link" href="#"><?= $i ?></a></li>
                    <?php
                    }
                    ?>


                    <li class="page-item num_page" trang="<?php 
                        if($tranghientai == $tongsotrang)
                        {
                            echo $tongsotrang;
                        }else 
                        {
                           echo $tranghientai+1;
                        }
                    ?>">
                        <a class="page-link"  href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>