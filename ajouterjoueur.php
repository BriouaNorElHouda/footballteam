<?php
try
{// Une connexion sécurisée à la base de données EquipeNationale
     $bdd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
}
catch(Exception $e)
{ // En cas d'erreur, on affiche un message et on arrête tout

        die('Erreur : '.$e->getMessage());
}
// Insertion des données récupérées à partir du formulaire dans la table Joueurs
$req = $bdd->prepare('INSERT INTO Joueurs(Num, Poste, Nom, Age, Selection, Buts, Club, Annee) VALUES(:Num, :Poste, :Nom, :Age, :Selection, :Buts, :Club, :Annee)');
$req->execute(array(
    'Num' => $_POST['Num'],
    'Poste' => $_POST['Poste'],
    'Nom' => $_POST['Nom'],
    'Age' => $_POST['Age'],
    'Selection' => $_POST['Selection'],
    'Buts' => $_POST['Buts'],
    'Club' => $_POST['Club'],
    'Annee' => $_POST['Annee'],
    ));
//Afficher le contenu de la base de données EquipeNationale
echo 'Un nouveaux joueur a été correctement rajouté' . "<br/>";
$reponse = $bdd->query('SELECT * FROM joueurs');


while ($donnees = $reponse->fetch()){
echo $donnees['Num'] . ' | '. $donnees['Poste'] .' | '. $donnees['Nom']. ' | '. $donnees['Age'] .' | '. $donnees['Selection']. ' | '. $donnees['Buts'] .' | '. $donnees['Club'].' | '. $donnees['Annee']; echo '<br>';}
$reponse->closeCursor(); 
?>
