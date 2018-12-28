<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Add product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Последняя компиляция и сжатый CSS -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Дополнение к теме -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<!-- Последняя компиляция и сжатый JavaScript -->  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/javascript.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">ScandiWeb</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Product List</a></li>
                <li class="active"><a href="add_product.php">Add product</a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
        <div class="container">
            <div class="product-list">
                <div class="row">
                    <div class="product-list-header">
                        <h3>Add product</h3>
                        <div class="product-list-filter">
                            <button type="submit" name="submit" class="btn btn-dark" form="productadd">Add</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form id="productadd" action="submit.php" method="POST">
                        <div class="input-group">
                            <br>
                            <label>SKU</label>
                            <span class="error">  This field is required</span>
                            <input name="sku"type="text" class="form-control" placeholder="Enter product SKU" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group">
                            <br>
                            <label>Name</label>
                            <span class="error">  This field is required</span>
                            <input name="Name" type="text" class="form-control" placeholder="Enter product name" aria-describedby="basic-addon2">
                         </div>
                        <div class="input-group">
                            <br>
                            <label>Price</label>
                            <span class="error">  This field is required</span>
                            <input name="Price" type="text" class="form-control" placeholder="Enter product price" aria-describedby="basic-addon2">
                        </div>
                        <br>
                        <div class="form-group">  
                            <label for="selector">Product type</label>
                            <span class="error">  This field is required</span>
                            <select name="Category" class="form-control" id="selectorname">
                                <option value="nselected">Not selected</option>
                                <option value="disc">DVD-Disc</option>
                                <option value="book">Book</option>
                                <option value="furniture">Furniture</option>
                            </select>
                        </div>
                        <div class="selectors" id="disc">
                            <label>Size</label>
                            <span class="error">  This field is required</span>
                            <input name="Size" type="text" class="form-control" placeholder="Enter disc size in MB" aria-describedby="basic-addon2">
                        </div>
                        <div class="selectors" id="book">
                            <label>Weight</label>
                            <span class="error">  This field is required</span>
                            <input name="Weight" type="text" class="form-control" placeholder="Enter book weight in KG" aria-describedby="basic-addon2">
                        </div>
                        <div class="selectors" id="furniture">   
                            <label>Height</label>
                            <span class="error">  This field is required</span>
                            <input name="Height"type="text" class="form-control" placeholder="Enter furniture height" aria-describedby="basic-addon2">
                            <label>Width</label>
                            <span class="error">  This field is required</span>
                            <input name="Width" type="text" class="form-control" placeholder="Enter furniture width" aria-describedby="basic-addon2">
                            <label>Length</label>
                            <span class="error">  This field is required</span>
                            <input name="Length" type="text" class="form-control" placeholder="Enter furniture length" aria-describedby="basic-addon2">
                        </div>
                    </form>
                </div>
            </div>
    </main>
</body>
</html>