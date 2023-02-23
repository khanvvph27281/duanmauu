<div class="row">
    <div class="row formtitle">
        <h1>Danh sách Bình Luận</h1>
    </div>
    <div class="row formcontent"> <table>
        <tr>
            <th></th>
            <th>Mã Bình Luận</th>
            <th>Nội dung</th>
            <th>Id người dùng</th>
            <th>$idpro </th>
            <th>Ngày Bình luận</th>
            
            <th>Khác</th>
        </tr>
        <?php
        foreach ( $loadbinhluan as $loadall){
            extract($loadall);
            $delete_bl="index.php?act=deletebl&&id= ".$id;
          
             echo ' <tr>
            <td></td>
            <td>'.$id.'</td>
            <td>'.$noidung.'</td>
            <td>'.$iduser.'</td>
            <td>'.$idpro.'</td>
            <td>'.$ngaybinhluan.'</td>
            <td> <a href="'.$delete_bl.'"><input type="button" value="Xóa"></a> 
      
            </td>
        </tr>';
        }
       
        ?>
     
    </table>
    <input type="button" value="Chọn Tất Cả">
    <input type="button" value="Bỏ chọn tất cả ">
    <input type="button" value="Xóa mục đã chọn ">
   
    
