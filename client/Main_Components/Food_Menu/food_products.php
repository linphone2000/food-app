<?php
// Dummy array later with actual db
$foodProducts = [
    [
        'name' => 'Apple',
        'category' => 'Fruit',
        'price' => 1.99,
        'quantity' => 10,
        'image' => 'https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg',
    ],
    [
        'name' => 'Bread',
        'category' => 'Bakery',
        'price' => 2.49,
        'quantity' => 5,
        'image' => 'https://www.bhg.com/thmb/ov2S31znAvSCXqrpgJQ8rwBgzp8=/2250x0/filters:no_upscale():strip_icc()/BHG-milk-bread-4CdeIL1uKGyB5ryU8J_EED-aaa76729c86a413ca7500029edba79f0.jpg',
    ],
    [
        'name' => 'Milk',
        'category' => 'Dairy',
        'price' => 1.29,
        'quantity' => 3,
        'image' => 'https://downshiftology.com/wp-content/uploads/2022/10/How-to-Make-Almond-Milk-22-4.jpg',
    ],
    [
        'name' => 'Apple',
        'category' => 'Fruit',
        'price' => 1.99,
        'quantity' => 10,
        'image' => 'https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg',
    ],
    [
        'name' => 'Bread',
        'category' => 'Bakery',
        'price' => 2.49,
        'quantity' => 5,
        'image' => 'https://www.bhg.com/thmb/ov2S31znAvSCXqrpgJQ8rwBgzp8=/2250x0/filters:no_upscale():strip_icc()/BHG-milk-bread-4CdeIL1uKGyB5ryU8J_EED-aaa76729c86a413ca7500029edba79f0.jpg',
    ],
    [
        'name' => 'Milk',
        'category' => 'Dairy',
        'price' => 1.29,
        'quantity' => 3,
        'image' => 'https://downshiftology.com/wp-content/uploads/2022/10/How-to-Make-Almond-Milk-22-4.jpg',
    ]
];
?>

<!-- Filter section -->
<?php include 'food_filter.php'; ?>

<section id="products" class="row">
    <!-- "No Product found will come here" -->
    <div id="noProductsFound" class="col-12 text-center d-none">
        <p>No products found.</p>
    </div>

    <?php foreach ($foodProducts as $index => $product) : ?>
        <div class="col-6 col-lg-4 product <?php echo $product['category']; ?>" data-price="<?php echo $product['price']; ?>">
            <!-- Product card -->
            <div class="mb-4 food-card">
                <img src="<?php echo $product['image']; ?>" class="image-in-card" alt="<?php echo $product['name']; ?>">
                <!-- Card body -->
                <div class="rounded-5 my-2">
                    <!-- Product details -->
                    <h5 class=""><?php echo $product['name']; ?></h5>
                    <p class="">Category: <?php echo $product['category']; ?></p>
                    <p class="">Price: $<?php echo number_format($product['price'], 2); ?></p>
                    <p class="">Quantity: <?php echo $product['quantity']; ?></p>
                    <!-- Buttons -->
                    <a href="#" class="stylish-button add-to-cart" id="liveToastBtn" onclick="event.preventDefault(); showToast('<?php echo $product['name']; ?>');">Add to Cart</a>
                    <a href="#" class="stylish-button see-details" data-bs-toggle="modal" data-bs-target="#exampleModal" data-product-index="<?php echo $index; ?>" data-product-name="<?php echo $product['name']; ?>" data-product-category="<?php echo $product['category']; ?>" data-product-price="<?php echo $product['price']; ?>" data-product-quantity="<?php echo $product['quantity']; ?>">
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

<script src="Main_Components/Food_Menu/filter.js"></script>