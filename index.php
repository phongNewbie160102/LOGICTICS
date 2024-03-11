<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHỦ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body class="menubar">

<div class="overlay"></div>
<!-- MENU -->
<header class="menuex fixed-top">

    <div class="container-fluid ">

            <div class="d-flex align-items-end bg-body-tertiary" style="height: 50;">

                    <div class="col d-flex justify-content-center">                
                        <div class="col-md-2">
                            <div class="logo-sn ms-d-block-lg">
                                <a class="ml-0 text-left" href="index.php">
                                    <img src="./img/logo2.png" alt="logo" style="max-width: 75px;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col menu-translate">
                        
                        <nav class="main-nav-menu">
                                <div class=" menu-collapse" id="navbarNav">
                                    <ul class="menu-nav">
                                        <li class="menu-item"><a class="menu-link" href="#">Trang chủ</a></li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">Dịch vụ</a>
                                            <ul>
                                                <li><a href="#">Giao hàng nhanh</a></li>
                                                <li><a href="#">Báo giá</a></li>
                                                <li><a href="#">Tầm nhìn</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="#">Giới thiệu</a>
                                            <ul>
                                                <li><a href="#">Điện thoại thông minh</a></li>
                                                <li><a href="#">Máy tính xách tay</a></li>
                                                <li><a href="#">Tivi</a></li>
                                                <li><a href="#">Thiết bị gia dụng</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                                            
                        </nav>

                        
                    </div>

                        <div class="col">
                                <form>
                                    <div class="input-group">
                                    <input type="search" class="form-control rounded" oninput="showResult(this.value)" onblur="hideLiveSearch()" placeholder="Nhập mã vận đơn..." aria-label="Search" aria-describedby="search-addon" />
                                        <div id="livesearch" style="border-radius: 0 0 15px 15px;"></div>
                                    </div>
                                </form>

                        </div>

            </div>
            
    </div>

</header>
 
<div class="container-fluid">
    <div class="row">
        <div class="normalform mx-auto ">
                <main class="themain" style="">

                        <section>
                            <article id="article">
                                <img class="img-fluid" src="./img/vechungtoi6.webp" alt="Ảnh mô tả" >
                                <br>
                                <br>
                                <div class="s-title text-center">
                                    <h2>GIAO NHANH HƠN 6 TIẾNG</h2>
                                    <p id="p1">Nội dung bài viết</p>
                                </div>
                            </article>
                        </section>

                        <section class="section section-slide-app">
                            <div class="container">
                                <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12 d-flex align-items-justify">
                                        <p id="p1">Những năm gần đây, công nghệ được xem là yếu tố tạo sự bứt phá giúp các doanh nghiệp phát triển, cùng với sự hài lòng của người tiêu dùng sẽ là "đích đến" cho cuộc đua về dịch vụ giao nhận thời 4.0 này. Cùng với sự phát triển trong thời đại chuyển đổi số, thị trường thương mại điện tử trong nước phát triển thần tốc do các yếu tố như dân số trẻ, tỷ lệ sử dụng internet cao và tỷ lệ sử dụng điện thoại thông minh tăng, cuộc đua của các công ty giao hàng cũng ngày càng sôi nổi, chiến lược dịch vụ chăm khóc khách hàng và phát triển hệ sinh thái. 
                                            Các công ty giao hàng mang lại sự tiện lợi, linh hoạt và tiết kiệm thời gian khi người dùng có thể dễ dàng mua sắm trực tuyến và được giao nhận hàng tận nơi, không mất công di chuyển . Chúng hỗ trợ mạnh mẽ cho thương mại điện tử bằng cách tạo ra một hệ thống vận chuyển linh hoạt, giúp hàng hóa được vận chuyển an toàn đến tay khách hàng.
                                            Khả năng vận chuyển của các công ty giao hàng đáp ứng các nhu cầu đa dạng và phong phú của khách hàng gồm hàng tiêu dùng hàng ngày, hàng điện tử, thực phẩm,… 
                                        </p>
                                    </div>

                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="text-center">
                                            <img src="./img/vechungtoi4.webp" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                    <aside>
                        <article id="article">
                            <h3>Tiêu đề nội dung bên cạnh 2</h3>
                            <p id="p3">Nội dung bên cạnh 2</p>
                        </article>
                    </aside>
                </main>

                <footer class="footer">
                    <div class="footer-color">
                    <p id="p4">Bản quyền</p>
                    <p id="p4">Copyright @QSHIP2024</p>
                </footer>
        </div>
    </div>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- SCRIPT CHO FORM -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the button, form, close button, and overlay elements
        var openFormBtn = document.getElementById("openFormBtn");
        var closeFormBtn = document.getElementById("closeFormBtn");
        var formContainer = document.getElementById("formContainer");
        var overlay = document.querySelector(".overlay");

        // Add click event listener to the open button
        openFormBtn.addEventListener("click", function () {
            // Show the form container and overlay
            formContainer.style.display = "block";
            overlay.style.display = "block";
        });

        // Add click event listener to the close button
        closeFormBtn.addEventListener("click", function () {
            // Hide the form container and overlay
            formContainer.style.display = "none";
            overlay.style.display = "none";
        });
    });
</script>

<!-- SCRIPT TÌM KIẾM -->
    <script>
        function showResult(str) {
        if (str.length==0) {
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET","livesearch.php?q="+str,true);
        xmlhttp.send();
        }
        function hideLiveSearch() {
            var livesearch = document.getElementById("livesearch");
            
            // Ẩn thanh livesearch khi người dùng rời khỏi ô nhập liệu
            livesearch.style.display = "none";
        }

        document.addEventListener("DOMContentLoaded", function () {
            var searchInput = document.querySelector('input[type="search"]');
            var livesearch = document.getElementById("livesearch");

            // Sự kiện xóa nội dung tìm kiếm và hiển thị livesearch khi nhập liệu
            searchInput.addEventListener("input", function () {
                var inputValue = searchInput.value.trim();

                if (inputValue.length > 0) {
                    // Nếu có nội dung, hiển thị livesearch và cập nhật nội dung
                    livesearch.style.display = "block";
                    showResult(inputValue);
                } else {
                    // Nếu không có nội dung, ẩn thanh livesearch
                    livesearch.style.display = "none";
                }
            });
        });
    </script>

</body>
</html>           



<!-- FORM DK/DN -->
                        <!-- <div class="normalform mx-auto">
                                <div id="formContainer" style="display: none;">
                                <form id="myForm" class="needs-validation" novalidate>
                                    <button id="closeFormBtn" class="btn btn-outline-secondary close-btn">&times;</button>
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Họ và Tên:</label>
                                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label">Số Điện Thoại:</label>
                                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mật khẩu:</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="rePassword" class="form-label">Nhập lại mật khẩu:</label>
                                        <input type="password" class="form-control" id="rePassword" name="rePassword" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="rePassword" class="form-label">Bạn đã có tài khoản? <a href="" style="text-decoration:none; ">Đăng Nhập</a></label>
                                    </div>

                                    <button type="submit" class="btn btn-success ">Đăng Ký</button>
                                </form>
                            </div>
                        </div>
                    </div> -->