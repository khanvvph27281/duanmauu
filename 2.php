<?php
session_start();
if(isset($_SESSION['mycart'])){
    foreach ($_SESSION['mycart'] as $cart){
        echo ' mÃ sp : '.$cart[0];
        
    }
}
?>