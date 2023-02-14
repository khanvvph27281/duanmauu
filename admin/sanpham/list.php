<div class="row">
    <div class="row formtitle">
        <h1>Danh sách Sản Phẩm</h1>
    </div>
    <div class="row formcontent"> <table>
        <tr>
            <th></th>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá Sản Phẩm</th>
            <th>Ảnh </th>
            <th>Mô Tả</th>
            <th>Id danhmuc</th>
            <th>Khác</th>
        </tr>
        <?php
        foreach ($load_sp as $loadall){
            extract($loadall);
            $delete_sp="index.php?act=deletesp&&idsp= ".$id;
            $update_sp="index.php?act=suasp&&idsp= ".$id;
             echo ' <tr>
            <td></td>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$price.'</td>
            <td><img src="../img/'.$img.'" alt="" height="60px" width="60px" ></td>
            <td>'.$mota.'</td>
            <td>'.$id_danhmuc.'</td>
            <td> <a href="'.$delete_sp.'"><input type="button" value="Xóa"></a> 
       <a href="'.$update_sp.'"><input type="submit" value="Sửa"></a>
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
    
