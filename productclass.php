<?php
    require("connpro.php");
     /**
	 * Product function
	 */
    class products extends product{

        function createProduct($productName,$product_category,$productShort,$productPrice,$productLong,$targetFilePath){

            $targetDir = "products/";
            $fileName = basename($_FILES["productImg"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                //determine permitted array
                    $allowTypes = array('jpg','png','svg','jpeg','gif','pdf','JPG');
                        //if array is present or present
                    if(in_array($fileType, $allowTypes)){
                         //upload  picture to image folder
                        if(move_uploaded_file($_FILES["productImg"]["tmp_name"], $targetFilePath)){
                            // insert into database
                                if(!$productName || !$product_category || !$productShort || !$productPrice || !$productLong){
                                        header("location:productsAdmin.php?products=no_input");
                                } else{
                                  
                                    $sql = "INSERT INTO products SET
                                        products_name = '$productName',
                                        products_category = $product_category,
                                        products_short = '$productShort',
                                        products_price = $productPrice,
                                        products_long = '$productLong',
                                        products_img = '$targetFilePath'";
                            
                                    $this->conn->query($sql);
                                    $id =  $this->conn->insert_id;
                                    
                                    if($id > 0){
                                    header("location:productsAdmin.php?products=success");
                                    } else {
                                    header("location:productsAdmin.php?products=fail");
                                }
                            }
                        } else{
                            header("location:productsAdmin.php?products=data_fail");
                        }
                    } else{
                        header("location:productsAdmin.php?products=wrong");
                    }
                }

                function getProductsHome(){
                    $sql = "SELECT * FROM products JOIN category ON products.products_category=category.id ORDER BY rand() LIMIT 8";
                    $result = $this->conn->query($sql);
                    $items = [];
                    $item = [];
                    if ($result->num_rows > 0){
                        while ( $row = $result->fetch_assoc()){
                            $item[] = $row;
                            $items[] = $row['products_img'];
                        }
                        return $items = $item;
                    }
                }

                function getProducts(){
                    $sql = "SELECT * FROM products JOIN category ON products.products_category=category.id";
                    $result = $this->conn->query($sql);
                    $items = [];
                    if ($result->num_rows > 0){
                        while ( $row = $result->fetch_assoc()){
                            $items[] = $row;
                        }
                        return $items;
                    }
                }

                function getProductsImg(){
                    $sql = "SELECT * FROM products ORDER BY rand() LIMIT 6";
                    $result = $this->conn->query($sql);
                    $items = [];
                    if ($result->num_rows > 0){
                        while ( $row = $result->fetch_assoc()){
                            $items[] = $row;
                        }
                        return $items;
                    }
                }


                function searchProducts($searchs){
                   // echo($searchs);
                    $sql = "SELECT * FROM products JOIN category ON products.products_category=category.id where products_name like '$searchs'";
                    $result = $this->conn->query($sql);
                    $items = [];
                    if ($result->num_rows >0){
                        while( $row = $result->fetch_assoc()){
                            $items[] = $row;
                        }
                    }
                   return $items;
                }

                function updateProduct($ids,$productName,$product_category,$productShort,$productPrice,$productLong,$targetFilePath){

                    $targetDir = "products/";
                    $fileName = basename($_FILES["productImg"]["name"]);
                    $targetFilePath = $targetDir . $fileName;
                    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                        //determine permitted array
                            $allowTypes = array('jpg','png','svg','jpeg','gif','pdf','JPG');
                                //if array is present or present
                            if(in_array($fileType, $allowTypes)){
                                 //upload  picture to image folder
                                if(move_uploaded_file($_FILES["productImg"]["tmp_name"], $targetFilePath)){
                                    // insert into database
                                        if(!$productName || !$product_category || !$productShort || !$productPrice || !$productLong){
                                                header("location:editresult.php?products=no_input");
                                        } else{
                                          
                                            $sql = "UPDATE products SET
                                            products_name = '$productName',
                                            products_category = $product_category,
                                            products_short = '$productShort',
                                            products_price = $productPrice,
                                            products_long = '$productLong',
                                            products_img = '$targetFilePath'
                                             WHERE products_id = $ids";
                                    
                                            $result = $this->conn->query($sql);
                                           // $id =  $this->conn->insert_id;
                                            
                                            if($result == true){
                                            header("location:editresult.php?products=success");
                                            } else {
                                            header("location:editresult.php?products=fail");
                                        }
                                    }
                                } else{
                                    header("location:editresult.php?products=data_fail");
                                }
                            } else{
                                header("location:editresult.php?products=wrong");
                            }
                        }

                        function deleteProduct($id){
                            $sql = "DELETE FROM products Where products_id = $id";
                            $result = $this->conn->query($sql);

                            if($result == true){
                                header("location:");
                            } else{

                            }
                        }

                        
    }



  