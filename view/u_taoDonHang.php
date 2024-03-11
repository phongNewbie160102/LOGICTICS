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
    <style>
                /* Custom FONT */
      @font-face {
          font-family: 'Samsung One 400';
          src: url('../WEBSITE_EXHIBITION/font/SamsungOne-400.ttf') format('woff2'),
              url('../WEBSITE_EXHIBITION/font/SamsungOne-400.ttf') format('truetype');
          font-weight: 400;
          font-style: normal;
      }

      @font-face {
          font-family: 'Samsung One 700';
          src: url('../font/SamsungOne-700.ttf') format('truetype');
          font-weight: 700;
          font-style: normal;
      }
      @font-face {
          font-family: 'SamsungSharpSans-Bold_SMCPS';
          src: url('../font/iCiel-SamsungSharpSans-Bold_SMCPS.ttf') format('truetype');
          font-weight: bold;
          font-style: normal;
      }

        body {
            font-family: inherit;
        }

        #h2, #h4, #staticBackdropLabel{
          font-family: 'SamsungSharpSans-Bold_SMCPS', Arial, sans-serif;

        }
        label,span {
          font-family: 'Samsung One 700', Arial, sans-serif;
        }
        select, option,input,p{
          font-family: 'Samsung One 400', Arial, sans-serif;
        }
        .btn-primary {
          border:none;
          background: #ff6339 !important;
          font-family: 'Samsung One 400', Arial, sans-serif;
        }
    </style>
</head>

<body name="danhgia">
    <div class="container-fluid">
        <br>
        <div class="form-taodon container-fluid">
            <h2 id="h2">Tạo đơn hàng mới</h2>

            <!-- BÊN GỬI -->
            <h4 id="h4">Bên gửi</h4>               
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
                                                            <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
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
                                                            <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
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
                                <button type="button" class="btn btn-primary" id="saveChangesBtn">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mx-auto" id="outputFormContainer"></div>
            <hr>

                <!-- BÊN NHẬN -->
                <h4 id="h4">Bên nhận</h4>
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
            <h4 id="h4">Sản phẩm</h4>   
            <div class="container">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="productName" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="productName" name="productName" placeholder="Nhập tên sản phẩm" required>
                    </div>

                    <div class="col-md-6">
                        <label for="orderCode" class="form-label">Mã đơn hàng</label>
                        <input type="text" class="form-control" id="orderCode" name="orderCode" placeholder="Nhập mã đơn hàng" required>
                    </div>

                    <div class="col-md-3">
                        <label for="weight" class="form-label">Khối lượng</label>
                        <input type="text" class="form-control" id="weight" name="weight" placeholder="Nhập khối lượng" required>
                    </div>

                    <div class="col-md-3">
                        <label for="length" class="form-label">Chiều dài</label>
                        <input type="text" class="form-control" id="length" name="length" placeholder="Nhập chiều dài" required>
                    </div>

                    <div class="col-md-3">
                        <label for="width" class="form-label">Chiều rộng</label>
                        <input type="text" class="form-control" id="width" name="width" placeholder="Nhập chiều rộng" required>
                    </div>

                    <div class="col-md-3">
                        <label for="height" class="form-label">Chiều cao</label>
                        <input type="text" class="form-control" id="height" name="height" placeholder="Nhập chiều cao" required>
                    </div>

                </form>
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

<!-- SCRIPT CỦA MODAL  -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    const saveChangesBtn = document.getElementById('saveChangesBtn');

    myModal._element.addEventListener('shown.bs.modal', () => {
        // Đảm bảo sự kiện khi modal được hiển thị đang hoạt động
        console.log('Modal shown');
    });

    saveChangesBtn.addEventListener('click', () => {
        // Thực hiện các thao tác lưu dữ liệu tại đây
        console.log('Save button clicked');

        // Đóng modal
        myModal.hide();
    });
</script>

<script>
    const myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    const saveChangesBtn = document.getElementById('saveChangesBtn');

    myModal._element.addEventListener('shown.bs.modal', () => {
        // Đảm bảo sự kiện khi modal được hiển thị đang hoạt động
        console.log('Modal shown');
    });

    saveChangesBtn.addEventListener('click', () => {
        // Thực hiện các thao tác lưu dữ liệu tại đây
        console.log('Save button clicked');

        // Đóng modal
        myModal.hide();
    });
</script>

<!-- SCRIPT CỦA LẤY THÔNG TIN NHẬP  -->
<script>
    const myModal2 = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    const saveChangesBtn2 = document.getElementById('saveChangesBtn');
    const outputFormContainer2 = document.getElementById('outputFormContainer');

    myModal2._element.addEventListener('shown.bs.modal', () => {
        console.log('Modal shown');
    });

    saveChangesBtn2.addEventListener('click', () => {
        console.log('Save button clicked');

        // Lấy giá trị từ các trường nhập liệu
        const senderName = document.getElementById('senderName').value;
        const senderPhone = document.getElementById('senderPhone').value;
        const quanhuyen = document.getElementById('quanhuyen').value;
        const text = document.getElementById('text').value;
        const phuongxa = document.getElementById('phuongxa').value;

        // Tạo HTML mới cho form
        const newFormHTML = `
        <br>
            <form>
                <p><strong>Họ và tên:</strong> ${senderName}</p>
                <p><strong>Số điện thoại:</strong> ${senderPhone}</p>
                <p><strong>Quận huyện:</strong> ${quanhuyen}</p>
                <p><strong>Địa chỉ:</strong> ${text}</p>
                <p><strong>Phường xã:</strong> ${phuongxa}</p>
            </form>
        `;

        // Xuất form mới vào div outputFormContainer
        outputFormContainer2.innerHTML = newFormHTML;

        // Đóng modal
        myModal2.hide();
    });
</script>






<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</body>
</html>
