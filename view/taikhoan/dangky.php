<div class="row">
    <div class="left mt-top">
       <div class="boxtitle ">Đăng Ký </div>
       <div class="row boxcontent  ">
           <form action="index.php?act=dangky" method="post">
           <label for="">TÊN ĐĂNG NHẬP</label><br>
           <input type="text" name="hoten"><br>

           <label for="">MẬT KHẨU</label><br>
           <input type="password" name="matkhau"><br>

           <label for="">ĐỊA CHỈ EMAIL</label><br>
           <input type="email" name="email" required><br>
           <input type="submit" value="Đăng ký" name="dangky">
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