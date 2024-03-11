<!-- <?php
    include_once("controller/cDGMT.php");
    if(isset($_REQUEST["btn_submit"])){
        $Ten_mt = $_REQUEST["cbothmt"];
        $danhgia = $_REQUEST["dgmt"];
        $ghichu = $_REQUEST["txt_ghichu"];
        $ngay = $_REQUEST["ngayDBO"];
                
        $timestamp = strtotime($ngay);
        $new_date = date("Y-m-d", $timestamp);
        $mand = $_SESSION['id_user'];
        
        $a = new ControllerMucTieu();
        $ktDGMT = $a->getKiemTraDGMT($Ten_mt);
        if($ktDGMT){
            if(mysqli_num_rows( $ktDGMT)>0){
                echo"<script>alert('Mục tiêu này bạn đã đánh giá') </script>";
            }else{
                $p = new ControllerMucTieu();
                $kq = $p->addDGMT($danhgia,$ghichu,$Ten_mt,$mand);
                echo '<script>';
                echo 'var success = ' . json_encode($kq) . ';';
                echo 'setTimeout(function() {';
                echo '  showModal(success ? "Đã nhận thành công đánh giá của bạn" : "Không thêm được");';
                echo '  setTimeout(function() { window.location.href = "trangchu.php"; }, 3000);';
                echo '}, 1000);';
                echo '</script>';
            }
        }else{
            echo"<script>alert('Lỗi!') </script>";
        }

}
?>  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tạo đơn</title>

</head>

<body name="danhgia">
    <div class="container-fluid">
        <br>
        <div class="form-taodon container-fluid">
            <h2>Tạo đơn hàng mới</h2>

            <!-- BÊN GỬI -->
            <h4>Bên gửi</h4>               
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tạo địa chỉ gửi
            </button>
            <br>
            <div class="form-bengui">
                    
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Địa chỉ gửi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="formContainer" class="needs-validation" novalidate>
                                        <div class="row">
                                            <!-- First Column -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="senderName" class="form-label">Họ và tên</label>
                                                    <input type="text" class="form-control" id="senderName" name="senderName" placeholder="Nhập họ tên" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="senderPhone" class="form-label">Số điện thoại</label>
                                                    <input type="tel" class="form-control" id="senderPhone" name="senderPhone" placeholder="Nhập số điện thoại" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="quanhuyen" class="form-label">Quận huyện</label>
                                                    <select name="quanhuyen" id="quanhuyen" class="form-select" aria-label="Chọn quận huyện">
                                                        <option value="" disabled selected>Chọn quận huyện</option>
                                                        <?php
                                                        include('../model/connect.php');
                                                        $categories = mysqli_query($con, "SELECT * FROM districts");
                                                        while ($row = mysqli_fetch_array($categories)) {
                                                        ?>
                                                            <option value="<?php echo $row['code'] ?>"><?php echo $row['name'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Second Column -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="text" class="form-label">Địa chỉ</label>
                                                    <input type="text" class="form-control" id="text" name="text" placeholder="Nhập địa chỉ" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="phuongxa" class="form-label">Phường xã</label>
                                                    <select name="phuongxa" id="phuongxa" class="form-select" aria-label="Chọn phường xã">
                                                        <option value="" disabled selected>Chọn phường xã</option>
                                                        <?php
                                                        include('../model/connect.php');
                                                        $categories = mysqli_query($con, "SELECT * FROM wards");
                                                        while ($row = mysqli_fetch_array($categories)) {
                                                        ?>
                                                            <option value="<?php echo $row['code'] ?>"><?php echo $row['name'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

            <hr>

                <!-- BÊN NHẬN -->
                <h4>Bên nhận</h4>
                <div class="container">
                    <table class="table table-bordered">
                        <tr>
                            <td id="myTable" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="needs-validation" novalidate>
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Họ và tên</label>
                                                <input type="text" class="form-control" id="text" name="text" placeholder="Nhập họ tên" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Số điện thoại </label>
                                                <input type="tel" class="form-control" id="tel" name="tel" placeholder="Nhập số điện thoại" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Quận huyện</label>
                                                <label for="fullName" class="form-label">Quận huyện</label>
                                                <select name="quanhuyen" id="quanhuyen" class="form-select" aria-label="Chọn quận huyện">
                                                    <option value="" disabled selected>Chọn quận huyện</option>
                                                    <?php
                                                    include('../model/connect.php');
                                                    $categories = mysqli_query($con, "SELECT * FROM districts");
                                                    while ($row = mysqli_fetch_array($categories)) {
                                                    ?>
                                                        <option value="<?php echo $row['code'] ?>"><?php echo $row['name'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="needs-validation" novalidate>
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control" id="text" name="text" placeholder="Nhập địa chỉ" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Phường xã</label>
                                                <select name="phuongxa" id="phuongxa" class="form-select" aria-label="Chọn phường xã">
                                                    <option value="" disabled selected>Chọn phường xã</option>
                                                            <?php
                                                            include('../model/connect.php');
                                                            $categories = mysqli_query($con, "SELECT * FROM wards");
                                                            while ($row = mysqli_fetch_array($categories)) {
                                                            ?>
                                                                <option value="<?php echo $row['code'] ?>"><?php echo $row['name'] ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                            </td>
                        </tr>
                    </table>
                </div>

        </div>  

        <hr>

                <!-- SẢN PHẨM -->
        <div class="row">
            <h4>Sản phẩm</h4>   
                <div class="container">
                    <table class="table table-bordered">
                        <tr>
                            <td id="myTable" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="needs-validation" novalidate>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="text" name="text" placeholder="Nhập tên sản phẩm" required>
                                            </div>

                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="text" name="text" placeholder="Nhập mã đơn hàng" required>
                                            </div>

                                            <div class="mb-3">
                                            <div class="container text-center">
                                                <div class="row row-cols-4">

                                                    <div class="col">
                                                    <input type="text" class="form-control" id="text" name="text" placeholder="Nhập khối lượng" required>
                                                    </div>

                                                    <div class="col">
                                                    <input type="text" class="form-control" id="text" name="text" placeholder="Nhập chiều dài" required>
                                                    </div>

                                                    <div class="col">
                                                    <input type="text" class="form-control" id="text" name="text" placeholder="Nhập chiều rộng" required>
                                                    </div>

                                                    <div class="col">
                                                    <input type="text" class="form-control" id="text" name="text" placeholder="Nhập chiều cao" required>
                                                    </div>

                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                            </td>
                        </tr>
                    </table>
                </div>                                           
        </div>     

        <hr>
                <!-- HÌNH THỨC VẬN CHUYỂN -->
                    <div class="container text-left">
                        <div class="row">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
                                    <label class="form-check-label" for="firstRadio">Giao hàng nhanh</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                                    <label class="form-check-label" for="secondRadio">Giao hàng tiết kiệm</label>
                                </li>
                            </ul>

                        </div>

                    </div>


        <hr>
                <!-- GHI CHÚ -->
                <div class="input-group">
                    <span class="input-group-text">Ghi chú đơn hàng</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
        <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input class="btn btn-primary" type="submit" value="Tạo đơn hàng">
                </div>



    </div>
    <br>
</div>

<!-- SCRIPT CHO FORM NHẬP ĐỊA CHỈ GỬI -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const myModal = document.getElementById('myModal');
        const myInput = document.getElementById('myInput');

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus();
        });
    </script>

</body>
</html>
