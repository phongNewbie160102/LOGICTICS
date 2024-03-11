<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận đơn hoàn trả</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">

        <!-- KẾT CHUYỂN BÁO CÁO HOÀN TRẢ  -->
        <div class="grid text-center" style="--bs-rows: 3; --bs-columns: 3; padding-top:20px;">
       
                <div class="container text-center mt-5">
                    <div class="row border">
                        <div class="col-sm-8 border">
                            Đơn hoàn trả                            
                            <p>10 TỶ</p>
                        </div>
                        <div class="col-sm-4 border">
                            Hoàn hàng                            
                            <p>10 Triệu</p>
                        </div>
                    </div>
                </div>

        </div>
        
        <br>
        <h3 class="container text-center">DANH SÁCH ĐƠN HOÀN TRẢ</h3>
        <!-- DANH SÁCH HOÀN TRẢ -->
            <div class="row">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Mã vận đơn</th>
                            <th>Tên đơn hàng</th>
                            <th>Tên người nhận</th>
                            <th>Số điện thoại</th>
                            <th>Lý do</th>                            
                            <th>Ngày gửi đơn</th>
                            <th>Ngày trả đơn</th>
                            <th>Hoàn hàng</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</th>
                            <td>Mã đơn hàng</td>
                            <td>Mã vận đơn</td>
                            <td>Tên đơn hàng</td>
                            <td>Tên người nhận</th>
                            <td>Số điện thoại</td>
                            <td>Trạng thái</td>
                            <td>dd/mm/yy</td>
                            <td>dd/mm/yy</td>
                            <td>  
                                <div class="container">
                                    <select id="inputState" class="form-select">
                                    <option selected disabled>Chọn</option>
                                    <option>Có</option>
                                    <option>Không</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</th>
                            <td>Mã đơn hàng</td>
                            <td>Mã vận đơn</td>
                            <td>Tên đơn hàng</td>
                            <td>Tên người nhận</th>
                            <td>Số điện thoại</td>
                            <td>Trạng thái</td>
                            <td>dd/mm/yy</td>
                            <td>dd/mm/yy</td>
                            <td>  
                                <div class="container">
                                    <select id="inputState" class="form-select">
                                    <option selected disabled>Chọn</option>
                                    <option>Có</option>
                                    <option>Không</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

</div>
</body>
</html>