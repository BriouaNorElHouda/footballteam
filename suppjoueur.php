<?php
try
{// Une connexion sécurisée à la base de données EquipeNationale
	 $bdd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	 // En cas d'erreur, on affiche un message et on arrête tout

        die('Erreur : '.$e->getMessage());
}// supprimer un joueur 
$req = $bdd->prepare('DELETE FROM Joueurs WHERE Num = ?');
$req->execute(array($_POST['Num']));
echo 'Joueur correctement supprimé';
?>
