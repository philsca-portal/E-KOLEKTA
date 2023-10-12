var map;
var geocoder;
function loadMap(){
	var uluru = {lat: 14.527162, lng: 121.014392};
	map = new google.maps.Map(document.getElementById('map'), {
	zoom: 17,
	center: uluru
	});

	var marker = new google.maps.Marker({
	position: uluru,
	map : map
	});

	var cdata = JSON.parse(document.getElementById('data').innerHTML);
	geocoder = new google.maps.Geocoder();
	codeAddress(cdata);

	var allData = JSON.parse(document.getElementById('allData').innerHTML);
	showAllColleges(allData);
}
function showAllColleges(allData){
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = '<div id="content">' +
					    '<div id="siteNotice">' +
					    "</div>" +
					    '<h5 id="firstHeading" class="firstHeading">'+ "Tag: "+ data.tag +'</h5>' +
					    '<h5 id="firstHeading" class="firstHeading">'+ "Type: "+ data.type +'</h5>' +
					    '<h5 id="firstHeading" class="firstHeading">'+ "Date: "+ data.date +'</h5>' +
					    '<div id="bodyContent">' +
					    "<p><b>"+"</b>"+"<img src='"+ data.image +
					    "'style='width:100px;'>"+
					    "</p>" +
					    "</div>" +
					    "</div>";
		
		
		var marker = new google.maps.Marker({
		position: new google.maps.LatLng(data.lat, data.lng),
		map : map,
		});

		marker.addListener('click', function(){
			infoWind.setContent(content);
			infoWind.open(map, marker);
		})
	})
}

function codeAddress(cdata) {
    Array.prototype.forEach.call(cdata, function(data){
		var address = data.loc; 
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.id;
	        points.lat = map.getCenter().lat();
	        points.lng = map.getCenter().lng();
	        updateCollegeWithLatLng(points);
	      } else {
	        alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});  
  }

function updateCollegeWithLatLng(points) {
	$.ajax({
		url:"action.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})
	
}
