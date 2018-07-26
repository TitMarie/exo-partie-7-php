

<!-- // Exercice 1 -->


<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page test</title>
</head>
<body>

    <form action="user.php" method="get">
    <br>
        <fieldset>
        <p> Nom :
        <input type="text" name="nom" required>
        Prénom :
        <input type="text" name="prenom" required>
        <p/>
        <button type="submit">Click me</button>
        </fieldset>
    </form>
    
    
<!-- // Exercice 2 -->

    <form action="user.php" method="post">
        <br>
            <fieldset>
            <p> Nom :
                <input type="text" name="nom1" required>
            Prénom :
                <input type="text" name="prenom1" required>
            <p/>
            <button type="submit">Click me</button>
            </fieldset>
    </form>

    
<!-- // Exercice 3 -->

    <?php

    if (isset($_POST['nom3']) and isset($_POST['prenom3']) and isset($_POST['civilite']) AND isset($_FILES['fichier'])) {
        echo "tu te nomme " . $_POST['civilite'] . " " . $_POST['prenom3'] . " " . $_POST['nom3'];
        echo "tu as envoyé le fichier : " . $_FILES['fichier']['name'] . "<br>";
        
        $allowExtensions = array('pdf');
        $extensio = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION); 
        if (!in_array($extensio, $allowExtensions)) {
            echo "tu n'as pas mis un fichier dont l'extension est permise";
        } else {
            echo "bravo tu sais lire";
        }
            
                
            
    } else {
        ?>
        <form action="Exercices_partie_7.php" method="post" enctype="multipart/form-data">
            <br>
                <fieldset>
                <p> Civilité : 
                    <select name="civilite">
                        <option selected> </option>
                        <option>Madame</option>
                        <option>Monsieur</option>
                    </select>
                </P>
                <p> Nom :
                    <input type="text" name="nom3" required>
                Prénom :
                    <input type="text" name="prenom3" required>
                <p/>
                <p>
                    <input type="file" name="fichier">
                </p>
                <button type="submit">Click me</button>
                </fieldset>
        </form>
        
<?php
    }


    
     
    ?>

</body>
</html>




