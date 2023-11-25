<!-- addProduct.php -->
<?php
require_once 'ProductController.php';

// Create an instance of ProductController
$productController = new ProductController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addProduct'])) {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    // Use the createProduct method to add a new product
    $newProduct = $productController->createProduct($productName, $productPrice);

    if ($newProduct) {
        header("Location: productList.php"); // Redirect to product list
        exit();
    } else {
        echo "Failed to add product.";
    }
}
?>