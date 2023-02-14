<div class="row">
    <div class="row formtitle">
        <h1>Danh sách loại hàng hóa</h1>
    </div>
    <div class="row formcontent"> <table>
        <tr>
            <th></th>
            <th>Mã Loại</th>
            <th>Tên loại</th>
            <th>Khác</th>
        </tr>
        <?php
        foreach ($load_dm as $loadall){
            extract($loadall);
            $delete_dm="index.php?act=deletedm&&iddm= ".$id;
            $update_dm="index.php?act=suadm&&iddm= ".$id;
             echo ' <tr>
            <td></td>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td> <a href="'.$delete_dm.'"><input type="button" value="Xóa"></a> 
       <a href="'.$update_dm.'"><input type="submit" value="Sửa"></a>
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
    
