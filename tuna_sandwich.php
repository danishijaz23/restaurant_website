<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thank you for your order</title>
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
      background-color: #fac031;
      margin: 10px auto;
    }

    h2 {
      color: #fac031;
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
      background-color: #fac031;
      color: #333;
      border: 1px solid #ccc;
      text-decoration: none;
      font-weight: bold;
      cursor: pointer;
    }

    .goback-btn:hover {
      background-color: #fddc99;
    }
  </style>
  <div class="logo">
    <img src="image/logo.png">
  </div>
</head>

<body>
  <?php
  if (isset($_POST['size']) && !is_array($_POST['size'])) {
    $size = isset($_POST['size']) ? $_POST['size'] : '<em>empty</em>';
  } else {
    $size = isset($_POST['size']) ? implode(', ', $_POST['size']) : '<em>empty</em>';
  }
  
  if (isset($_POST['bread']) && !is_array($_POST['bread'])) {
    $breadType = isset($_POST['bread']) ? $_POST['bread'] : '<em>empty</em>';
  } else {
    $breadType = isset($_POST['bread']) ? implode(', ', $_POST['bread']) : '<em>empty</em>';
  }
  
  if (isset($_POST['options']) && !is_array($_POST['options'])) {
    $breadOptions = isset($_POST['options']) ? $_POST['options'] : '<em>empty</em>';
  } else {
    $breadOptions = isset($_POST['options']) ? implode(', ', $_POST['options']) : '<em>empty</em>';
  }
  
  if (isset($_POST['protein']) && !is_array($_POST['protein'])) {
    $protein = isset($_POST['protein']) ? $_POST['protein'] : '<em>empty</em>';
  } else {
    $protein = isset($_POST['protein']) ? implode(', ', $_POST['protein']) : '<em>empty</em>';
  }
  
  if (isset($_POST['cheese']) && !is_array($_POST['cheese'])) {
    $cheese = isset($_POST['cheese']) ? $_POST['cheese'] : '<em>empty</em>';
  } else {
    $cheese = isset($_POST['cheese']) ? implode(', ', $_POST['cheese']) : '<em>empty</em>';
  }
  
  if (isset($_POST['veggies']) && is_array($_POST['veggies'])) {
    $veggies = implode(', ', $_POST['veggies']);
  } else {
    $veggies = '<em>empty</em>';
  }
  
  if (isset($_POST['sauces']) && is_array($_POST['sauces'])) {
    $sauces = implode(', ', $_POST['sauces']);
  } else {
    $sauces = '<em>empty</em>';
  }
  
  if (isset($_POST['seasonings']) && is_array($_POST['seasonings'])) {
    $seasonings = implode(', ', $_POST['seasonings']);
  } else {
    $seasonings = '<em>empty</em>';
  }
  
  if (isset($_POST['tuna_sandwichs'])) {
    $numberOfTunaSandwichs = $_POST['tuna_sandwichs'];
  } else {
    $numberOfTunaSandwichs = '<em>empty</em>';
  }
  ?>

  <h1>THANK YOU</h1>

<p>Thank you for ordering from Food Fusion. Your order will be ready in 30 minutes. 
  We have received the following information about your order:</p>

<h2>Your Information</h2>
<ul>
  <li><strong>Name:</strong> <?php print isset($_POST['customername']) ? $_POST['customername'] : '<em>empty</em>'; ?></li>
  <li><strong>Address:</strong> <?php print isset($_POST['address']) ? $_POST['address'] : '<em>empty</em>'; ?></li>
  <li><strong>Telephone number:</strong> <?php print isset($_POST['telephone']) ? $_POST['telephone'] : '<em>empty</em>'; ?></li>
  <li><strong>Email Address:</strong> <?php print isset($_POST['email']) ? $_POST['email'] : '<em>empty</em>'; ?></li>
  <li><strong>Delivery instructions:</strong> <?php print isset($_POST['instructions']) ? $_POST['instructions'] : '<em>empty</em>'; ?></li>
</ul>

<h2>Tuna Sandwich Details</h2>

<?php if (!isset($_POST['size']) && !isset($_POST['bread'])) { ?>
  <em>Sorry, we did not receive your information. <a href="tuna_sandwich_form.html">Try again.</a></em>
<?php } else { ?>
  <ul>
    <li><strong>Size:</strong> <?php print $size; ?></li>
    <li><strong>Bread Type:</strong> <?php print $breadType; ?></li>
    <li><strong>Bread Options:</strong> <?php print $breadOptions; ?></li>
    <li><strong>Protein:</strong> <?php print $protein; ?></li>
    <li><strong>Cheese:</strong> <?php print $cheese; ?></li>
    <li><strong>Veggies:</strong> <?php print $veggies; ?></li>
    <li><strong>Sauces:</strong> <?php print $sauces; ?></li>
    <li><strong>Seasonings:</strong> <?php print $seasonings; ?></li>
    <li><strong>Number of Tuna Sandwiches:</strong> <?php print $numberOfTunaSandwichs; ?></li>
  </ul>
  
	<!-- PAYMENT METHOD PHP CODE -->
	<h2>Payment Information</h2>
	<ul style="list-style-type: none;"> <!-- Add this ul with the list-style-type: none; -->
		<li><strong>Payment Method:</strong> <?php echo isset($_POST['payment_method']) ? ucfirst($_POST['payment_method']) : '<em>empty</em>'; ?></li>
		<?php
		if (isset($_POST['payment_method']) && ($_POST['payment_method'] === 'Credit Card' || $_POST['payment_method'] === 'Debit Card')) {
			$card_number = isset($_POST['card']) ? $_POST['card'] : '<em>empty</em>';
			$expiration_date = isset($_POST['expiration']) ? $_POST['expiration'] : '<em>empty</em>';
			$cvv_number = isset($_POST['cvv']) ? $_POST['cvv'] : '<em>empty</em>';
			echo '<li><strong>Card Number:</strong> ' . $card_number . '</li>';
			echo '<li><strong>Expiration Date:</strong> ' . $expiration_date . '</li>';
			echo '<li><strong>CVV Number:</strong> ' . $cvv_number . '</li>';
		}
		?>
	<!-- PAYMENT METHOD PHP CODE -->
  
<?php } ?>
<br>
<a href="index.php" class="goback-btn">Home</a>
<br>
<br>
<br>
</body>
</html>
