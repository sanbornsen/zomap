<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="<?=Yii::app()->baseUrl?>/css/zomap.css" rel="stylesheet">



<div class="menubar">
		<select id="city_list" onchange="metro_marker()" onclick="reset()" class="fnt">
			<option value="0"> All </option>
			<?php foreach ($cities as $city):?>
				<option value="<?=$city->city_id?>"><?=$city->name?></option>
			<?php endforeach;?>
		</select>

		<select id="metro_list" onchange="metro_pre_point(this.value)" class="fnt">
			<option value="0"> All Stations</option>
		</select>
		<div id="info" class="info">
			
		</div>

</div>




<!-- Map loader div -->
<div id="map" style="height:100%;width:100%"></div>






<!-- Javascript Section -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=drawing&key=AIzaSyCqPwD-lQNxWqoHMPX9_0UckQlfBVlPVeY&sensor=FALSE"></script>
<script type="text/javascript">

var customIcons = {
	station: {
		icon: '<?=Yii::app()->baseUrl?>/images/underground.png',
		shadow: 'https://labs.google.com/ridefinder/images/mm_20_shadow.png'
	},
	gate: {
		icon: '<?=Yii::app()->baseUrl?>/images/exit.png',
		shadow: 'https://labs.google.com/ridefinder/images/mm_20_shadow.png'
	}
};

var lat = new Array();
var lng = new Array();
var addressList = new Array();
var nameList = new Array();
var metroId = new Array();
var center_lat = 0;
var center_lng = 0;
var map;
var marker_array = new Array();
var marked_array = new Array();

function reset(){
	document.getElementById('metro_list').value = 0;
	for(var key in marked_array){
		marked_array[key].setMap(null);
	}
	marked_array = new Array();
	marker_array = new Array();
	$("#info").fadeOut();

}



// For zooming in cities and get the list of metro stations belong to that city

function metro_marker(){
	var metro_id = document.getElementById("metro_list").value;
	var city_id = document.getElementById("city_list").value;

	var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
	    if (xmlhttp.readyState==4 && xmlhttp.status==200){
	    	var data = JSON.parse(xmlhttp.responseText);
	    	if(data.error){
	             alert(data.msg);
	        }
	        else{
	        	var arr = data.msg;
	        	lat = new Array();
				lng = new Array();
				addressList = new Array();
				nameList = new Array();
				var htm = "<option value='0'>All Stations</option>";

				
	        	for(var i=0;i<arr.length;i++){
	        		lat.push(arr[i].lat);
	        		lng.push(arr[i].lng);
	        		addressList.push(arr[i].address);
	        		nameList.push(arr[i].name);
	        		metroId.push(arr[i].id);
	        		htm += "<option value='"+arr[i].id+","+arr[i].lat+","+arr[i].lng+"'>"+arr[i].name+"</option>";
	        	}
	        	//alert(nameList);
	        	if(metro_id == 0)
	        		document.getElementById('metro_list').innerHTML = htm;
	        	load(lat, lng, 4, addressList, nameList, metroId, 2);
	        }
	    }
    }
    xmlhttp.open("POST","<?=Yii::app()->baseUrl?>/metros/get_list_by_city",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("city_id="+city_id+"&metro_id="+metro_id);
}

// For marking tagged gates for a station
/*
function show_gates(metro_id){
	var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
	    if (xmlhttp.readyState==4 && xmlhttp.status==200){
	    	var data = JSON.parse(xmlhttp.responseText);
	    	if(data.error){
	             //alert(data.msg);
	        }
	        else{
	        	marker_array = data.msg;
	        	for(var i=0;i<marker_array.length;i++){
	        		mark_gate(marker_array[i].lat, marker_array[i].lng);
	        	}
	        	return marker_array;
	        }
	    }
    }
    xmlhttp.open("POST","<?=Yii::app()->baseUrl?>/metros/get_gates",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("metro_id="+metro_id);
}
*/

function load(lat,lng,zoom,addressList_str,nameList,idList,first) {
	var sumlat=0; var sumlng=0;
	if(Object.prototype.toString.call(lat) != '[object Array]'){
		latar = new Array();lngar = new Array();
		latar[0] = lat; lngar[0] = lng;
		lat = latar; lng = lngar;
	}
	for(i=0;i<lat.length;i++){
		sumlat = sumlat+parseFloat(lat[i]);
		sumlng = sumlng+parseFloat(lng[i]);
	}
	var centreLat = sumlat/lat.length;
	var centreLng = sumlng/lng.length;
	center_lat = centreLat;
	center_lng = centreLng;
	
	if(lat.length == 1){
		zoom = zoom+6;
	}
	
	map = new google.maps.Map(document.getElementById("map"),{
						center: new google.maps.LatLng(parseFloat(centreLat),parseFloat(centreLng)),
						zoom: zoom,
						mapTypeId: google.maps.MapTypeId.HYBRID,
			});
	
	var infoWindow = new google.maps.InfoWindow;
	
	if(first==1){
		map.setCenter(new google.maps.LatLng(25.663362, 155.351562));
	}

	var bounds = new google.maps.LatLngBounds();
	
	for (var i = 0; i < lat.length; i++) {
		var name = nameList[i];
		addressList_str[i]=addressList_str[i].replace(/, ,/g, ',');
		
		if( addressList_str[i].charAt(0) === ',' ){
			addressList_str[i] = addressList_str[i].slice(1);
		}


		var address = addressList_str[i];
		var type = "";
		var point = new google.maps.LatLng(
			parseFloat(lat[i]),
			parseFloat(lng[i])
		);
		
		if(first==2){
			bounds.extend(point);
			map.fitBounds(bounds);
		}


		// Creating the info window HTML
		if(Object.prototype.toString.call(addressList_str) != '[object Array]'){
			var html = "<b>" + nameList + "</b> <br>" + addressList_str;
		}
		else{
			var html = "<b>" + name + "</b> <br>" + address;
		}
		

		var icon = customIcons['station'];
		var marker = new google.maps.Marker({
			map: map,
			position: point,
			icon: icon.icon,
			shadow: icon.shadow
		});

		bindInfoWindow(marker, map, infoWindow, html, lat[i], lng[i], idList[i]);
	}
}


