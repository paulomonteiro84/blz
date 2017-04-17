<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/slider.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,700" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css?v=<?= time() ?>">
    <title>Document</title>
</head>
<body>
<div class="topbar-wrap full-width">

        <div class="row center topbar social">
            <div class="small-9 columns text-left">Space</div>
            <div class="small-3 columns text-right topbar-social">
                <div class="social-small-label">Siga-nos:</div>
                <div class="social-small-icons">
                    <i class="icons facebook-small"></i>
                    <i class="icons twitter-small"></i>
                    <i class="icons instagram-small"></i>
                </div>
            </div>
        </div>

</div>
<div class="row">
    <div class="small-12 medium-3 large-3 columns text-left no-padding">
        <div class="logo"><img src="http://www.bodylaser.pt/new/hosting/logo-1.png"></div>
    </div>
    <div class="small-12 medium-9 large-9 columns topnav text-right">
        <ul>
            <li>Home</li>
            <li>Promoções</li>
            <li>Tratamentos</li>
            <li>Localização</li>
            <li class="btn blue">Fazer Marcação</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="small-12 columns no-padding">
        <div class="carousel">
            <div class="carousel-cell"><img
                        src="http://www.bodylaser.pt/new/hosting/laser-diodo-bellissima-lisboa-site.png"></div>
            <div class="carousel-cell"><img
                        src="http://www.bodylaser.pt/new/hosting/laser-diodo-bellissima-lisboa-site.png"></div>
            <div class="carousel-cell"><img
                        src="http://www.bodylaser.pt/new/hosting/laser-diodo-bellissima-lisboa-site.png"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="small-12 columns divider">
        <span>TRATAMENTOS EM DESTAQUE</span>
    </div>
</div>

<div class="row">
    <div class="small-12 columns divider">
        <span>NO CORAÇÃO DE LISBOA</span>
        <div id="map"></div>
    </div>
</div>

<div class="full-width blue-bar text-center">
    <div class="row">
        <div class="small-12 columns divider white">
            <span>FAÇA A SUA MARCAÇÃO</span>
        </div>
        <div class="small-4 columns">
            <h4>Telefone</h4>
            <span class="bold">925 271 645</span>
        </div>
        <div class="small-4 columns">
            <h4>Email</h4>
            <span class="bold">geral@bodylaser.pt</span>
        </div>
        <div class="small-4 columns">
            <h4>Online</h4>
            <span class="btn green bold">Fazer Marcação</span>
        </div>
    </div>
</div>


<div class="row brands">
    <div class="small-12 columns divider">
        <span>OS NOSSOS PARCEIROS PARA O SUCESSO</span>
        <ol>
            <img class='brands-logo' src="http://bodylaser.pt/new/admin/uploads/image/logos/ulthera_logo-100x41.jpg"/>
            <img class='brands-logo' src="http://bodylaser.pt/new/admin/uploads/image/logos/maxresdefault-100x55.jpg"/>
            <img class='brands-logo' src="http://bodylaser.pt/new/admin/uploads/image/logos/thumb-100x66.jpg"/>
            <img class='brands-logo' src="http://bodylaser.pt/new/admin/uploads/image/logos/4432789_orig-100x50.jpg"/>
            <img class='brands-logo'
                 src="http://bodylaser.pt/new/admin/uploads/image/logos/logo_milesman_trans-100x27.gif"/>
            <img class='brands-logo' src="http://bodylaser.pt/new/admin/uploads/image/logos/mesoestetic-100x25.jpg"/>
        </ol>
    </div>
</div>

<div class="footer-wrap full-width">
    <div class="row center">
        <div class="small-3 columns">
            <b>Localização</b><br>
            <span>
                Av. Eng. Duarte Pacheco 19 Sala 10<br>
                1070-100 Lisboa Amoreiras<br>
                (junto ao “Médico dos Dentes”)
                    </span>
        </div>
        <div class="small-3 columns">
            <b>Newsletter</b><br>
            <input class="input">
            <span class="btn blue">Enviar</span>
        </div>
        <div class="small-3 columns">
            <ul>
                <li>Home</li>
                <li>Promoções</li>
                <li>Tratamentos</li>
                <li>Localização</li>
            </ul>
        </div>
        <div class="small-3 columns">
<i class="icons facebook"></i>
            <i class="icons twitter"></i>
            <i class="icons instagram"></i>
        </div>

        <div class="small-12 columns text-center">
            <hr>
            <img src="http://www.bodylaser.pt/new/hosting/logo_footer.png" alt="">
            <span class="legal">Clínica Body Laser © 2017 Silhueta Record. Todos os direitos reservados</span>
        </div>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/slider.js"></script>
<script src="js/app.js?v=<?= time() ?>"></script>
<script>
    function initMap() {
        var uluru = {lat: 38.723592, lng: -9.163386};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });

    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKa0-BLycoFQI87ivEGKr1yEKteKQaaVg&callback=initMap">
</script>
</body>
</html>