<h1>Các ngôi nhà cần tìm kiếm</h1>
<?php
include("../config/config.php");
if (isset($_POST['action'] )) {
    $type_house =  $_POST['type_house'];
    $area_house =  $_POST['area_house'];
    $sql_search = "Select * from tb_typehome,tb_home where tb_home.id_typeHome = tb_typehome.id_typeHome and tb_home.id_typeHome = $type_house and area_home = '$area_house'";
    $qr_search = mysqli_query($conn, $sql_search);

?>
    <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4">
            <?php while ($row_s = mysqli_fetch_assoc($qr_search)) {
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="informationhomeindex.php?id_home=<?= $row_s['id_home'] ?>"><img style="height:230px;" class="img-fluid" src="../img/<?php echo $row_s['image'] ?>" alt=""></a>
                        </div>
                        <div class="p-2">
                            <a style="margin-top:30px; padding-bottom:10px;" class=" d-flex align-items-center  h5 mb-2" href="informationhomeindex.php?id_home=<?= $row_s['id_home'] ?>"><?php echo $row_s['name_home'] ?></a>
                            <h6 class="d-flex align-items-center text-primary mb-3"><span><?= $row_s['price'] ?> VNĐ</h5>
                                    <p class="d-flex align-items-center"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row_s['address_home'] ?></p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i><?php echo $row_s['area_home'] ?> m2</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i><?php echo $row_s['numberBedRoom'] ?> Phòng ngủ</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i><?php echo $row_s['numberBathRoom'] ?> Phòng tắm</small>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
<?php
    // }
} else {
    echo "Nhà tìm kiếm sẽ ở đây";
}
?>