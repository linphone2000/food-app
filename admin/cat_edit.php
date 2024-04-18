<?php include './Header_Components/header.php'; ?>
    
<?php include './Main_Components/main.php';?>

<?php include './load_category_edit.php';?>

<div class="container-fluid px-4">
        <h3 class="mt-4 mb-4">Edit Category</h3>
        <form action="update_category.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div class="form-group">
                <label for="name">Edit Category</label>
                <input type="text" class="form-control" id="catname" name="catname" value="<?php echo $row['name']?>"required>
            </div>
            <button type="submit" class="btn text-light" style="background-color:#f15932;">Submit</button>
        </form>
</div>

<?php include './Footer_Components/footer.php'; ?>
</div>