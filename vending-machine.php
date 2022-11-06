<?php

function createProduct(string $productName, int $productPrice): stdClass
{
    $product = new stdClass();
    $product->productName = $productName;
    $product->productPrice = $productPrice;
    return $product;
}

// Welcome message and instructions
echo "Welcome Dear Customer!";
echo PHP_EOL;

$products =
    [
        createProduct("Black Coffee", 90),
        createProduct("Coffee with milk", 130),
        createProduct("Ultra strong Espresso", 160),
        createProduct("Hot water", 30),
        createProduct("Hot Chocolate", 200),
        createProduct("Snickers small",100),
        createProduct("Snickers XXL",180),
        createProduct("Twix small",100),
        createProduct("Twix XLL",180),
        createProduct("Red Bull small",150),
        createProduct("Red Bull XXL",250),
    ];

// Display Products to user
echo "____________________________";
echo PHP_EOL;
echo "Please select the product by writing the product number: ";
echo PHP_EOL;
foreach ($products as $index => $product) {
    echo $index + 1 . ". $product->productName " ."costs " .$product->productPrice . PHP_EOL;
}

// User Inserts Money
echo PHP_EOL;
echo "Please Insert Money: ";
$userMoney = readline("Please Insert Money: ");
echo "You have inserted " . $userMoney ." Euros";
echo PHP_EOL;

// User Selects the Product
echo "Please select the product you want to buy: ";
$userSelection = is_int(readline("Please select the product: "));

$selectedProduct = $product[$userSelection];

if ($selectedProduct == $index && $userMoney > $product->productPrice){
    $change = $userMoney - $product->productPrice;
    echo "Here is you're " .$product->productName . " Enjoy it !";
    echo PHP_EOL;
    echo "Here is you' re change " . $change . " Euros";
} else {
    echo "Dear customer make sure you have enough money inserted in order to buy the " . $product->productName;
    echo PHP_EOL;
    echo "You currently have inserted " . $userMoney . " but " . $product->productName . " costs " . $product->productPrice;
}





