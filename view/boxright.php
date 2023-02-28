<div class="row mb mt">
    <div class="boxtitle">Tài Khoản</div>
    <div class="boxcontent formtk">
        <?php
        if (isset($_SESSION['hoten'])) {
            extract($_SESSION['hoten']);
        ?>
            <div class="row mb1">
                Xin chado <br>
                <?= $user ?>
            </div>
            <div class="row mb1">
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php
                if($role==1){

                
                ?>
                <li>
                    <a href="admin/index.php">Đăng Nhập admin</a>
                </li>
                <?php
                }
                ?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
                <li>
                    <a href="index.php?act=dangky">Đăng Kí</a>
                </li>
            </div>


        <?php

        } else {
        

        ?>
        <form action="index.php?act=dangnhap" method="post">
            <div class="row mb1">
                Tên Đăng nhập <br>
                <input type="text" name="hoten" id=""><br>
            </div>
            <div class="row mb1">
                Mật khẩu <br>
                <input type="password" name="matkhau"><br>
            </div>

            <input type="checkbox" name="" id="">Ghi NHớ tài khoản <br>
            <input type="submit" value="Đăng Nhập" name="dangnhap">
            <input type="submit" value="Đăng ký" name="dangki">

        </form>
        <li>
            <a href="index.php?act=quenmk">Quên Mật khẩu</a>
        </li>
        <li>
            <a href="index.php?act=dangky">Đăng Kí</a>
        </li>
        <?php
        }
        ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">Danh Mục</div>
    <div class="boxcontent2 menudoc">
        <?php
        foreach ($loadall as $load) {
            extract($load);
            $linkdm = "index.php?act=sanpham&& iddm=" . $id;
            echo '<ul>
                    <li><a href="' . $linkdm . '">' . $name . '</a></li>
                </ul>
              ';
        }
        ?>

    </div>
    <div class="boxforder tkbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">

        </form>
    </div>
</div>
<div class="row ">
    <div class="boxtitle">Top 10</div>
    <div class="row boxcontent">
        <?php
        foreach ($load_top10 as $load) {
            extract($load);
            $linksp = "index.php?act=sanphamct&&id_sp=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb1 top10">
                    <img src="' . $img . '" alt="">
                    <a href="' . $linksp . '">' . $name_sp . '</a>
                </div>';
        }
        ?>


        <!-- <div class="row mb1 top10">
                    <img src="images/iphone-1.jpg" alt="">
                    <a href="">điện thoại ip</a>
                </div>
                <div class="row mb1 top10">
                    <img src="images/iphone-1.jpg" alt="">
                    <a href="">điện thoại ip</a>
                </div>
                <div class="row mb1 top10">
                    <img src="images/iphone-1.jpg" alt="">
                    <a href="">điện thoại ip</a>
                </div> -->
    </div>
</div>