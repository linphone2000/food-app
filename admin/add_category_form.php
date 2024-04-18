  <?php include './Header_Components/header.php'; ?>
    
  <?php include './Main_Components/main.php';?>

  
  <?php include './load_category.php';?>
<div class="container-fluid px-4">
        <h3 class="mt-4 mb-4">Add Category</h3>
        <form action="add_category.php" method="POST">
            <div class="form-group">
                <label for="name">Add Category</label>
                <input type="text" class="form-control" id="name" name="name" required> 
            </div>
           
            <button type="submit" id="test"  class="btn text-light" style="background-color:#f15932;">Submit</button> 
        </form>
       
</div>

    <div class="container-fluid px-4">
        <h3 class="mt-4 mb-4">Listed Categories</h3>
            <table id="example" class="table table-striped table-bordered" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Created_date</th>
                        <th>Modified_date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php $count = 1;?>
                <?php foreach ($categories as $index => $cats) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $count?></td>
                        <td><?php echo $cats['name'] ;?></td>
                        <td><?php echo $cats['created_date']?></td>
                        <td><?php echo $cats['modified_date']?></td>
                        <td>
                        <a href="cat_edit.php?id=<?php echo $cats['id']?>" onclick="return false;">
                        <button class="btn btn-primary">
                        <i class="fa-solid fa-pencil"></i>
                        </button>
                        </a>
                        </td>
                        <td>
                        <a href="cat_delete.php?id=<?php echo $cats['id']?>">
                        <button class="btn btn-danger">
                        <i class="fa-solid fa-trash-can"></i>
                        </button>
                        </a>
                        </td>
                    </tr>
                </tbody>
                <?php  $count++;?>
                <?php endforeach;?>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Created_date</th>
                        <th>Modified_date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
    
    </div> 

    
    <?php include './Main_Components/Category/category_toaster.php'; ?>
   
    
    <?php include './Footer_Components/footer.php'; ?>
    
</div>


