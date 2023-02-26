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
                viewcart();              
                ?> 
              
            </table>

        </div>
    </div>
    <div class="row mb">
        <a href="index.php?act=bill"> <input type="submit" value="Đồng Ý Đặt Hàng"></a>
       <a href="index.php?act=delcart"><input type="button" value="Xóa Giỏ hàng"></a>
    </div>
    </div>
    <div class="right">
<?php
include "view/boxright.php";
?>
    </div>

</div>