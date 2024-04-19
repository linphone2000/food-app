$(document).ready(function () {
  $(".add-to-cart").on("click", function () {
    var productId = $(this).data("id");
    var availableQty = $(this).data("qty");
    var productQty = parseInt(
      prompt("Enter quantity (available: " + availableQty + ")", 1)
    );

    if (!isNaN(productQty) && productQty > 0 && productQty <= availableQty) {
      $.ajax({
        url: "Main_Components/Food_Menu/add_to_cart.php",
        method: "POST",
        data: {
          id: productId,
          qty: productQty,
        },
        success: function (response) {
          console.log(response);
        },
        error: function (xhr, status, error, response) {
          console.error("Error adding product to cart:", response);
        },
      });
    } else {
      alert("Invalid quantity. Please enter a valid quantity.");
    }
  });
});
