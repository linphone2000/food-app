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
    ]
];
?>
<!-- Filter Section -->
<section class="mb-4 mx-auto  w-50 ">
    <form id="filterForm">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="category">Category</label>
                <select id="category" class="form-control">
                    <option value="">All</option>
                    <option value="Fruit">Fruit</option>
                    <option value="Bakery">Bakery</option>
                    <option value="Dairy">Dairy</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="price">Price</label>
                <select id="price" class="form-control">
                    <option value="">Any</option>
                    <option value="0-5">Less than $5</option>
                    <option value="5-10">$5 - $10</option>
                    <option value="10+">More than $10</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-primary mt-4">Apply Filter</button>
            </div>
        </div>
    </form>
</section>

<!-- Products Section -->
<section id="products" class="row">
    <!-- "No Product found will come here" -->
    <div id="noProductsFound" class="col-md-12 text-center d-none">
        <p>No products found.</p>
    </div>
    <?php foreach ($foodProducts as $index => $product) : ?>
        <div class="col-md-4 product <?php echo $product['category']; ?>" data-price="<?php echo $product['price']; ?>">
            <!-- Product card -->
            <div class="card mb-4">
                <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                <!-- Card body -->
                <div class="card-body">
                    <!-- Product details -->
                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                    <p class="card-text">Category: <?php echo $product['category']; ?></p>
                    <p class="card-text">Price: $<?php echo number_format($product['price'], 2); ?></p>
                    <p class="card-text">Quantity: <?php echo $product['quantity']; ?></p>
                    <!-- Buttons -->
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#" class="btn btn-secondary">See Details</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>


<script src="Main_Components/Food_Menu/filter.js"></script>