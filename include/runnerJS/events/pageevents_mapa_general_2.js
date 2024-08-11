
Runner.pages.PageSettings.addPageEvent('Mapa_General_2',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){if(!proxy.haveLocation){if(navigator.geolocation){navigator.geolocation.getCurrentPosition(showPosition);}
function showPosition(position){$.post("menu.php",{lat:position.coords.latitude,lng:position.coords.longitude})}};});