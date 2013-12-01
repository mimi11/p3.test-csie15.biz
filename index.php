<!DOCTYPE html>
<html>
<head>

    <title>Rent-a-Room</title>

    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/features.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <!--  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC9j0FUz8QHzaJDPLFxQuHlhpM7vBj5DU0&sensor=false">
    </script>-->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>



</head>


<body>

    <div id='wrapper'>

        <h1>Rent-A-Room</h1>

            <!-- Left side with all the controls -->
        <div id='controls'>

        <!-- Title of your post -->
        <h2>Posting title </h2>
        <input type='text' id='post' maxlength="40">
        <span class='error' id='post-error'></span>


        <!-- Search Specific location / City-->
        <h2>Location </h2>

        <input type='text' id='location' maxlength="30">
        <span class='error' id='location-error'></span>
        <input id="long" name="long" type="hidden" value=''>
        <input id="lat" name="lat" type="hidden" value=''>


        <!-- Texture picture -->
        <h2>Select Available room </h2>

        <div class='room' id='blue-room'></div>
        <div class='room' id='purple-room'></div>
        <div class='room' id='silver-room'></div>
        <div class='room' id='beige-room'></div>
        <div class='room' id='red-room'></div>
        <div class='room'></div>


            <!-- Message -->
            <br>
            <h2>Room Ad message here</h2>
            <input type='text' id='room_ad' maxlength="500">
            <span class='error' id='room-error'></span>


            <br>
        <!-- Contact info -->
        <h2>Landlord Contact info</h2>

        <!--Options to contact Landlord-->
        <input type='radio' class='contact' name='contact' id='email'>
        <label for='email'>&nbsp;Email:cmelhorn@g.harvard.edu</label><br>

        <input type='radio' class='contact' name='contact' id='phone'>
        <label for='phone'>&nbsp;Phone:617-123-4568</label><br>

        <input type='radio' class='contact' name='contact' id='skype'>
        <label for='skype'>&nbsp;skypeID: MissLandlady</label><br>

        </div> <!--end of Control div-->

        <!-- Right side with the live preview -->

        <div id='preview'>
         <div id='house-background'><!--left side image background container-->
             <div id ='intro'>
                    <div id='posting_title'></div>
                    <div id= 'rent'>  </div>
                    <div id= 'location_output'></div>

             </div><!--End of intro div-->

            <div id= 'roomInfo'>
                    <div id='roomview'> </div>
                    <div id="googleMap"></div>


            </div> <!--End of rooomInfo-->
             <div id ='amenities'></div>

             <div id='roomAd_output'></div>

            <div id='adInfo'>

                <div class='rentRequirements'>
                    <div id='security'></div>
                    <div id='last_month'></div>
                </div>

            </div> <!--End of adInfo-->


            <div id='contact-info'></div>
         </div>
        </div>

        <!-- Buttons -->
        <input type='button' id='refresh-btn' value='Start over'>
        <input type='button' id='print-btn' value='Print'>

        <script src="js/rent_a_room.js"></script>

    </div>
</body>

</html>
