# Perfil

## LINKEDIN

## Instalacion 

Crear base de datos

...

CREATE DATABASE linkedin ;
CREATE USER 'linkedin'@'localhost' IDENTIFIED BY 'linkedin';
GRANT ALL PRIVILEGES ON linkedin.* TO 'linkedin'@'localhost' WITH GRANT OPTION;

...

comenzar aplicacion en limpio

mysql - u linkedin -p linkedin < scripts/PerfilUser.sql;

Cargar ejemplos

mysql - u linkedin -p linkedin < scripts/PerfilUser.sql;


## Ejecutar servidor dev

...

Dar permiso archivo .sh

    chmod u+x ruta de archivo.sh

Ejecuta archivo .sh
    ./archivo.sh 8080

...


## Instalacion de composer (servidor de STMP php)

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

sudo mv composer.phar /usr/local/bin/composer


## require libreria phpmailer con composer
composer require phpmailer/phpmailer


## GENERA CLASE DE MAILER
