<!-- editProduct.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Gaya untuk tombol kembali ke halaman utama */
        .back-btn {
            display: inline-block;
            margin-top: 10px;
            background-color: #333;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

        .back-btn:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <?php
    require_once 'ProductController.php';

    if (isset($_GET['id'])) {
        $productId = $_GET['id'];

        // Create an instance of ProductController
        $productController = new ProductController();

        // Get product details for the specified ID
        $product = $productController->readProduct($productId);

        if ($product) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateProduct'])) {
                // Update product information
                $productName = $_POST['productName'];
                $productPrice = $_POST['productPrice'];

                $productController->updateProduct($productId, $productName, $productPrice);

                header("Location: productList.php"); // Redirect to product list
                exit();
            }

            // Display the edit form
            include 'editProductForm.php';
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Invalid request.";
    }
    ?>
</body>

</html>