<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

//	onscreen events
		$this->events["ctos_view_map"] = true;
		$this->events["ctos_view_map1"] = true;
		$this->events["ctos_view_map2"] = true;
		$this->events["ctos_view_map3"] = true;



		}

//	handlers

//	onscreen events

	function event_ctos_view_map(&$params)
	{
		$mapSettings['id'] = "ctos_view_map";
	// Configuración del mapa
$mapSettings["addressField"] = "Cto";
$mapSettings["latField"] = "Latitud";
$mapSettings["lngField"] = "Longitud";
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";
$mapSettings["width"] = 1200;
$mapSettings["height"] = 800;
$mapSettings['description'] = 'Cto';
$mapSettings['zoom'] = 13;
$mapSettings["markerAsEditLink"] = true;
$mapSettings['showCenterLink'] = 1;
$mapSettings['centerLinkText'] = 'Center';
$mapSettings['showCurrentLocation'] = true;
$mapSettings['currentLocationIcon'] = "images/smile.png";

function DisplayMap($settings) {
    ?>
    <div id="map" style="width: <?= $settings['width'] ?>px; height: <?= $settings['height'] ?>px;"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
        var map;
        var markers = [];

        function initialize() {
            var mapOptions = {
                zoom: <?= $settings['zoom'] ?>,
                center: new google.maps.LatLng(-34.397, 150.644),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('map'), mapOptions);

            // Add click event listener to the map
            google.maps.event.addListener(map, 'click', function(event) {
                addMarker(event.latLng);
                showForm(event.latLng);
            });

            // Show user's current location
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    map.setCenter(pos);
                    addMarker(pos);
                });
            }
        }

        function addMarker(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                icon: "<?= $settings['currentLocationIcon'] ?>"
            });
            markers.push(marker);
        }

        function showForm(location) {
            var lat = location.lat();
            var lng = location.lng();
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
            document.getElementById('locationForm').style.display = 'block';
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <?php
}

// Formulario para agregar ubicaciones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $address = $_POST['address'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];

    // Validar y guardar los datos en la base de datos
    // Aquí deberías implementar la lógica para guardar los datos en tu base de datos
    // Ejemplo:
    // $sql = "INSERT INTO locations (Cto, Latitud, Longitud) VALUES ('$address', '$lat', '$lng')";
    // Ejecutar la consulta

    echo "Ubicación agregada correctamente.";
}

	;
}
	function event_ctos_view_map1(&$params)
	{
		$mapSettings['id'] = "ctos_view_map1";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "Cto";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Latitud";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Longitud";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 800;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
 $mapSettings["markerAsEditLink"] = true;


// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "images/smile.png";
 $mapSettings["currentLocationAsEditLink"] = true;

DisplayMap($mapSettings);
	;
}
	function event_ctos_view_map2(&$params)
	{
		$mapSettings['id'] = "ctos_view_map2";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "Cto";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Latitud";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Longitud";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 800;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
 $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
 $mapSettings['showCenterLink'] = 1;
// Center Link text
 $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "images/smile.png";
 $mapSettings["currentLocationAsEditLink"] = true;


DisplayMap($mapSettings);
	;
}
	function event_ctos_view_map3(&$params)
	{
		$mapSettings['id'] = "ctos_view_map3";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "DisplayOnMap";


// name of field in table that used as latitude for map
$mapSettings["latField"] = "Latitud";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Longitud";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 800;
//$mapSettings['description'] = 'Localidad'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
 $mapSettings["markerAsEditLink"] = false;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
 $mapSettings['showCenterLink'] = 1;
// Center Link text
 $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "/images/Smile.png";

DisplayMap($mapSettings);
	;
}



}
?>