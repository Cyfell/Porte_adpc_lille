# Porte_adpc_lille
Le but de ce projet est le suivant :
Réaliser la mise en ligne d'une plateforme web permétant le contrôle à distance (ouverture/fermeture) d'une porte.

## Techno utilisée
Serveur web : Apache2
Web : PHP, HTML, CSS
SGBD : mysql, phpmyadmin

## Comment tester avec docker?
Install docker (sudo dnf install docker)
launch deamon sudo service docker start
install apache2 & php sudo docker run -p 80:80 -v /path/to/webcontent/:/var/www/html/ -d eboraas/apache-php

installation de mysql

installation de phpmyadmin
