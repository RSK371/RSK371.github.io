<?php
    header("refresh:1; url=index.php")
    $sku = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $connect = mysqli_connect('localhost','root','','add_product');
    $query = "DELETE FROM `articles` WHERE `SKU` = $sku";
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($connect);
?>
