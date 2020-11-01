<?php 

require("connDis.php");
     /**
	 * Product function
	 */
    class discount extends discoun{

            function createDiscount($disTopic,$discDetails,$targetFilePath){
                $targetDir = "discounts/";
                $fileName = basename($_FILES["disImage"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                    //determine permitted array
                        $allowTypes = array('jpg','png','svg','jpeg','JPG');
                            //if array is present or present
                        if(in_array($fileType, $allowTypes)){
                            //upload  picture to image folder
                            if(move_uploaded_file($_FILES["disImage"]["tmp_name"], $targetFilePath)){
                                // insert into database
                                    if(!$disTopic || !$discDetails){
                                            header("location:discount.php?discount=no_input");
                                    } else{
                                    
                                        $sql = "INSERT INTO discounts SET
                                            discTopic = '$disTopic',
                                            discDetails = '$discDetails',
                                            disc_img = '$targetFilePath'";
                                
                                        $this->conn->query($sql);
                                        $id =  $this->conn->insert_id;
                                        
                                        if($id > 0){
                                        header("location:discount.php?discount=success");
                                        } else {
                                        header("location:discount.php?discount=fail");
                                    }
                                }
                            } else{
                                header("location:discount.php?discount=data_fail");
                            }
                        } else{
                            header("location:discount.php?discount=wrong");
                        }
            }

            function displayDiscount(){
                $sql = "SELECT * FROM discounts";
                $result = $this->conn->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }

            function selectDiscount(){
                $sql = "SELECT * FROM discounts Order BY disc_id DESC LIMIT 1";
                $result = $this->conn->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }

            function deletes($id){
                $sql = "DELETE discounts FROM discounts WHERE disc_id = $id";
                $result = $this->conn->query($sql);
                
                if ($result  ==  true){
                        header("location:deleteDiscount.php?delete=Success");
                     } else {
                         header("location:deleteDiscount.php?delete=Failed");
                     }
            }

            function deletesAll(){
                $sql = "DELETE discounts FROM discounts";
                $result = $this->conn->query($sql);
               
                if ($result == true){
                   header("location:deleteDiscount.php?deleted=Success");
                } else {
                    header("location:deleteDiscount.php?deleted=Failed");
                }
            }

    }
?>