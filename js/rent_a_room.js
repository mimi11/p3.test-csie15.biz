/*
Rent-a-Room application is a quick an easy way for Landlord or roomate to post a new Ad
and share link or print source code to post for external website.
The application provides admin function for landlord to
1. Enter post title
2. Provide Location map using google services
3. Select Room with built-in amenities
4. Calculates move-in requirement

 -------------------------------------------------------------------------------------------------*/

//1. Request user to Upload room Pictures in gallery - this will be developped in P4 with php Framework

var room_data = {};
room_data['blue-room'] = {
    rent:650,
    amenities:['wifi','private-bathroom','cable'],
    security:325,
    last_month:650
};
room_data['red-room'] = {
    rent:750,
    amenities:['wifi','pool','cable'],
    security:375,
    last_month:750
};

room_data['purple-room'] = {
    rent:500,
    amenities:['wifi','air-conditioner','cable'],
    security:250,
    last_month:500
};


room_data['silver-room'] = {
    rent:800,
    amenities:['wifi','sauna','cable'],
    security:400,
    last_month:800
};
room_data['beige-room'] = {
    rent:450,
    amenities:['wifi','micro-wave','cable'],
    security:225,
    last_month:450
};




/*-------------------------------------------------------------------------------------------------
 2.posting title
 -------------------------------------------------------------------------------------------------*/
$('#post').keyup(function() {

    // Figure out what the user typed in
    var post = $(this).val();

    // Inject the recipient into the output div on the card
    $('#posting_title').html(post);

    // How long was the recipient?
    var length = post_Title.length;

    // If it was 20 characters, that's the max, so inject an error message
    if(length == 40) {
        $('#post-error').html("Max characters: 40");
    }
    // Otherwise, we're all good, clear the error message
    else {
        $('#post-error').html("");
    }

});



/*-------------------------------------------------------------------------------------------------
 3. Select Available room pictures from gallery
 -------------------------------------------------------------------------------------------------*/

$('.room').click(function(){
    var chosen_room=$(this).css('background-image');

    // Change the background color of the house background
    $('#roomview').css('background-image', chosen_room);
    $('#roomview').css('background-repeat','no-repeat');

    $('#rent').html( "$"+room_data[this.id].rent);
    $('#security').html( room_data[this.id].security);
    $('#last_month').html( room_data[this.id].last_month);
    $('#checkbox_security').val( room_data[this.id].security);
    $('#checkbox_last_month').val( room_data[this.id].last_month);


    var amenities = room_data[this.id].amenities;
    //create a view for amenities to display
    $('#amenities').html(amenities.join(", "));




});

/*-------------------------------------------------------------------------------------------------
 3. Select Available room pictures from gallery
 -------------------------------------------------------------------------------------------------*/


$('#calculate').click(function() {
// security is going to be the value of the checkbox if it is checked otherwise it's 0.
    var security = $('#checkbox_security').is(':checked')? parseInt($('#checkbox_security').val()):0;
    var last_month = $('#checkbox_last_month').is(':checked')? parseInt($('#checkbox_last_month').val()):0;

    var rent =  parseInt($('#rent').text());

    var amount =security + last_month;

    var total = amount + rent;


    $('#output').html("$"+total);

});

/*-------------------------------------------------------------------------------------------------
4. Location title
 -------------------------------------------------------------------------------------------------*/
$('#location').keyup(function() {

    // Figure out what the user typed in
    var post = $(this).val();

    // Inject the recipient into the output div on the card
    $('#location_output').html(post);

    // How long was the recipient?
    var length = location_output.length;

    // If it was 20 characters, that's the max, so inject an error message
    if(length == 30) {
        $('#location-error').html("Max characters: 40");
    }
    // Otherwise, we're all good, clear the error message
    else {
        $('#location-error').html("");
    }

});

