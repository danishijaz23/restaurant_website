var cartItems = []; // Empty array to store the cart items

function addToCart(item) {
	
    var selectedItem = document.createElement('div');
    selectedItem.classList.add('cartImg');
    selectedItem.setAttribute('id', 'item-' + (cartItems.length + 1));

    var img = document.createElement('img');
    img.setAttribute('src', item.imgSrc);

    var title = document.createElement('div');
    title.innerText = item.title;

    var label = document.createElement('div');
    label.innerText = '' + item.price;

    var delBtn = document.createElement('button');
    delBtn.innerText = 'Delete';
	delBtn.style.backgroundColor = '#f44336'; 
    delBtn.style.color = '#fff';
    delBtn.addEventListener('click', function () {
        del(selectedItem.id);
    });

    selectedItem.append(img);
    selectedItem.append(title);
    selectedItem.append(label);
    selectedItem.append(delBtn);

    cartItems.push({
        id: selectedItem.id,
        title: item.title,
        price: item.price
    });

    var cartItemsDiv = document.getElementById('cartItems');
    cartItemsDiv.innerHTML = ''; // Clear the cart section before adding the current item
    cartItemsDiv.append(selectedItem);
	
	// Update the cart status
    isCartEmpty = false;
    
    // Show the checkout button
    var checkoutBtn = document.getElementById('checkoutBtn');
    checkoutBtn.style.display = 'block';
}

// Add event listeners to all "Add To Cart" buttons
var addToCartButtons = document.querySelectorAll('.card button');
addToCartButtons.forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default behavior of the button (form submission)
        var itemDiv = button.parentElement;
        var img = itemDiv.querySelector('img');
        var title = itemDiv.querySelector('.title').innerText;
        var price = itemDiv.querySelector('label').innerText;

        addToCart({
            imgSrc: img.getAttribute('src'),
            title: title,
            price: price
        });
    });
});

function del(itemId) {
  var cartItemIndex = cartItems.findIndex(function (item) {
    return item.id === itemId;
  });

  if (cartItemIndex !== -1) {
    cartItems.splice(cartItemIndex, 1);
    document.getElementById(itemId).remove();
	
	// Hide the checkout button if the cart is empty
    if (cartItems.length === 0) {
        var checkoutBtn = document.getElementById('checkoutBtn');
        checkoutBtn.style.display = 'none';
    }
  }
}