<?php
include "../model/danhmuc.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if(isset($_POST['them']) && $_POST['them']){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao="Thêm Thành công ";
            }
            include "danhmuc/add.php";
            break;
            
        case 'trangchu':
            include "home.php";
            break;
        default :
        include "home.php";
        break;
    }
}
include "footer.php";
