<!-- processMultipleProductsForm.php -->
<?php
require_once 'ProductController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addMultipleProducts'])) {
    $productNames = $_POST['productName'];
    $productPrices = $_POST['productPrice'];

    if (count($productNames) === count($productPrices)) {
        // Create an instance of ProductController
        $productController = new ProductController();

        for ($i = 0; $i < count($productNames); $i++) {
            $productName = $productNames[$i];
            $productPrice = $productPrices[$i];

            // Use the createProduct method to add a new product
            $newProduct = $productController->createProduct($productName, $productPrice);

            if ($newProduct) {
                echo "Product added successfully: " . $newProduct->displayInfo() . "<br>";
            } else {
                echo "Failed to add product.<br>";
            }
        }
    } else {
        echo "Number of product names and prices does not match.<br>";
    }
}
?>
