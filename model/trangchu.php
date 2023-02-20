<?php
function loadtrangchu(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    return pdo_query($sql);

}
function danhmuc(){
    $sql="select * from danhmuc";
    return pdo_query($sql);
}
function loadall_sp_top10(){
    $sql="select *from sanpham where 1 order by luotxem desc limit 0,10";
    return pdo_query($sql);
}
function loadonesanpham($id){
    $sql="select * from sanpham where id=".$id;
    return pdo_query_one($sql);

}
function loadsanpham_cungloai($id,$iddm){
    $sql="select * from sanpham where id_danhmuc=".$iddm." AND id <>".$id;
    return pdo_query($sql);

}
function loadsanpham($iddm){
    $sql="select * from sanpham where 1 and id_danhmuc=".$iddm;
    return pdo_query($sql);

}
?>