<?php

class Product {
    public $name;
    public $price;
    public $description;
    public $image;

    public function uploadImage() {
        return "Image uploaded";
    }

    public function calcPrice() {
        return $this->price;
    }
}

class Book extends Product {
    public $publishers = [];
    public $writer;
    public $color;
    public $supplier;

    public function choosePublisher() {
        return "Publisher chosen";
    }

    public function setPublisher($publisher) {
        $this->publishers[] = $publisher;
    }

    public function showAllPublishers() {
        return $this->publishers;
    }
}

class Gift extends Product {
    
}

class BabyCar extends Product {
    public $age;
    public $weight;
    public $materials = [];
    public $specialTax;

    public function displayMaterials() {
        return $this->materials;
    }

    public function getFinalPrice() {
        return $this->price + $this->specialTax;
    }
}

$book1 = new Book();
$book1->name = "PHP Programming";
$book1->price = 250;
$book1->writer = "Ahmed";
$book1->setPublisher("Tech Press");

echo "Book Name: " . $book1->name . "<br>";
echo "Book Writer: " . $book1->writer . "<br>";
echo "Publishers: " . implode(", ", $book1->showAllPublishers()) . "<br><br>";

$car1 = new BabyCar();
$car1->name = "Baby Sport Car";
$car1->price = 1500;
$car1->specialTax = 200;
$car1->materials = ["Plastic", "Rubber", "Steel"];

echo "Car Name: " . $car1->name . "<br>";
echo "Materials: " . implode(", ", $car1->displayMaterials()) . "<br>";
echo "Final Price: " . $car1->getFinalPrice() . "<br>";

?>