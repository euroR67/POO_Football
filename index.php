<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - FOOTBALL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php

        spl_autoload_register(function ($class_name) {
            require_once $class_name . '.php';
        });

        $france = new Pays("France");
        // $espagne = new Pays("Espagne");
        // $allemagne = new Pays("Allemagne");

        $psg = new Equipe("PSG", $france);
        $om = new Equipe("OM", $france);
        // $equipe3 = new Equipe("OL", $france);
        // $equipe4 = new Equipe("RCSA", $france);

        $neymar = new Joueur("Neymar", "JR", "1993-08-25", $france);

        
    ?>
</table>
</body>
</html>