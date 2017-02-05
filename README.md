<h1>Project Cloak Of The Darkness</h1>

<h2>Installation</h2>

Installer le dossier vendor via composer

<h2>Update the game</h2>

<u>Doc :</u> 
<br>
Modification des portes ainsi que des salles : <u>app/config/configDoors.yml 

<i>Empty</i> pour ne rien afficher
<br><i>Room</i> ou room etant le nom de la salle
<br><i>action-smth</i> représente une action (smth) attention !! Une image smth.png doit etre presente dans le dossier web/assets/ pour l'affichage

Modification de la lumière dans les salles : <u>app/config/configLight.yml

<i>light / unlight</i> pour allumer ou eteindre la lumiere

Modification de l'inventaire : <u>app/config/inventory.yml 

<i>pic</i> represente la photo à utiliser

Modification de la room de depart : <u>app/config/start.yml

Modification des condition de win : <u>app/config/win.yml

<i>where</i> represente l'action definie dans le fichier configDoors.yml<br>
<i>object</i> represente l'objet qui va etre utilisé<br>
<i>light</i> sert a rallumer une salle eteinte<br>
<i>done</i> sert a check l'action<br>
<i>last</i> signifie la salle de fin !

<h2>IMPORTANT !</h2>

NE PAS MODIFIER LES FICHIER LES FICHIERS NON LISTE CI DESSUS !

<h2>Let's play ! Have fun !</h2>