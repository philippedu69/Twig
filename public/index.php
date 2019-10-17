<?php
require_once 'vendor/autoload.php';


$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);

$products = ['name1' => 'Chaises','name2' => 'Tables', 'name3' => 'Canapés','name4' => 'Fauteuils','name5' => 'Buffets'];

    echo $twig->render('index.html.twig', ['products' => $products]);


