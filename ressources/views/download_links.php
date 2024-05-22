<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ressources/css/style.css">
    <title>Téléchargement du Fichier Chiffré et de la Clé de Déchiffrement</title>
</head>

<body>
    <h1>Téléchargement du Fichier Chiffré et de la Clé de Déchiffrement</h1>
    <p><a href="/crypt/<?= htmlspecialchars($encryptedFileName); ?>" download>Télécharger le fichier chiffré</a></p>
    <p><a href="/crypt/<?= htmlspecialchars($keyFileName); ?>" download>Télécharger la clé de déchiffrement</a></p>
</body>

</html>