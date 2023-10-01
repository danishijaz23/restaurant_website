// Function to add an item to favorites
function addToFavorites(itemId) {
  const card = document.getElementById(itemId);
  const title = card.querySelector('.title').textContent;

  const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
  const imageElement = card.querySelector('img');
  const imageSrc = imageElement ? imageElement.src : null;

  if (!favorites.some((item) => item.title === title)) {
    favorites.push({ title, imageSrc });
    localStorage.setItem('favorites', JSON.stringify(favorites));

    updateFavoritesDisplay();
  }
}

// Function to remove an item from favorites
function removeFromFavorites(item) {
  const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
  const updatedFavorites = favorites.filter((favorite) => favorite.title !== item.title);
  localStorage.setItem('favorites', JSON.stringify(updatedFavorites));

  updateFavoritesDisplay();
}

// Function to create a "Remove" button
function createRemoveButton(item) {
  const removeButton = document.createElement('span');
  removeButton.textContent = '❌';
  removeButton.style.color = 'red';
  removeButton.style.cursor = 'pointer';
  removeButton.onclick = () => removeFromFavorites(item);
  return removeButton;
}

// Function to display the favorite items under the "favorite" section
function updateFavoritesDisplay() {
  const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
  const favoriteItemsDiv = document.getElementById('favoriteItems');
  favoriteItemsDiv.innerHTML = ''; // Clear the previous content

  favorites.forEach((item) => {
    const listItem = document.createElement('div');
    listItem.classList.add('favorite-item');

    // Create the image element
    const image = document.createElement('img');
    image.src = item.imageSrc;
    image.alt = item.title;
    image.classList.add('favorite-item-img');

    // Create the title and remove button elements
    const title = document.createElement('div');
    title.classList.add('favorite-item-text');
    title.textContent = item.title;
    const removeButton = createRemoveButton(item);

    listItem.appendChild(image);
    listItem.appendChild(title);
    listItem.appendChild(removeButton);

    favoriteItemsDiv.appendChild(listItem);
  });
}

// Rest of your code...


