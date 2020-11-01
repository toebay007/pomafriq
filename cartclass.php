<?php
    require("conncart.php");
    /**
	 * Category function
	 */
    class category extends cats {

        function createCategory($category,$targetFilePath){
           //upload path 
        $targetDir = "category/";
        $fileName = basename($_FILES["catePhoto"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            //determine permitted array
                $allowTypes = array('jpg','png','svg','jpeg','gif','pdf','JPG');
                    //if array is present or present
                if(in_array($fileType, $allowTypes)){
                     //upload  picture to image folder
                    if(move_uploaded_file($_FILES["catePhoto"]["tmp_name"], $targetFilePath)){
                        // insert into database
                            if(!empty($category)){
                                $sql = "INSERT INTO category SET
                            category_name = '$category',
                            category_pic = '$targetFilePath'";
                
                            $this->conn->query($sql);
                            $id =  $this->conn->insert_id;
                
                            if($id > 0){
                                header("location:productsAdmin.php?category=success");
                            }   else{
                                header("location:productsAdmin.php?category=fail");
                            }
                        } else{
                            header("location:productsAdmin.php?category=wrong");
                        }
                    } else{
                        header("location:productsAdmin.php?category=data_fail");
                    }
                } else{
                    header("location:productsAdmin.php?category=wrong");
                }
            
        }

        function getCategory(){
            $sql = "SELECT * FROM category";
            $result = $this->conn->query($sql);
            $items = [];
            if ($result->num_rows > 0){
                while ( $row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function getCategoryHome(){
            $sql = "SELECT * FROM category";
            $result = $this->conn->query($sql);
            $items = [];
            if ($result->num_rows > 0){
                while ( $row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }
    }