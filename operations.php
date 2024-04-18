<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Declaration de 3 variables (integer)
        $a = 3;
        $b = 5;
        $c = 8;

        WriteLine("$a - $b = " . ($a - $b));
        WriteLine("$a + $b = " . ($a + $b));
        WriteLine("$a * $b = " . ($a * $b));
        WriteLine("$a / $b = " . ($a / $b));
        WriteLine("$a % $b = " . ($a % $b));
        WriteLine("$a ^ $b = " . ($a ** $b));



        $a = 1;
        $a++;   // Postincrémentation
        ++$a;   // Préincrémentation

        WriteLine($a);  // 3

        WriteLine(++$a); // 4
        WriteLine($a++); // 4
        WriteLine($a);   // 5

        function WriteLine ($texte) {
            echo $texte . "<br>";
        }        
    ?>
</body>
</html>