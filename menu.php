<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU Afloburger</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
    <nav>
        <a href="http://localhost/projet2/menu.php" target="_blank" id="menu">Menu</a>
        <a href="http://localhost/projet2/login.php" target="_blank" id="login">Login</a>
        <a href="http://localhost/projet2/panier.php" id="panier" target="_blank">Panier</a>
    </nav>
        <div class="taille">

            <!-- <img src="https://assets.afcdn.com/recipe/20211028/123168_w1024h1024c1cx707cy1060cxt0cyt0cxb1414cyb2121.webp" name="img_produit">
            <img src="https://cdn.stoneline.de/media/b0/c4/37/1721744157/Smash-Burger.png" name="img_produit">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1d/a2/d9/dd/tres-faim-vous-dites.jpg?w=900&h=500&s=1" name="img_produit"> -->
            <label>burger 25g</label>
            <input type="radio" value="1" name="produit"/>
            <label>burger 50g</label>
            <input type="radio" value="2" name="produit"/>
            <label>burger 75g</label>
            <input type="radio" value="3" name="produit"/>
            <!-- <img src="https://www.yumelise.fr/wp-content/uploads/2020/08/wrap-apero.jpg" name="img_produit">
            <img src="https://www.yumelise.fr/wp-content/uploads/2021/07/p-tit-wrap-ranch.jpg" name="img_produit">
            <img src="https://eu-images.contentstack.com/v3/assets/blt5004e64d3579c43f/blt85b28890311d4ac7/66cc5f62e0b3446f37fe5276/GRAND_WRAP_POULET_TBWA_400x400px_72DPI_V2.png?auto=webp" name="img_produit">-->
            <label>wrap 25g</label>
            <input  type="radio" name="produit" value="4"/>
            <label>wrap 50g</label>
            <input  type="radio" name="produit" value="5"/>
            <label>wrap 75g</label>
            <input  type="radio" name="produit" value="6"/>
            <!-- <img src="https://www.quick.fr/mealImages/products/page/product_1088.png" name="img_produit">
            <img src="https://www.galbani.fr/wp-content/uploads/2020/05/AdobeStock_220126244-800x600.jpeg" name="img_produit"> -->
            <label>salade xl</label>
            <input type="radio" value="7" name="produit"/>
            <label>salade xxl</label>
            <input type="radio" value="8" name="produit"/>
            <!-- <img src="https://www.ecomiam.com/images/Image/Petits-pots-vanille-chocolat-et-vanille-fraise-Code-Menl-3-1.jpg" name="img_produit">
            <img src="https://www.valgourmand.com/17175-superlarge_default/Glace-italienne-fraise.webp" name="img_produit"> -->
            <label>glace xl</label>
            <input type="radio" value="9" name = "produit"/>
            <label>glace xxl</label>
            <input type="radio" value="10" name = "produit"/>
            <input type="submit" name = "ajouter_au_panier" value = "ajouter_au_panier">
        </input>
        </div>
    </form>
</body>
</html>


<?php
session_start();
include_once("annexe.php");
if (isset($_POST["ajouter_au_panier"])) {
    $recup_id = $_SESSION["sid"];
if (isset($_POST["produit"])) {
    if(!empty($_POST["produit"])){
        $id_produit = $_POST["produit"];
        $insert = "INSERT INTO commande (id_plat,id_client) VALUES ($id_produit,$recup_id)";
        mysqli_query($x,$insert);

        $myProduit = mysqli_fetch_assoc(mysqli_query($x,"SELECT * FROM menu WHERE id_plat =$id_produit"));
        $_SESSION["panier"][]= $myProduit;
        header("Location: panier.php");
    }
}    
}