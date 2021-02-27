# Site de la liste BDE

## Structure du projet

 * **./** Tous les fichiers php/html en français
 * **/en** Les mêmes fichiers en anglais
 * **/images** Les images nécessaires au projet
 * **/fonts** Les polices utilisées
 * **/styles** Les feuilles de style
 * **/scripts**	Les scripts Javascript
 * **/templates** templates incluables

--------------------

## Utilisation du template

Créer le nouveau fichier en php.
Inclure dans le head le fichier de style `<link rel="stylesheet" href="styles/templates.css" />`

Il faut ensuite déclarer le `<body>` comme suit:
~~~html
	<body>
		<?php include "templates/header.html"; ?>
		<!-- Votre code -->
		<?php incldue "templates/footer.html"; ?>
	</body>
~~~
