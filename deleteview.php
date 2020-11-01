<?php require("adminheader.php"); 

$id = $_GET['id'];
?>
<div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="deletePro.php" class="breadcrumbs">Back to delete product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Updated</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-10 offset-md-1 tabss" style="margin-bottom:200px;">
    <?php require "configN.php" ?>
                <table class="table table-bordered mt-2">
                        <thead>
                            <tr> 
                                <th>
                                    
                                </th>
                                <th>
                                    Products
                                </th>
                                <th>
                                    Products Picture
                                </th>
                                <th>
                                    Products price
                                </th>

                                <th>
                                    Products Description
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $records = $mysqli->query("SELECT * FROM products JOIN category ON products.products_category=category.id where products_id = '$id'"); // fetch data from database
                        while($data = $records->fetch_assoc())
                            {?>
                            <tr>
                                <td>
                                <a href="delete.php?id=<?php echo $data['products_id'] ?>" style="margin-top:-10px"><button type="submit" class="btn subss">Delete</button></a>
                                </td>
                                <td><?php echo $data['products_name']; ?></td>
                                <td><img src="<?php echo $data['products_img'] ?>" class="proImgAdmin" alt="<?php echo $data['products_name'] ?>"></td>
                                <td>&#8358;<?php echo number_format($data['products_price'],2); ?></td>
                                <td><?php echo $data['products_long'] ?></td>
                            </tr>
                        </tbody>
        <?php   }  ?>
        <?php mysqli_close($mysqli);  // close connection ?>  
                </table>
        </div>
    </div>
<?php require('footerss.php') ?>