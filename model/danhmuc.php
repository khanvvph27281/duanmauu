<?php
function insert_danhmuc($tenloai){
    $sql = "insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
function load_danhmuc(){
    $sql="select * from danhmuc order by id";
    return pdo_query($sql);

}
function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);

}

?>