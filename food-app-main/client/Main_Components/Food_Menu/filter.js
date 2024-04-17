document
  .getElementById("filterForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Get category and price
    var category = document.getElementById("category").value.trim();
    var price = document.getElementById("price").value;

    // Loop through products to show/hide based on filter criteria
    var products = document.querySelectorAll(".product");
    var noProductsFound = document.getElementById("noProductsFound");
    var foundProduct = false;
    products.forEach(function (product) {
      var productClasses = product.className;
      if (category === "" || productClasses.indexOf(category) !== -1) {
        var productPrice =
          price === "" ||
          (price === "0-5" && parseFloat(product.dataset.price) < 5) ||
          (price === "5-10" &&
            parseFloat(product.dataset.price) >= 5 &&
            parseFloat(product.dataset.price) <= 10) ||
          (price === "10+" && parseFloat(product.dataset.price) > 10);
        if (productPrice) {
          product.style.display = "block";
          foundProduct = true;
        } else {
          product.style.display = "none";
        }
      } else {
        product.style.display = "none";
      }
    });

    // Toggle on/off of "No products found"
    if (!foundProduct) {
      noProductsFound.classList.remove("d-none");
    } else {
      noProductsFound.classList.add("d-none");
    }
  });

function clearFilters() {
  // Reset category and price selections
  document.getElementById("category").value = "";
  document.getElementById("price").value = "";

  // Show all products
  var products = document.querySelectorAll(".product");
  products.forEach(function (product) {
    product.style.display = "block";
  });

  // Hide "No products found"
  document.getElementById("noProductsFound").classList.add("d-none");
}
