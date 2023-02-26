<div class="row mr1 ">
    <div class="left">
       
            <div class="row mt">
                <div class="boxtitle"> Cảm Ơn</div>
                <div class="row boxcontent mb" style="text-align: center;">
                <h2>Cảm Ơn Quý Khách đã Đặt Hàng</h2>
                </div>
                
            </div>
            <?php
            if(isset($bill)&&is_array($bill)){
                extract($bill);
            }
            ?>
            <div class="row mt">
                <div class="boxtitle">Mã Đơn Hàng</div>
                <div class="row boxcontent mb" style="text-align: center;">
                <h1>Dam<?=$bill['id'];?></h1>
                <h1>ngày đặt hàng<?=$bill['ngaydathang'];?></h1>
                <h1>TỔng đơn hàng<?=$bill['total'];?></h1>
                </div>
            </div>
            <div class="row mt">
                <div class="boxtitle">Thông Tin đặt Hàng</div>
                <table>
                    <tr>
                        <td>Người đặt Hàng</td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <td>Người đặt Hàng</td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <td>Người đặt Hàng</td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <td>Người đặt Hàng</td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                </table>
            </div>
            <div class="row mt">
                <div class="boxtitle">Chi tiết Giỏ Hàng</div>
                <div class="boxconten">
                    <table>
                    <tr>
                        <th>Stt</th>
                        <th>Hình </th>
                        <th>Sản Phẩm</th>
                        <th>đơn Giá</th>
                        <th>Số lượng</th>
                        <th>Thành Tiền</th>
                    </tr>
                </table>
                <?php
                view_ct($bill_ct);
                ?>
                </div>
                
            </div>

    </div>

    <div class="right">
        <?php
        include "view/boxright.php";
        ?>
    </div>

</div>