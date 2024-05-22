<?php
// logique metier
// Chiffrage et save du fichier
class FileModel
{

    // methode pour encrypter un fichier
    public function encryptAndSaveFile($file)
    {
        $filePath = $file['tmp_name'];
        $fileName = $file['name'];

        $data = file_get_contents($filePath);

        $key = openssl_random_pseudo_bytes(32);

        // iv est le vecteur d initialisation aleatoire
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encryptedData = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);

        // fichier crypte
        $encryptedFileName = 'uploads/encrypted_' . $fileName;
        file_put_contents($encryptedFileName, $iv . $encryptedData);

        $encodedKey = base64_encode($key);

        // clef pour decrypt
        $keyFileName = 'keys/key_' . $fileName . '.txt';
        file_put_contents($keyFileName, $encodedKey);

        return [$encryptedFileName, $keyFileName];
    }
}
