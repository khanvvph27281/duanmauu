<div class="row mr1 ">
    <div class="left">
        <form action="index.php?act=billcomfim" method="post">
            <div class="row mt">

                <div class="boxtitle"> Giỏ hàng</div>
                <div class="row boxcontent mb">
                    <table>
                        <?php
                        if (isset($_SESSION['hoten'])) {
                            $name = $_SESSION['hoten']['user'];
                            $address = $_SESSION['hoten']['address'];
                            $email = $_SESSION['hoten']['email'];
                            $tel = $_SESSION['hoten']['tell'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <td>Người Đặt hàng</td>
                            <td><input type="text" name="hoten" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa Chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email
                                                                        ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện Thoại</td>
                            <td><input type="text" name="sdt" value="<?= $tel ?>"></td>
                        </tr>


                    </table>

                </div>
                <div class=" row mt">
                    <div class="boxtitle">Phương Thức Thanh Toán</div>
                    <div class="row boxcontent">
                        <table>
                            <tr>
                                <td><input type="radio" name="pttt" checked>Trả Tiền Khi Nhận Hàng</td>
                                <td><input type="radio" name="pttt">Chuyển KHhoarn Ngân Hàng</td>
                                <td><input type="radio" name="pttt">Thanh Toán online</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mt">
                    <div class="boxtitle"> Giỏ hàng</div>
                    <div class="row boxcontent">
                        <table>
                            <tr>
                                <td>Hình</td>
                                <td>Sản Phẩm </td>
                                <td>Đơn Giá </td>
                                <td>Số Lượng </td>
                                <td>Thành tiền </td>
                                <td>Thao tác </td>

                            </tr>

                            <?php
                            viewcart();

                            ?>

                        </table>

                    </div>

                </div>
                <div class="row mt">
                    <input type="submit" value="Đồng Ý Đặt Hàng" name="dongydathang"><a href="index.php?act=delcart"></a>
                </div>
            </div>

    </div>
    </form>

    <div class="right">
        <?php
        include "view/boxright.php";
        ?>
    </div>

</div>