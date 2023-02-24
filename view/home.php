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
                <a href="'.$linksp.'">'.$name_sp.'</a><br>
                  <div class="row">
            <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name_sp" value="'.$name_sp.'">
                <input type="hidden" name="img" value="'.$img.'">
                <input type="hidden" name="price" value="'.$price.'">
                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">

            </form>
           </div>
               
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
       <?php
   include 'boxright.php';
   ?> 
    </div>
   
   
   
</div>