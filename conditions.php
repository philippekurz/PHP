<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conditions</h1>
    <?php
        $a = 2;     // Affectation =
        $b = 6;

        if ($a==$b)     // Comparaison == (ATTENTION ne pas confondre avec affectation =)
            WriteLine('pareil');
        else
            WriteLine('pas pareil');

        if ($a != $b)
            WriteLine('différent');
        else 
            WriteLine('Pareil');
        
        if ($a >$b)
            WriteLine('$a > $b');
        else
            WriteLine('$b <= $a');

        $a = 2;
        $b = '2';

        WriteLine ($a == $b);   // Même valeur -> OUI
        Writeline ($a === $b);  // Même type et même valeur -> NON
        
            /* ----- utilitaires ------- */    
        function WriteLine ($texte) {
            echo $texte . "<br>";
        }
    ?>
</body>
</html>