<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feuille de test</title>
</head>
<body>
    <?php

    
    $url = "https://www.lemonde.fr/sport/rss_full.xml";
    $rss = simplexml_load_file($url);

    if ($rss) {
        
        foreach ($rss->channel->item as $item) {
            $title = $item->title;
            $link = $item->link;
            $pubDate = $item->pubDate;
            $description = $item ->description;
            

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
            echo "description du texte : $description <br>";
            echo "contenu media: $media <br><br>";
        }
    } else {
        echo "Erreur lors de la récupération du flux RSS.";
    }

    ?>

</body>
</html>