<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <nav>
        <a href="http://localhost/projet2/menu.php" target="_blank" id="menu">Menu</a>
        <a href="http://localhost/projet2/login.php" target="_blank" id="login">Login</a>
        <a href="http://localhost/projet2/panier.php" id="panier" target="_blank">Panier</a>
    </nav>
    <form action="" method="post">
        <input type="submit" name = "valider" value = "valider"></input>
    </form>
</body>
</html>
<?php
include_once("annexe.php");
session_start();   
if (isset($_SESSION["user"]) && !empty($_SESSION["panier"])) {
   foreach ($_SESSION["panier"] as $produit) {
     echo "<p>".$produit["nom_plat"]."</p>";
     echo "<p>".$produit["prix_plat"]."£</p>";
   }
}
else{
    echo "<p> Le panier est vide ! </p>";
}
if (isset($_POST["valider"])) {
    echo"<p>Merci pour vos achats</p>";
    $recup_id2 = $_SESSION["sid"];
    $achetea = "INSERT INTO acheter (id_plat,id_client) VALUES (".$produit["id_plat"].",$recup_id2)";
    mysqli_query($x, $achetea);
}

