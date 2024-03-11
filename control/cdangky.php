<?php 
include("../model/mdangky.php");

class control_dk {
    function addTK($name, $phone, $mk, $mail, $mucdichsudung, $classification, $quymovanchuyen)
    {
        $p = new model_dk();
        $rs = $p->insertTK($name, $phone, $mk, $mail, $mucdichsudung, $classification, $quymovanchuyen);
        if (!$rs) {
            return 0; //Thêm dữ liệu thất bại
        } else {
            return 1; //Thêm dữ liệu thành công
        }
    }
    

    function getSdt($phone) {
        // Kiểm tra dữ liệu đầu vào
        if (empty($phone)) {
            return -1; // Trả về -1 nếu thiếu dữ liệu
        }

        $p = new model_dk();
        $tblProduct = $p->selectSdt($phone);
        if (!$tblProduct) {
            return false;
        } else {
            return $tblProduct;
        }
    }
}
?>
