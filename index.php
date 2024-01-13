<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHỦ</title>
    <link rel="stylesheet" href="style.css?v= <?php echo time(); ?>">
    <script src="script.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery-ui.min.css" rel="stylesheet">

</head>
<body class="menubar">

<header class="menuex">
    <div class="container">
        <div class="row">
            <div class="col-md-6 "> 
                <div class="logo-sn ms-d-block-lg">
                    <a class="ml-0 text-left" href="index.php">
                        <img src="./img/SHIP.png" alt="logo" style="max-width: 75px;">
                    </a>
                </div>
            </div>
            <div class="col-md-8"> 
                <nav class="">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a>
                            <ul>
                                <li><a href="#">Lịch sử</a></li>
                                <li><a href="#">Sứ mệnh</a></li>
                                <li><a href="#">Tầm nhìn</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sản phẩm</a>
                            <ul>
                                <li><a href="#">Điện thoại thông minh</a></li>
                                <li><a href="#">Máy tính xách tay</a></li>
                                <li><a href="#">Tivi</a></li>
                                <li><a href="#">Thiết bị gia dụng</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>


    <br>

    <div class="normalform" style="padding: 1; margin-left: 15px; margin-right: 15px;">
        <main class="themain">
            <section>
                <article id="article">
                    <h2>Tiêu đề bài viết</h2>
                    <p id="p1">Nội dung bài viết</p>
                </article>
            </section>
            <aside>
            <article id="article">
                <h3>Tiêu đề nội dung bên cạnh</h3>
                <p id="p2">Nội dung bên cạnh</p>
            </article>
            </aside>
            <aside>
            <article id="article">
                <h3>Tiêu đề nội dung bên cạnh 2</h3>
                <p id="p3">Nội dung bên cạnh 2 </p>
            </article>
            </aside>
        </main>

        <footer class="footer">
            <p id="p4">Bản quyền</p>
        </footer>
    </div>

</body>

</html>
