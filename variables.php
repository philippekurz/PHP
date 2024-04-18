<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables</h1>
    <?php
        /*
        PHP est un langage non typé, 
        c'est-à-dire que les variables n'ont pas de type défini.
        Le type de la variable est défini par la valeur qu'elle contient.
        */
        // Déclaration et initialisation de 2 variables
        $prenom = 'Jean';   // Déclaration de variable $prenom
        $nom = 'Dupont';    // Déclaration de variable $nom

        // interpolation de variables et affichage via echo
        echo "<br>Bonjour $prenom $nom !";

        // Déclaration de variable sans initialisation
        $message;

        // Concaténation de variables et affichage via echo
        $message = '<br>Bonjour ' . $prenom . ' ' . $nom . ' !';
        echo $message;

        /* Nom des variables
        commence par $
        peut contenir majuscules, minucules, chiffres, certain caratères spéciaux
        ne doit pas commencer par un chiffre après le $
        Case sensitive $Texte != $TEXTE
        par convention on utilise camelCase
        */

        // Types de variables (fonction du contenu)
        //    Chaînes de caractères (string) "Bonjour"
        //    Entiers (integer) 123, -123
        //    Décimaux (float)  123.54, -123.54
        //    Booléens (Boolean) true, false
        //    NULL (pas de valeur) NULL
        //    Tableaux (array)
        //    Objets (object)

?>
</body>
</html>