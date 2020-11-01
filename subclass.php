<?php 
    require("connBlog.php");

    class subs extends connBlog{

        function subscribe($emails){
            if(!empty($emails)){
            $sql = "SELECT * FROM subcribe WHERE emails = '$emails'";
            $result = $this->conn->query($sql);
            $items = [];
            if ($result->num_rows > 0){
                while ( $row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                header("location:index.php?emails=already");
            }else{
                $sqls = "INSERT INTO subcribe SET emails = '$emails'";
                $this->conn->query($sqls);
                $id =  $this->conn->insert_id;
                
                if($id > 0){
                header("location:index.php?emails=success");
                }else{
                    header("location:index.php?emails=success");
                    }
            }
        } else{
        header("location:index.php?emails=empty");
    }

  }
}


?>