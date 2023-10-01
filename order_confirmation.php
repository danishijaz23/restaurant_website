<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
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
    <h1>Thank You for Your Order!</h1>
	<h4>Your order will be ready in 30 minutes. 
	Thank you for choosing our restaurant!</h4>
    <h2>Order Details:</h2>
    <p>Name: <?php echo $_POST['name']; ?></p>
    <p>Email: <?php echo $_POST['email']; ?></p>
    <p>Number: <?php echo $_POST['number']; ?></p>
    <p>Address: <?php echo $_POST['address']; ?></p>
    <p>Item: <?php echo $_POST['item']; ?></p>
	<h2>Payment Information</h2>
	<p>Payment Method: <?php echo $_POST['paymentMethod']; ?></p>
	<p>Card Number: <?php echo $_POST['cardInput']; ?></p>
	<p>Expiration Date: <?php echo $_POST['cardExpirationInput']; ?></p>
	<p>CVV Number: <?php echo $_POST['cvvInput']; ?></p>
</body>
<a href="index.php#Order" class="goback-btn">Go Back</a>
<br><br>
</html>

