<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Page de test

    <!-- Début du bloc PHP -->
    <?php
        /*
        Commentaire 
        sur 
        plusieurs lignes
        */
        // Bloc PHP
        echo "<h1>";    // echo pour afficher
        echo "<br>Bonjour";
        // Backslash pour échapper les guillemets
        echo " \" les amis ! \" ";
        echo "</h1>";
        // Elément dynamique
        echo date('d/m/y h:i:s');
        echo "<br>";
    ?>
    <!-- Fin du bloc PHP -->

    Hello !
</body>
</html>