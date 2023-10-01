<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Reservation Details</title>
	<style type="text/css">
    ol, ul {
        list-style-type: none;
    }

    body {
        background-color: rgba(255, 255, 255, 0.8);
        margin: 0 10%;
        font-family: sans-serif;
    }

    h1 {
        text-align: center;
        font-family: serif;
        font-weight: normal;
        text-transform: uppercase;
        border-bottom: none;
        margin-top: 30px;
        margin-bottom: 0;
    }

    h1:after {
        content: "";
        display: block;
        width: 100px;
        height: 3px;
        background-color: #f5d63d;
        margin: 10px auto;
    }

    h2 {
        color: #f5d63d;
        font-size: 1em;
    }

    .logo img {
        width: 150px;
        cursor: pointer;
        margin: 7px 0 0 0;
    }

    .goback-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #f5d63d;
        color: #333;
        border: 1px solid #ccc;
        text-decoration: none;
        font-weight: bold;
        cursor: pointer;
    }

    .goback-btn:hover {
        background-color: #f5eac4;
    }
	</style>

	<div class="logo">
		<img src="image/logo.png">
	</div>
</head>
<body>
    <h1>Thank You for Your Reservation!</h1>
	<h4>We look forward to seeing you. 
	Thank you for choosing our restaurant!</h4>
    <h2>Reservation Details:</h2>
	
    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve reservation details from form data
		$name = $_POST['name'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $guests = $_POST['guests'];
		
		$formattedTime = date("h:i A", strtotime($time));

        // Display the reservation details
		echo '<p>Name: ' . htmlspecialchars($name) . '</p>';
        echo '<p>Date: ' . htmlspecialchars($date) . '</p>';
        echo '<p>Time: ' . htmlspecialchars($formattedTime) . '</p>';
        echo '<p>Number of Guests: ' . htmlspecialchars($guests) . '</p>';
    } else {
        echo '<p>No reservation details found. Please make a reservation first.</p>';
    }
    ?>
</body>
<br>
<a href="index.php#Reservation" class="goback-btn">Go Back</a>
</html>
