<?php
try
{// Une connexion sécurisée à la base de données EquipeNationale
 $bdd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
}
catch(Exception $e)
{ // En cas d'erreur, on affiche un message et on arrête tout

       die('Erreur : '.$e->getMessage());
}//Ouverture du fichier le fichier Joueurs.txt en mode lectur
$file = fopen('Joueurs.txt','r');

  

 while (!feof($file)) //!fin
{

 $lire = fgets($file).'</br>';//Récupération de contenu de fichier
 
    
}
  echo 'Un nouveaux joueur a été correctement rajouté' . "<br/>";
  

fclose($file);

?>