function bindInfoWindow(marker, map, infoWindow, html, lat, lng, metro_id) {
	google.maps.event.addListener(marker, 'click', function() {
		metro_point(lat, lng, metro_id);
		infoWindow.setContent(html);
		infoWindow.open(map, marker);
	});
}

function downloadUrl(url, callback) {
	var request = window.ActiveXObject ?
	new ActiveXObject('Microsoft.XMLHTTP') :
	new XMLHttpRequest;
	request.onreadystatechange = function(){
		if (request.readyState == 4){
			request.onreadystatechange = doNothing;
			callback(request, request.status);
		}
	};
	request.open('GET', url, true);
	request.send(null);
}

function mark_gate(lat = center_lat, lng = center_lng, exitid, metro_id){
		if(exitid != 0){
			var infoWindow = new google.maps.InfoWindow;
			var icon = customIcons['gate'];
			var vMarker = new google.maps.Marker({
		        position: new google.maps.LatLng(lat, lng),
		        icon: icon.icon,
		        draggable: true
		    });
		    marked_array[exitid] = vMarker;
		    var html = "<button onclick='delete_station("+exitid+")'>Delete</button>";
		    bindInfoWindowExit(vMarker, infoWindow, html, exitid);
		    vMarker.setMap(map);
		}
		else{ // Add the exit id then work
			var xmlhttp=new XMLHttpRequest();
		    xmlhttp.onreadystatechange=function(){
			    if (xmlhttp.readyState==4 && xmlhttp.status==200){
			    	var data = JSON.parse(xmlhttp.responseText);
			    	if(data.error){
			             //alert(data.msg);
			        }
			        else{
			        	exitid = data.msg;
			        	var infoWindow = new google.maps.InfoWindow;
						var icon = customIcons['gate'];
						var vMarker = new google.maps.Marker({
					        position: new google.maps.LatLng(lat, lng),
					        icon: icon.icon,
					        draggable: true
					    });
					    marked_array[exitid] = vMarker;
					    var html = "<button onclick='delete_station("+exitid+")'>Delete</button>";
					    bindInfoWindowExit(vMarker, infoWindow, html, exitid);
					    vMarker.setMap(map);
			        }
			    }
		    }
		    xmlhttp.open("POST","<?=Yii::app()->baseUrl?>/metros/add_exit",true);
		    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		    xmlhttp.send("metro_id="+metro_id+"&lat="+lat+"&lng="+lng);
		}
	}


function bindInfoWindowExit(marker, infoWindow, html, exitid) {
	google.maps.event.addListener(marker, 'click', function() {
		infoWindow.setContent(html);
		infoWindow.open(map, marker);
	});

	google.maps.event.addListener(marker, 'dragend', function (evt) {
        var lat = evt.latLng.lat().toFixed(6);
        var lng = evt.latLng.lng().toFixed(6);
        var xmlhttp=new XMLHttpRequest();
		xmlhttp.open("POST","<?=Yii::app()->baseUrl?>/metros/update_exit",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("exit_id="+exitid+"&lat="+lat+"&lng="+lng);
    });
    marker.setAnimation(google.maps.Animation.BOUNCE);

}



function delete_station(exitid){
	var xmlhttp=new XMLHttpRequest();	
	xmlhttp.onreadystatechange=function(){
	    if (xmlhttp.readyState==4 && xmlhttp.status==200){
	    	var data = JSON.parse(xmlhttp.responseText);
	    	if(data.error){
	             alert(data.msg);
	        }
	        else{
	        	marked_array[exitid].setMap(null);
			}
	    }
    }
    xmlhttp.open("POST","<?=Yii::app()->baseUrl?>/metros/delete_exit",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("exit_id="+exitid);
}


function metro_pre_point(str){
	var arr = str.split(",");
	metro_point(arr[1],arr[2],arr[0]);
}


function metro_point(lat, lng, metro_id){

	// Re-initializing and redreshing gates
	for(var key in marked_array){
		marked_array[key].setMap(null);
	}
	marked_array = new Array();
	marker_array = new Array();
	$("#info").fadeOut();


	var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
	    if (xmlhttp.readyState==4 && xmlhttp.status==200){
	    	var data = JSON.parse(xmlhttp.responseText);
	    	if(data.error){
	             //alert(data.msg);
	        }
	        else{
	        	marker_array = data.msg;
	        	for(var i=0;i<marker_array.length;i++){
	        		mark_gate(marker_array[i].lat, marker_array[i].lng, marker_array[i].id, metro_id);
	        	}
				var point = new google.maps.LatLng(
						parseFloat(lat),
						parseFloat(lng)
					);
				map.panTo(point);
				map.setZoom(25);
				var htm = "<label>Station : </label>"+data.metro_name+"    <button onclick='mark_gate("+lat+","+lng+",0,"+metro_id+")'>Add Exit</button><br>";
				document.getElementById('info').innerHTML = htm;
				$("#info").fadeIn();
			}
	    }
    }
    xmlhttp.open("POST","<?=Yii::app()->baseUrl?>/metros/get_gates",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("metro_id="+metro_id);
}




function doNothing(){}


metro_marker();






</script>
