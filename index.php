<?php
/* =============================================================================
 * Consignes : compléter les méthodes de la classe suivante
 * ============================================================================= */
include_once("Calendrier.php");
$date = time();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="css/calendrier.css" rel="stylesheet" type="text/css" />
<title>Calendrier</title>
</head>

<body>
<?php 
echo Calendrier::affichage($date);
?>
</body>
</html>
