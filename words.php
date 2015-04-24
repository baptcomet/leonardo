<?php
function say($phrase){


    static $lang = array(
        "NOM_SITE" => "JacaDanse",
        "GROS_TITRE" => "Bienvenue à l'école JacaDanse",
        "PETIT_TITRE" => "Nous sommes ravis de vous voir",
        "BOUTON_TITRE" => "Je fais un tour",
    );



    echo isset($lang[$phrase]) ? $lang[$phrase] : 'oops';
}