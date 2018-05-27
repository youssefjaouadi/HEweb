
function initMap() {

    var input = document.getElementById('pac-input');
    var card = document.getElementById('pac-card');

    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 36.8569404, lng: 10.188828899999976},
        zoom: 17,
        mapTypeControl: false,
        streetViewControl: false
    });

    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    });
    var geocoder = new google.maps.Geocoder;
    var autocomplete = new google.maps.places.Autocomplete(input);

    loc(map,marker,geocoder,autocomplete,card);
    //loc(map,marker,geocoder,autocomplete,card);
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position){
            var input = document.getElementById('pac-input');
            var card = document.getElementById('pac-card');
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: position.coords.latitude, lng: position.coords.longitude},
                zoom: 17,
                mapTypeControl: false,
                streetViewControl: false

            });
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29),
                position: {lat: position.coords.latitude, lng: position.coords.longitude}

            });
            var geocoder = new google.maps.Geocoder;
            var autocomplete = new google.maps.places.Autocomplete(input);

            loc(map,marker,geocoder,autocomplete,card);
        });


    }






}
function loc (map,marker,geocoder,autocomplete,card){


    var btn = document.getElementById('btn');
    var service = new google.maps.places.PlacesService(map);

    map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);



    // Bind the map's bounds (viewport) property to the autocomplete object,
    // so that the autocomplete requests use the current map bounds for the
    // bounds option in the request.
    autocomplete.bindTo('bounds', map);

    var infowindow = new google.maps.InfoWindow();
    var infowindowContent = document.getElementById('infowindow-content');
    infowindow.setContent(infowindowContent);
    // autocomplete.setOptions({strictBounds: this.checked});

    autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            console.log("No details available for input: '" + place.name + "'");
            return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
        }
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
        infowindowContent.children['place-icon'].src = place.icon;
        infowindowContent.children['place-name'].textContent = place.name;
        infowindowContent.children['place-address'].textContent = address;
        infowindow.open(map, marker);

        btn.addEventListener("click", function(){
            $('#nom').prop('disabled',true);
            $('#nom').css('cursor','not-allowed');
            $('#adr').removeClass('ierror');
            $('#nom').removeClass('ierror');

            displayLoc(place.place_id,place.name,address,place.geometry.location.lat(),place.geometry.location.lng());
          //  infowindow.close();
        });
    });
    google.maps.event.addListener(map, 'click', function(evt) {
        evt.stop()
        if (evt.placeId) {
            service.getDetails({
                placeId: evt.placeId
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    infowindowContent.children['place-icon'].src = place.icon;
                    infowindowContent.children['place-name'].textContent = place.name;
                    infowindowContent.children['place-address'].textContent = place.formatted_address;
                    infowindow.open(map, marker);
                    //$('#btn').click(function(){displayLoc(place.name,place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());});

                    btn.addEventListener("click", function(){
                        $('#nom').prop('disabled',true);
                        $('#nom').css('cursor','not-allowed');
                        $('#adr').removeClass('ierror');
                        $('#nom').removeClass('ierror');

                        displayLoc(place.place_id,place.name,place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());


                    });
                }

            });
        }
        else {
            infowindowContent.children['place-icon'].src = "frontend/img/blank.png";
            infowindowContent.children['place-name'].textContent = "";
            setAdr(infowindowContent.children['place-address'],evt.latLng);
            infowindow.open(map, marker);
            btn.addEventListener("click", function(){
                displayLoc("","",infowindowContent.children['place-address'].textContent,getlng(evt.latLng.toString()),getltd(evt.latLng.toString()));
                $('#nom').prop('disabled',false);
                $('#nom').css('cursor','auto');
                $('#nom').attr("placeholder", "");
                $('#adr').removeClass('ierror');
                $('#nom').focus();



            });
        }

        marker.setPosition(evt.latLng);
        marker.setVisible(true);
    });
    function setAdr(adrwindow,latlng) {

        geocoder.geocode({'location': latlng}, function(results, status) {
            if (status === 'OK') {
                if (results[0]) {

                    adrwindow.textContent=results[0].formatted_address;

                } else {
                    console.log('No results found');

                }
            } else {

                console.log('Geocoder failed due to: ' + status);
            }
        });
    }
    function displayLoc(pi,pn,pa,plat,plng)
    {

//alert("nom "+pn+"adress:  "+pa+"lat:  "+plat+"lng:   "+plng);
        $('#nom').val(pn);
        $('#adr').val(pa);
        $('#latr').val(plat);
        $('#langr').val(plng);
       /* $('#lang').text(plat);
        $('#lat').text(plng);*/
        if(pi.length===0)
        { $('#idplacer').val(plat+","+plng);}
        else{ $('#idplacer').val(pi);}

    }
    function getlng(lng) {
        var newlng;
        newlng=lng.substring(1,lng.indexOf(","));
        return newlng;

    }
    function getltd(lng) {
        var newlng;
        newlng=lng.substring(lng.indexOf(",")+2,lng.indexOf(")")-1);
        return newlng;

    }
}
