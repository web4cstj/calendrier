<?php
setlocale(LC_ALL, "fra");
/** Classe Calendrier
 * Permet d'afficher un calendrier dans une page
 */
class Calendrier {
	/** Méthode affichage
	 * Retourne l'affichage du calendrier en fonction du paramètre
	 * @param string|integer $date - Le timestamp de la date à afficher ou une 
	 *   chaine contenant une date standard
	 * @return string - Une <table> représentant le mois
	 * @uses entete, corps, marquerJour
	 */
	static public function affichage($date) {		
		if (is_string($date)) $date = strtotime($date);  // Si la date est une chaine, on la transforme en timestamp
		$resultat = '';
		//COMPLÉTER
		return $resultat;
	}
	/** Méthode entete
	 * Retourne le <thead> du calendrier 
	 * @param integer $date - La date du mois à afficher sous forme de timestamp
	 * @return string - Le <thead> du calendrier
	 * @uses mois, trouverInitiales, lignesInitiales
	 */
	static public function entete($date) {
	}
	/** Méthode mois - CETTE MÉTHODE EST COMPLÈTE
	 * Retourne le contenu de la première cellule de l'entête : Le mois suivi de l'année
	 * @param integer $date - Le timestamp à gérer
	 * @return string - Le contenu. Ex.: Mars 2024
	 * @note L'initiale du mois est en majuscule
	 */
	static public function mois($date) {
		return ucwords(strftime('%B %Y', $date));
	}
	/** Méthode joursEnSecondes
	 * Retourne le nombre de secondes dans le nombre de jours envoyé en paramètre
	 * @param integer $jours - Le nombre de jours à convertir
	 * @return integer
	 */
	static public function joursEnSecondes($jours) {
	}
	/** Méthode marquerJour
	 * Prend un calendrier complet, cherche un certain jour et ajoute à sa cellule 
	 *   la classe "courant". Ex.: <td>3</td> devient <td class="courant">3</td>
	 * @param chaine $str - Le code HTML à transformer.
	 * @param integer $jour - Le jour à chercher dans la chaine
	 * @return string - La chaine envoyée modifiée en conséquence.
	 */
	static public function marquerJour($str, $jour) {
	}
	/** Méthode ligneInitiales
	 * Retourne la 2e rangée du tableau (<tr>) contenant les initiales des jours
	 * @param array $initiales - Un tableau contenant les 7 initiales à afficher
	 * @return string - Le <tr> final
	 */
	static public function ligneInitiales($initiales) {
	}
	/** Méthode trouverInitiales - CETTE MÉTHODE EST COMPLÈTE
	 * Retourne un tableau des 7 initiales des jours selon la langue déterminée 
	 *   par set_locale au début du document
	 * @return array - Le tableau des initiales
	 * @uses joursEnSecondes
	 */
	static public function trouverInitiales() {
		$resultat = array();
		$dimanche = time() - Calendrier::joursEnSecondes(intval(strftime("%w")));
		for ($i=0; $i<7; $i++) {
			$jour = $dimanche+Calendrier::joursEnSecondes($i);
			$resultat[] = strtoupper(substr(strftime('%A', $jour),0,1));
		}
		return $resultat;
	}
	/** Méthode corps
	 * Retourne le <tbody> du calendrier
	 * @param integer $date - La date (timestamp) du mois à afficher
	 * @return string - Une balise <tbody>
	 * @uses rangee, jourDebut
	 */
	static public function corps($date) {
		$jour = 1;
		$fin = $jour+intval(date('t', $date)); // Le dernier jour du mois
		//COMPLÉTER
	}
	/** Méthode rangee
	 * Retourne une rangée du <tbody>
	 * @param integer $debut - Le premier jour de la rangée
	 * @param type $fin - Le dernier jour de la rangée. Ce pourrait être le 
	 *   dernier jour du mois et ça doit fonctionner quand même.
	 * @param type $videsAvant - Le nombre de cellules vides avant le premier jour
	 * @return string - Une balise <tr> complète
	 */
	static public function rangee($debut, $fin, $videsAvant=0) {
		// On ajoute les cellules vides avant
		// On ajoute les nombres. On fait attention de ne pas dépasser 7 jours
		// On ajoute les cases vides après au besoin
	}
	/** Méthode premierDuMois
	 * Retourne le timestamp du premier du mois. 0=dim, 6=sam
	 * @param type $date - Le timestamp du jour à représenter
	 * @return integer - Un timestamp
	 * @uses joursEnSecondes
	 */
	static public function premierDuMois($date) {
		$jours = intval(strftime("%d", $date)); // Le jour courant. Ex.: 24 pour le 24 mars
		//COMPLÉTER
	}
	/** Méthode jourDebut
	 * Retourne le jour de la semaine du premier du mois. 0=dim, 6=sam
	 * @param integer $date - Le timestamp du jour à représenter
	 * @return integer - Un jour de la semaine au format numérique
	 * @uses premierDuMois
	 */
	static public function jourDebut($date) {
		//COMPLÉTER
		return intval(strftime("%w", $premier));
	}
}
