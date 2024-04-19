<style>
  .toast {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    position: fixed;
    top: 75px;
    left: 50%;
    transform: translateX(-50%);
    width: 250px;
    z-index: -1;
}
</style>

<div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
  <div class="toast-container position-absolute p-3" id="toastPlacement">

    <div class="toast align-items-center text-white bg-success" data-animation="true" data-delay="10000" id="companyUpdOK" name="companyUpdOK" role="alert"  aria-live="assertive" aria-atomic="true">
      <div class="toast-body">
      <i class="fa-solid fa-check"></i>
        Add Category Success
      </div>
    </div>

  </div>
</div>
<script src="js/category.js"></script>