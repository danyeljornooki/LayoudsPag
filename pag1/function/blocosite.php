<?php
class blocos {
    function header() { ?>
        <!DOCTYPE html>
            <head>                 
                <link href="css/slick.css" rel="stylesheet" type="text/css"/>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
                <link href="css/bxslider.css" rel="stylesheet" type="text/css"/>
                <link rel="stylesheet" href="css/style.css" type="text/css" />     

                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
                <script type="text/javascript" src="js/slick.js"></script>
                <script type="text/javascript" src="js/bxslider.js"></script>
                <script type="text/javascript" src="js/script.js"></script>

                <title>
                    <?php echo 'pagina1'; ?>
                </title>
            </head>

            <body id="body"> 
                
            <?php
    }


function top() { 
?>
    <div class="divTop">
        <div class="container">
            <div class="icon">
                <img src="img/Ico.png">
            </div>
            <div class="topMenu">
                <a id="home" href="?pg=1">Home</a>
                <a id="prod" href="?pg=2">Produtos</a>
                <a id="sup" href="?pg=3">Suporte</a>
                <a id="sob" href="?pg=4">Sobre</a>
            </div>
            <div class="topItens">
            <a href="#"><div class="icoMenu psq"></div></a>
                <a href="#"><div class="icoMenu cart"></div></a>
            </div>
            <div class="entrar">
                <div class="icoMenu"><button class="btnMenu"></button></div>
            </div>
        </div>
    </div> <?php 
}

function modelos() { 
?>
    <div class="divModelos">
        <div class="container">
            <div>
                <div class="single">
                    <div><img src="img/Fotos.png"></div>
                    <div><img src="img/Fotos.png"></div>
                    <div><img src="img/Fotos.png"></div>
                </div>
            </div>
            <div class="down" id="seta_ani">
                <a><img src="img/down.png">Scroll Down</a>
            </div>
        </div>
    </div> <?php 
}

function marcas() { 
?>
    <div class="divMarcas">
        <div class="container">
            <div class="autoplay">
                <a href="#">
                    <div><img src="img/m1.png"></div>
                </a>
                <a href="#">
                    <div><img src="img/m2.png"></div>
                </a>
                <a href="#">
                    <div><img src="img/m3.png"></div>
                </a>
                <a href="#">
                    <div><img src="img/m4.png"></div>
                </a>
            </div>
        </div>
    </div> <?php 
}

function tenis() { 
?>
    <div class="divTenis">
        <div class="container">
            <div class="ftTenis">
                <div class="tenisCat"><img src="img/t1.png"><a>Tenis R$30,00</a></div>
                <div class="tenisCat"><img src="img/t2.png"><a>Tenis R$30,00</a></div>
                <div class="tenisCat"><img src="img/t3.png"><a>Tenis R$30,00</a></div>
                <div class="tenisCat"><img src="img/t4.png"><a>Tenis R$30,00</a></div>
            </div>
            <div class="ftTenis">
                <div class="tenisCat"><img src="img/t1.png"><a>Tenis R$30,00</a></div>
                <div class="tenisCat"><img src="img/t2.png"><a>Tenis R$30,00</a></div>
                <div class="tenisCat"><img src="img/t3.png"><a>Tenis R$30,00</a></div>
                <div class="tenisCat"><img src="img/t4.png"><a>Tenis R$30,00</a></div>
            </div>
            <div class="ftTenis">
                <div class="tenisCat"><img src="img/t1.png"><a>Tenis R$30,00</a></div>
                <div class="tenisCat"><img src="img/t2.png"><a>Tenis R$30,00</a></div>
                <div class="tenisCat"><img src="img/t3.png"><a>Tenis R$30,00</a></div>
                <div class="tenisCat"><img src="img/t4.png"><a>Tenis R$30,00</a></div>
            </div>
            <div class="ftTenis">
                <div class="tenisCat"><img src="img/t1.png"><a>Tenis R$30,30</a></div>
                <div class="tenisCat"><img src="img/t2.png"><a>Tenis R$30,30</a></div>
                <div class="tenisCat"><img src="img/t3.png"><a>Tenis R$30,30</a></div>
                <div class="tenisCat"><img src="img/t4.png"><a>Tenis R$30,30</a></div>
            </div>
        </div>
    </div> <?php 
}

function rodape(){
?>
    <div class="divRodape">
        <div class="container">
            <div class="">
                <div>Texto texto</div>
                <div>Texto texto texto texto texto texto texto texto texto</div>
                <div><img src="img/face.png"><img src="img/yout.png"><img src="img/tel.png"><img src="img/in.png"></div>
            </div>
            <div class="">
                <div>Texto</div>
                <div>
                    <li>texto</li>
                    <li>texto</li>
                    <li>texto</li>
                </div>
            </div>
            <div class=""></div>
        </div>
    </div> <?php 
}

}