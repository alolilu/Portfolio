<?php

$lang = "fr";

if(isset($_COOKIE['language']) && $_COOKIE['language'] == "en"){
    include("traduction/fr.php");
    $lang = "fr";
} else {
    include("traduction/en.php");
    $lang = "en";
}