<?php
// TODO : hachage du mdp
$pass_hache = $_POST['password'];
$pseudo = $_POST['username'];
//connexion à la bdd
include 'bdd_connect.php';

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM users WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
  'pseudo' => $pseudo,
  'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)

{
  //Mauvais identifiant ou mot de passe
  header('Location: http://86.208.231.33:5002');
  exit();
}

else
{
  // Identification réussie
  session_start();
  $_SESSION['id'] = $resultat['id'];
  $_SESSION['pseudo'] = $pseudo;
  header('Location: http://86.208.231.33:5002/web_pages/web_content/gestion_portail.php');
  exit();
}

 ?>
