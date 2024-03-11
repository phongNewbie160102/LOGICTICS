<!-- <?php
    session_start();
    include_once ("controller/cdangnhap.php");
    if(isset($_REQUEST["dang_nhap"])){
        //tesst trang chu
            header("location: Home.html");
        //test trang chu
        // $sdt = $_REQUEST["phone"];
        // $pass = $_REQUEST["password"];
        // $p = new control_dn(); 
        // $kq = $p->getDn($sdt, $pass);
        // if($kq){
        //     if(mysqli_num_rows( $kq)>0){
        //         $nd = mysqli_fetch_assoc($kq);
        //         $_SESSION['user']=$nd;
        //         $_SESSION['id_user']=$nd["Id_ND"];
        //         $_SESSION['name_user']=$nd["TenND"];
        //         header("location: trangchu.php");
        //     }else{
        //         echo"<script>alert('không tồn tại người dùng') </script>";
        //     }
        // }else{
        //     echo"<script>alert('Lỗi') </script>";
        // }
    }
?>  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoảns</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
          font-family: 'Samsung Sharp Sans Bold';
          src: url('../font/SamsungSharpSans-Bold.ttf') format('truetype');
          font-weight: bold;
          font-style: normal;
      }

      @font-face {
          font-family: 'SamsungSharpSans-Bold_SMCPS';
          src: url('../font/iCiel-SamsungSharpSans-Bold_SMCPS.ttf') format('truetype');
          font-weight: bold;
          font-style: normal;
      }

      #h1{
          font-family: 'SamsungSharpSans-Bold_SMCPS', Arial, sans-serif;

        }
        label,span {
          font-family: 'Samsung One 700', Arial, sans-serif;
        }
        select, option,input,p {
          font-family: 'Samsung One 400', Arial, sans-serif;
        }
        .signin {
          border:none;
          font-family: 'Samsung One 700', Arial, sans-serif;
        }
        .tuychon{
            font-family: 'Samsung One 400', Arial, sans-serif;

        }

    body {
            margin: 0;
            padding: 0;
            display: flex;
        }

        .pd_new {
            padding:25px;
            background-color: #ffe8cd;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }


        .login h2.active {
            color: #333;
        }

    .password-container {
        position: relative;
        width: 100%;
    }

    .text {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 15px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
        outline: none;
        color: #000;
        transition: background-color 0.3s ease, color 0.3s ease;
        width: calc(100% - 5px); 
    }

    #togglePassword {
        position: absolute;
        top: 45%;
        right: 29px;
        transform: translateY(-50%);
        cursor: pointer;
    }

        .text:hover {
                background-color: #F9F5F6;
                color: #161A30;
            
            }

        .custom-checkbox {
            margin-bottom: 15px;
        }

        .signin {
            background-color: #2D9596; 
            color: #FFFFFF;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); 
            width: 50%;
            padding: 12px 20px;
            margin: 8px auto; /* Sử dụng auto cho cả margin-left và margin-right */
            display: block; /* Sử dụng display: block để giữ cho nút chiếm đầy đủ chiều rộng */
            border: none;
            box-sizing: border-box;
            border-radius: 15px;
            border-color: green;
        }
        .signin:hover {
            background: #ff6339 !important;
        }

        .dktk{
            margin-left: 20px; 

        }
        #termsLabel{
            text-align: center;
            font-size: 14px;

        }

</style>

</head>
<body>

<div class="container">

        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-6 ms-md-3 text-center">
                <h1 id="h1" style="background: linear-gradient(to right, #007FFF, #ffc700); -webkit-background-clip: text; color: transparent; font-size: 3em;">QSHIP XIN CHÀO !</h1>
                </div>
            </div>
        </div>

    <div class="row">
        
        <div class="col">
            <img src="../img/dangnhap1.jpg" class="img-fluid" alt="...">
        </div>

        <div class="col">
                        <div class="pd_new">

                            <div class="login">
                                <h1 id="h1" class="active" style="text-align:center;"> Đăng nhập </h1>
                                <form class="formdn" method="post" action="#">

                                    <span class="span">Số điện thoại:</span> <br>
                                    <input type="tel" class="text" name="phone" required>
                                        
                                    <br><br>
                                                        
                                        <span class="span">Mật khẩu:</span> <br>
                                        <div class="password-container">
                                            <input type="password" class="text" name="password" id="password" required>
                                            <i class="far fa-eye" id="togglePassword"></i>
                                        </div>
                                    

                                    <span class="span" style="display: flex; flex-direction: column; align-items: center; text-align: center;">Nhập CAPTCHA:
                                    
                                    <div class="col-md-6">
                                        <img id="captchaImage" src="captcha.php" alt="Captcha Image" style="width: 120px; height: 50px; margin: 10px 0;">
                                        <label for="" id="resetCaptcha"><i class="bi bi-arrow-counterclockwise "></i></label> 
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="text" name="capcha" required>
                                    </div>
                                                                        
                                    </span>

                                    <div class="dktk" >
                                        <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" required />
                                        <label for="checkbox-1-1" id="termsLabel">Đồng ý với điều khoản đăng nhập</label>
                                    </div>
                                            
                                    <button class="signin" name="dang_nhap"> Đăng nhập </button>  
                                    <hr> 
                                    <table class="tuychon" style="width: 100%;">
                                        <tr>
                                            <td style="float: left;"><a class="ForgotPassword" href="#" style="text-decoration: none;">Quên mật khẩu?</a></td>
                                            <td style="float: right;"><a class="signup" href="dangky.php" style="text-decoration: none;">Đăng ký</a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align: left; class="opt">Nhân sự QSHIP đăng nhập <a class="emp-signup" href="#" style="color: red;">vào đây</a></td>
                                        </tr>
                                    </table>

                                </form>
                            </div>
                        </div>
        </div>


</div>

<script>
    document.getElementById("togglePassword").addEventListener("click", function () {
        var passwordField = document.getElementById("password");
        var type = passwordField.type === "password" ? "text" : "password";
        passwordField.type = type;

        // Chuyển đổi biểu tượng mắt giữa mở và đóng
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
    });
</script>

<script>
    document.getElementById("togglePassword").addEventListener("click", function () {
        // ... (đoạn mã JavaScript khác) ...
    });

    document.getElementById("resetCaptcha").addEventListener("click", function () {
        // Làm mới hình CAPTCHA khi nút được nhấn
        document.getElementById("captchaImage").src = "captcha.php";
    });
</script>

</body>
</html>