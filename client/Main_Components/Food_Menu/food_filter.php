<!-- Filter Section -->
<section class="">
    <form id="filterForm" class="mb-4 mx-auto filter-form">
        <div class="form-row">
            <div class="form-group col-6">
                <label for="category">Category</label>
                <select id="category" class="form-control">
                    <option value="">All</option>
                    <option value="Fruit">Fruit</option>
                    <option value="Bakery">Bakery</option>
                    <option value="Dairy">Dairy</option>
                </select>
            </div>
            <div class="form-group col-6">
                <label for="price">Price</label>
                <select id="price" class="form-control">
                    <option value="">Any</option>
                    <option value="0-5">Less than $5</option>
                    <option value="5-10">$5 - $10</option>
                    <option value="10+">More than $10</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-4 apply-button">Apply Filter</button>
        </div>
    </form>
</section>