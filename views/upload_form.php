<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload et Chiffrement de Fichier</title>
</head>

<body>
    <h1>Upload et Chiffrement de Fichier</h1>
    <form action="/crypt/upload" method="post" enctype="multipart/form-data">
        <label for="file">Choisissez un fichier :</label>
        <input type="file" name="file" id="file" required>
        <button type="submit">Uploader et Chiffrer</button>
    </form>
</body>

</html>