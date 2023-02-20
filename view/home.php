<div class="row">
    <div class="left">
        <div class="row mt">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="./img/anh1.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="./img/anh2.jpg "style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="./img/anh1.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row mt">
            <?php
            $i=0;
            foreach ($views as $view) {
                extract($view);
                $linksp="index.php?act=sanphamct&& id_sp=".$id;
                $hinh=$img_path.$img;
                if(($i==2) || ($i==5) || ($i=8)){
                    $mr="mr";
                }else{
                    $mr="";
                }
                echo ' <div class="border_img '.$mr.'">
                <img src="'.$hinh.'" alt="">
                <p>'.$price.'</p>
                <a href="'.$linksp.'">'.$name_sp.'</a>
            </div>';
            }
            ?>
           
            <!-- <div class="border_img mr">
                <img src="img/Cach-cai-hinh-nen-iphone-1_ 1jpg.jpg" alt="">
            </div>
            <div class="border_img mr">
                <img src="img/Cach-cai-hinh-nen-iphone-1_ 1jpg.jpg" alt="">
            </div>
            <div class="border_img mr">
                <img src="img/Cach-cai-hinh-nen-iphone-1_ 1jpg.jpg" alt="">
            </div>
            <div class="border_img mr">
                <img src="img/Cach-cai-hinh-nen-iphone-1_ 1jpg.jpg" alt="">
            </div>
            <div class="border_img mr">
                <img src="img/Cach-cai-hinh-nen-iphone-1_ 1jpg.jpg" alt="">
            </div>
            <div class="border_img mr">
                <img src="img/Cach-cai-hinh-nen-iphone-1_ 1jpg.jpg" alt="">
            </div>
            <div class="border_img mr">
                <img src="img/Cach-cai-hinh-nen-iphone-1_ 1jpg.jpg" alt="">
            </div>
            <div class="border_img mr">
                <img src="img/Cach-cai-hinh-nen-iphone-1_ 1jpg.jpg" alt="">
            </div> -->

        </div>
    </div>
    <div class="right">
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
                foreach ($loadall as $load){
                    extract($load);
                    $linkdm="index.php?act=sanpham&& iddm=".$id
;                    echo '<ul>
                    <li><a href="'.$linkdm.'">'.$name.'</a></li>
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
                 foreach($load_top10 as $load){
                    extract($load);
                    $linksp="index.php?act=sanphamct&& id=".$id;
                    $img=$img_path.$img;
                    echo '<div class="row mb1 top10">
                    <img src="'.$img.'" alt="">
                    <a href="'.$linksp.'">'.$name_sp.'</a>
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
    </div>
</div>