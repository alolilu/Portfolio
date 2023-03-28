<div class="container skills" id="Page1">
    <div class="row">
        <h1>
            <?= element8 ?>
        </h1>
        <p id="paragraphe">
            <?= element9 ?>
        </p>
    </div>
    <div class="row iconSkill">
        <div class="col"><i class="fa-brands fa-html5">
                <h6>95%</h6>
            </i>
            <p>HTML</p>
        </div>
        <div class="col"><i class="fa-brands fa-css3-alt">
                <h6>80%</h6>
            </i>
            <p>CSS</p>
        </div>
        <div class="col"><i class="fa-brands fa-js">
                <h6>50%</h6>
            </i>
            <p>JavaScript</p>
        </div>
        <div class="col"><i class="fa-brands fa-php">
                <h6>55%</h6>
            </i>
            <p>PHP</p>
        </div>
        <div class="col"><i class="fa-brands fa-bootstrap">
                <h6>90%</h6>
            </i>
            <p>Bootstrap</p>
        </div>
    </div>
    <div class="row iconSkill">
        <div class="col"><i class="fa-solid fa-database">
                <h6>50%</h6>
            </i>
            <p>MySql</p>
        </div>
        <div class="col"><i class="fa-brands fa-sass">
                <h6>80%</h6>
            </i>
            <p>Scss</p>
        </div>
        <div class="col"><i class="fa-brands fa-windows">
                <h6>99%</h6>
            </i>
            <p>Windows</p>
        </div>
        <div class="col"><i class="fa-brands fa-python">
                <h6>75%</h6>
            </i>
            <p>Python</p>
        </div>
        <div class="col"><i class="fa-brands fa-symfony">
                <h6>5%</h6>
            </i>
            <p>Symfony</p>
        </div>
    </div>
    <div class="row iconSkill">
        <div class="col"><i class="fa-solid fa-palette">
                <h6>90%</h6>
            </i>
            <p>Paint.net</p>
        </div>
        <div class="col"><i class="fa-solid fa-o"></i>
                <h6>95%</h6>
            </i>
            <p>Odoo</p>
        </div>
        <div class="col"><i class="fa-solid fa-terminal">
                <h6>80%</h6>
            </i>
            <p>Terminal</p>
        </div>
        <div class="col"><i class="fa-solid fa-mobile-screen">
                <h6>85%</h6>
            </i>
            <p>Responsive</p>
        </div>
        <div class="col"><i class="fa-brands fa-apple">
                <h6>80%</h6>
            </i>
            <p>MacOS</p>
        </div>
    </div>
    <div class="row iconSkill">
        <div class="col"><i class="fa-solid fa-code">
                <h6>85%</h6>
            </i>
            <p>Visual Studio Code</p>
        </div>
        <div class="col"><i class="fa-brands fa-github">
                <h6>75%</h6>
            </i>
            <p>Github</p>
        </div>
        <div class="col"><i class="fa-solid fa-server">
                <h6>75%</h6>
            </i>
            <p>Proxmox</p>
        </div>
        <div class="col"><i class="fa-brands fa-java">
                <h6>25%</h6>
            </i>
            <p>Java</p>
        </div>
        <div class="col"><i class="fa-solid fa-laptop-code">
                <h6>75%</h6>
            </i>
            <p>Xml</p>
        </div>
    </div>
    <div class="container-fluid Next">
        <div style="margin-right: -5px;" class="nextPage"></div>
        <div style="transform: rotateX(180deg); margin-bottom: -99px;" class="nextPage"></div>
        <div style="margin-left: -5px;" class="nextPage"></div>
    </div>
    <div class="row rowFlex" style="padding: 100px 0px 0px 0px;">
        <h1>
            <?= element10 ?>
        </h1>
        <p>
            <?= element11 ?>
        </p>
    </div>
    <div class="barreSkill">
        <h6>Front-End</h6>
        <div class="BarreRow">
            <div class="barreVide1">
                <div class="barreRempli1" id="animBar1"></div>
            </div>
        </div>
        <h6>Back-End</h6>
        <div class="BarreRow">
            <div class="barreVide1">
                <div class="barreRempli2" id="animBar2"></div>
            </div>
        </div>
        <h6>Design</h6>
        <div class="BarreRow">
            <div class="barreVide1">
                <div class="barreRempli3" id="animBar3"></div>
            </div>
        </div>
        <h6><?= element12 ?></h6>
        <div class="BarreRow">
            <div class="barreVide1">
                <div class="barreRempli4" id="animBar4"></div>
            </div>
        </div>
        <h6><?= element13 ?></h6>
        <div class="BarreRow">
            <div class="barreVide1">
                <div class="barreRempli5" id="animBar5"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid Next">
        <div style="margin-right: -5px;" class="nextPage"></div>
        <div style="transform: rotateX(180deg); margin-bottom: -99px;" class="nextPage"></div>
        <div style="margin-left: -5px;" class="nextPage"></div>
    </div>
</div>

<script>
    window.onscroll = function (){
    if(this.scrollY >= 1000){
        document.getElementById('animBar1').style.animation = 'animate-frontEnd 3s ease';
        document.getElementById('animBar2').style.animation = 'animate-backEnd 3s ease';
        document.getElementById('animBar3').style.animation = 'animate-design 3s ease';
        document.getElementById('animBar4').style.animation = 'animate-anglais 3s ease';
        document.getElementById('animBar5').style.animation = 'animate-francais 3s ease';
    }else if(this.scrollY >= 500){
        document.getElementById('BackToTop').style.animation = 'appears 0.5s linear';
        document.getElementById('BackToTop').style.opacity = 1;
        document.getElementById('BackToTop').style['pointer-events'] = 'auto'; 
    }else{
        document.getElementById('animBar1').style.animation = 'none';
        document.getElementById('animBar2').style.animation = 'none';
        document.getElementById('animBar3').style.animation = 'none';
        document.getElementById('animBar4').style.animation = 'none';
        document.getElementById('animBar5').style.animation = 'none';
        document.getElementById('BackToTop').style.animation = 'desappears 0.5s linear';
        document.getElementById('BackToTop').style.opacity = 0; 
        document.getElementById('BackToTop').style['pointer-events'] = 'none'; 
    }
}

</script>

<div id="titrePrincipal" style="display: none;"></div>