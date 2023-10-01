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


<!-- Move the search form to the top right -->
<div class="search-bar">
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Search...">
        <input type="submit" value="Search">
    </form>
</div>

<!-- Add the table with data -->
	<?php foreach ($result->fetchAll() as $key => $row) { ?>
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/<?php echo $row['Image Name']; ?>">
                </div>

                <div class="menu_info">
                    <h2><?php echo $row['Menu Items']; ?></h2>
                    <p> <?php echo $row['Description']; ?></p>
					<h3><?php echo $row['Price']; ?></h3>
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