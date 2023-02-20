<?php
function insert_danhmuc($tenloai){
    $sql = "insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
function load_danhmuc(){
    $sql="select * from danhmuc";
    return pdo_query($sql);

}
function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);

}
function loadone_danhmuc($id){
    $sql="select * from danhmuc where id=".$id;
    return pdo_query_one($sql);

}
function update_dm($name,$id){
    $sql = "update danhmuc SET name='".$name."' where id=".$id;
    pdo_execute($sql);
}
function insert_sanpham($tensp,$gia,$hinh,$mota,$iddm){
    $sql = "insert into sanpham(name_sp,price,img,mota,id_danhmuc) values('$tensp','$gia','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function load_sanpham(){
    $sql="select * from sanpham";
    return pdo_query($sql);

}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);

}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    return pdo_query_one($sql);

}
function update_sp($name_sp,$gia,$hinh,$mota,$iddm,$id){
    $sql = "update sanpham set name_sp ='".$name_sp."' , price='".$gia."',img='".$hinh."',mota ='".$mota."',id_danhmuc= '".$iddm."' where id=".$id;
    pdo_execute($sql);
}
?>
