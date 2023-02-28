<?php
if (is_array($suasp)) {
    extract($suasp);
}
$hinhpath="../img/".$img;
if(is_file($hinhpath)){
  $hinh="<img src ='".$hinhpath."' height='80'>";
}else{
  $hinh = " No image";
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>Cập Nhật Sản Phẩm</h1>
    </div>
    <div class="row formcontent">
    <form action="index.php?act=update_sp" method="POST" enctype="multipart/form-data">
            <div class="row mb2">
                Danh Mục :<br>
                <select name="iddm" id="">
                    <?php
                    foreach ($load_dm as $load) {
                        extract($load);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }

                    ?>
                </select>
            </div>
            <div class="row mb2">
                Tên Sản Phẩm <br>
                <input type="text" name="namesp" value="<?= $name_sp; ?>">
            </div>
            <div class="row mb2">
                Giá <br>
                <input type="text" name="price" value="<?= $price ?>">
            </div>
            <div class="row mb2">
                Hình <br>
                <input type="file" name="hinh" value="<?= $img; ?>">
            </div>
            <div class="row mb2">
                Mô Tả <br>
                <textarea name="mota"cols="30" rows="10" value=""><?= $mota; ?></textarea>
            </div>
            <div class="row mb2">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhatsanpham"  value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"> <input type="button" name="" id="" value="Danh Sách"></a>

            </div>
         
        </form>
    </div>
</div>
