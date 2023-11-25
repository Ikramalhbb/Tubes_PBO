<!-- index.php -->
<?php
require_once 'ProductController.php';

// Create an instance of ProductController
$productController = new ProductController();

// Add iPhone products
$productController->createProduct("iPhone 7", 2900000);
$productController->createProduct("iPhone 6s", 2000000);
$productController->createProduct("iPhone 8 Plus", 4000000);
$productController->createProduct("iPhone X", 4800000);
$productController->createProduct("iPhone Xr", 5000000);
$productController->createProduct("iPhone Xs Max", 5500000);
$productController->createProduct("iPhone 11", 7400000);
$productController->createProduct("iPhone 11 Pro Max", 11700000);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone Store Bengkulu</title>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan */
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
    </style>
</head>

<body>
    <header>
        <h1>iPhone Store Bengkulu</h1>
    </header>

    <nav>
        <a href="productList.php">Product List</a>
        <a href="addProductForm.php">Add Product</a>
        <!-- Tambahkan tautan menu lainnya sesuai kebutuhan -->
    </nav>

    <main>
        <h2>Selamat Datang di iPhone Store Bengkulu</h2>


        <table>
            <tr>
                <th>Feature</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Product List</td>
                <td>View and manage the list of products iPhone.</td>
            </tr>
            <tr>
                <td>Add Product</td>
                <td>Add a new product iPhone to the system.</td>
            </tr>
            <!-- Tambahkan baris untuk fitur lainnya -->
        </table>
    </main>
</body>

</html>