<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Fusion Restaurant Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file link -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome link -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pathway+Extreme"/>
	<style>
	<style>
    select {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        font-size: 16px;
    }

    /* Style for the payment information section */
	.payment-info {
		float: left;
		width: 80%;
		padding: 5px;
		box-sizing: border-box;
	}
	
	/* Add this CSS to align radio button and text horizontally */
	.radio-container label {
		display: flex;
		align-items: center;
	}

	.radio-container input[type="radio"] {
		transform: scale(0.6);
	}

	/* Clear floating elements after the floated sections */
	.order_main::after {
		content: "";
		display: table;
		clear: both;
	}

	/* Apply the same styling as other input fields to the dropdown */
	.input select {
		width: 100.5%;
		padding: 5px;
		border: 1px solid #ccc;
		border-radius: 5px;
		background-color: #fff;
		font-size: 16px;
	}

	/* Style for the options in the dropdown */
	.input select option {
		font-size: 14px;
		background-color: #fff;
		color: #333;
	}

    .order-item span {
        display: block;
    }
	
	.admin {
		color: #fac031;
	}

	footer {
		text-align: center;
		padding: 20px;
		background-color: #f9f9f9;
	}

	.footer_tag {
		/* Your styles for the footer contact information */
	}

	/* Adjust the font size and color as needed */
	footer p {
		font-size: 14px;
		color: #666;
	}

	/* Adjust the font size and color for the copyright notice */
	footer p:last-child {
		font-size: 16px;
		color: #333;
	}
	</style>	
</head>

