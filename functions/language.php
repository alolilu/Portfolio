<?php

$lang = "fr";

if(isset($_COOKIE['language']) && $_COOKIE['language'] == "en"){
    include("traduction/en.php");
    $lang = "en";
} else {
    include("traduction/fr.php");
    $lang = "fr";
}