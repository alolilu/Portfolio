<?php include ('router.php') ?>
<?php include ('functions/language.php') ?>
<?php include ('functions/function.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Portfolio Alexis FREDRIKSEN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="icon" href="../portfolio2022/assets/images/icon.png">
</head>
<body>

<!-- setting darkmod  -->

<div id="settingMenu" class="settings">
    <h5>
        <?= element51 ?>
    </h5>
    <div id="erreur">
        <i class="fa-solid fa-circle-exclamation"></i>
        <h4>
            <?= element56 ?>
        </h4>
    </div>
    <p>
        <?= element52 ?>
    </p>
    <a onclick="toggle()" id="settingsButton"><i class="fa-solid fa-gear"></i></a>
    <div class="colorTheme">
    <a onclick="changeColorTheme('rgb(192,160,98')"  ><img src="../portfolio2022/assets/images/couleur/color1.png" alt=""></a>
    <a onclick="changeColorTheme('blue')" id="btnColor1"><img src="../portfolio2022/assets/images/couleur/color2.png" alt=""></a>
    <a onclick="changeColorTheme('red')" id="btnColor3"><img src="../portfolio2022/assets/images/couleur/color3.png" alt=""></a>
    <a onclick="changeColorTheme('orange')" id="btnColor4"><img src="../portfolio2022/assets/images/couleur/color4.png" alt=""></a>
    <a onclick="changeColorTheme('yellow')" id="btnColor5"><img src="../portfolio2022/assets/images/couleur/color6.png" alt=""></a>
    <a onclick="changeColorTheme('green')" id="btnColor6"><img src="../portfolio2022/assets/images/couleur/color5.png" alt=""></a>
    <a onclick="changeColorTheme('pink')" id="btnColor7"><img src="../portfolio2022/assets/images/couleur/color7.png" alt=""></a>
    <a onclick="changeColorTheme('rgb(47,145,234)')" id="btnColor8"><img src="../portfolio2022/assets/images/couleur/color8.png" alt=""></a>
    </div>
    <p>
        <?= element53 ?>
    </p>
    <div class="buttonDarkMod">
        <a id="darkMode"> <?= element54 ?></a>
        &nbsp;
        <a id="whiteMode"> <?= element55 ?></a>
    </div>
</div>

<!-- Change color theme -->
<script>
    let colorTheme = localStorage.getItem("color-change");

    if (colorTheme !== null){
        document.documentElement.style.setProperty("--change-color", localStorage.getItem("color-change"));
    }

    function changeColorTheme(color){
        document.documentElement.style.setProperty("--change-color", color)
        localStorage.setItem("color-change", color);
    }
</script>

<script>
// dark Mode

import ('assets/css/styles.css') 

function getCurrentTheme(){
    let theme = window.matchMedia('(prefers-color-scheme: darkmode)')
    .matches ? 'whiteMode' : 'dark';
    localStorage.getItem('canabrey.theme') ? theme = 
    localStorage.getItem('canabrey.theme') : null;
    return theme;
}
 
function loadTheme(theme){
    const root = document.querySelector(':root');
    if(theme === "whiteMode"){
        console.log('darkmode');
    }
    else{
        console.log('whitemode');
    }
    root.setAttribute('color-scheme',  `${theme}`);
}

const whiteMode = document.getElementById('whiteMode');
const darkMode = document.getElementById('darkMode');

whiteMode.addEventListener('click', () => {
    let theme = getCurrentTheme();
    if(theme === 'whiteMode'){
        theme = 'dark';
        whiteMode.style.backgroundColor = "var(--change-color)";
        darkMode.style.backgroundColor = "var(--main-bg-color)";
        document.getElementById('titrePrincipal').style.color = "var(--color-contact)";
    } else{
        
    };
    localStorage.setItem('canabrey.theme', `${theme}`);
    loadTheme(theme);
});

darkMode.addEventListener('click', () => {
    let theme = getCurrentTheme();
    if(theme === 'dark'){
        theme = 'whiteMode';
        darkMode.style.backgroundColor = "var(--change-color)";
        whiteMode.style.backgroundColor = "var(--main-bg-color)";
        document.getElementById('titrePrincipal').style.color = "black";
    } else{
        
    };
    localStorage.setItem('canabrey.theme', `${theme}`);
    loadTheme(theme);
});


window.addEventListener('DOMContentLoaded', () =>{
    loadTheme(getCurrentTheme());
});

// bouton animation settings menu

let buttonOn = true;

function toggle(){
    switch(buttonOn){
        case true:
            buttonOn = false;
            document.getElementById('settingMenu').style.left = "1px";
            document.getElementById('settingMenu').style.animation = "leftToRight 0.4s linear";
            break;

        case false:
            buttonOn = true;
            document.getElementById('settingMenu').style.left = "-201px";
            document.getElementById('settingMenu').style.animation = "rightToLeft 0.4s linear";
            break;
    }
};

</script>

<!-- switch language -->

<script>
    function switchLang1(lang){
        document.cookie = "language=" + lang;
        location.reload();
    }

    function switchLang(lang){
        document.cookie = "language=" + lang;
        location.reload();
    }
</script>

<!-- Loader Page -->

<div class="container-fluid" id="loader">
    <span class="back">
        <?= element50 ?>
    </span>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

<script>
    $(window).load(function() {
		$("#loader").fadeOut("slow");
	});
</script>

<!-- Bouton back to top -->
<a id="BackToTop" href="#top">UP<i class="fa-solid fa-circle-arrow-up"></i></a>

<script>
    window.onscroll = function (){
    if(this.scrollY >= 500){
        document.getElementById('BackToTop').style.animation = 'appears 0.5s linear';
        document.getElementById('BackToTop').style.opacity = 1;
        document.getElementById('BackToTop').style['pointer-events'] = 'stroke'; 
    }else{
        document.getElementById('BackToTop').style.animation = 'desappears 0.5s linear';
        document.getElementById('BackToTop').style.opacity = 0; 
        document.getElementById('BackToTop').style['pointer-events'] = 'none'; 
    }
}
</script>

<!-- curseur -->
<div id="cursor">
    <img id="ImageProjet1" alt="">
    <div id="imageAnim1"></div>
    <img id="ImageProjet2" alt="">
    <div id="imageAnim2"></div>
    <img id="ImageProjet3" alt="">
    <div id="imageAnim3"></div>
    <img id="ImageProjet4" alt="">
    <div id="imageAnim4"></div>
    <img id="ImageProjet5" alt="">
    <div id="imageAnim5"></div>
</div>


<?php include "modules/navbar.php"; ?>

<?php include $page ?>

<?php include "modules/footer.php"; ?>
    
<script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>