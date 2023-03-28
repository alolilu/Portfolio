<nav class="navbar" id="top">
    <div class="row">
        <div class="col-md-5 navLeft" id="NAVLEFT">
            <a href="<?= $routes['home'] ?>" class="initital">AF</a>
            <p>Alexis Fredriksen</p>
        </div>
        <div class="col-md-7 navRight">
            <p class="Langue">
                <a onclick="switchLang('fr')" href="">FR</a>
                &nbsp;<a href="">/</a>&nbsp;
                <a onclick="switchLang('en')" href="">EN</a>
            </p>
            <ul id="ulNavRight">
                <a href="<?= $routes['skills'] ?>"><?= element1 ?></a>
                <a href="<?= $routes['projects'] ?>"><?= element2 ?></a>
                <a href="<?= $routes['about'] ?>"><?= element3 ?></a>
                <a href="<?= $routes['contact'] ?>"><?= element4 ?></a>
            </ul>
        </div>
        <div id="navbarMobile">
            <div class="menuHumberger"></div>
        </div>
        <div class="container-fluid" id="menuMobile">
            <ul>
                <li>
                    <a href="<?= $routes['home'] ?>"><?= element5 ?></a>
                </li>
                <li>
                    <a href="<?= $routes['skills'] ?>"><?= element1 ?></a>
                </li>
                <li>
                    <a href="<?= $routes['projects'] ?>"><?= element2 ?></a>
                </li>
                <li>
                    <a href="<?= $routes['about'] ?>"><?= element3 ?></a>
                </li>
                <li>
                    <a href="<?= $routes['contact'] ?>"><?= element4 ?></a>
                </li>
                <li style="margin-top: 105px;">
                    <p class="Langue1">
                        <a onclick="switchLang('fr')" href="">FR</a>
                        &nbsp;<a style="border-bottom: 0px;" href="">/</a>&nbsp;
                        <a onclick="switchLang('en')" href="">EN</a>
                    </p>
                </li>
            </ul>
        </div>
    </div>
</nav>

