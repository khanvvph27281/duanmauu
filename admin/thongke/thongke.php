<div class="row">
    <div class="row formtitle">
        <h1>Thống kê hàng hóa</h1>
    </div>
    <div class="row formcontent"> <table>
        <tr>
            <th>Mã danh Mục</th>
            <th>Loại Hàng</th>
            <th>Số Lượng</th>
            <th>Giá Cao Nhất</th>
            <th>Giá Thấp Nhất</th>
            <th>Giá trung bình</th>
            
            
        </tr>
       
            
        <?php
        foreach ($load as $loadall){
            extract($loadall);
          
             echo '  <tr>  <td>'.$madm.'</td>
             <td>'.$tendm.'</td>
             <td>'.$countsp.'</td>
             <td>'.$maxprice.'t</td>
             <td>'.$minprice.'</td>
             <td>'.$avg.'</td></tr>';
        }
       
        ?>
     
    </table>
    <input type="button" value="Chọn Tất Cả">
    <input type="button" value="Bỏ chọn tất cả ">
    <input type="button" value="Xóa mục đã chọn ">
   <a href="index.php?act=adddm"><input type="button" value="nhập thêm"></a></div>
   </div>
    
