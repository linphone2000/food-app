<!-- Filter Section -->
<section class="">
    <form id="filterForm" class="mb-3 mx-auto filter-form">
        <div class="form-row">
            <div class="form-group col-6 mb-0">
                <label for="category">Category</label>
                <select id="category" class="form-control">
                    <option value="">All</option>
                    <?php
                    $categories = array_unique(array_column($foodProducts, 'category'));
                    foreach ($categories as $category) {
                        echo "<option value=\"$category\">$category</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-6 mb-0">
                <label for="price">Price</label>
                <select id="price" class="form-control">
                    <option value="">Any</option>
                    <option value="0-5">Less than $5</option>
                    <option value="5-10">$5 - $10</option>
                    <option value="10+">More than $10</option>
                </select>
            </div>
        </div>
        <div class="form-group mb-0">
            <button type="submit" class="stylish-button apply-button mt-4">Apply Filter</button>
            <button type="button" class="stylish-button clear-button mt-4" onclick="clearFilters()">Clear Filter</button>
        </div>
    </form>
</section>

<script src="Main_Components/Food_Menu/filter.js"></script>