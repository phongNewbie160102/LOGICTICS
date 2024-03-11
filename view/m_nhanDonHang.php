<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nhận đơn hàng</title>
</head>
<body>
    <div class="container-fluid">
        <br>
        <h3 class="container text-center">DANH SÁCH ĐƠN HÀNG CẦN XÁC NHẬN</h3>
        <hr>
        <!-- DANH SÁCH ĐƠN HÀNG -->
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Mã vận đơn</th>
                            <th>Tên đơn hàng</th>
                            <th>Tên người gửi</th>
                            <th>Tên người gửi</th>
                            <th>Địa chỉ gửi</th>
                            <th>Địa chỉ nhận</th>
                            <th>Kích thước</th>
                            <th>Xác nhận</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>tdornton</td>
                            <td>@fat</td>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>@fat</td>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>
                                <select id="confirmationSelect" class="row form-select form-select-sm mb-1">
                                <option selected disabled>Chọn</option>
                                <option value="confirm">Xác nhận đơn</option>
                                <option value="cancel">Hủy đơn hàng</option>   
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>

    <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Lý do hủy đơn hàng</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="container">
                        <div class="form-check">

                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Đóng gói sản phẩm không đúng quy định của nhà vận chuyển                    
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Bưu kiện gặp sự cố trong quá trình giao hàng
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Nhà vận chuyển lấy hàng từ Shop không thành công                    
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Nhà vận chuyển không liên hệ được người mua để giao hàng sau 03 lần                    
                            </label>
                            </div>
                            
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Khác <input type="text" class="form-control">                     
                            </label>
                            </div>


                        </div>

                    </div>
                






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="modalConfirmButton">Understood</button>
                </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- SCRIPT -->
    <script>
        document.getElementById('confirmationSelect').addEventListener('change', function () {
            const selectedValue = this.value;
            if (selectedValue === 'cancel') {
                // Nếu chọn "Hủy đơn hàng", hiển thị modal
                const modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
                modal.show();
            }
        });
        document.getElementById('staticBackdrop').addEventListener('hidden.bs.modal', function () {
        // Thực hiện các công việc bạn muốn khi modal đã được đóng
        console.log('Modal đã được đóng');
    });
    </script>
</body>
</html>
