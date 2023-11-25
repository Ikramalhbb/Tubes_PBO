<!-- processForm.php -->
<?php
require_once 'ProductController.php';

// Check if the form for adding a product is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addProduct'])) {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    // Create an instance of ProductController
    $productController = new ProductController();

    // Use the createProduct method to add a new product
    $newProduct = $productController->createProduct($productName, $productPrice);

    if ($newProduct) {
        echo "Product added successfully: " . $newProduct->displayInfo();
    } else {
        echo "Failed to add product.";
    }
}
?>