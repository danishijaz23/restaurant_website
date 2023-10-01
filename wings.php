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
  if (isset($_POST['combos']) && !is_array($_POST['combos'])) {
    $combos = isset($_POST['combos']) ? $_POST['combos'] : '<em>empty</em>';
  } else {
    $combos = isset($_POST['combos']) ? implode(', ', $_POST['combos']) : '<em>empty</em>';
  }
  
  if (isset($_POST['options']) && !is_array($_POST['options'])) {
    $options = isset($_POST['options']) ? $_POST['options'] : '<em>empty</em>';
  } else {
    $options = isset($_POST['options']) ? implode(', ', $_POST['options']) : '<em>empty</em>';
  }
  
  if (isset($_POST['flavors']) && !is_array($_POST['flavors'])) {
    $flavors = isset($_POST['flavors']) ? $_POST['flavors'] : '<em>empty</em>';
  } else {
    $flavors = isset($_POST['flavors']) ? implode(', ', $_POST['flavors']) : '<em>empty</em>';
  }
  
  if (isset($_POST['packs']) && !is_array($_POST['packs'])) {
    $packs = isset($_POST['packs']) ? $_POST['packs'] : '<em>empty</em>';
  } else {
    $packs = isset($_POST['packs']) ? implode(', ', $_POST['packs']) : '<em>empty</em>';
  }
  
  if (isset($_POST['piece']) && !is_array($_POST['piece'])) {
    $piece = isset($_POST['piece']) ? $_POST['piece'] : '<em>empty</em>';
  } else {
    $piece = isset($_POST['piece']) ? implode(', ', $_POST['piece']) : '<em>empty</em>';
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

  <h2>Your Wings Order</h2>

  <?php if (!isset($_POST['combos']) && !isset($_POST['options']) && !isset($_POST['flavors']) && !isset($_POST['packs']) && !isset($_POST['piece'])) { ?>
    <em>Sorry, we did not receive your information. <a href="wings_form.html">Try again.</a></em>
  <?php } else { ?>
    <ul>
      <li><strong>Combo:</strong> <?php print $combos; ?></li>
      <li><strong>Options:</strong> <?php print $options; ?></li>
      <li><strong>Flavors:</strong> <?php print $flavors; ?></li>
      <li><strong>Pack:</strong> <?php print $packs; ?></li>
      <li><strong>Piece:</strong> <?php print $piece; ?></li>
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
  <p><a href="index.php" class="goback-btn">Home</a></p>
</body>
</html>
