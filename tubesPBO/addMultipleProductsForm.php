<!-- addMultipleProductsForm.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Multiple Products</title>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan */
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 600px;
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
    </style>
</head>
<body>
    <h2>Add Multiple Products</h2>
    <form action="processMultipleProductsForm.php" method="post">
        <label for="productCount">Number of Products:</label>
        <input type="number" name="productCount" min="1" required>

        <div id="productFields"></div>

        <button type="button" onclick="addProductFields()">Add Products</button>
        <button type="submit" name="addMultipleProducts">Add Multiple Products</button>
    </form>

    <script>
        function addProductFields() {
            var productCount = document.querySelector('[name="productCount"]').value;
            var productFields = document.getElementById('productFields');

            productFields.innerHTML = ''; // Clear existing fields

            for (var i = 0; i < productCount; i++) {
                var label = document.createElement('label');
                label.textContent = 'Product ' + (i + 1);

                var nameInput = document.createElement('input');
                nameInput.type = 'text';
                nameInput.name = 'productName[]';
                nameInput.placeholder = 'Product Name';
                nameInput.required = true;

                var priceInput = document.createElement('input');
                priceInput.type = 'number';
                priceInput.name = 'productPrice[]';
                priceInput.placeholder = 'Product Price';
                priceInput.required = true;

                productFields.appendChild(label);
                productFields.appendChild(nameInput);
                productFields.appendChild(priceInput);
            }
        }
    </script>
</body>
</html>
