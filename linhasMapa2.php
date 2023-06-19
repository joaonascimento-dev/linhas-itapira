<?php
require_once 'C:\\xampp\\php\\vendor\\autoload.php';
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$collection = $mongoClient->linhasItapira->onibusLocalizacao;

$linhaId = $_GET['id'];

$whereCondition = [
    'linhaId' => intval($linhaId)
];


$sortCondition = [
    '_id' => -1    // Sort by '_id' field in ascending order (1 for ascending, -1 for descending)
];

$options = [
    'sort' => $sortCondition
];

require_once "model/Parada.php";
$parada = new Parada();
$listParada = $parada->listar($linhaId);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Linhas Itapira</title>
    <?php include("fragment/head.html"); ?>
    <style>
        #map {
            /*height: 400px;*/
            width: 100%;
        }

        .map-title {
            position: absolute;
            top: 10px;
            left: 10px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            background-color: white;
            padding: 5px;
            border-radius: 5px;
            z-index: 1000;
        }
    </style>
</head>

<body id="corpo">
    <?php $ativo = "linhas";
    include("fragment/navbar.php"); ?>

    <div id="map"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        async function initMap() {
            // Specify the coordinates of the location you want to display
            /*var latitude = -22.4294292;
            var longitude = -46.8230301;*/
            /* var locations = [
                {
                    name: 'Ônibus',
                    latitude: -22.4386529,
                    longitude: -46.822313
                }, {
                    name: 'Ponto 1',
                    latitude: -22.4294292,
                    longitude: -46.8230301
                },
                {
                    name: 'Ponto 2',
                    latitude: -22.434321,
                    longitude: -46.824487
                },
                {
                    name: 'Ponto 3',
                    latitude: -22.4366529,
                    longitude: -46.822313
                }
            ]; */
            var locations = [{
                    name: 'Ônibus',
                    latitude: -22.4386529,
                    longitude: -46.822313
                },
                <?php foreach ($listParada as $parada)
                    echo "{name: '" . $parada['nome'] . "', latitude: '" . $parada['latitude'] . "', longitude: '" . $parada['longitude'] . "'},"
                ?>
            ];

            // Create a new map object
            var map = new L.Map('map');

            // Create a new tile layer with the OpenStreetMap tile URL
            //var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
            var osmUrl = 'https://a.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png';
            var osmAttrib = 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors';
            var osmLayer = new L.TileLayer(osmUrl, {
                attribution: osmAttrib,
                minZoom: 1,
                maxZoom: 19
            });

            // Set the map's center and zoom level based on the first location
            var firstLocation = locations[0];
            map.setView(new L.LatLng(firstLocation.latitude, firstLocation.longitude), 15);
            map.addLayer(osmLayer);
            //map.removeLayer(map.markerLayer);

            /* var mapTitle = L.control({
                position: 'topright'
            });
            mapTitle.onAdd = function(map) {
                var div = L.DomUtil.create('div', 'map-title');
                div.innerHTML - 'Rodoviaria - Cubatao';
                return div;
            }
            mapTitle.addTo(map); */

            // Add markers for each location
            var markers = [];
            locations.forEach(function(location) {
                var marker = L.marker([location.latitude, location.longitude]).addTo(map);
                marker.bindPopup(location.name);

                if (location.name == 'Ônibus') {
                    var myIcon = L.icon({
                        iconUrl: 'img/icons8-ônibus-50-2.png',
                        iconSize: [30, 30]
                    });

                    marker.setIcon(myIcon);

                    const element = document.getElementById("corpo");
                    element.onload(updateBusao());

                    console.log("Antes funcao");

                    async function updateBusao() {
                        //var i = 0;
                        do {
                            $.ajax({
                                url: 'consultaMongo.php?id=1',
                                type: 'GET',
                                success: function(response) {
                                    // Manipule a resposta do PHP aqui
                                    console.log(response);
                                    const resposta = response.split(",");
                                    console.log(resposta);
                                    var latlng = L.latLng(parseFloat(resposta[0]),
                                        parseFloat(resposta[1]));
                                    marker.setLatLng(latlng);
                                },
                                error: function(xhr, status, error) {
                                    // Manipule os erros de solicitação aqui
                                    console.error(error);
                                }
                            });
                            //var latlng = e.latlng;

                            //i += 0.00005;
                            await new Promise(r => setTimeout(r, 1000));
                        } while (true);
                    }
                }

                console.log(marker);

                markers.push(marker);
            });

            // Create a polyline to connect the markers
            /*var polyline = L.polyline(
                locations.map(function(location) {
                    return [location.latitude, location.longitude];
                }), {
                    color: 'red'
                }
            ).addTo(map);

            // Fit the map bounds to contain all markers and the polyline
            var group = new L.featureGroup(markers.concat(polyline));
            map.fitBounds(group.getBounds());*/
        }

        // Call the initMap function when the page has finished loading
        window.onload = initMap;
    </script>

    <!-- Include the Leaflet library from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
</body>

</html>