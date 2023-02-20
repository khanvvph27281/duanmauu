<div class="row">
    <div class="left mt-top">
       <div class="boxtitle ">Sản Phẩm  </div>
       <div class="row boxcontent ">
            <?php
            foreach ($load as $load_dm) {
                extract($load_dm);
                # code...
                $linksp="index.php?act=sanphamct&&id_sp=".$id;
                $hinh=$img_path.$img;
                if(($i=2)||($i=5)||($i=8)||($i=11)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                echo ' <div class="border_img '.$mr.'">
                <img src="'.$hinh.'" alt="">
                <p>'.$price.'</p>
                <a href="'.$linksp.'">'.$name_sp.'</a>
            </div>';
            }
            ?>
           
       </div>
    
      
      
    </div>
    <div class="right">
      <?php
      include "boxright.php";
      ?>
    </div>
</div>