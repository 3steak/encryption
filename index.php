<?php

// SERT DE ROUTER

require 'controllers/FileController.php';
require 'models/FileModel.php';

$url = isset($_GET['url']) ? explode('/', trim(str_replace('crypt/', '', $_GET['url']), '/')) : [];

$controller = new FileController();

// en fonction de l url j envoi dans tel ou tel methode de controller
if (empty($url)) {
    //  page accueil
    $controller->showUploadForm();
} elseif ($url[0] == 'upload') {
    // upload du fichier
    $controller->upload();
} elseif ($url[0] == 'download') {
    // DL du fichier avec la clef
    $controller->download();
} else {
    echo "404 - Page not found";
}
