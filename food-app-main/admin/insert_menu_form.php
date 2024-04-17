
    <?php include './Header_Components/header.php'; ?>
    
    <?php include './Main_Components/main.php';?>

    <?php include './load_category.php' ?>

     <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Add Menu Item</h1>
        <form action="insert_menu.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" id="category" class="form-control" required>
                    <?php foreach ($categories as $index => $cats) : ?>
                    <option value="<?php echo $cats['id']?>">
                    <?php echo $cats["name"]?>
                    </option>
                    <?php endforeach ;?>
                </select>
                <!-- <input type="text" class="form-control" id="category" name="category" required> -->
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="0" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="img" name="img" accept="image/*" required>
            </div>

            <button type="submit" class="btn text-light" style="background-color:#f15932;">Submit</button>
        </form>
    </div>

    <?php include './Footer_Components/footer.php'; ?>

</div>