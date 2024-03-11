<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
<style>
    .navbar {
    background-color: #aed9e0 !important;
    border-color: #aed9e0 !important;
    }
</style>
</head>

<body>    
    <div class="container-fluid">

        <!-- THANH NAVBAR  -->
            <div class="row">
                <nav class="navbar bg-body-tertiary fixed-top">
                    <div class="container-fluid">
                        <t>Xin chào</t> 
                        <a class="navbar-brand" href="#">USERNAME</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Xin chào USER</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>

                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Tạo đơn hàng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Quản lý đơn hàng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Xác nhận đơn về</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Nhận đơn hoàn trả</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Báo cáo tài chính</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Quản lý cửa hàng</a>
                                    </li>
                                </ul>
                                <form class="d-flex mt-3" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm đơn hàng" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        <!-- KẾT CHUYỂN BÁO CÁO  -->
            <div class="grid text-center" style="--bs-rows: 3; --bs-columns: 3; padding-top:20px;">
        
                    <div class="container text-center mt-5">
                        <div class="row border">
                            <div class="col-sm-8 border">
                                Doanh thu tháng này 
                                <p>10 TỶ</p>
                            </div>
                            <div class="col-sm-4 border">
                                Chuyển khoản
                                <p>10 Triệu</p>

                            </div>
                        </div>

                        <div class="row border">
                            <div class="col-sm border">
                                Tiền hoàn trả                            
                            <p>10 TỶ</p>

                            </div>
                            <div class="col-sm border">
                                Số dư hiện có
                                <p>10 TỶ</p>

                            </div>
                            <div class="col-sm border">
                                Phí khuyến mãi
                                <p>200 Triệu</p>
                            </div>
                            <div class="col-sm border">
                                Phí lưu kho                            
                                <p>200 Triệu</p>
                            </div>
                        </div>
                    </div>

                    <div class="container text-center mt-1">
                        <div class="row border">
                            <div class="col-sm border">
                                Đơn giao thành công                            
                                <p>2000 đơn</p>
                            </div>
                            <div class="col-sm border">
                                Đơn đang giao                            
                                <p>100 đơn</p>
                            </div>
                            <div class="col-sm border">
                                Đơn giao thất bại                           
                                <p>200 đơn</p>
                            </div>
                            <div class="col-sm border">
                                Hoàn hàng thành công                            
                                <p>100 đơn</p>
                            </div>
                        </div>
                    </div>
            </div>

            <br>
            <h3 class="container text-center">DANH SÁCH ĐƠN HÀNG</h3>

        <hr>
        <!-- DANH SÁCH ĐƠN HÀNG -->
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</td>
                            <th>Mã vận đơn</td>
                            <th>Tên đơn hàng</td>
                            <th>Tên người nhận</th>
                            <th>Số điện thoại</td>
                            <th>Trạng thái</td>
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
                            <td><span class="badge rounded-pill text-bg-success">Hoàn thành</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>tdornton</td>
                            <td>@fat</td>
                            <td>2</td>
                            <td>Jacob</td>
                            <td><span class="badge rounded-pill text-bg-danger">Hoàn trả</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="2">Larry tde Bird</td>
                            <td>@twitter</td>
                            <td>2</td>
                            <td>Jacob</td>
                            <td><span class="badge rounded-pill text-bg-primary">Đang giao</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
