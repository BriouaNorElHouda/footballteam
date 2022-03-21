<?php
try
{//Une connexion sécurisée à la base de données EquipeNationale
	 $bdd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
}
catch(Exception $e)
{ // En cas d'erreur, on affiche un message et on arrête tout

        die('Erreur : '.$e->getMessage());
}

$requete = $bdd->prepare('SELECT Num, Poste, Nom, Age, Selection, Buts, Club, Selection, Annee 
 FROM Joueurs WHERE Num = ?  OR Poste = ? OR Nom = ? OR Age = ? OR Selection = ? OR Buts = ? OR Club = ? OR Annee = ?');

//Récupérer le critère de recherche via le formulaire

$requete->execute(array($_POST["Num"] , $_POST['Poste'] , $_POST['Nom'] , $_POST["Age"] , $_POST["Selection"] , $_POST["Buts"] , $_POST['Club'] , $_POST["Annee"] , ));


 while ($donnees = $requete->fetch())

{ 

	// On affiche la liste des joueurs remplissant le critère choisi

	echo $donnees['Num'] . ' | '. $donnees['Poste'] .' | '. $donnees['Nom']. ' | '. $donnees['Age'] .' | '. $donnees['Selection']. ' | '. $donnees['Buts'] .' | '. $donnees['Club'].' | '. $donnees['Annee'] ; echo '<br>';


}



$requete->closeCursor();

?>
