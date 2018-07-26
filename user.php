<?php

// Exercice 3

if ($_GET['nom'] AND $_GET['prenom']) {
    echo "tu te nomme " . $_GET['prenom'] . " " . $_GET['nom'];
} 

// Exercice 4

if ($_POST['nom1'] AND $_POST['prenom1']) {
    echo "tu te nomme " . $_POST['prenom1'] . " " . $_POST['nom1'];
} 

?>