<body>
    <section id="Home">
        <nav>
            <div class="logo">
                <img src="image/logo.png">
            </div>

            <ul>
				<li><a href="login.html" onclick="openAdminPopup()" class="admin">Admin Access</a><li>
				<li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Menu">Menu</a></li>
                <li><a href="#Order">Order</a></li>
				<li><a href="#Team">Team</a></li>
				<li><a href="#Reservation">Reservation</a></li>
            </ul>

            <div class="icon">
				<i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-heart"></i>
            </div>
					
			<script>
                // Get the cart icon element
                var cartIcon = document.querySelector('.fa-cart-shopping');
        
                // Add click event listener to the cart icon
                cartIcon.addEventListener('click', function() {
                    // Redirect to the addToCart.html page
                    window.location.href = 'addToCart.html';
                });
            </script>
			
			<script>
				// Get the heart icon element
				var heartIcon = document.querySelector('.fa-heart');
				
				// Add click event listener to the heart icon
				heartIcon.addEventListener('click', function() {
					// Redirect to the favorites.html page
					window.location.href = 'favorites.html';
				});
			</script> 
        </nav>

        <div class="main">

            <div class="men_text">
                <h1>Flavorful cuisine<br> made easy</h1>
            </div>

            <div class="main_image">
                <img src="image/main_img.avif">
            </div>
        </div>

        <p>
			Welcome to Food Fusion, where culinary excellence meets warm 
			hospitality. Indulge in a delectable journey of flavors and 
			savor the art of dining. Our expert chefs craft exquisite 
			dishes that blend traditional and contemporary influences, 
			using the finest ingredients sourced locally.
			<br><br>
			Immerse yourself in the inviting ambiance of our restaurant, 
			where every detail is thoughtfully designed to enhance your 
			dining experience. From the elegant decor to the attentive 
			service, we strive to create a memorable atmosphere for you
			and your loved ones.
			<br><br>
			Feel free to customize and tailor this text to suit your 
			specific restaurant's style, cuisine, and ambiance.
		</p>
    </section>

    <!--About-->

    <div class="about" id="About">
        <div class="about_main">
            <div class="image">
                <img src="image/Food-Plate.jpg">
            </div>
            <div class="about_text">
				<br><br><br><br>
                <h1>About Us</h1>
                <h3>Why Choose Food Fusion?</h3>
                <p>
					At Food Fusion, we pride ourselves on delivering a unique dining experience that blends flavors from around the world. Our team of talented chefs masterfully 
					combine diverse culinary traditions to create innovative and mouthwatering dishes. From the first bite to the last, every plate tells a story of passion and 
					creativity.
                    <br><br>
					Our menu is a culinary journey that takes you on a delightful expedition across continents. Experience the rich spices of India, the savory delights of Italy, 
					the exotic tastes of Southeast Asia, and the comfort classics of North America – all within the walls of Food Fusion. Our carefully curated selection of dishes
					allows you to savor the world's finest cuisines without ever leaving your seat.
					<br><br>
					Food Fusion is not just a restaurant; it's a sanctuary for food enthusiasts seeking extraordinary dining experiences. Our dedication to excellence goes beyond
					the plate, extending to the ambiance and service. With captivating decor and a warm, inviting atmosphere, our restaurant sets the stage for unforgettable 
					memories shared with friends, family, or that special someone.
					<br><br>
					We believe in giving back to the community that has embraced us so warmly. Food Fusion is committed to promoting sustainability and supporting local producers. 
					Our partnerships with nearby farms and artisans enable us to offer the freshest ingredients while minimizing our environmental impact. When you dine with us, 
					you become part of a greater mission to create a more sustainable and connected world.
					<br><br>
					From the moment you step into our vibrant and welcoming atmosphere, you'll be greeted with warm smiles and impeccable service. Our knowledgeable staff is 
					dedicated to ensuring your dining experience is nothing short of extraordinary, providing personalized recommendations and catering to your preferences.
					<br><br>
					Join us at Food Fusion and immerse yourself in a symphony of flavors that harmonize tradition and innovation. Book your table today and embark on a culinary 
					adventure that will leave a lasting impression.
                </p>
            </div>
        </div>
    </div>

    <!--Menu-->
	<br><br><br><br><br><br><br><br>
    <div class="menu" id="Menu">
		<br><br><br><br>
        <h1>Our Menu</h1>

        <div class="menu_box">
			<?php dyna_menu();?>
        </div>
		
		<?php

		function dyna_menu() {
		$db = 'C:\xampp\htdocs\restaurant\restaurantDatabase\restaurantDatabase.accdb';
		if (!file_exists($db)) {
			die('Could Not Find Database File');
		}

		$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$db; Uid=; Pwd=;");

		// Search functionality
		if (isset($_GET['search']) && !empty($_GET['search'])) {
			$search = $_GET['search'];
			$sql = "SELECT * FROM tblmenu WHERE `First Name` LIKE '%$search%' OR `Last Name` LIKE '%$search%' OR `Phone Number` LIKE '%$search%'";
		} else {
			$sql = "SELECT * FROM tblmenu";
		}

		$result = $db->query($sql);
		?>

	<!-- Add the table with data -->
	<?php foreach ($result->fetchAll() as $key => $row) { ?>
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/<?php echo $row['Image Name']; ?>">
                </div>

                <div class="menu_info">
                    <h2><?php echo $row['Menu Items']; ?></h2>
                    <p> <?php echo $row['Description']; ?></p>
					<h3><?php echo "$" . number_format($row['Price'], 2); ?></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href=<?php echo '"'.$row['Form'].'"'; ?> class="menu_btn">Order Now</a>
				</div>
            </div>
	<?php } 
	}
    ?>

    <!--Order-->

    <div class="order" id="Order">
    <h1>Order Now</h1>
    <div class="order_main">
		<div class="order_image">
            <img src="image/order_image.jpg">
        </div>
        <form action="order_confirmation.php" method="post">
            <div class="input">
                <p>Name</p>
                <input type="text" name="name" placeholder="Enter your name">
            </div>
            <div class="input">
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter your email">
            </div>
            <div class="input">
                <p>Phone Number</p>
                <input type="text" name="number" placeholder="Enter your phone number">
            </div>
            <div class="input">
                <p>Address</p>
                <input type="text" name="address" placeholder="Enter your address">
            </div>
            
            <div class="payment-info">
			    <br>
                <h3>Payment Information</h3>
                <div class="input">
                    <legend>Payment Method:</legend>
					<br>
                    <div class="radio-container">
                        <label>
                            <input type="radio" name="paymentMethod" value="Debit">
							<span>Credit</span>
                        </label>
                        <label>
                            <input type="radio" name="paymentMethod" value="Credit">
							<span>Debit</span>
                        </label>
                    </div>
                </div>
                <div class="input">
				<br>
                    <legend>Card Details:</legend>
					<br>
                    <div>
                        <label>
                            <input type="text" name="cardInput" placeholder="Card Number" required>
                        </label>
                    </div>
					<br>
                    <div>
                        <label>
                            <input type="text" name="cardExpirationInput" placeholder="Expiration Date" required>
                        </label>
                    </div>
					<br>
                    <div>
                        <label>
                            <input type="text" name="cvvInput" placeholder="CVV" required>
                        </label>
                    </div>
                </div>
            </div>
				
			<div class="item-selection">
				<div class="input">
				<p>Item</p>
                <select name="item" id="itemSelect" onchange="updateOrderSummary()">
                    <option value="Cheeseburger">Cheeseburger - $7.80</option>
					<option value="Pasta">Pasta - $7.50</option>
					<option value="Lasagna">Lasagna - $6.99</option>
					<option value="Pizza">Pizza - $5.99</option>
					<option value="Hotdog">Hot Dog - $3.25</option>
					<option value="Biryani">Biryani - $8.99</option>
					<option value="Nihari">Nihari - $8.99</option>
					<option value="Haleem">Haleem - $8.99</option>
					<option value="Wings">Wings - $5.50</option>
					<option value="Fries">Fries - $2.99</option>
					<option value="Tuna Sandwich">Tuna Sandwich - $4.55</option>
					<option value="Pancakes">Pancakes - $3.99</option>
					<option value="Waffles">Waffles - $2.99</option>
					
					<option value="French Toast">French Toast - $3.55</option>
					<option value="Eggs Benedict">Eggs Benedict - $6.99</option>
					<option value="Cereal">Cereal - $2.25</option>
					<option value="Muffin">Muffin - $1.55</option>
					
					<option value="Water">Water - $1.00</option>
					<option value="Soda">Soda - $1.00</option>
					<option value="Milkshake">Milkshake - $2.99</option>
					<option value="Cheesecake">Cheesecake - $9.99</option>
					<option value="Red Velvet Cake">Red Velvet Cake - $7.99</option>
					<option value="Gulab Jamun Cheesecake">Gulab Jamun Cheesecake - $12.99</option>
					<option value="Oreo Cheesecake">Oreo Cheesecake - $11.99</option>
					<option value="Biscoff Cheesecake">Biscoff Cheesecake - $11.99</option>
					<option value="Ice Cream">Ice Cream - $2.65</option>
                </select>
				</div>
				<br>
				<div class="order-summary">
                <h3>Order Summary</h3>
                <div id="selectedItem" class="order-item">
                    <!-- Selected item will appear here -->
                </div>
				</div>
                <button type="submit" class="order_btn">Order Now</button>
            </form>
        </div>
    </div>
	
	<script>
    function updateOrderSummary() {
        // gets the selected item and its price from the dropdown menu
        const itemSelect = document.getElementById("itemSelect");
        const selectedItem = itemSelect.options[itemSelect.selectedIndex].value;
        const selectedItemPrice = parseFloat(itemSelect.options[itemSelect.selectedIndex].text.split(" - ")[1].replace("$", ""));

        // updates the order summary with the selected item and its total price
        const selectedItemDiv = document.getElementById("selectedItem");
        selectedItemDiv.innerHTML = `
            <span>Item: ${selectedItem}</span><br>
            <span><b>Total: $${selectedItemPrice.toFixed(2)}</b></span>
        `;
    }
    </script>

    <!--Team-->

    <div class="team" id="Team"> 
        <h1>Our Team</h1>

        <div class="team_box">
            <div class="profile">
                <img src="image/chef_1.jpg">

                <div class="info">
                    <h2 class="name">Chef David</h2>
                    <p class="bio">Bold fusion cuisine, pushing boundaries with every dish.</p>

                    <p><b>630-299-4720</b></p>
					<p><b>david28@gmail.com</b></p>
                </div>
            </div>

            <div class="profile">
                <img src="image/chef_2.jpg">

                <div class="info">
                    <h2 class="name">Chef Alice</h2>
                    <p class="bio">Passionate chef mixing flavors with artistic flair.</p>

                    <p><b>785-962-9021</b></p>
					<p><b>alice37@gmail.com</b></p>
                </div>
            </div>

            <div class="profile">
                <img src="image/chef_3.jpg">

                <div class="info">
                    <h2 class="name">Chef Clara</h2>
                    <p class="bio">Expert in classic recipes, preserving culinary heritage.</p>

                    <p><b>330-648-2184</b></p>
					<p><b>clara31@gmail.com</b></p>
                </div>
            </div>

            <div class="profile">
                <img src="image/chef_4.jpg">

                <div class="info">
                    <h2 class="name">Chef Patrick</h2>
                    <p class="bio">Innovative chef, creating edible works of art.</p>

					<p><b>420-881-3925</b></p>
					<p><b>patrick24@gmail.com</b></p>
                </div>
            </div>
        </div>
    </div>
	
   <!--Reservation-->
    <body>
	<div class="reservation" id="Reservation">
        <h1>Make Reservation</h1>
		<div id="reservation-container"></div>
		<form action="reservation.php" method="post" class="reservation-form">
			<label for="name">Name: </label>
			<input type="name" id="name" name="name" required>
			<label for="date">Date: </label>
			<input type="date" id="date" name="date" required>
			<label for="time">Time: </label>
			<input type="time" id="time" name="time" min="11:00" max="22:00" required>
			<label for="guests">Number of Guests: </label>
			<input type="number" id="guests" name="guests" min="1" required>
			<button type="submit" class="reservation_btn">Make Reservation</button>
		</form>
	</div>
	<script>
    document.addEventListener("DOMContentLoaded", function () {
        const timeInput = document.getElementById("time");
        const dateInput = document.getElementById("date");

        dateInput.addEventListener("change", function () {
            const selectedDate = new Date(dateInput.value);
            const cdtOffset = -5; // Central Daylight Time offset (CDT UTC offset is -5 hours)
            const minTime = new Date(selectedDate);
            minTime.setHours(11 + cdtOffset);
            const maxTime = new Date(selectedDate);
            maxTime.setHours(22 + cdtOffset);

            timeInput.min = `${minTime.toISOString().substr(11, 5)}`;
            timeInput.max = `${maxTime.toISOString().substr(11, 5)}`;
        });

        timeInput.addEventListener("input", function () {
            const selectedTime = new Date(`2023-08-10T${timeInput.value}`);
            const selectedHour = selectedTime.getHours();
            const selectedMinutes = selectedTime.getMinutes();

            if ((selectedHour < 11 || selectedHour > 22) ||
                (selectedHour === 22 && selectedMinutes > 0)) {
                timeInput.setCustomValidity("Please select a time between 11:00 AM and 10:00 PM.");
            } else {
                timeInput.setCustomValidity("");
            }
        });
    });
	</script>
	</body>
    <!--Footer-->

    <footer>
        <div class="footer_main">
            <div class="footer_tag">
                <h2>Quick Links</h2>
				<p><a href="#" onclick="openAdminPopup()" class="admin">Admin Access</a><p>
                <p><a href="#Home">Home</a></p>
                <p><a href="#About">About</a></p>
				<p><a href="#Menu">Menu</a></p>
				<p><a href="#Order">Order</a></p>
				<p><a href="#Team">Team</a></p>
				<p><a href="#Reservation">Reservation</a></p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>331-321-6473</p>
                <p><a href="mailto:ijazdanish380@gmail.com">ijazdanish380@gmail.com</a></p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
				<p>Great Service</p>
                <p>Quick Delivery</p>
                <p>Easy Payments</p>
            </div>
        </div>
		<br>
		<p>&copy; Danish's Food Fusion Restaurant Website, Inc. 2023</p>
    </footer> 
	<script src="favorites.js"></script>
	<script>
        // Function to open the admin.html popup
        function openAdminPopup() {
            // Open the admin.html popup window
            window.open('login.html', 'AdminWindow', 'width=600,height=500');
        }
    </script>
</body>
</html>


