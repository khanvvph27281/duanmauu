<div class="row">
    <div class="left mt-top">
       <div class="boxtitle ">Sản Phẩm chi tiết </div>
       <div class="row boxcontent ">
            <?php
            extract($load_one);
            $img=$img_path.$img;
            echo ' <img src="'.$img.'" alt="" width="500px""><br>';
            echo $mota;
            ?>
           
       </div>
    
       <div class="boxtitle mt-top">Bình Luận </div>
       <div class="row boxcontent ">
        
       </div>
       <div class="boxtitle">Sản Phẩm cùng Loại</div>
       <div class="row boxcontent ">
        <?php
         foreach ($load_cl as $load) {
          # code...
          extract($load);
          $linksp="index.php?act=sanphamct&&id_sp=".$id;
          echo '<li><a href="'.$linksp.'">'.$name_sp.'</a></li>';
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