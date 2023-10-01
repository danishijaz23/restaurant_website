// Define a function to open the checkout form in a pop-up window
function openCheckoutPopup() {
  // Specify the URL of the checkout form HTML file
  var checkoutFormURL = 'checkout-popup.html';

  // Define the dimensions and other properties of the pop-up window
  var width = 500;
  var height = 600;
  var left = (window.innerWidth - width) / 2;
  var top = (window.innerHeight - height) / 2;
  var options = 'width=' + width + ',height=' + height + ',top=' + top + ',left=' + left;

  // Open the pop-up window
  window.open(checkoutFormURL, 'checkoutPopup', options);
}

// Define a function to close the popup
function closePopup() {
    // Remove the popup from the document body
    var popup = document.querySelector('.popup');
    if (popup) {
        popup.remove();
    }
}

// Add event listener to the "Confirm" button
var confirmBtn = document.getElementById('confirmButton');
confirmBtn.addEventListener('click', function () {
    // Validate the form fields
    var contactInput = document.getElementById('contactInput');
    var cardInput = document.getElementById('cardInput');
    var cardExpirationInput = document.getElementById('cardExpirationInput');
    var cvvInput = document.getElementById('cvvInput');

    if (!contactInput.value || !cardInput.value || !cardExpirationInput.value || !cvvInput.value) {
        alert('Please fill out all the required fields.');
    } else {
        // Handle the confirmation logic here (e.g., submit the order, etc.)
        // For simplicity, let's open the "thank_you.html" page in a new tab.
        window.open('thank_you.php', '_blank');
        closePopup();
    }
});

// Add event listener to the "Cancel" button
var cancelBtn = document.getElementById('cancelButton');
cancelBtn.addEventListener('click', function () {
    closePopup();
});




