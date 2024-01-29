# YOUR-BOOK

##  AVANT INSTALLATION DE SYMFONY

Php doit être accesible en ligne de commande : php-v , sinon ajouter les variables d'environnement de Windows
Le composer, gestionnaire de dépendances doit être installée.
Installation de symfony CLI 
Verification des requirements : `symfony check:requirement`

##  INSTALLATION DE SYMFONY

`composer create-project symfony/skeleton `

Remonter le dossier créé 
mv sous-dossier/* sous-dossier/.* .
Puis supprimer le dossier
rmdir sous-dossier

             A défaut d'acceder au serveur php, ajouter le htacess :
Ajout du htacess:
composer require symfony/apache-pack

Installation Twg:
composer require twig/twig

Installation des assets
composer require symfony/asset

Création des sessions :
composer require symfony/http-foundation

Installation d'un profiler
composer require --dev symfony/profiler-pack

Isntallation de Doctrine
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle
composer require symfony/maker-bundle --dev




