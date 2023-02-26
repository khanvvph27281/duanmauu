<?php

function viewcart(){
    global $img_path;
    $tong=0;
    $i=0;
   foreach($_SESSION['mycart'] as $cart){

        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong=$tong+$ttien;
        
        $xoasp="index.php?act=delcart&&idcart=".$i;
        echo '
         <tr>
        <td><img src="'.$hinh.'" alt="" height="80px"></td>
        <td>'.$cart[1].' </td>
        <td>'.$cart[3].' </td>
        <td>'.$cart[4].'</td>
        <td>'.$ttien.'  </td>
        <td>   <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
    </tr>';
    echo '<tr> <td colspan="4">Tổng Đơn Hàng</td>
    <td>'.$tong.' </td>
    <td> </td></tr>
   
    ';

   }
}
function tongdonhang(){
    $tong=0;
    foreach($_SESSION['mycart'] as $cart){
        $ttien=$cart[3]*$cart[4];
        $tong=$tong+$ttien;
   }
}
function insert_bill($name,$address,$tell,$email,$pttt,$ngaydathang,$total){
    $sql = "insert into bill(bill_name,bill_address,bill_tell,bill_email,bill_pttt,ngaydathang,total) values('$name','$address','$tell','$email','$pttt','$ngaydathang','$total')";
    return pdo_execute_return_lastInsertId($sql);
}
?>
