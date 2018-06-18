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
            var mapOptions = {center: myCenter, zoom: 13, 
  mapTypeId: 'satellite'};
            var map = new google.maps.Map(mapCanvas, mapOptions);
            map.data.loadGeoJson(
      'seLiga/json/igarassu.geojson');
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
        <ul class="title-area">
            <li class="name">
                <h1>Se Liga</h1>
            </li>
        </ul>
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
    <button><a href="markers/add">Reportar Incidente</a></button>
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
    <!-- <footer>
    <!DOCTYPE html>
        <html>
        <meta name='viewport' content="width=device-with, initial-scal=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <div class='w3-container'>
            <div class="rodape">
                <table class="tabela">
                    <tr>
                        <td>
                            <a href="http://www.ifpe.edu.br">
                        </td>
                        <td>
                            <a href="https://github.com/matheuszero/projeto-1.git">
                            <i class="fa fa-github fa-5x" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <i class="fa fa-facebook fa-5x" aria-hidden="true"></i>
                        </td>
                        <td>
                            <i class="fa fa-whatsapp fa-5x" aria-hidden="true"></i>
                        </td>
                    </tr>   
                </table>
                <p>Projeto desenvolvido por estudantes da Instituição Federal de Educação, Ciência e Tecnologia de Pernambuco</p>
                <a href="contacts/add">Contato</a>
            </div>
    </footer>
   
    </div>
 -->

    </body>
</html>
