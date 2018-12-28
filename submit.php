<?php
header("refresh:1; url=index.php");
$msg = "";
include('includes/db.php');
$sku = $_POST['sku'];
$name = $_POST['Name'];
$price = $_POST['Price'];
$size = $_POST['Size'];
$weight = $_POST['Weight'];
$height = $_POST['Height'];
$width = $_POST['Width'];
$length = $_POST['Length'];
$catg = $_POST['Category'];

$sql = "INSERT INTO articles (SKU,Name1,Image,Price,Category,Size,Weight,Height,Width,Length) VALUES ('$sku','$name','$image','$price','$catg','$size','$weight',
'$height','$width','$length')";

if(!mysqli_query($con,$sql)){
    echo 'Not Inserted';
} else {
    echo 'Inserted';
}
?>