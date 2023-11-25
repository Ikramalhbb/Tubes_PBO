<!-- productList.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (sisanya dari berkas productList.php) -->
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

        nav {
            background-color: #444;
            padding: 0.5rem;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            margin: 0 1rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
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
    <h2>Product List</h2>

    <?php
    require_once 'ProductController.php';

    // Create an instance of ProductController
    $productController = new ProductController();

    // Handle product deletion
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteProduct'])) {
        $productId = $_POST['productId'];

        // Delete product
        $success = $productController->deleteProduct($productId);

        if ($success) {
            echo "Product deleted successfully.<br>";
        } else {
            echo "Failed to delete product.<br>";
        }
    }
    ?>

    <!-- Formulir untuk menambah produk -->
    <form action="addProductForm.php" method="post">
        <button type="submit">Add Product</button>
    </form>

    <!-- Tabel produk -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php
        $products = $productController->getAllProducts();

        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>{$product->getId()}</td>";
            echo "<td>{$product->getName()}</td>";
            echo "<td>{$product->getPrice()}</td>";
            echo "<td>
                    <form action='' method='post' style='display:inline;'>
                        <input type='hidden' name='productId' value='{$product->getId()}'>
                        <button type='submit' name='deleteProduct'>Delete</button>
                    </form>
                    <a href='editProduct.php?id={$product->getId()}'>Edit</a>
                    </td>";
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Tombol kembali ke halaman utama -->
    <a href="index.php" class="back-btn">Back to Home</a>
</body>

</html>