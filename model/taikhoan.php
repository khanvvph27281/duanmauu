<?php
function insert_taikhoan($user,$pass,$email){
    $sql = "insert into taikhoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass ='".$pass."' ";
    return pdo_query_one($sql);

}
function update_taikhoan($id,$user,$pass,$email,$add,$tell){
    $sql = "update taikhoan set user='".$user."' , pass='".$pass."',email='".$email."',address ='".$add."',tell= '".$tell."' where id=".$id;
    pdo_execute($sql);
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    return pdo_query_one($sql);

}
?>