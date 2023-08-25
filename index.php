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
        $portugal = new Pays("Portugal");

        $psg = new Equipe("PSG", 1970 , $france);
        $om = new Equipe("OM", 1988 , $france);

        $realmadrid = new Equipe("Real Madrid", 1978 , $portugal);
        $barca = new Equipe("Barcelone", 2002 , $portugal);

        $neymar = new Joueur("Neymar", "JR", "1993-08-25", $france);
        $mbappe = new Joueur("Mbappe", "Kylian", "1998-12-20", $france);
        $cr7 = new Joueur("Ronaldo", "Cristiano", "1985-02-05", $portugal);
        // $messi = new Joueur("Messi", "Lionel", "1987-06-24", $portugal);

        $carriereMbappe = new Carriere(2015, $psg, $mbappe);
        // $carriereNeymar = new Carriere(2017, $psg, $neymar);
        $carriereCR7 = new Carriere(2009, $realmadrid, $cr7);
        // $carriereMessi = new Carriere(2004, $barca, $messi);

        echo $france->equipes();
        echo '<br>';
        echo $psg->joueurs();
        echo '<br>';
        echo $mbappe->carrieres();

    ?>
</table>
</body>
</html>