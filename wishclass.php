<?php

    require("utilityAdmins.php");

    class wish extends utilityAdmin{

       function createWish($id,$user){
            $sql = "SELECT * FROM products WHERE products_id = $id";
            $result = $this->conn->query($sql);
           
            if($result->num_rows > 0){
               $row = $result->fetch_assoc();
                    $items0 = $row['products_id'];
                    $items1 = $row['products_name'];
                    $items2 = $row['products_img'];
                    $items3 = $row['products_price'];
                $sql1 = "SELECT * FROM wishlistz WHERE wish_pro_id = '$items0'AND wish_pro_name = '$items1'AND wish_pro_img = '$items2' AND wish_pro_price = $items3 AND wish_usersid=$user";
                $result = $this->conn->query($sql1);

                if($result->num_rows > 0){
                    header("location:wishlist.php?f=already_exists");
                }else{
                $sql ="INSERT IGNORE INTO wishlistz SET wish_pro_id = '$items0', wish_pro_name = '$items1', wish_pro_img = '$items2', wish_pro_price = $items3, wish_usersid=$user ";
                $result = $this->conn->query($sql);
        }
    }
}
    function SelectWish($user)
    {
        $sql = "SELECT * FROM wishlistz WHERE wish_usersid = $user";
        $result = $this->conn->query($sql);

        $items = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $items[] = $row;
            }

        }
        return $items; 
    }



 }


?>