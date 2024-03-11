<?php
class connect_db{
    function open_kn(& $conn){
        $conn = mysqli_connect("localhost", "Phong", "123", "QSHIP");
        mysqli_set_charset($conn, "utf8");
        
        if ($conn) {
            return true;
        } else {
            return false;
        }
    }

    function close_kn(& $conn){
        mysqli_close($conn);
    }
}
?>
