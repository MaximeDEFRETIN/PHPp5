<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 9</title>
    </head>
    <body>
        <?php
        $hautsDeFrance = array(
            '59' => 'Nord',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme',
            '60' => 'Oise',
            '02' => 'Aisne'
        );
        foreach ($hautsDeFrance as $value)
        {
            echo $value . ' ';
        }
        ?>
    </body>
</html>