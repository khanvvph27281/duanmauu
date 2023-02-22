<div class="row">
    <div class="left mt-top">
       <div class="boxtitle ">QuÊN mẬT kHẨU </div>
       <div class="row boxcontent  ">
           <form action="index.php?act=quenmk" method="post">

           <label for="">ĐỊA CHỈ EMAIL</label><br>
           <input type="email" name="email" required><br>
           <input type="submit" value="Quên Mật Khẩu" name="quenmk">
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