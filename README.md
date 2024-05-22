# Application PHP de Chiffrement de Fichiers

Cette application PHP permet d'uploader un fichier, de le chiffrer, puis de télécharger le fichier chiffré et la clé de déchiffrement. L'application est construite en utilisant le modèle MVC (Modèle-Vue-Contrôleur).

## Fonctionnalités

- Upload de fichiers.
- Chiffrement des fichiers uploadés.
- Téléchargement du fichier chiffré.
- Téléchargement de la clé de déchiffrement dans un fichier texte.

## Installation

### Prérequis

- Serveur web (Apache recommandé).
- PHP installé (version 7.4 ou supérieure).
- Composer installé.

### Étapes d'installation

1. Clonez ce dépôt sur votre machine locale.

   ```sh
   git clone https://github.com/username/repository.git
   cd repository

2. Configurez votre serveur web pour servir ce projet. Si vous utilisez Apache, assurez-vous que le module mod_rewrite est activé.

3. Placez le projet dans un sous-répertoire appelé crypt sur votre serveur web.

### Technologies Utilisées
- PHP
- HTML
- Apache avec mod_rewrite
- OpenSSL pour le chiffrement



