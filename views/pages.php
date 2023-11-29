<!-- le doctype est provisoire ainsi que les liens Bootstrap -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages</title>
    <!-- provisoire -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <div class="row text-center">
            <div class="col-12">
                <h1>$titre</h1>
                <img class="img-article" src="../public/assets/img/test.jpg"  alt="image correspondante à la récupération du flux RSS">
                <div><?=$dateformatted?></div>
                <h2>$description</h2>
                <!-- En dur provisoirement -->
                <!-- mettre le lien -->
                <a class="btn btn-primary" href="$" role="button">Lien vers le site</a>
            </div>

        
        </div>


    </div>
    <!-- provisoire -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>