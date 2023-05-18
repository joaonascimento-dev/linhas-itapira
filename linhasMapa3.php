<!DOCTYPE html>
<html>
<head>
  <title>OpenLayers Map Example</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@6.5.0/dist/ol.css" type="text/css">
  <style>
    #map {
      width: 100%;
      height: 400px;
    }
  </style>
</head>
<body>
  <div id="map"></div>

  <script src="https://cdn.jsdelivr.net/npm/ol@6.5.0/dist/ol.js"></script>
  <script>
    // Map initialization
    var map = new ol.Map({
      target: 'map',
      layers: [
        new ol.layer.Tile({
          source: new ol.source.OSM()
        })
      ],
      view: new ol.View({
        center: ol.proj.fromLonLat([0, 0]),
        zoom: 2
      })
    });

    // Adding a marker to the map
    var marker = new ol.Feature({
      geometry: new ol.geom.Point(
        ol.proj.fromLonLat([0, 0])
      )
    });

    var markerStyle = new ol.style.Style({
      image: new ol.style.Icon({
        src: 'https://openlayers.org/en/latest/examples/data/icon.png',
        anchor: [0.5, 1],
        scale: 0.1
      })
    });

    marker.setStyle(markerStyle);

    var vectorSource = new ol.source.Vector({
      features: [marker]
    });

    var vectorLayer = new ol.layer.Vector({
      source: vectorSource
    });

    map.addLayer(vectorLayer);
  </script>
</body>
</html>
