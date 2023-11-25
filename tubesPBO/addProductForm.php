<!-- addProductForm.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
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
    <header>
        <h1>iPhone Store Bengkulu</h1>
    </header>
<body>
    <?php
    require_once 'ProductController.php';

    // Create an instance of ProductController
    $productController = new ProductController();

    // Handle product addition
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addProduct'])) {
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];

        // Use the createProduct method to add a new product
        $newProduct = $productController->createProduct($productName, $productPrice);

        if ($newProduct) {
            echo "Product added successfully: " . $newProduct->displayInfo() . "<br>";
            
            // Redirect to productList.php
            header("Location: productList.php");
            exit();
        } else {
            echo "Failed to add product.<br>";
        }
    }
    ?>

    <!-- Formulir untuk menambah produk -->
    <form action="" method="post">
        <h3>Add Product</h3>
        <label for="productName">Product Name:</label>
        <input type="text" name="productName" required>
        
        <label for="productPrice">Product Price:</label>
        <input type="number" name="productPrice" required>
        
        <button type="submit" name="addProduct">Add Product</button>

        <!-- Tombol kembali ke halaman utama -->
        <a href="index.php" class="back-btn">Back to Home</a>
    </form>
</body>
</html>
