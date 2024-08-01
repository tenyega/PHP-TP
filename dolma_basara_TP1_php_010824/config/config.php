<?php
// This file should contains all the defination of configuration needed for our website .


define('PRODUCTS', __DIR__ . '/products.json');

function getProducts()
{
    $data = json_decode(file_get_contents(PRODUCTS), true);
    return $data;
}



define('DEFAULT_IMAGE', './img/default-article-image.png');


function getPromotions()
{
    $datas = json_decode(file_get_contents(PRODUCTS), true);
    $dataFound = [];

    foreach ($datas as $data) {
        if ($data['promotion'] === true) {
            $dataFound[] = [
                "designation" => $data['designation'],
                "categorie" => $data['categorie'],
                "modele" =>  $data['modele'],
                "prix" =>  $data['prix'],
                "image" =>  $data['image']
            ];
        }
    }
    return $dataFound;
}


// categories 
define('CATEGORIES', __DIR__ . '/categories.json');
function getCategories()
{
    $data = json_decode(file_get_contents(CATEGORIES), true);
    return $data;
}
function getCategoryDetail($category)
{
    $datas = json_decode(file_get_contents(PRODUCTS), true);
    $dataFound = [];

    foreach ($datas as $data) {
        if ($data['categorie'] === $category) {
            $dataFound[] = [
                "designation" => $data['designation'],
                "categorie" => $data['categorie'],
                "modele" =>  $data['modele'],
                "prix" =>  $data['prix'],
                "image" =>  $data['image'],
                "promotion" => $data['promotion']
            ];
        }
    }
    return $dataFound;
}
