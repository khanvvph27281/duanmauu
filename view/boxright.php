<div class="row mb mt">
            <div class="boxtitle">Tài Khoản</div>
            <div class="boxcontent formtk">
                <form action="">
                    <div class="row mb1">
                        Tên Đăng nhập <br>
                        <input type="text" name="user" id=""><br>
                    </div>
                    <div class="row mb1">
                        Mật khẩu <br>
                        <input type="password"><br>
                    </div>

                    <input type="checkbox" name="" id="">Ghi NHớ tài khoản <br>
                    <input type="submit" value="Đăng Nhập">

                </form>
                <li>
                    <a href="">Quên Mật khẩu</a>
                </li>
                <li>
                    <a href="">Quên Mật khẩu</a>
                </li>
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
                <form action="#" method="post">
                    <input type="text">
                </form>
            </div>
        </div>
        <div class="row ">
            <div class="boxtitle">Top 10</div>
            <div class="row boxcontent">
                <?php
                foreach ($load_top10 as $load) {
                    extract($load);
                    $linksp = "index.php?act=sanphamct&& id=" . $id;
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