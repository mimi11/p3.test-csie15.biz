/*
Rent-a-Room application is a quick an easy way for Landlord or roomate to post a new Ad using external services such as Craiglist
and refer them to the one-pager view that is filled out in just few clicks.

 */

//1. Request user to Upload room Pictures in gallery




/*-------------------------------------------------------------------------------------------------
 2. Select Available room pictures from gallery
 -------------------------------------------------------------------------------------------------*/

$('.room').click(function(){
    var chosen_room=$(this).css('background-image');

    // Change the background color of the house background
    $('#roomview').css('background-image', chosen_room);
    $('#roomview').css('background-repeat','no-repeat');

    $('#rent').html( room_data[this.id].rent);

    var amenities = room_data[this.id].amenities;
    //create a view for amenities to display
    $('#amenities').html(amenities.join(", "));





});
/*-----------------------------------------------------------------------------------------

   3. Amneties

    -----------------------------------*/
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


