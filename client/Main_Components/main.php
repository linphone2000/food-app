<main>
    <div data-bs-spy="scroll" data-bs-target="#navbar-scroll" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">

        <!-- Carousel -->
        <section id="Home">
            <?php include 'food_carousel.php'; ?>
        </section>

        <!-- Food Menu -->
        <section id="Menu" class="text-center p-5">
            <div class="">
                <?php include 'Food_Menu/food_products.php'; ?>
            </div>
        </section>

        <!-- Some Dummy -->
        <!-- <?php
                $message = "Dummy Text";
                echo "<section><p class=\"m-0\">$message</p></section>";
                ?> -->
    </div>
</main>