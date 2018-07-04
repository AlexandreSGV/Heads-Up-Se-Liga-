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
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
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
    <?= $this->Html->css('https://www.w3schools.com/w3css/4/w3.css') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono') ?>
<script type="text/javascript">

    
        function myMap() {
            var myCenter = new google.maps.LatLng(-7.830136823,-34.903713147);
            var mapCanvas = document.getElementById("map");
            var mapOptions = {center: myCenter, zoom: 13, 
  mapTypeId: 'roadmap'};
            var map = new google.maps.Map(mapCanvas, mapOptions);
            map.data.loadGeoJson(
      '/json/igarassu.geojson');
            map.addListener('click', function(e) {
                var markerLatLng = e.latLng;
                document.getElementById("lat").value = e.latLng.lat();
                document.getElementById("lng").value = e.latLng.lng();
                var marker = new google.maps.Marker({
                    position: markerLatLng,
                    map: map
                });
            });

var heatmapData = [
  new google.maps.LatLng(-7.8348985, -34.88723365),
  new google.maps.LatLng(-7.8505436, -34.8412284),
  new google.maps.LatLng(-7.8342182, -34.8982199),
  new google.maps.LatLng(-7.8668683, -34.9229392),
  new google.maps.LatLng(37.782, -122.439),
  new google.maps.LatLng(37.782, -122.437),
  new google.maps.LatLng(37.782, -122.435),
  new google.maps.LatLng(37.785, -122.447),
  new google.maps.LatLng(37.785, -122.445),
  new google.maps.LatLng(37.785, -122.443),
  new google.maps.LatLng(37.785, -122.441),
  new google.maps.LatLng(37.785, -122.439),
  new google.maps.LatLng(37.785, -122.437),
  new google.maps.LatLng(37.785, -122.435)
];


var heatmap = new google.maps.visualization.HeatmapLayer({
  data: heatmapData
});
heatmap.setMap(map);

        }
</script>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
       <!--  <ul class="title-area">
            <li class="name">
                <h1>Se Liga</h1>
            </li>
        </ul> -->
        <div class="name">
            <a href="../" class="link-seliga w3-bar-item w3-button" style="color: white;" >Se Liga</a>
            <a href="#" class="link-sobre w3-bar-item w3-button w3-right" style="color: white;" >Sobre</a>
            <a href="../contacts/add" class="link-contato w3-bar-item w3-button w3-right" style="color: white;" >Fale Conosco</a>
        </div>
        
        <!-- <div class="top-bar-section">
            <ul class="right">
                <li><a href="markers/add">Reportar Incidente</a></li>
		<li><a href="contacts/add">Contato</a></li>
            </ul>
        </div> -->
    </nav>
  
<div id="map"></div>

<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCvcFAuDX9XSqe9-OPBlYMhdb7FPYWD5W8&callback=myMap&libraries=visualization'); ?>

<div id="left" align="center">
    <div class="inicio">
    <button><a href="markers/add">Registrar Crime</a></button>

        <!-- <h3 class="indexh3 h3principal">MAS... O QUE É O SE LIGA?</h3>
=======
       <!--  <h3 class="indexh3 h3principal">MAS... O QUE É O SE LIGA?</h3> -->


      <!--   <h4 class="indexh3"> O Se Liga é uma iniciativa desenvolvida por alunos do Instituto Federal de Pernambuco -  Campus Igarassu. Criado com o intuito principal de concentrar informações relevantes sobre a situação criminalística da cidade de Igarassu.

        <h4 class="indexh3 h3principal">FUNCIONALIDADES:</h4>

        <ul class="ulprincipal">
            <li class="liprincipal">Mapa de Calor</li>
            <li class="liprincipal">xxxxxxxxxxxxxxxxxxxxx</li>
            <li class="liprincipal">xxxxxxxxxxxxxxxxxxxxxxxxx</li>
            <li class="liprincipal">xxxxxxxxxxxxxxxxxxxxxxxxxxxx</li>
            <li class="liprincipal">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</li> -->
    </div>
</div>

    <footer>
        <!-- <div class="w3-right-align w3-margin-top">
            <h5>Footer</h5>
            <p>Footer information goes here</p>
        </div> -->
    </footer>

    </body>
</html>
