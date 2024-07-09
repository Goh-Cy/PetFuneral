<?php

include("connection.php");

$users_table = "
    CREATE TABLE IF NOT EXISTS users (
        id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL
    )";

$products_table = "
    CREATE TABLE IF NOT EXISTS products (
        id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(50) NOT NULL,
        product_type VARCHAR(10) NOT NULL
    )";

$cart = "
    CREATE TABLE IF NOT EXISTS cart (
        id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL,
        product_name VARCHAR(50) NOT NULL,
        product_img_link VARCHAR(255) NOT NULL,
        quantity INT(9) NOT NULL,
        weight VARCHAR(20) NOT NULL,
        price decimal(10,2) NOT NULL,
        singlePrice decimal(10,2) NOT NULL,
        `type` VARCHAR(255) NOT NULL
    )";

if (mysqli_query($conn, $users_table)){
    echo "Table 'users' created successfully.";
} else{
    echo "Error creating table: " . mysqli_error($conn);
}

if (mysqli_query($conn, $products_table)){
    echo "Table 'users' created successfully.";
} else{
    echo "Error creating table: " . mysqli_error($conn);
}

if (mysqli_query($conn, $cart)){
    echo "Table 'users' created successfully.";
} else{
    echo "Error creating table: " . mysqli_error($conn);
}

header("Location: home.php");
die();
?>
