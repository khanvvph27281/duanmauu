<div class="row mb">
    <div class="left">
    <div class="row mt">
        <div class="boxtitle"> Giỏ hàng</div>
        <div class="row boxcontent">
            <table>
                <tr>
                    <td>Hình</td>
                    <td>Sản Phẩm </td>
                    <td>Đơn Giá </td>
                    <td>Số Lượng </td>
                    <td>Thành tiền  </td>
                    <td>Thao tác </td>

                </tr>
              
                <?php
                $tong=0;
                $i=0;
               foreach($_SESSION['mycart'] as $cart){
                    $hinh=$img_path.$cart[2];
                    $ttien=$cart[3]*$cart[4];
                    $tong=$tong+$ttien;
                    
                    $xoasp="index.php?act=delcart&&idcart=".$i;
                    echo ' <tr>
                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                    <td>'.$cart[1].' </td>
                    <td>'.$cart[3].' </td>
                    <td>'.$cart[4].'</td>
                    <td>'.$ttien.'  </td>
                    <td>   <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                </tr>';
                echo '<tr> <td colspan="4">Tổng Đơn Hàng</td>
                <td>'.$tong.' </td>
                <td> </td></tr>
               
                ';

               }
              
                ?> 
              
            </table>

        </div>
    </div>
    <div class="row mb">
        <input type="submit" value="Đồng Ý Đặt Hàng"><a href="index.php?act=delcart"><input type="button" value="Xóa Giỏ hàng"></a>
    </div>
    </div>
    <div class="right">
<?php
include "view/boxright.php";
?>
    </div>

</div>