var locationiqKey = 'pk.dff2d3a2f9b32e16b3df43c20b6000a6'

// Define the map and configure the map's theme
var map = new maplibregl.Map({
    container: 'map',
    center: [125.1247121987941, 8.156422406094592],
    style: 'https://tiles.locationiq.com/v3/streets/vector.json?key=' + locationiqKey,
    zoom: 15,
});

// First, create a DOM element for the marker
var el = document.createElement('div');
el.className = 'marker';
el.id = 'marker';

el.style.transform = 'translate(-50%, -50%) translate(411px, 200px) rotateX(0deg) rotateZ(0deg)';
// Set marker properties using JS
el.style.backgroundImage = 'url(https://maps.locationiq.com/v3/samples/marker50px.png)';

var marker = new maplibregl.Marker(el, {
    draggable: true,
})
    .setLngLat([125.1247121987941, 8.156422406094592])
    .addTo(map);

function updateMarkerPosition(lngLat) {
    console.log('Update Marker Position', lngLat);
    
    var latitude = lngLat.lat;
    var longitude = lngLat.lng;
    
    marker.setLngLat([longitude, latitude]);
    map.flyTo({ center: [longitude, latitude] });
}

// After the mouse is released, the following function is executed which updates the displayed lat and long
function onDragEnd() {
    var lngLat = marker.getLngLat();
    updateMarkerPosition(lngLat);

    console.log('on Drag', lngLat);

    var latitudeInputElement = document.getElementById('latSpan');
    var longitudeInputElement = document.getElementById('lngSpan');

    var latitude = lngLat.lat;
    var longitude = lngLat.lng;

    latitudeInputElement.textContent = latitude;
    longitudeInputElement.textContent = longitude;
}

marker.on('dragend', onDragEnd);

// Geocoder Control
var geocoder = new MapboxGeocoder({
    accessToken: locationiqKey,
    mapboxgl: maplibregl,
    limit: 5,
    dedupe: 1,
    flyTo: {
        screenSpeed: 7,
        speed: 4,
    },
})

function onGeocode(e) {
    // Debugging: Log the geocoding result to the console
    console.log('Geocoding Result:', e);

    var lngLat = {
        lat: e.result.center[1], // Extract latitude
        lng: e.result.center[0], // Extract longitude
    };
    updateMarkerPosition(lngLat);

    var provinceAddressElement = document.getElementById('province');
    var cityAddressElement = document.getElementById('city');
    var displayNameAddressElement = document.getElementById('display_name');

    var province = e.result.address.state;
    var city = e.result.address.name;
    var display_name = e.result.display_name;

    provinceAddressElement.textContent = province;
    cityAddressElement.textContent = city;
    displayNameAddressElement.textContent = display_name;
}

// Attach the 'onGeocode' function to the 'result' event of the geocoder
geocoder.on('result', onGeocode);

map.addControl(geocoder, 'bottom-left');
