<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Rohirrim Booking Confirmation">
    <meta name="keywords" content="MiddleEarth, Tours, Rohan">
    <meta name="author" content="Grima Wormtongue">
    <title>Booking Confirmation</title>

    <style>
        body 
        { 
            font-family: "Times New Roman", Times, serif;
        }

        h1 
        {
            font-family: "Times New Roman", Times, serif;
            font-size: 2em;
            color: black;
        }
    </style>
</head>

<body>

    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";

        echo "<p>Welcome " . $firstname . " " . $lastname . " !</p>";

        $tours = array();

        if (isset($_POST['accom'])) 
        { 
            $tours[] = "Accommodation";
        }

        if (isset($_POST['1day'])) 
        {
            $tours[] = "One-day tour";
        }

        if (isset($_POST['4day'])) 
        {
            $tours[] = "Four-day tour";
        }

        if (isset($_POST['10day'])) {
            $tours[] = "Ten-day tour";
        }

        if (!empty($tours)) 
           
        {
            echo "<p>You are now booked on the " . implode(" and ", $tours) . "</p>";
        }

        $speciesList = array
        (
            "M" => "Human",
            "D" => "Dwarf",
            "E" => "Elf",
            "H" => "Hobbit"
        );

        $species = isset($_POST['species']) ? $_POST['species'] : "";

        if (isset($speciesList[$species])) 
        {
            echo "<p>Species: " . $speciesList[$species] . "</p>";
        }

        if (isset($_POST['age']) && $_POST['age'] !== "") 
        {
            echo "<p>Age: " . $_POST['age'] . "</p>";
        }

        if (isset($_POST['food'])) 
        {
            echo "<p>Meal Preference: " . $_POST['food'] . "</p>";
        }

        if (isset($_POST['partysize']) && $_POST['partysize'] !== "") 
        {
            echo "<p>Number of travellers: " . $_POST['partysize'] . "</p>";
        }
    ?>
</body>
</html>
