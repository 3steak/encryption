<?php

// SERT DE ROUTER

require 'controllers/FileController.php';
require 'models/FileModel.php';

$url = isset($_GET['url']) ? explode('/', trim(str_replace('crypt/', '', $_GET['url']), '/')) : [];

$controller = new FileController();

if (empty($url)) {
    $controller->showUploadForm();
} elseif ($url[0] == 'upload') {
    $controller->upload();
} elseif ($url[0] == 'download') {
    $controller->download();
} else {
    echo "404 - Page not found";
}
