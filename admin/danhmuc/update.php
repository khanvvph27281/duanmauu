<?php
if(is_array($suadm)){
  extract($suadm);
  
}
?>
<div class="row">
            <div class="row formtitle">
                <h1>SỬA LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                <div class="row mb2">
                          Mã Loại <br>
                    <input type="text" name="maloai" disabled >
                    </div>
                  <div class="row mb2">
                    Tên Loại <br>
                     <input type="text" name="tenloai" value="<?= $name; ?>">
                  </div>
                  <div class="row mb2">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" name="capnhat" id="" value="Cập Nhật">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listdm">    <input type="button" name="" id="" value="Danh Sách"></a>
               
                  </div>
                   <?php
                   if(isset($thongbao)&&$thongbao!=""){
                    echo $thongbao;
                   }
                   
                   ?>
                </form>
            </div>
        </div>
    </div>