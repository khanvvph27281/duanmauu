<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb2">
                          Mã Loại <br>
                    <input type="text" name="maloai" disabled>
                    </div>
                  <div class="row mb2">
                    Tên Loại <br>
                     <input type="text" name="tenloai">
                  </div>
                  <div class="row mb2">
                    <input type="submit" name="them" id="" value="Thêm Mới">
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