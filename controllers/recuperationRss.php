<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feuille de test</title>
</head>
<body>
<?php

        function chargerFluxRSS($url) {
            $rss = simplexml_load_file($url);

            if ($rss) {
                foreach ($rss->channel->item as $item) {
                    $title = $item->title;
                    $link = $item->link;
                    $pubDate = $item->pubDate;
                    $description = $item->description;

                    if (isset($item->children('media', true)->content)) {
                        $media = $item->children('media', true)->content;
                        $mediaUrl = $media->attributes()['url'];
                        $mediaDescription = $media->children('media', true)->description;
                        $mediaCredit = $media->children('media', true)->credit;

                        echo "<img src='$mediaUrl' alt='$mediaDescription'>";
                        echo "<p>$mediaDescription</p>";
                        echo "<p>Crédit photo: $mediaCredit</p>";
                    }

                    echo "Titre : $title <br>";
                    echo "URL : $link <br>";
                    echo "Date de publication : $pubDate <br>";
                    echo "Description du texte : $description <br>";
                    echo "Contenu media: $media <br><br>";
                }
            } else {
                echo "Erreur lors de la récupération du flux RSS.";
            }
        }

        // $urlSport = "https://www.lemonde.fr/sport/rss_full.xml";
        // chargerFluxRSS($urlSport);

        // $urlPlanet ="https://www.lemonde.fr/planete/rss_full.xml";
        // chargerFluxRSS($urlPlanet);

        // $urlGeek ="https://www.lemonde.fr/pixels/rss_full.xml";
        // chargerFluxRSS($urlJeuxvideo);

        // $urlEconomie ="https://www.lemonde.fr/economie/rss_full.xml";

        // $urlScience ="https://www.lemonde.fr/sciences/rss_full.xml";




        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $choixUtilisateur = isset($_POST["choix_flux_rss"]) ? $_POST["choix_flux_rss"] : [];

            
            if (count($choixUtilisateur) > 3) {
                echo "Erreur : Vous ne pouvez choisir que jusqu'à 3 flux RSS.";
            } else {
                
                foreach ($choixUtilisateur as $choix) {
                    switch ($choix) {
                        case "choix1":
                            $urlChoisi = "https://www.lemonde.fr/sport/rss_full.xml";
                            chargerFluxRSS($urlChoisi);
                            break;
                        case "choix2":
                            $urlChoisi = "https://www.lemonde.fr/planete/rss_full.xml";
                            chargerFluxRSS($urlChoisi);
                            break;
                        case "choix3":
                            $urlChoisi = "https://www.lemonde.fr/pixels/rss_full.xml";
                            chargerFluxRSS($urlChoisi);
                            break;
                        case "choix4":
                            $urlChoisi = "https://www.lemonde.fr/economie/rss_full.xml";
                            chargerFluxRSS($urlChoisi);
                            break;
                        case "choix5":
                            $urlChoisi = "https://www.lemonde.fr/sciences/rss_full.xml";
                            chargerFluxRSS($urlChoisi);
                            break;
                        default:
                            echo "Erreur : choix non valide.";
                    }
                }
            }
        }
        ?>

        <!-- Formulaire HTML -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>Choisissez jusqu'à 3 flux RSS :</label><br>
            <input type="checkbox" name="choix_flux_rss[]" value="choix1"> Sport<br>
            <input type="checkbox" name="choix_flux_rss[]" value="choix2"> Planète<br>
            <input type="checkbox" name="choix_flux_rss[]" value="choix3"> Geek<br>
            <input type="checkbox" name="choix_flux_rss[]" value="choix4"> Économie<br>
            <input type="checkbox" name="choix_flux_rss[]" value="choix5"> Sciences<br>

            <input type="submit" value="Afficher les flux RSS">
        </form>


</body>
</html>