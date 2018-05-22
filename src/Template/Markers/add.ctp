<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marker $marker
 */
?>

<div class="markers form large-9 medium-8 columns content">


    <script type="text/javascript">

    
        function myMap() {
            var myCenter = new google.maps.LatLng(-7.92323,-34.92004);
            var mapCanvas = document.getElementById("map");
            var mapOptions = {center: myCenter, zoom: 11};
            var map = new google.maps.Map(mapCanvas, mapOptions);

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
<fieldset>
        <legend><?= __('Reportar Incidente') ?></legend>
    
        <?php
            echo $this->Form->control('Título');
            echo $this->Form->control('Descrição');
            echo $this->Form->control('Data');
            echo $this->Form->control('Tipo');
            echo $this->Form->control('Local');
            echo $this->Form->control('lat');
            echo $this->Form->control('lng');
        ?>
<div id="map" style="width:100%;height:500px"></div>

<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCvcFAuDX9XSqe9-OPBlYMhdb7FPYWD5W8&callback=myMap'); ?>

    <?= $this->Form->create($marker) ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
