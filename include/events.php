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
		$this->events["AfterSuccessfulLogin"]=true;


		$this->events["BeforeShowLogin"]=true;


		$this->events["AfterLogout"]=true;



//	onscreen events
		$this->events["ctos_view_map1"] = true;
		$this->events["ctos_view_map2"] = true;
		$this->events["ctos_view_map3"] = true;
		$this->events["ctos_map"] = true;
		$this->events["localidad_view_map"] = true;
		$this->events["ctos_por_localidad_map"] = true;
		$this->events["vista_cables_map"] = true;
		$this->events["spliters_view_map"] = true;
		$this->events["Mapa_Ctos_map"] = true;
		$this->events["ctos_snippet"] = true;
		$this->events["Mapa_Ctos_map2"] = true;
		$this->events["Mapa_ctos_map4"] = true;
		$this->events["ctos_view_map5"] = true;
		$this->events["Vista_Digitadores_map"] = true;
		$this->events["Vista_Digitadores_map1"] = true;
		$this->events["cables_snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		

//**********  Redirect to another page  ************
header("Location: localidad_list.php");
exit();



// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowLogin(&$xt, &$templatefile, $pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
if($_SESSION["geoLatitude"] && $_SESSION["geoLongitude"])
    $pageObject->setProxyValue('haveLocation', true);

;
} // function BeforeShowLogin

		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
				// After Logout
function AfterLogout($username)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
header("Location: login.php");
exit();

;
} // function AfterLogout

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_ctos_snippet(&$params)
	{
	

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
echo "Your message";
	;
}
	function event_cables_snippet(&$params)
	{
	echo ' 
<!DOCTYPE html>
<html>
<head>
    <title>Contador Regresivo</title>
    <style>
        /* Estilo para el contador, si se desea agregar algún estilo */
        #timer {
            font-size: 2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Elemento de contador visible -->
    <div id="timer">00:10</div>

    <script>
        // Función para formatear los números a dos dígitos
        function pad(num) {
            return num < 10 ? "0" + num : num;
        }

        // Inicializar tiempo restante en segundos (10 segundos para la primera vez)
        let remainingTime = 10;

        // Función para actualizar el contador
        function updateTimer() {
            // Decrementar el tiempo restante
            remainingTime--;

            if (remainingTime < 0) {
                // Recargar la página cuando el tiempo llega a 0
                window.location.reload();
                return; // Detener la ejecución para evitar actualizaciones adicionales
            }

            // Calcular minutos y segundos
            const minutes = Math.floor(remainingTime / 60);
            const seconds = remainingTime % 60;

            // Formatear el tiempo
            const formattedTime = pad(minutes) + ":" + pad(seconds);

            // Actualizar el contenido del elemento visible
            document.getElementById("timer").textContent = formattedTime;
        }

        // Actualizar el contador cada segundo
        const timerInterval = setInterval(updateTimer, 1000);
    </script>
</body>
</html>
';

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
$mapSettings['description'] = 'DisplayOnMap'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 4;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = true;

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
//$mapSettings['showCenterLink'] = 2;
// Center Link text
//$mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
$mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
$mapSettings['currentLocationIcon'] = "/images/Smile.png";

DisplayMap($mapSettings);

	;
}
	function event_ctos_map(&$params)
	{
		$mapSettings['id'] = "ctos_map";
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
$mapSettings['zoom'] = 10;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = false;


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
	function event_localidad_view_map(&$params)
	{
		$mapSettings['id'] = "localidad_view_map";
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
$mapSettings['clustering'] = true;


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
 $mapSettings['currentLocationIcon'] = "/images/Smile.png";

	;
}
	function event_ctos_por_localidad_map(&$params)
	{
		$mapSettings['id'] = "ctos_por_localidad_map";
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
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 5;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = true;


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
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "images/Smile.png";


DisplayMap($mapSettings);
	;
}
	function event_vista_cables_map(&$params)
	{
		$mapSettings['id'] = "vista_cables_map";
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
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 5;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = true;


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
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "images/Smile.png";


DisplayMap($mapSettings);
	;
}
	function event_spliters_view_map(&$params)
	{
		$mapSettings['id'] = "spliters_view_map";
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
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 5;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = true;


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
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "images/Smile.png";


DisplayMap($mapSettings);
	;
}
	function event_Mapa_Ctos_map(&$params)
	{
		$mapSettings['id'] = "Mapa_Ctos_map";
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
$mapSettings['zoom'] = 10;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = true;


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
 //$mapSettings['showCenterLink'] = 2;
// Center Link text
 //$mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
 //optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "/images/Smile.png";

DisplayMap($mapSettings);
	;
}
	function event_Mapa_Ctos_map2(&$params)
	{
		$mapSettings['id'] = "Mapa_Ctos_map2";
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
$mapSettings['description'] = 'DisplayOnMap'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 4;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = false;


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
// $mapSettings['showCenterLink'] = 2;
// Center Link text
 //$mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
 //optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "/images/Smile.png";

DisplayMap($mapSettings);
	;
}
	function event_Mapa_ctos_map4(&$params)
	{
		$mapSettings['id'] = "Mapa_ctos_map4";
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
$mapSettings['description'] = 'DisplayOnMap'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 12;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = false;


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
 //$mapSettings['showCenterLink'] = 2;
// Center Link text
 //$mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
 //optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "/images/Smile.png";

DisplayMap($mapSettings);
	;
}
	function event_ctos_view_map5(&$params)
	{
		$mapSettings['id'] = "ctos_view_map5";
	
// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "concatenado";

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
$mapSettings['description'] = 'concatenado'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 8;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = false;

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
	function event_Vista_Digitadores_map(&$params)
	{
		$mapSettings['id'] = "Vista_Digitadores_map";
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
$mapSettings['zoom'] = 18;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = false;


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
	function event_Vista_Digitadores_map1(&$params)
	{
		$mapSettings['id'] = "Vista_Digitadores_map1";
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
$mapSettings['zoom'] = 20;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = false;


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