<?php
try
{
    // Une connexion sécurisée à la base de données EquipeNationale
    $bdd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
}
catch(Exception $e)
{

    // En cas d'erreur, on affiche un message et on arrête tout

        die('Erreur : '.$e->getMessage());

}
//Selection de contenu de la base de données EquipeNationale
$reponse = $bdd->query('SELECT * FROM Joueurs');



while ($donnees = $reponse->fetch())
{

   // Afficher le contenu de la base de données EquipeNationale
    echo $donnees['Num'] . ' | '. $donnees['Poste'] .' | '. $donnees['Nom']. ' | '. $donnees['Age'] .' | '. $donnees['Selection']. ' | '. $donnees['Buts'] .' | '. $donnees['Club'].' | '. $donnees['Annee']; echo '<br>';}


$reponse->closeCursor(); // Termine le traitement de la requête
?>
