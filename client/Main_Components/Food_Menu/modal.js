// Function to show product details in modal
function showProductDetails(button) {
  var modalBody = document.getElementById("productDetailsBody");
  var product = {
    name: button.getAttribute("data-product-name"),
    category: button.getAttribute("data-product-category"),
    price: parseFloat(button.getAttribute("data-product-price")),
    quantity: parseInt(button.getAttribute("data-product-quantity")),
  };

  modalBody.innerHTML = `
        <h5>${product.name}</h5>
        <p>Category: ${product.category}</p>
        <p>Price: $${product.price.toFixed(2)}</p>
        <p>Quantity: ${product.quantity}</p>
    `;
  $("#exampleModal").modal("show"); // Show modal
}

// Add event listeners to "See Details" buttons
document.querySelectorAll(".see-details").forEach((button) => {
  button.addEventListener("click", function () {
    showProductDetails(this);
  });
});

// Toaster code
function showToast(productName) {
  var toastElement = document.getElementById("customToast");
  var productNameElement = toastElement.querySelector("#productName");
  productNameElement.textContent = "( 1 ) " + productName + " added to cart"; // Update product name
  toastElement.classList.add("show");
  setTimeout(function () {
    toastElement.classList.remove("show");
  }, 3000); // Hide the toast after 3 seconds
}
