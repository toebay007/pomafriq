<?php
    require("connBlog.php");

    class blog extends connBlog{


        function createPost($topic,$short,$long,$targetFilePath){
            $targetDir = "products/";
            $fileName = basename($_FILES["photos"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                //determine permitted array
                    $allowTypes = array('jpg','png','svg','jpeg','gif','pdf','JPG');
                        //if array is present or present
                    if(in_array($fileType, $allowTypes)){
                         //upload  picture to image folder
                        if(move_uploaded_file($_FILES["photos"]["tmp_name"], $targetFilePath)){
                            // insert into database
                                if(!$topic || !$short || !$long){
                                        header("location:adminsBlog.php?blog=no_input");
                                } else{
                                  
                                    $sql = "INSERT INTO blogs SET
                                                Topic = '$topic',
                                                intro = '$short',
                                                details = '$long',
                                                photos = '$targetFilePath'";
                            
                                    $this->conn->query($sql);
                                    $id =  $this->conn->insert_id;
                                    
                                    if($id > 0){
                                    header("location:adminsBlog.php?blog=success");
                                    } else {
                                    header("location:adminsBlog.php?blog=fail");
                                }
                            }
                        } else{
                            header("location:adminsBlog.php?blog=data_fail");
                        }
                    } else{
                        header("location:adminsBlog.php?blog=wrong");
                    }
        }

        function getPost(){
            $sql = "SELECT * FROM `blogs`";
            $result = $this->conn->query($sql);
            $items = [];
            if ($result->num_rows > 0){
                while ( $row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function getPost3(){
            $sql = "SELECT * FROM `blogs` order by `id` DESC LIMIT 1";
            $result = $this->conn->query($sql);
            $items = [];
            if ($result->num_rows > 0){
                while ( $row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function getPost1(){
            $sql = "SELECT * FROM `blogs` order by `id` DESC LIMIT 1 OFFSET 1";
            $result = $this->conn->query($sql);
            $items = [];
            if ($result->num_rows > 0){
                while ( $row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function getPost2(){
            $sql = "SELECT * FROM `blogs` order by `id` DESC LIMIT 1 OFFSET 2";
            $result = $this->conn->query($sql);
            $items = [];
            if ($result->num_rows > 0){
                while ( $row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function getPostPro(){
            $sql = "SELECT * FROM `blogs` order by `id` DESC LIMIT 5";
            $result = $this->conn->query($sql);
            $items = [];
            if ($result->num_rows > 0){
                while ( $row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function updateBlog($id,$topic,$short,$long,$targetFilePath){

            $targetDir = "products/";
            $fileName = basename($_FILES["photos"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                //determine permitted array
                    $allowTypes = array('jpg','png','svg','jpeg','gif','pdf','JPG');
                        //if array is present or present
                    if(in_array($fileType, $allowTypes)){
                            //upload  picture to image folder
                        if(move_uploaded_file($_FILES["photos"]["tmp_name"], $targetFilePath)){
                            // insert into database
                                if(!$topic || !$short || !$long){
                                        header("location:blogresult.php?products=no_input");
                                } else{
                                    
                                    $sql = "UPDATE blogs SET
                                    Topic = '$topic',
                                    intro = '$short',
                                    details = '$long',
                                    photos = '$targetFilePath'
                                        WHERE id = '$id'";
                            
                                    $result = $this->conn->query($sql);
                                    // $id =  $this->conn->insert_id;
                                    
                                    if($result == true){
                                    header("location:blogresult.php?products=success");
                                    } else {
                                    header("location:blogresult.php?products=fail");
                                }
                            }
                        } else{
                            header("location:blogresult.php?products=data_fail");
                        }
                    } else{
                        header("location:blogresult.php?products=wrong");
                    }
        }
    }
?>