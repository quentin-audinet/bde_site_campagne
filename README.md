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

	<body>
		<?php include "templates/header.html"; ?>
		<!-- Votre code -->
		<?php incldue "templates/footer.html"; ?>
	</body>


---------------------

## Gestion des différentes langues

Il suffit de remplacer chaque texte par `<span class="id_du_texte" />`.

La traduction se fait alors dans le fichier **/scripts/languages.js**. Insérer dans la section indiquer la ligne suivante:

```javascript
dictionary.add("id_du_texte", "traduction_française", "traduction_anglaise" [, autres_traductions]);
```

*Cas des `<title>`*

Il ne faut pas utiliser `<span>` qui ne convient pas, mais ajouter directement la classe "id_du_texte" au  `<title>` voulu.
