$(document).ready(function () {
  $("#registerModal form").submit(function (event) {
    event.preventDefault();

    var email = $("#email").val();
    var password = $("#password").val();
    var phone = $("#phone").val();
    var address = $("#address").val();

    $.ajax({
      url: "Header_Components/register.php",
      method: "POST",
      data: {
        email: email,
        password: password,
        phone: phone,
        address: address,
      },
      success: function (response) {
        console.log(response);
        $("#registerModal").modal("hide");
        showStatusToast(response);
      },
      error: function (xhr, status, error) {
        $("#registerModal").modal("hide");
        showStatusToast(error);
        console.error("Error:", error);
      },
    });
  });
});

// Toaster code
function showStatusToast(status) {
  var toastElement = document.getElementById("registerToast");
  var statusElement = toastElement.querySelector("#status");
  statusElement.textContent = status;
  if (status !== "Registration Success") {
    toastElement.classList.remove("bg-success");
    toastElement.classList.add("bg-danger");
  } else {
    toastElement.classList.remove("bg-danger");
    toastElement.classList.add("bg-success");
  }
  toastElement.classList.add("show");
  toastElement.style.zIndex = 100;
  setTimeout(function () {
    toastElement.classList.remove("show");
  }, 3000); // Hide the toast after 3 seconds
  setTimeout(function () {
    toastElement.style.zIndex = -1;
  }, 3000);
}
