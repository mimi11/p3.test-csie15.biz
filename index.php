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

        <!-- Ad Background color picker -->
        <h2>Pick Background Color </h2>


        <!-- Texture picture -->
        <h2>Select Available room </h2>

        <div class='room' id='blue-room'></div>
        <div class='room' id='purple-room'></div>
        <div class='room' id='silver-room'></div>
        <div class='room' id='beige-room'></div>
        <div class='room' id='red-room'></div>
        <div class='room'></div>


        <!--Room Amneties -->
        <h2>Amenities:</h2>
        <!-- Message -->
        <h2>Room Ad message here</h2>


        <!-- Move in Requirements -->
        <h2>Move-in Requirements</h2>





    </div>

    <!-- Right side with the live preview -->
    <div id='preview'>

         <div id=house-background>
             <div id='roomview'> </div>
             <div id ='amenities'></div>
         </div>
         <div id='ad-message'>
             <div id='rentValues'></div>
             <div id='rentRequirements'></div>
             <div id='rentMessage'></div>
         </div>

        <!-- Buttons -->
        <input type='button' id='refresh-btn' value='Start over'>
        <input type='button' id='print-btn' value='Print'>
    </div>

</div>

<script src="js/rent_a_room.js"></script>

</body>

</html>
