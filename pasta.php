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
  <?php
  if (isset($_POST['toppings']) && !is_array($_POST['toppings'])) {
    $toppings_problem = true;
    $toppings = is_string($_POST['toppings']) ? $_POST['toppings'] : '<em>empty</em>';
  } else {
    $toppings_problem = false;
    $toppings = isset($_POST['toppings']) ? implode(', ', $_POST['toppings']) : '<em>empty</em>';
  }

  if (isset($_POST['side']) && is_array($_POST['side'])) {
    $side_problem = false;
    $side = implode(', ', $_POST['side']);
  } else {
    $side_problem = true;
    $side = '<em>empty</em>';
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

  <h2>Your Pasta</h2>

  <?php if (!isset($_POST['type']) && !isset($_POST['toppings']) && !isset($_POST['pastas'])) { ?>
    <em>Sorry, we did not receive your information. <a href="pasta_form.html">Try again.</a></em>
  <?php } else { ?>
    <ul>
      <li><strong>Pasta Type:</strong> <?php print isset($_POST['type']) && $_POST['type'] ? $_POST['type'] : '<em>empty</em>'; ?></li>
      <li><strong>Toppings:</strong> <?php
        print $toppings;
        if ($toppings_problem) { ?>
          <span style="color:red">*</span>
        <?php } ?></li>
      <li><strong>Side:</strong> <?php
        print $side;
        if ($side_problem) { ?>
          <span style="color:red">*</span>
        <?php } ?>
      </li>
      <li><strong>Number of pastas:</strong> <?php print isset($_POST['pastas']) && $_POST['pastas'] ? $_POST['pastas'] : '<em>empty</em>'; ?></li>
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
	
  <?php }
  if ($toppings_problem || $side_problem) { ?>
    <hr>
    <p>&nbsp;</p>
  <?php } ?>
  <br>
  <a href="index.php" class="goback-btn">Home</a>
</body>
</html>
