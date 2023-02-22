<div class="row">
    <div class="left mt-top">
       <div class="boxtitle ">Đăng Ký </div>
       <div class="row boxcontent  ">
        <?php
        if(isset($_SESSION['hoten'])&&(is_array(($_SESSION['hoten'])))){
            extract($_SESSION['hoten']);

        }
        ?>
           <form action="index.php?act=edit_taikhoan" method="post">
           <label for="">TÊN ĐĂNG NHẬP</label><br>
           <input type="text" name="hoten" value="<?=$user?>"><br>

           <label for="">MẬT KHẨU</label><br>
           <input type="password" name="matkhau" value="<?=$pass?>"><br>

           <label for="">ĐỊA CHỈ EMAIL</label><br>
           <input type="email" name="email" value="<?=$email?>"><br>
           <label for="">ĐỊA CHỈ </label><br>
           <input type="text" name="diachi" value="<?=$address?>"><br>
           <label for="">Số điện Thoại</label><br>
           <input type="text" name="sdt" value="<?=$tell?>" ><br><input type="hidden" name="id" value="<?=$id?>">
           <input type="submit" value="Cập Nhật" name="capnhat">
            <input type="reset" value="Nhập lại"> 
            
           </form>
           <?php
           if(isset($thongbao)&&$thongbao!=""){
            echo $thongbao;
           }
           ?>
          
           
       </div>
    
      
      
    </div>
    <div class="right">
      <?php
      include "view/boxright.php";
      ?>
    </div>
</div>