<?php
require_once('classes/Database.php');
require_once('classes/Product.php');

include 'includes/init.php';
include 'includes/header.php';

$db = new Database('mysql', 'root', 'password', 'scandiweb');
$dbData = $db->getInstance();

$products = new ProductRepository();
$productData = $products->getProducts();

?>

    <div class="container">
        <h1>Product list</h1>
            <a href="#" class="btn btn-white border">Add</a>
            <a href="#" class="btn btn-white border">Mass delete</a>
        <div class="row p-3">
            <?php
            foreach ($productData as $product) { ?>
            <div class="card col-4 p-3">
                <div class="form-check">
                    <input class="form-check-input delete-checkbox" type="checkbox" value="">
                    <label class="form-check-label" for="delete"></label>
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title">SKU: <?= $product['sku'] ?> </h4>
                    <h5 class="card-title">Name: <?= $product['name']?> </h5>
                    <p class="card-text">Price: <?= $product['price'] ?> &euro;</p>
                    <p class="card-text">Type: <?= $product['type'] ?> </p>
                    <p class="card-text">Size: <?= $product['size'] ?> </p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>

