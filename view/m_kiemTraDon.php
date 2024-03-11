<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra đơn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <br>
    <div class="container-fluid">
        <div class="row">
            
            <br>
            <h3 class="container text-center">DANH SÁCH ĐƠN HÀNG</h3>
            <hr>

            <!-- DANH SÁCH ĐƠN HÀNG -->
                <div class="row">
                    <table class="table table-hover" id="orderTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã đơn hàng</th>
                                <th>Mã vận đơn</th>
                                <th>Tên đơn hàng</th>
                                <th>Tên người gửi</th>
                                <th>Mã vận đơn</th>
                                <th>Tên bưu cục</th>
                                <th>Quản lý</th>
                                <th>Nhân viên bưu cục</th>
                                <th>Địa chỉ gửi</th>
                                <th>Địa chỉ nhận</th>
                                <th>Kích thước</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-toggle="modal" data-target="#staticBackdrop">
                                <td>1</td>
                                <td>123</td>
                                <td>VD001</td>
                                <td>Đơn hàng 1</td>
                                <td>Người gửi 1</td>
                                <td>Jacob</td>
                                <td>@fat</td>
                                <td>2</td>
                                <td>@fat</td>
                                <td>2</td>
                                <td>10x15x20</td>
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
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Thông tin đơn hàng</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Nội dung của modal -->
                        <p>Mã đơn hàng: <span id="modalOrderCode"></span></p>
                        <p>Mã vận đơn: <span id="modalTrackingCode"></span></p>
                        <!-- Các thông tin khác... -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Sự kiện click cho từng dòng trong bảng
        document.getElementById('orderTable').addEventListener('click', function (event) {
            const target = event.target;
            if (target.tagName === 'TD' && target.parentNode.dataset.toggle === 'modal') {
                // Lấy dữ liệu tương ứng từ các ô cột
                const orderCode = target.parentNode.children[1].textContent;
                const trackingCode = target.parentNode.children[2].textContent;

                // Hiển thị dữ liệu trong modal
                document.getElementById('modalOrderCode').textContent = orderCode;
                document.getElementById('modalTrackingCode').textContent = trackingCode;

                // Mở modal
                const modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
                modal.show();
            }
        });
    </script>
</body>
</html>