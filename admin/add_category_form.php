  <?php include './Header_Components/header.php'; ?>
    
  <?php include './Main_Components/main.php';?>

   <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Add Category</h1>
        <form action="add_category.php" method="POST">
            <div class="form-group">
                <label for="name">Add Category</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn text-light" style="background-color:#f15932;">Submit</button>
        </form>
    </div>

    <?php include './Footer_Components/footer.php'; ?>

  </div>