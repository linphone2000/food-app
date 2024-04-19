<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal body (register form) -->
            <div class="modal-body">
                <!-- Register form -->
                <form>
                    <!-- Form fields -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" required="true"
                            placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required="true"
                            placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" required="true"
                            placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" required="true"
                            placeholder="Enter your address">
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary" >Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Toaster -->
<div id="registerToast" class="toast align-items-center text-white bg-success" role="alert" aria-live="assertive"
    aria-atomic="true">
    <div class="toast-body">
        <p class="m-0">
            <!-- <i class="fi fi-br-check text-white mr-2"></i> -->
            <span id="status"></span>
        </p>
    </div>
</div>

<!-- Register -->
<script src='Header_Components/register.js'></script>