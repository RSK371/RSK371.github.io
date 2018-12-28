<?php
$con = mysqli_connect('localhost','root','','add_product');
if(!$con){
    echo 'Not Connected to server';
}
if(!mysqli_select_db($con,'add_product')){
    echo 'Database Not Selected';
}
?>