<?php
// Chiffrage et save du fichier
class FileModel
{
    public function encryptAndSaveFile($file)
    {
        $filePath = $file['tmp_name'];
        $fileName = $file['name'];

        $data = file_get_contents($filePath);

        $key = openssl_random_pseudo_bytes(32);

        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encryptedData = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);

        $encryptedFileName = 'uploads/encrypted_' . $fileName;
        file_put_contents($encryptedFileName, $iv . $encryptedData);

        $encodedKey = base64_encode($key);

        $keyFileName = 'keys/key_' . $fileName . '.txt';
        file_put_contents($keyFileName, $encodedKey);

        return [$encryptedFileName, $keyFileName];
    }
}
