<?php
require_once('classes/database.php');
require_once ('classes/product.php');
include 'includes/init.php';
include 'includes/header.php';

?>

    <div class="container">
        <h1>Product list</h1>
            <a href="#" class="btn btn-white border">Add</a>
            <a href="#" class="btn btn-white border">Mass delete</a>
        <div class="row">
            <div class="card col-4 p-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1"></label>
                </div>
                <div class="card-body text-center">
                    <?php
                    /*$products = new product();
                    $products->getProducts();*/
                    ?>
                    <h4 class="card-title">SKU</h4>
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Price</p>
                    <p class="card-text">Type</p>
                    <p class="card-text">Size</p>
                </div>
            </div>
            <div class="card col-4 p-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1"></label>
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title">SKU</h4>
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Price</p>
                    <p class="card-text">Type</p>
                    <p class="card-text">Size</p>
                </div>
            </div><div class="card col-4 p-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1"></label>
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title">SKU</h4>
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Price</p>
                    <p class="card-text">Type</p>
                    <p class="card-text">Size</p>
                </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>

