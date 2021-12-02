<?php
require_once('classes/Database.php');
require_once('classes/Product.php');

include 'includes/init.php';
include 'includes/header.php';

$db = new Database('mysql', 'root', 'password', 'scandiweb');
$dbData = $db->getInstance();

/*$products = new product('sku', 'name', 'price', 'type', 'size');
$products->getProducts();*/

?>

    <div class="container">
        <h1>Product list</h1>
            <a href="#" class="btn btn-white border">Add</a>
            <a href="#" class="btn btn-white border">Mass delete</a>
        <div class="row p-3">
            <?php
            $sql = $dbData->fetchData();
            while($row = mysqli_fetch_array($sql)) { ?>
            <div class="card col-4 p-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1"></label>
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title">SKU: <?php echo $row['sku'] ?></h4>
                    <h5 class="card-title">Name: <?php echo $row['name']?></h5>
                    <p class="card-text">Price: <?php echo $row['price'] ?> &euro;</p>
                    <p class="card-text">Type: <?php echo $row['type'] ?></p>
                    <p class="card-text">Size: <?php echo $row['size'] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>

