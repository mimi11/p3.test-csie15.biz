<!DOCTYPE html>
<html>
<head>

    <title>Rent-a-Room</title>

    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/features.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    

</head>


<body>

<div id='wrapper'>

    <h1>Rent-A-Room</h1>

    <!-- Left side with all the controls -->
    <div id='controls'>

        <!-- Title of your post -->
        <h2>Posting title </h2>
        <input type='text' id='post' maxlength="20">
        <span class='error' id='post-error'></span>


        <!-- Specific location / City-->
        <h2>Location </h2>
        <!-- Specific location / City-->
        <h2>Zip Code </h2>

        <!-- Message -->
        <h2>Room Ad message here</h2>

        <!-- Texture picture -->
        <h2>Select Available room </h2>

        <div class='room' id='blue-room'></div>
        <div class='room' id='purple-room'></div>
        <div class='room' id='silver-room'></div>
        <div class='room' id='beige-room'></div>
        <div class='room' id='red-room'></div>
        <div class='room'></div>



        <br>
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

        <!--Search for MBTA lines nearby -->
        <h2>Bus line :</h2>


    </div>

    <!-- Right side with the live preview -->
    <div id='preview'>

         <div id=house-background>
             <div id='posting_title'></div>
             <div id='roomview'> </div>
             <div id= 'rent'></div>
             <div id ='amenities'></div>
             <div id='contact-info'></div>
         </div>
         <div id='ad-message'>
             <div id='rentValues'></div>
             <div id='rentRequirements'></div>
             <div id='rentMessage'></div>
          </div>
    </div>

        <!-- Buttons -->
        <input type='button' id='refresh-btn' value='Start over'>
        <input type='button' id='print-btn' value='Print'>
</div>
<script src="js/rent_a_room.js"></script>

</body>

</html>
