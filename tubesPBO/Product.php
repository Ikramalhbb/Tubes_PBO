<?php
class Product {
    private $id;
    private $name;
    private $price;

    // Konstruktor
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Getter dan setter untuk ID
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // Getter dan setter untuk Nama
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Getter dan setter untuk Harga
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    // Metode untuk menampilkan informasi produk
    public function displayInfo() {
        return "Product ID: {$this->id}, Name: {$this->name}, Price: {$this->price}";
    }
}
?>
