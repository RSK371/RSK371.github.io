<?php
header("refresh:1; url=index.php");
include('includes/db.php');

class Product {
    public $sku;
    public $name;
    public $price;
    public $size;
    public $weight;
    public $length;
    public $height;
    public $width;
    public $catg;
    public function insertProductToDb ($con) {
        $sql = "INSERT INTO articles (SKU,Name1,Image,Price,Category,Size,Weight,Height,Width,Length) VALUES ('$this->sku','$this->name','$this->image','$this->price','$this->catg','$this->size','$this->weight',
'$this->height','$this->width','$this->length')";
        if(!mysqli_query($con,$sql)){
            echo 'Not Inserted';
        } else {
            echo 'Inserted';
        }
    }
}

$product = new Product ();
$product->sku = filter_var($_POST['sku'], FILTER_SANITIZE_NUMBER_INT);
$product->name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$product->price = filter_var($_POST['Price'], FILTER_SANITIZE_NUMBER_INT);
$product->size = filter_var($_POST['Size'], FILTER_SANITIZE_NUMBER_INT);
$product->weight = filter_var($_POST['Weight'], FILTER_SANITIZE_NUMBER_INT);
$product->height = filter_var($_POST['Height'], FILTER_SANITIZE_NUMBER_INT);
$product->width = filter_var($_POST['Width'], FILTER_SANITIZE_NUMBER_INT);
$product->length = filter_var($_POST['Length'], FILTER_SANITIZE_NUMBER_INT);
$product->catg = $_POST['Category'];
$product->insertProductToDb ($con);

/* withou OOP
header("refresh:1; url=index.php");
$msg = "";
include('includes/db.php');
$sku = filter_var($_POST['sku'], FILTER_SANITIZE_NUMBER_INT);
$name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$price = filter_var($_POST['Price'], FILTER_SANITIZE_NUMBER_INT);
$size = filter_var($_POST['Size'], FILTER_SANITIZE_NUMBER_INT);
$weight = filter_var($_POST['Weight'], FILTER_SANITIZE_NUMBER_INT);
$height = filter_var($_POST['Height'], FILTER_SANITIZE_NUMBER_INT);
$width = filter_var($_POST['Width'], FILTER_SANITIZE_NUMBER_INT);
$length = filter_var($_POST['Length'], FILTER_SANITIZE_NUMBER_INT);
$catg = $_POST['Category'];
$sql = "INSET INTO articles (SKU,Name1,Image,Price,Category,Size,Weight,Height,Width,Length) VALUES ('$sku','$name','$image','$price','$catg','$size','$weight',
'$height','$width','$length')";
if(!mysqli_query($con,$sql)){
    echo 'Not Inserted';
} else {
    echo 'Inserted';
}
*/
?>

