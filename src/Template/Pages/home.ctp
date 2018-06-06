<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'Se Liga - Igarassu';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->script('jquery.min.js'); ?>    


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
 <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
<script type="text/javascript">

    
        function myMap() {
            var myCenter = new google.maps.LatLng(-7.830136823,-34.903713147);
            var mapCanvas = document.getElementById("map");
            var mapOptions = {center: myCenter, zoom: 13};
            var map = new google.maps.Map(mapCanvas, mapOptions);
            map.data.loadGeoJson(
      '/json/igarassu.geojson');
            map.addListener('click', function(e) {
                var markerLatLng = e.latLng;
                document.getElementById("lat").value = e.latLng.lat();
                document.getElementById("lng").value = e.latLng.lng();
                var marker = new google.maps.Marker({
                    position: markerLatLng,
                    map: map,
                    title: "Olá"
                });
            });

        }
</script>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1>Se Liga</h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a href="markers/add">Reportar Incidente</a></li>
		<li><a href="#">Contato</a></li>
            </ul>
        </div>
    </nav>
  

<header>
    <div class="header-title">
        <h1>Acompanhe os registros de crimes que estão ocorrendo em Igarassu</h1>
    </div>
</header>

<div id="map" style="width:100%;height:700px"></div>

<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCvcFAuDX9XSqe9-OPBlYMhdb7FPYWD5W8&callback=myMap'); ?>

<div>
    <div class="inicio">
        <h3 class="indexh3 h3principal">MAS... O QUE É O SE LIGA?</h3>

        <h4 class="indexh3"> O Se Liga é uma iniciativa desenvolvida por alunos do Instituto Federal de Pernambuco -  Campus Igarassu. Criado com o intuito principal de concentrar informações relevantes sobre a situação criminalística da cidade de Igarassu.

        <h4 class="indexh3 h3principal">FUNCIONALIDADES:</h4>

        <ul class="ulprincipal">
            <li class="liprincipal">Mapa de Calor</li>
            <li class="liprincipal">xxxxxxxxxxxxxxxxxxxxx</li>
            <li class="liprincipal">xxxxxxxxxxxxxxxxxxxxxxxxx</li>
            <li class="liprincipal">xxxxxxxxxxxxxxxxxxxxxxxxxxxx</li>
            <li class="liprincipal">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</li>
    </div>
</div>


</body>
</html>
