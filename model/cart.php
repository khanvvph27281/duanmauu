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
function insert_cart($iduser ,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql = "insert into cart(iduser ,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser' ,'$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function load_onebill($id){
    $sql="select * from bill where id=".$id;
    return pdo_query_one($sql);

}
function load_onecart($id){
    $sql="select * from cart where id=".$id;
    return pdo_query_one($sql);

}
function view_ct($listbill){
    global $img_path;
    $tong=0;
    $i=0;
   foreach($listbill as $cart){

        $hinh=$img_path.$cart['img'];
       
        $tong=$tong+$cart['thanhtien'];
        
        $xoasp="index.php?act=delcart&&idcart=".$i;
        echo '
         <tr>
        <td><img src="'.$hinh.'" alt="" height="80px"></td>
        <td>'.$cart['name'].' </td>
        <td>'.$cart['price'].' </td>
        <td>'.$cart['soluong'].'</td>
        <td>'.$cart['thanhtien'].'  </td>
       
    </tr>';
    $i=+1;
    echo '<tr> <td colspan="4">Tổng Đơn Hàng</td>
    <td>'.$tong.' </td>
    
   
    ';

   }
}
function loadall_thongke(){
    $sql="select danhmuc.id as madm ,danhmuc.name as tendm,count(sanpham.id) as countsp,min(sanpham.price) as minprice ,max(sanpham.price) as maxprice, avg(sanpham.price) as avg ";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.id_danhmuc";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listtk=pdo_query($sql);
    return $listtk;
}

?>
