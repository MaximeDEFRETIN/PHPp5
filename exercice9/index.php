<html>
    <head>
        <title>Exercice 9</title>
    </head>
    <body>
        <?php
        $coordonnees[02] = 'aisne';
        $coordonnees[60] = 'oise';
        $coordonnees[80] = 'somme';
        $coordonnees[59] = 'nord';
        $coordonnees[62] = 'pas-de-calais';

        foreach ($coordonnees as $element) {
            echo $element . ' ';
        }
        ?>
    </body>
</html>