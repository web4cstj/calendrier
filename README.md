Exercice "Calendrier"
=====================
Niveau: **difficile**

Préparation
-----------
1. Télécharger le fichier `calendrier-depart`.
1. Ouvrir le projet dans VSCode
1. Démarrer le serveur dans le terminal à l'aide de la commande suivante :
    ```cmd
    php -S localhost:8000
    ```

Le projet
---------
1. Ouvrir le fichier `Calendrier.php` dans VSCode.
1. Compléter les méthodes s'y trouvant
    | Méthode         | Description
    |-----------------|---------------------------------------------------------------|
    | affichage       | Retourne l'affichage du calendrier en fonction du paramètre
	| entete          | Retourne le thead du calendrier 
	| mois            | Retourne le contenu de la première cellule de l'entête : Le mois suivi de l'année
	| joursEnSecondes | Retourne le nombre de secondes dans le nombre de jours envoyé en paramètre
	| marquerJour     | Prend un calendrier complet, cherche un certain jour et ajoute à sa cellule la classe "courant".
	| ligneInitiales  | Retourne la 2e rangée du tableau (tr) contenant les initiales des jours
	| trouverInitiales| Retourne un tableau des 7 initiales des jours selon la langue déterminée 
	| corps           | Retourne le tbody du calendrier
	| rangee          | Retourne une rangée du tbody
	| premierDuMois   | Retourne le timestamp du premier du mois. 0=dim, 6=sam
	| jourDebut       | Retourne le jour de la semaine du premier du mois. 0=dim, 6=sam
