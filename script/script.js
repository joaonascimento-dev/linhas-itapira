// The following example creates five accessible and
// focusable markers.
function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 17,
      center: { lat: -22.4294292, lng: -46.8230301 },
      mapId: "6eb5166702b5a24f",
      disableDefaultUI: true,
    });
    // Set LatLng and title text for the markers. The first marker (Boynton Pass)
    // receives the initial focus when tab is pressed. Use arrow keys to
    // move between markers; press tab again to cycle through the map controls.
    const tourStops = [
      [{ lat: -22.4294292, lng: -46.8230301 }, "Rodoviária"],
      [{ lat: -22.4366529, lng: -46.822313 }, "Centro"],
    ];
    // Create an info window to share between markers.
    const infoWindow = new google.maps.InfoWindow();
  
    // Create the markers.
    /*tourStops.forEach(([position, title], i) => {
      const marker = new google.maps.Marker({
        position,
        map,
        title: `${i + 1}. ${title}`,
        label: `${i + 1}`,
        optimized: false,
      });
  
      // Add a click listener for each marker, and set up the info window.
      marker.addListener("click", () => {
        infoWindow.close();
        infoWindow.setContent(marker.getTitle());
        infoWindow.open(marker.getMap(), marker);
      });
    }); */

    var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);
    //directionsRenderer.setPanel(document.getElementById('directionsPanel'));

    //function calcRoute() {
      var request = {
        origin:tourStops[0][0],
        destination:tourStops[1][0],
        travelMode: 'DRIVING' //TRANSIT
      };
      directionsService.route(request, function(response, status) {
        if (status == 'OK') {
          directionsRenderer.setDirections(response);
        }
      });
    //}
    
  }
  
  window.initMap = initMap;