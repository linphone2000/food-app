document
  .getElementById("filterForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Get category and price
    var category = document.getElementById("category").value;
    var price = document.getElementById("price").value;

    // Loop through products to show/hide based on filter criteria
    var products = document.querySelectorAll(".product");
    var noProductsFound = document.getElementById("noProductsFound");
    var foundProduct = false;
    products.forEach(function (product) {
      var productCategory =
        product.classList.contains(category) || category === "";
      var productPrice =
        price === "" ||
        (price === "0-5" && parseFloat(product.dataset.price) < 5) ||
        (price === "5-10" &&
          parseFloat(product.dataset.price) >= 5 &&
          parseFloat(product.dataset.price) <= 10) ||
        (price === "10+" && parseFloat(product.dataset.price) > 10);
      if (productCategory && productPrice) {
        product.style.display = "block";
        foundProduct = true;
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
