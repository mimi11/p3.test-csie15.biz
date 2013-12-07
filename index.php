<!DOCTYPE html>
<html>
<head>

    <title>Rent-a-Room</title>

    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/features.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

    <!--  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC9j0FUz8QHzaJDPLFxQuHlhpM7vBj5DU0&sensor=false">
      </script>-->
    <script src="http://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=false"></script>


</head>


<body>

<div id='wrapper'>

    <h1>Rent-A-Room</h1>

    <!-- Left side with all the controls -->
    <div id='controls'>

        <!-- Title of your post -->
        <h2>Enter Ad title here </h2>
        <input type='text' id='post' maxlength="20">
        <span class='error' id='post-error'></span>


        <!--Select Available of your post -->
        <h2>Select Available Room date </h2>
        <input type='text' class='input_text' id="datepicker">


        <!-- Search Specific location / City-->
        <h2>KeyDown Location to display Map </h2>

        <input type='text' id='location' maxlength="30">
        <span class='error' id='location-error'></span>
        <input id="long" name="long" type="hidden" value=''>
        <input id="lat" name="lat" type="hidden" value=''>


        <!-- Available room picture gallery select on click -->
        <h2>Select Available room </h2>

        <div class='room' id='blue-room'></div>
        <div class='room' id='purple-room'></div>
        <div class='room' id='silver-room'></div>
        <div class='room' id='beige-room'></div>
        <div class='room' id='red-room'></div>
        <div class='room'></div>

        <br>

        <!-- Available room picture gallery select on click -->
        <h2> Select Move_in Requirements </h2>

        <input type='checkbox' name='Security' class='input_text' id='checkbox_security' value=' '/>Security Deposit $
        <span id='security'></span>
        <br>
        <input type='checkbox' name='LastMonth' class='input_text' id='checkbox_last_month' value=''/> Last month rent $
        <span id='last_month'></span>
        <br>


        <button id="calculate">Click to calculate</button>
        <br>


        <!-- Message -->
        <br>

        <h2>Enter About room message here </h2>
        <textarea id='room_ad' maxlength="250"></textarea>
        <span class='error' id='roomAd-error'></span>
        <br>

        <div>
            <h2>Enter roomamate Requirements here </h2>
            <textarea id='about_you' maxlength="250"></textarea>
            <span class='error' id='about_you_error'></span>
            <br>

        </div>
        <br>
        <!-- Contact info -->
        <h2>Landlord Contact info</h2>

        <!--Options to contact Landlord-->
        <input type='checkbox' class='contact' name='email_checkbox' id='email'>
        <label for='email'>&nbsp;Email:landlord@gmail.com</label>
        <br>

        <input type='checkbox' class='contact' name='phone_checkbox' id='phone'>
        <label for='phone'>&nbsp;Phone:617-666-222</label><br>

        <input type='checkbox' class='contact' name='skype_checkbox' id='skype'>
        <label for='skype'>&nbsp;Skype ID:LandlordBoston</label><br>

    </div>
    <!--end of Control div-->

    <!-- Right side with the live preview -->

    <div id='preview'>
        <div id='house-background'><!--left side image background container-->
            <div id='intro'>
                <div id='posting_title'></div>
                <div id='dollar_sign'></div>
                <div id='rent' style="display: none;">
             </div>

            <!--End of intro div-->

            <div id='datepicker_output'></div>
            <div id='location_output'></div>

            <div id='roomInfo'>
                <div id='roomview'></div>
                <div id="googleMap"></div>
            </div><!--End of rooomInfo-->


                <div id='amenities'></div>
                <div class="move_in_req"></div>
                <div id='output'></div>


            <!--end of RoomFeatures-->

            <div id='ad_container'>
                <div id='roomAd_output'></div>
                <div id='about_you_output'></div>
            </div>

            <div id='adInfo'>
                <div class='rentRequirements'></div>
            </div><!--End of adInfo-->

            <div id='contact-info'></div>
            </div>
        </div>
    </div>

    <!-- Buttons -->
    <input type='button' id='refresh-btn' value='Start over'>
    <input type='button' id='print-btn' value='Print'>

    <script src="js/rent_a_room.js"></script>

</div>
</body>

</html>
