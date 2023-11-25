<!-- deleteProduct.php -->
<?php
require_once 'ProductController.php';

if (isset($_POST['deleteProduct'])) {
    $productId = $_POST['productId'];

    // Create an instance of ProductController
    $productController = new ProductController();

    // Delete product
    $success = $productController->deleteProduct($productId);

    if ($success) {
        header("Location: productList.php"); // Redirect to product list
        exit();
    } else {
        echo "Failed to delete product.";
    }
} else {
    echo "Invalid request.";
}
?>