<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 8</title>
    </head>
    <body>
        <?php
        $month = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
        foreach ($month as $separate)
        {
            echo $separate;
            ?> <br/> <?php }
        ?>
    </body>
</html>