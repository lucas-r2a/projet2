<?php
try {
    $x = mysqli_connect("localhost","root","","tp_afloburger");
}catch ( Exception $e) {
    echo "La connexion au serveur à échoué revenez plus tard";
}
