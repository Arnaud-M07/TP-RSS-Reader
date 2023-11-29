<?php
//////////////////////controller/////////////////////////////////
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Stockage dans une variable du lien Atom du flux rss :
    $url = 'https://www.lemonde.fr/rss/une.xml'; 

    // Récupération du lien Atom du flux rss :
    $rss = file_get_contents($url);

    // Convertit une chaîne XML en objet
    $rss = simplexml_load_string($rss);

    // ===================================================================
    if ($rss) {
        $errrors = [];
        // On récupére les données sous forme d'objet :
        foreach ($rss->channel->item as $item) {
            $title = $item->title;
            $description = $item->description;
            $link = $item->link;
            $pubDate = $item->pubDate;

        
            // echo '<p><a href="' . $item->link . '">';
            echo "<p>$item->title";
            
        }
    } else {
        // Echec de la réception du flux RSS :
        echo $errors['fluxrss'] = 'erreur lors de la réception du flux RSS';
    }
// }

// ================controle de la réception du flux rss : =============
// try {
//     //code...
// } catch (\Throwable $th) {
//     $errors = $th->getMessage();
// }
// ?>
<!-- ///////////////////////View//////////////////////////////// -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test en dur sur le titre</title>
</head>
<body>
    <p>Coucou c'est la partie HTML</p>
</body>
</html>




