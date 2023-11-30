<!-- PAGE HOME-->
<div class="container">
        <!-- Row articles -->
        <?php foreach($choixUtilisateur as $choix){?>
            <div class="row">
                <div class="col">
                    <h2><?=$choix?></h2>
                </div>
            </div>
            <div class="row">
                <!-- Col articles uniques -->
                <?php foreach($choixUtilisateur as $choix){?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?=$mediaUrl?>" class="card-img-top" alt="<?=$mediaDescription?>">
                        <div class="card-body">
                            <h5 class="card-title"><?=$title?></h5>
                            <p class="post-date"><?=$pubDate?></p>
                            <p class="card-text"><?=$decription?></p>
                            <a href="<?=$link?>" class="btn btn-primary">Lire l'article</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
            </div>
        <?php } ?>
    </div>