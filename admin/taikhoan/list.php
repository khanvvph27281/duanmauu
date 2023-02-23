<div class="row">
    <div class="row formtitle">
        <h1>Danh sách Tài Khoản</h1>
    </div>
    <div class="row formcontent"> <table>
        <tr>
            <th></th>
            <th>Mã Tài khoản</th>
            <th>Tên Tài Khoản</th>
            <th>Pass</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Vai Trò</th>
            <th>Khác</th>
        </tr>
        <?php
        foreach ( $loadtaikhoan as $loadall){
            extract($loadall);
            $delete_dm="index.php?act=deletetk&&id= ".$id;
          
             echo ' <tr>
            <td></td>
            <td>'.$id.'</td>
            <td>'.$user.'</td>
            <td>'.$pass.'</td>
            <td>'.$email.'</td>
            <td>'.$address.'</td>
            <td>'.$tell.'</td>
            <td>'.$role.'</td>
            <td> <a href="'.$delete_dm.'"><input type="button" value="Xóa"></a> 
      
            </td>
        </tr>';
        }
       
        ?>
     
    </table>
    <input type="button" value="Chọn Tất Cả">
    <input type="button" value="Bỏ chọn tất cả ">
    <input type="button" value="Xóa mục đã chọn ">
   <a href="index.php?act=adddm"><input type="button" value="nhập thêm"></a></div>
   </div>
    
