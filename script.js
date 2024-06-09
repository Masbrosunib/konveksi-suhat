document.addEventListener("DOMContentLoaded", function() {
    // Dummy cart data for testing
    let cartItems = [
      { id: 1, name: "Product 1", image: "image1.jpg", quantity: 2, price: 10.99 },
      { id: 2, name: "Product 2", image: "image2.jpg", quantity: 1, price: 19.99 }
    ];
  
    // Function to display cart items
    function displayCartItems() {
      const cartItemsContainer = document.getElementById("cart-items");
      cartItemsContainer.innerHTML = "";
  
      cartItems.forEach(item => {
        const cartItemElement = document.createElement("div");
        cartItemElement.classList.add("cart-item");
  
        // Create HTML for cart item
        cartItemElement.innerHTML = `
          <div class="cart-item-image">
            <img src="images/${item.image}" alt="${item.name}">
          </div>
          <div class="cart-item-details">
            <div class="cart-item-name">${item.name}</div>
            <div class="cart-item-quantity">Quantity: ${item.quantity}</div>
            <div class="cart-item-price">Price: $${(item.quantity * item.price).toFixed(2)}</div>
            <button class="quantity-btn" onclick="increaseQuantity(${item.id})">+</button>
            <button class="quantity-btn" onclick="decreaseQuantity(${item.id})">-</button>
            <button class="remove-btn" onclick="removeItem(${item.id})">Remove</button>
          </div>
        `;
  
        // Append cart item to container
        cartItemsContainer.appendChild(cartItemElement);
      });
  
      // Update total price
      updateTotalPrice();
    }
  
    // Function to update total price
    function updateTotalPrice() {
      const totalPriceElement = document.getElementById("total-price");
      const totalPrice = cartItems.reduce((total, item) => total + (item.quantity * item.price), 0);
      totalPriceElement.textContent = `$${totalPrice.toFixed(2)}`;
    }
  
    // Function to increase quantity
    function increaseQuantity(itemId) {
      const item = cartItems.find(item => item.id === itemId);
      item.quantity++;
      displayCartItems();
    }
  
    // Function to decrease quantity
    function decreaseQuantity(itemId) {
      const item = cartItems.find(item => item.id === itemId);
      if (item.quantity > 1) {
        item.quantity--;
        displayCartItems();
      }
    }
  
    // Function to remove item from cart
    function removeItem(itemId) {
      cartItems = cartItems.filter(item => item.id !== itemId);
      displayCartItems();
    }
  
    // Display cart items when page loads
    displayCartItems();
  });
  