/*------------------------------------------------------------------------------------------------------------------
5. Enter Location by providing City
The purpose of this function is to retrieve geocoding information from Google search by using autocomplete in search box - caveat the trigger only works with autocomplete keyin search.
The application has not been designed for other events such as tab, or enter, mouse and other listener events.

 Re-using source code from Stack Overflow to set-up retrieving latitude and longitude information (geocode)
 http://stackoverflow.com/questions/17154156/geocoding-with-google-maps-api-v3-is-not-working-when-i-press-enter?rq=1
--------------------------------------------------------------------------------------------------------------------------------*/
function resetLatLon(inputLat, inputLong, input) {
    inputLat.value = '';
    inputLong.value = '';
    input.value = '';

    console.log("reset latitude/longitude");
}

function tryGeocoding(inputLat, inputLong, input, geocoder) {
    var address = input.value;
    resetLatLon(inputLat, inputLong, input);
    // try to call geocoding manually
    console.log("try to geocode :" + address);
    geocoder.geocode({
        'address': address
    }, function (results, status) {
        console.log("Geocoding result " + status);
        if (status == google.maps.GeocoderStatus.OK) {
            // pick up the first result, maybe not accurate but better that nothing
            input.value = results[0].formatted_address;
            inputLat.value = results[0].geometry.location.lat();
            inputLong.value = results[0].geometry.location.lng();
        }
    });
}

function initialize() {
    var input = document.getElementById('location');
    var inputLong = document.getElementById('long');
    var inputLat = document.getElementById('lat');

    var options = {
        types: ['(cities)']
    };

    var autocomplete = new google.maps.places.Autocomplete(input, options);
    var geocoder = new google.maps.Geocoder();
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            resetLatLon(inputLat, inputLong, input);
            return;
        }
        console.log("new place : ");
        console.log(place);
        inputLat.value = place.geometry.location.lat();
        inputLong.value = place.geometry.location.lng();
        loadMap(inputLat.value,inputLong.value);
    });
    $('#location, #city').keydown(function (e) {
        // is user press TAB
        if (e.which === 9) {
            tryGeocoding(inputLat, inputLong, input, geocoder);
            return true;
        }
    });
    $('#location, #city').keydown(function (e) {
        // if user press ENTER, the event is not triggered and the location is not correct
        if (e.which === 13) {
            tryGeocoding(inputLat, inputLong, input, geocoder);
            return true;
        }
    });
}
jQuery(document).ready(initialize);



 /*-----------------------------------------------------------------------------------------

6. Customizing  loadMap() from  Gmap after retrieving geocoding input information,by passing latitude and longitude parameters.

 -----------------------------------*/

function loadMap(lat,long){

    var myCenter=new google.maps.LatLng(lat,long);
    var marker;
    var mapProp = {
        center:myCenter,
        zoom:15,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

    marker=new google.maps.Marker({
        position:myCenter,
        animation:google.maps.Animation.BOUNCE
    });

    marker.setMap(map);


}


/*-----------------------------------------------------------------------------------------

  7. Amenities
  The idea is that the Landlord only has to set-up the amineties only when setting up the application, Selecting a room by click will automatically show features associated
  with the room selected

--
/*-------------------------------------------------------------------------------------------------
 8. Ad Message title
 -------------------------------------------------------------------------------------------------*/
$('#room_ad').keyup(function() {

    // Figure out what the user typed in
    var post = $(this).val();

    // Inject the recipient into the output div on the card
    $('#roomAd_output').html(post);

    // How long was the recipient?
    var length = roomAd_output.length;

    // If it was 20 characters, that's the max, so inject an error message
    if(length == 60) {
        $('#adInfo_error').html("Max characters: 40");
    }
    // Otherwise, we're all good, clear the error message
    else {
        $('#AdInfo_error').html("");
    }

});
/*-------------------------------------------------------------------------------------------------
 Contact
 -------------------------------------------------------------------------------------------------*/
$('.contact').click(function() {

    // Which radio button was clicked?
    // (Note here how we're storing a whole element in a variable... cool, huh?)
    var radio_button = $(this);

    // What is the label next to (i.e. after) that radio
    var label = radio_button.next();

    // Now that we know the label, grab the text inside of it (That's our message!)
    var message = label.html();

    $('#contact-info').html(message);

});
