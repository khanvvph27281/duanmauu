<div class="row">
  <div class="left mt-top ">
    <div class="mr">
      <div class="row boxtitle mt ">Sản Phẩm chi tiết </div>
      <div class="row boxcontent ">
        <?php
        extract($load_one);
        $img = $img_path . $img;
        echo ' <img src="' . $img . '" alt="" width="500px""><br>';
        echo $mota;
        ?>

      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#binhluan").load("view/binhluan/binhluan.php", {
          idpro: <?= $id ?>;
        });

      });
    </script>
    <div class=" mr">
      <div class="row boxtitle mt" id="binhluan">Bình Luận </div>
      <div class=" boxcontent ">

        <iframe src="view/binhluan/binhluan.php?idpro=<?= $id ?>" frameborder="0" width="" height=""></iframe>
      </div>
    </div>
    <div class="mr">
      <div class="row boxtitle mt">Sản Phẩm cùng Loại</div>
      <div class="row boxcontent ">
        <?php
        foreach ($load_cl as $load) {
          # code...
          extract($load);
          $linksp = "index.php?act=sanphamct&&id_sp=" . $id;
          echo '<li><a href="' . $linksp . '">' . $name_sp . '</a></li>';
        }
        ?>

      </div>
    </div>

  </div>
  <div class="right">
    <?php
    include "boxright.php";
    ?>
  </div>
</div>