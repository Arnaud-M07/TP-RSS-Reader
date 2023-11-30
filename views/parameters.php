<!-- PARAMETERS PHP -->
<div class="container-fluid banner-signUp">

</div>
<div class="container container-form-signUp">
    <form action="" method="POST" class="form" novalidate>
        <div class="row py-5">
            <!-- col catégories -->
            <div class="col-12 col-md-4 mb-4">
            <label><h2>Sélectionnez 3 catégories</h2></label>
                <?php foreach (ARRAY_THEMES as $themes) { 
                    ?>
                    <div class='form-check'>
                        <input class='form-check-input' name='theme' type='checkbox' value='<?=$themes?>' id='<?=$themes?>' required>
                        <label class='form-check-label fw-normal' for='<?=$themes?>'><?=$themes?></label>
                    </div>
                <?php } ?>
            </div>
            <!-- col nbr articles -->
            <div class="col-12 col-md-4 mb-4">
                <label><h2>Nombre d'articles à afficher</h2> </label>
                <?php foreach (ARRAY_ARTICLES_DISPLAY as $displayNumber) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="displayNumber" id="<?=$displayNumber?>" value="<?=$displayNumber?>" required>
                        <label class="form-check-label" for="<?=$displayNumber?>"><?=$displayNumber?></label>
                    </div>
                <?php } ?>
            </div>

            <!-- col dark mode -->
            <div class="col-12 col-md-4 mb-4">
            <label><h2>Dark mode</h2></label>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Dark mode</label>
            </div>
            </div>
            <!-- submit button -->
            <div class="btn-div">
                <button type="submit" class="btn btn-dark p-3">Confirmer</button>
            </div>
        </div>
    </form>
</div>