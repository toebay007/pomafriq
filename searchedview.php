<?php require "adminheader.php" ;
    $id = $_GET['id'];
?>
<div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Searched Products</li>
            </ol>
        </nav>
    </div>
    <?php require "configN.php" ?>
    <div class="row mb-2">
        <div class="col-md-2 tabss">
            <div class="form-row">
                <button class="btn btn-block form-control subss searchPro"><a href="views.php#prods">Search by Products</a> </button>
            <button class="btn btn-block form-control subss viewcat"><a href="views.php#cates">View all Categories</a> </button>
            <button class="btn btn-block form-control subss viewPro"><a href="views.php#productszs">View all Products</a> </button>
            </div>
        </div>
        <div class="col-md-10 tabss">
            
            <div class="col-12">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th>Product picture</th>
                            <th>Product category</th>
                            <th>Product Price</th>
                            <th>Product Description</th>
                        </tr>
                    </thead>
                    <?php
                        $records = $mysqli->query("SELECT * FROM products JOIN category ON products.products_category=category.id where products_id = '$id'"); // fetch data from database
                        while($data = $records->fetch_assoc())
                            {?>
                        <tbody>
                        <tr>
                            <td> <a href="editproduct.php?product=<?php echo $data['products_id'] ?>"><button class="subss">Edit</button> </a> </td>
                            <td><?php echo $data['products_name']; ?></td>
                            <td><img src="<?php echo $data['products_img'] ?>" class="proImgAdmin" alt="<?php echo $data['products_name'] ?>"></td>
                            <td><?php echo $data['category_name'] ?></td>
                            <td>&#8358;<?php echo number_format($data['products_price'],2); ?></td>
                            <td><?php echo $data['products_long'] ?></td>
                        </tr>
                    </tbody>
                    
        <?php   }  ?>
        <?php mysqli_close($mysqli);  // close connection ?>  
                </table>
            </div>
           
        </div>
    </div>
    
<?php require "footerss.php" ?>