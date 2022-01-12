function printcord() {	
	x.innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;
}
function getLocation() {
  if (navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
	console.log("Geolocation is not supported by this browser.");
  }
}
function showPosition(position) {
  latitude = position.coords.latitude;
  longitude =  position.coords.longitude;
	if (localStorage.getItem("reload_count") === null) {
	  localStorage.setItem("reload_count", "1");
	}
  assignLatLog(latitude, longitude, true);
}
function showError(error) {
  switch(error.code) {
	case error.PERMISSION_DENIED:
	  getIpDetail();
	  break;
	case error.POSITION_UNAVAILABLE:
	  console.log("Location information is unavailable.");
	  break;
	case error.TIMEOUT:
	  console.log("The request to get user location timed out.");
	  break;
	case error.UNKNOWN_ERROR:
	  console.log( "An unknown error occurred.");
	  break;
  }
}
function getIpDetail(){
	jQuery.get("https://ipinfo.io/" + ip, function (response)
	{
	   latitude = response.loc.split(',')[0]; 
	   longitude = response.loc.split(',')[1];
	   assignLatLog(latitude, longitude, false);
	}, "json");
}
window.onload = function(){getLocation()}

function assignLatLog(latitude, longitude, reload){
	createCookie('lat', latitude, 1);
	createCookie('long', longitude, 1);
	if(reload && (localStorage.getItem("reload_count") == "1")){
		localStorage.setItem("reload_count", "0");
		window.location.reload();
	}
}

// Function to create the cookie 
function createCookie(name, value, days) { 
    var expires; 
      
    if (days) { 
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
        expires = "; expires=" + date.toGMTString(); 
    } 
    else { 
        expires = ""; 
    } 
      
    document.cookie = escape(name) + "=" +  
        escape(value) + expires + "; path=/"; 
} 

function user_logout(){
	$.ajax({
		type: 'post',
		url: 'user-logout.php',
		success: function(e){
			if(e == 'Success')
			{
				location.reload();
			} else {
				alert(e);   
			}
			
		} 
	});		
}

// Angular js module
var obj = angular.module("registration-app", []);
		
obj.controller("register-form", function($scope){			
});

obj.controller("my_login", function($scope){
	$scope.inputType = 'password';

  // Hide & show password function
  $scope.hideShowPassword = function(){
	if ($scope.inputType == 'password')
	  $scope.inputType = 'text';
	else
	  $scope.inputType = 'password';
  };
});

// As Per Lat and Long Show the Hidden Section
/*function assignLatLog(latitude, longitude){
	var locdata = 'lat=' + latitude + '&long=' + longitude;
	if(latitude != '' && longitude != '')
	{
		$.ajax({
			type: 'post',
			data: locdata,
			url: 'create_show_properties.php',
			success: function(res){
				if(res != 'error')
				{
					$('.featured-properties').empty();
					$('.addproperties').append(res);
					$('.featured-properties').removeClass('hideview');
				} else {
					console.log(res);
					$('.featured-properties').removeClass('hideview');
				}
			} 
		});
	}
}*/