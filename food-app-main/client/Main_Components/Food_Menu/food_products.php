<!-- Load food data from database -->
<?php include 'food_data_load.php' ?>

<!-- Appreciation letter -->
<?php include 'food_letter.php' ?>

<div id="Menu" class="text-center">
    <h1>MENU</h1>

    <!-- Filter section -->
    <?php include 'food_filter.php'; ?>

    <section id="products" class="row">
        <!-- "No Product found will come here" -->
        <div id="noProductsFound" class="col-12 text-center d-none">
            <p>No products found.</p>
        </div>

        <!-- Showing menus -->
        <?php foreach ($foodProducts as $index => $product) : ?>
            <div class="col-6 col-lg-4 product <?php echo $product['category']; ?>" data-price="<?php echo $product['price']; ?>">
                <!-- Product card -->
                <div class="mb-4 food-card">
                    <img src="../admin/assets/uploads/<?php echo $product['image']; ?>" class="image-in-card" alt="<?php echo $product['name']; ?>">
                    <!-- Card body -->
                    <div class="rounded-5 my-2">
                        <!-- Product details -->
                        <h5 class="product-title"><?php echo $product['name']; ?></h5>
                        <p>Category: <?php echo $product['category']; ?></p>
                        <p>Lunch Price: £<?php echo number_format($product['price'], 2); ?></p>
                        <p>Evening Price: £<?php echo number_format($product['price']+1, 2); ?></p>
                        <p>Quantity: <?php echo $product['quantity']; ?></p>
                        <!-- Buttons -->
                        <a href="#" class="stylish-button add-to-cart" id="liveToastBtn"
                         onclick="event.preventDefault(); showToast('<?php echo $product['name']; ?>');">Quick Add</a>
                        <a href="#" class="stylish-button see-details" data-bs-toggle="modal" data-bs-target="#exampleModal" data-product-index="<?php echo $index; ?>" data-product-name="<?php echo $product['name']; ?>" data-product-category="<?php echo $product['category']; ?>" data-product-price="<?php echo $product['price']; ?>" data-product-quantity="<?php echo $product['quantity']; ?>" data-description="<?php echo $product['description']; ?>">
                            See Details
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Include the modal -->
        <?php include 'food_modal.php'; ?>

        <!-- Toaster -->
        <?php include 'food_toaster.php'; ?>

    </section>
</div>