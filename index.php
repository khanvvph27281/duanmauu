<?php
include "./view/header.php";
include "./global.php";
include "./model/pdo.php";
include "./model/trangchu.php";
include "./model/danhmuc.php";
$views=loadtrangchu();
$loadall=danhmuc();
$load_top10=loadall_sp_top10();
if(isset($_GET['act']) && ($_GET['act'])!=""){
    $act=$_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
            case 'sanphamct':
                if(isset($_GET['id_sp'])){
                    $id=$_GET['id_sp'];

                    $load_one=loadonesanpham($id);
                    
                    extract($load_one);
                    $load_cl=loadsanpham_cungloai($id,$id_danhmuc);

                    
                }else{
                    include "./view/home.php";
                }
                include "view/sanphamct.php";
                break;
            case 'sanpham':
                if(isset($_GET['iddm'])){
                    $id=$_GET['iddm'];
                    $load=loadsanpham($id);
                }else{
                    include "./view/home.php";
                }
                include "view/sanpham.php";
                break;
                break;

        default:
            # code...
            break;
    }
}else{
    include "./view/home.php";
}

include "./view/footer.php"
?>
