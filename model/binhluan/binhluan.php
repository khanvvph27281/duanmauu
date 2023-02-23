<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function load_binhluan($id){
    $sql="select * from binhluan where idpro=".$id;
    return pdo_query($sql);

}
function loadbinhluan(){
    $sql="select * from binhluan ";
    return pdo_query($sql);

}
function delete_binhluan($id){
    $sql="delete from binhluan where id=".$id;
    pdo_execute($sql);

}
?>