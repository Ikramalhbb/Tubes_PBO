<!-- editProductForm.php -->
<form action="" method="post">
    <h3>Edit Product</h3>
    <label for="productName">Product Name:</label>
    <input type="text" name="productName" value="<?php echo $product->getName(); ?>" required>
    
    <label for="productPrice">Product Price:</label>
    <input type="number" name="productPrice" value="<?php echo $product->getPrice(); ?>" required>
    
    <button type="submit" name="updateProduct">Update Product</button>

    <!-- Tombol kembali ke halaman utama -->
    <a href="index.php" class="back-btn">Back to Home</a>
</form>
