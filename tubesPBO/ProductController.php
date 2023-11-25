<!-- ProductController.php -->
<?php
require_once 'Product.php';

class ProductController {
    private $products = [];

    public function __construct() {
        // Inisialisasi produk
        $this->createProduct("iPhone 7", 2900000);
        $this->createProduct("iPhone 6s", 2000000);
        $this->createProduct("iPhone 8 Plus", 4000000);
        $this->createProduct("iPhone X", 4800000);
        $this->createProduct("iPhone Xr", 5000000);
        $this->createProduct("iPhone Xs Max", 5500000);
        $this->createProduct("iPhone 11", 7400000);
        $this->createProduct("iPhone 11 Pro Max", 11700000);
    }

    // Metode untuk membuat produk
    public function createProduct($name, $price) {
        $productId = count($this->products) + 1;
        $product = new Product($productId, $name, $price);
        $this->products[$productId] = $product;
        return $product;
    }

    // Metode untuk membaca semua produk
    public function getAllProducts() {
        return $this->products;
    }

    // Metode untuk membaca produk berdasarkan ID
    public function readProduct($productId) {
        return isset($this->products[$productId]) ? $this->products[$productId] : null;
    }

    // Metode untuk memperbarui informasi produk
    public function updateProduct($productId, $name, $price) {
        if (isset($this->products[$productId])) {
            $this->products[$productId]->setName($name);
            $this->products[$productId]->setPrice($price);
        }
    }

    // Metode untuk menghapus produk berdasarkan ID
    public function deleteProduct($productId) {
        if (isset($this->products[$productId])) {
            unset($this->products[$productId]);
            return true;
        }
        return false;
    }
}
?>
