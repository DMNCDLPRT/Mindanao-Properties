 document.addEventListener('DOMContentLoaded', function () {
        var mapContainer = document.getElementById('map');
    
        var platform = new H.service.Platform({
          apikey: '{{ env('HERE_API_KEY') }}'
        });
                      
        var defaultLayers = platform.createDefaultLayers();

        var map = new H.Map(mapContainer, defaultLayers.vector.normal.map, {
            center: { 
              lat:  {{ $latitude }},
              lng: {{ $longitude }} },
            zoom: 10,
        });

        // Add a marker
        var marker = new H.map.Marker({ lat: {{ $latitude }}, lng: {{ $longitude }} });
        map.addObject(marker);

        // Livewire listener to update the map when latitude or longitude changes
        Livewire.on('updateMap', (data) => {
            marker.setGeometry({ lat: data.latitude, lng: data.longitude });
            map.setCenter({ lat: data.latitude, lng: data.longitude });
        });
    });