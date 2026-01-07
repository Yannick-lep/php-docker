<?php
session_start();

if (isset($_SESSION['user'])){
    echo "Logged";
    ?>
   <p><a href="logout.php">Déconnexion</a></p>
   <?php
} else {
    echo "Se connecter !";
}

include 'home.php';