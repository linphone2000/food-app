<nav id="navbar-scroll" class="navbar navbar-expand-lg sticky-top navbar-dark class-for-navbar">
    <div class="container">
        <a class="navbar-brand" href="#Home">
            <img src="assets/Chop_Chop_Logo_Pink.png" class="navbar-logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fi fi-sr-user text-white"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-right class-for-dropdown">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php include 'register_modal.php' ?>

<?php include 'login_modal.php' ?>