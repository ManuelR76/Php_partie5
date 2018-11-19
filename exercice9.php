<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $departments = array(
            '02' => 'Aisne',
            '51' => 'Marne',
            '59' => 'Nord',
            '60' => 'Aisne',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme',
        );
        foreach ($departments as $department) {            
        echo $department;
        echo '<br>';
        }
        ?>
    </body>
</html>