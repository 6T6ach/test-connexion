<?php
session_start();

// Vide $_SESSION si existe 
session_unset();

// Controle des infos envoyés par l'utilisateur
echo '$_POST';
var_dump($_POST);

// BDD - Table user
$email = 'patrick@b.c';
$passwd = 'afpa13';
$pseudo = 'patrick';
$lang = 'fr';
$image_profil = './images/profil.png';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    session_unset();
    $_SESSION['message'] = '✅ Données reçues';

    if ($_POST['email'] == $email && $_POST['password'] == $passwd) {
        session_unset();

        $_SESSION['status'] = 1;
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['lang'] = $lang;
        // Retour automatique à la page profil.php
        header('Location: profil.php');
    } else {
        session_unset();
        $_SESSION['message'] = '⚠ Email ou Mot de passe inconnu';
?>
        
<?php


        header('Location: page-connexion.php');
    }
} else {
    session_unset();
    $_SESSION['message'] = '⚠ Veuillez remplir les 2 champs pour vous connecter';
    header('Location: page-connexion.php');
}


echo '$_SESSION';
var_dump($_SESSION);
?>