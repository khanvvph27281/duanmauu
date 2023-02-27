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
             <td>'.$maxprice.'</td>
             <td>'.$minprice.'</td>
             <td>'.$avg.'</td></tr>';
        }
       
        ?>
     
    </table>
    <a href="index.php?act=bieudo"> <input type="submit" value="xem Biểu đồ "></a>
   
    </div>
   </div>
    
