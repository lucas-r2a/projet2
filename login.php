<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
    <nav>
        <a href="http://localhost/projet2/menu.php" target="_blank" id="menu">Menu</a>
        <a href="http://localhost/projet2/login.php" target="_blank" id="login">Login</a>
        <a href="http://localhost/projet2/panier.php" id="panier" target="_blank">Panier</a>
    </nav>
        <label for="">Nom</label>
        <input type="text" name="nom" >
        <label for="">password</label>
        <input type="password" name="password">
        <button type="submit">Connexion</button>
    </form>
</body>
</html>

<?php
session_start();
include_once("annexe.php");
if (!empty($_POST["nom"]) && !empty($_POST["password"])) {

    $nom = $_POST["nom"];
    $password = $_POST["password"];
    $hasher = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $sqlogin = "INSERT INTO login(nom_client,mot_de_passe) VALUES ('$nom', '$hasher')";
    $recuform = mysqli_query( $x, $sqlogin );
    $_SESSION["user"] = $_POST["nom"];
    $_SESSION['sid'] = mysqli_insert_id($x);
    unset($_SESSION["panier"]);
    header("Location: menu.php");
    die();
    }
