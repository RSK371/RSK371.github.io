<?php include('includes/db.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>CD Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">ScandiWeb</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Product List</a></li>
                <li><a href="add_product.php">Add product</a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div class="container">
        <div class="product-list">
            <div class="row">
                <div class="product-list-header">
                    <h3>Product list</h3>
                    <div class="product-list-filter">
                    <form action="delete.php" method="post">
                        <input name="id" class="skuremove" type="text" placeholder="SKU TO DELETE">  
                        <button type="submit" class="btn btn-dark">Apply</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-list-content">
            <?php
                $res=mysqli_query($con,"SELECT * FROM articles");
                while($row=mysqli_fetch_array($res))
                {
            ?>
                    <div class="col-md-2">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/disc1.jpg" alt="Card image cap">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Name:</strong> <?php echo $row["Name1"]; ?></li>
                                <li class="list-group-item"><strong>Price:</strong> $<?php echo $row["Price"]; ?></li>
                                <li class="list-group-item"><strong>Category:</strong> <?php echo $row["Category"]; ?></li>
                                <li class="list-group-item"><strong>SKU:</strong> <?php echo $row["SKU"]; ?></li>
                            </ul>
                        </div>
                    </div>                 
            <?php
                }
            ?>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>