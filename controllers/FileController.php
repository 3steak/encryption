<?php

class FileController
{
    public function showUploadForm()
    {
        require 'views/upload_form.php';
    }

    public function upload()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
            $file = $_FILES['file'];
            $fileModel = new FileModel();
            list($encryptedFileName, $keyFileName) = $fileModel->encryptAndSaveFile($file);

            header('Location: /crypt/download?encryptedFile=' . urlencode($encryptedFileName) . '&keyFile=' . urlencode($keyFileName));
            exit();
        } else {
            echo "Erreur lors du téléchargement du fichier.";
        }
    }

    public function download()
    {
        if (isset($_GET['encryptedFile']) && isset($_GET['keyFile'])) {
            $encryptedFileName = $_GET['encryptedFile'];
            $keyFileName = $_GET['keyFile'];
            require 'views/download_links.php';
        } else {
            echo "Paramètres manquants pour le téléchargement.";
        }
    }
}
