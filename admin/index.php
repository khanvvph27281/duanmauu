<?php
include "../model/danhmuc.php";
include "header.php";
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/binhluan/binhluan.php";
include "../model/cart.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['them']) && $_POST['them']) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm Thành công ";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $load_dm = load_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'deletedm':
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $delete = delete_danhmuc($_GET['iddm']);
                $load_dm = load_danhmuc();
            }

            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $suadm = loadone_danhmuc($_GET['iddm']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                $update = update_dm($tenloai, $id);
            }
            $load_dm = load_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'addsp':
            if (isset($_POST['themsp']) && $_POST['themsp']) {
                $iddm = $_POST['iddm'];

                $tensp = $_POST['tensp'];
                $gia = $_POST['giasp'];
                $hinh = $_FILES["hinh"]["name"];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                $mota = $_POST['mota'];
                insert_sanpham($tensp, $gia, $hinh, $mota, $iddm);
                $thongbao = "Thêm Thành công ";
            }
            $load_dm = load_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            $load_sp = load_sanpham();
            include "sanpham/list.php";
            break;
        case 'deletesp':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $delete_sp = delete_sanpham($_GET['idsp']);
                $load_sp = load_sanpham();
            }

            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $suasp = loadone_sanpham($_GET['idsp']);
            }
            $load_dm = load_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhatsp'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['name_sp'];
                $gia = $_POST['gia'];
                $hinh = $_FILES["hinh"]["name"];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                $id = $_POST['id'];
                $mota = $_POST['mota'];
            }
            update_sanpham($id, $iddm, $tensp, $gia, $mota, $hinh);
            $load_sp = load_sanpham();
            include "sanpham/list.php";
            break;
        case 'dskh':
            $loadtaikhoan = loadtaikhoan();
            include "taikhoan/list.php";
            break;
        case 'deletetk':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $delete_tk = delete_taikhoan($_GET['id']);
                $loadtaikhoan = loadtaikhoan();
            }

            include "taikhoan/list.php";
            break;
        case 'dsbl':
            $loadbinhluan = loadbinhluan();
            include "binhluan/list.php";
            break;
        case 'deletebl':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $delete_bl = delete_binhluan($_GET['id']);
                $loadbinhluan = loadbinhluan();
            }

            include "binhluan/list.php";
            break;
        case 'trangchu':
            include "home.php";
            break;
        case 'thongke':
            $load = loadall_thongke();
            include "thongke/thongke.php";
            break;
        case 'bieudo':
            $loadbieudo = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        default:
            include "home.php";
            break;
    }
}
include "footer.php";
