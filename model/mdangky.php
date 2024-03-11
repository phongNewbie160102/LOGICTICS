<?php
include_once "connect1.php";

class model_dk {
    function insertTK($name, $phone, $mk, $mail, $mucdichsudung, $classification, $quymovanchuyen){
        $p = new connect_db();
        if($p->open_kn($p->conn)){
            $string = "INSERT INTO taikhoan(tenND, sdtND, mkND, emailND, mucDichSuDung, nganhHang, quyMoVanChuyen)
            VALUES ('".$name."', '".$phone."',  '".$mk."','".$mail."', '".$mucdichsudung."', '".$classification."','".$quymovanchuyen."')";
            $result = mysqli_query($p->conn, $string);
            $p->close_kn($p->conn);
            return $result;
        } else {
            echo"<script>alert('Lỗi kết nối') </script>";
            return false;
        }
    }

    function selectSdt($phone){
        $p = new connect_db();
        if($p->open_kn($p->conn)){
            $query = "SELECT *
            FROM `taikhoan`
            WHERE `sdtND` = '".$phone."'";
            $tbl = mysqli_query($p->conn, $query);
            $p->close_kn($p->conn);
            return $tbl;
        } else {
            return false;
        }
    }
}
?>
