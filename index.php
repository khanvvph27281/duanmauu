<?php
session_start();
include "./view/header.php";
include "./global.php";
include "./model/pdo.php";
include "./model/trangchu.php";
include "./model/danhmuc.php";
include "./model/taikhoan.php";
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
                case 'dangky':
              
                    if(isset($_POST['dangky'])){
                       $email=$_POST['email'];
                       $hoten=$_POST['hoten'];
                       $matkhau=$_POST['matkhau'];
                        insert_taikhoan($hoten,$matkhau,$email);
                        $thongbao="vui lòng đăng nhập để thực hiện chức năng ";
                        
                    }
                 
                    include "view/taikhoan/dangky.php";
                    
                    break;
                    case 'dangnhap':
              
                        if(isset($_POST['dangnhap'])){
                          
                           $hoten=$_POST['hoten'];
                           $matkhau=$_POST['matkhau'];
                           $check=checkuser($hoten,$matkhau);
                           if(is_array($check)){
                            $_SESSION['hoten']=$check;

                             $thongbao="Đăng nhập Thành công ";
                             header('location: index.php');
                           }else{
                            $thongbao="Đăng nhập không Thành công ";
                           }
                           
                            
                        }
                     
                        include "view/taikhoan/dangky.php";
                        
                        break;
                        case 'edit_taikhoan':
              
                            if(isset($_POST['capnhat'])){
                              
                               $hoten=$_POST['hoten'];
                               $matkhau=$_POST['matkhau'];
                               $email=$_POST['email'];
                               $diachi=$_POST['diachi'];
                               $sdt=$_POST['sdt'];
                               $id=$_POST['id'];
                                update_taikhoan($id,$hoten,$matkhau,$email,$diachi,$sdt);
                                $_SESSION['hoten']=checkuser($hoten,$matkhau);
                                header('location: index.php?act=edit_taikhoan');
                                
                            }
                         
                            include "view/taikhoan/edit_tk.php";
                            
                            break;
                            case 'quenmk':
              
                                if(isset($_POST['quenmk'])){
                                  
                                  
                                   $email=$_POST['email'];
                                  $check= checkemail($email);
                                    if(is_array($check)){
                                        $thongbao="Mật Khẩu Của Bạn Là :".$check['pass'];
                                    }else{
                                        $thongbao="email k tồn tại ";
                                    }
                                  
                                    
                                }
                             
                                include "view/taikhoan/quenmk.php";
                                
                                break;
                            case 'thoat':
                                session_unset();
                                header('location: index.php');
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