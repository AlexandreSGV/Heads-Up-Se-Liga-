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
    <meta name="viewport" content="initial-scale=1., user-scalable=no" />
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <script type="text/javascript">
        var marker = null;
        function myMap() {
            var geocoder = new google.maps.Geocoder;
            var infowindow = new google.maps.InfoWindow;
            var myCenter = new google.maps.LatLng(-7.830136823,-34.903713147);
            var mapCanvas = document.getElementById("map");
            var mapOptions = {center: myCenter, zoom: 13, mapTypeId: 'roadmap'};
            var map = new google.maps.Map(mapCanvas, mapOptions);

            map.addListener('click', function(e) {
                var markerLatLng = e.latLng;
                document.getElementById("latlng").value = e.latLng.lat() + "," + e.latLng.lng();
                geocodeLatLng(geocoder, map, infowindow);
            });
        }
        function geocodeLatLng(geocoder, map, infowindow) {
            if (marker) {
                marker.setMap(null);
            }
            var input = document.getElementById('latlng').value;
            var latlngStr = input.split(',', 2);
            var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};

            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === 'OK') {
                    if (results[1]) {
                        marker = new google.maps.Marker({
                            position: latlng,
                            map: map
                        });
                        infowindow.setContent(results[1].formatted_address);
                        infowindow.open(map, marker);
                        document.getElementById("address").value = results[1].formatted_address;
                    } 
                    else {
                        window.alert('No results found');
                    }
                } 
                else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }

</script> 
           
        
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
    <div class="navbar a">
        <li>
            <?= $this->Html->link("SeLiga","/#intro")?>
        </li>
   
        
    </div>
    </nav>
  
<div id="map"></div>

<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCvcFAuDX9XSqe9-OPBlYMhdb7FPYWD5W8&callback=myMap&libraries=visualization'); ?>
<div id="submit"></div>
<div id="left" align="center">
    <div class="inicio">
    <?= $this->Form->create($marker) ?>
<fieldset>
    <input disabled="disabled" type="hidden" id="latlng" value="40.714224,-73.961452">
        <legend><?=('Registrar Crime') ?></legend>
    
        <?php
            echo $this->Form->control('title',['label' => 'Título']);
            echo $this->Form->control('address',['label' => 'Digite o Bairro do Ocorrido (ou selecione no mapa)','disabled' => 'disabled', 'id' => 'address']);
            echo $this->Form->control('lat', ['type'=>'hidden', 'disabled' => 'disabled']);
            echo $this->Form->control('lng', ['type'=>'hidden', 'disabled' => 'disabled']);
            echo $this->Form->control('type',['label' => 'Tipo de Ocorrência', 'type' => 'select', 'options' => ['Assassinato','Latrocinio','Espancamento','Feminicidio','Infanticídio','Furto','Roubo'],]);
            echo $this->Form->control('date',['label' => 'Dia' ,'empty' => true]);
            echo $this->Form->control('schedule',['label' => 'Horário' , 'empty' => true]);
            echo $this->Form->control('description',['label' => 'Descrição', 'type' => 'textarea']);

        ?>
        </fieldset>
    <?= $this->Form->button(__('Registrar')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
    </body>
</html>