<?php
require_once('classes/database.php');
require_once ('classes/product.php');

include 'includes/init.php';
include 'includes/header.php';

$db = new database('mysql', 'root', 'password', 'scandiweb');
$dbData = $db->getInstance();

/*$products = new product('sku', 'name', 'price', 'type', 'size');
$products->getProducts();*/

?>

    <div class="container">
        <h1>Product list</h1>
            <a href="#" class="btn btn-white border">Add</a>
            <a href="#" class="btn btn-white border">Mass delete</a>
        <div class="row">
            <?php
            $sql = $dbData->fetchData();
            while($row = mysqli_fetch_array($sql)) { ?>
            <div class="card col-4 p-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1"></label>
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title"><?php echo $row['sku'] ?></h4>
                    <h5 class="card-title"><?php echo $row['name']?></h5>
                    <p class="card-text"><?php echo $row['price'] ?></p>
                    <p class="card-text"><?php echo $row['type'] ?></p>
                    <p class="card-text"><?php echo $row['size'] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>

