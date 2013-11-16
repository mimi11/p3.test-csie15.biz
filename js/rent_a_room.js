/*
Rent-a-Room application is a quick an easy way for Landlord or roomate to post a new Ad using external services such as Craiglist
and refer them to the one-pager view that is filled out in just few clicks.

 */

//1. Request user to Upload room Pictures in gallery




/*-------------------------------------------------------------------------------------------------
 2. Select Available room pictures from gallery
 -------------------------------------------------------------------------------------------------*/

$('.room').click(function(){
    var chosen_room=$(this).css('background-color');

    // Change the background color of the canvas
    $('#roomview').css('background-color', chosen_room);



});
