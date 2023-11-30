<?php
require_once __DIR__ . '/../config/const.php';

$choixUtilisateur = isset($_POST["choix_flux_rss"]) ? $_POST["choix_flux_rss"] : [];

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/parameters.php';