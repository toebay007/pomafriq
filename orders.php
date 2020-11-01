<?php
    require("utilityAdmins.php");

    class orders extends utilityAdmin{

        function countOrders(){

            $sql = "SELECT * FROM customerorders WHERE orders_status IS NULL";
            $result = $this->conn->query($sql);

            $items = [];
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    $items[] = $rows;
                }
                return count($items);
            }
        }

        function getOrder(){
            $sql = "SELECT CONCAT(user.firstnames,' ', user.lastnames)fullname,Addresses,customerorders.orders_date, customerorders.orders_status,customerorders.orders_id,customerorders.orders_sn,customerorders.orders_type,payment.payment_status FROM customerorders,payment,user WHERE user.users_id = customerorders.users_id AND customerorders.orders_id = payment.orders_id ORDER BY orders_id DESC";
            $result = $this->conn->query($sql);
            $items = [];
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function getOrderHistory(){
            $sql = "SELECT CONCAT(user.firstnames,' ', user.lastnames)fullname,Addresses,phoneNumbers,customerorders.orders_date, customerorders.orders_status,customerorders.orders_id,customerorders.orders_sn,customerorders.orders_type,payment.payment_status FROM customerorders,payment,user WHERE user.users_id = customerorders.users_id AND customerorders.orders_id = payment.orders_id AND payment.payment_status IS NOT NULL and customerorders.orders_status IS NOT NULL ORDER BY orders_id DESC";
            $result = $this->conn->query($sql);
            $items = [];
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }
        function getFrequentOrder(){
            $sql = "SELECT CONCAT(user.firstnames,' ', user.lastnames)fullname, Addresses, phoneNumbers, COUNT(customerorders.orders_id) from user join customerorders where customerorders.users_id = user.users_id GROUP By customerorders.users_id";
            $result = $this->conn->query($sql);
            $items = [];
            if($result->num_rows > 2){
                while($row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function getOrderDetails($id){
             $sql = "SELECT products.products_name, products.products_price,products.products_img, orderdetails.orddetails_qty FROM orderdetails LEFT JOIN products ON products.products_id = orderdetails.products_id WHERE orders_id = '$id'";

             $result = $this->conn->query($sql);
             if($result->num_rows > 0){
                while( $row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
             }
        }

        function getCrudeOrder($id){
            $sql = "SELECT CONCAT(user.firstnames,' ', user.lastnames)fullname,user.emails, customerorders.orders_date, customerorders.orders_amt, customerorders.orders_amt, customerorders.orders_status, customerorders.orders_sn, customerorders.orders_type, customerorders.orders_id FROM customerorders LEFT JOIN user ON user.users_id = customerorders.users_id WHERE orders_id = '$id'";
            
            $result =  $this->conn->query($sql);
            if($result->num_rows > 0){
                $row =  $result->fetch_assoc();
                return $row;
            }
        }
        function getCrudePaymentOrder($id){
            $sql = "SELECT CONCAT(user.firstnames,' ', user.lastnames)fullname,user.emails, customerorders.orders_date, customerorders.orders_amt, customerorders.orders_amt, customerorders.orders_status, customerorders.orders_sn, customerorders.orders_type,payment.payment_status,customerorders.orders_id FROM customerorders LEFT JOIN user ON user.users_id = customerorders.users_id LEFT JOIN payment ON payment.orders_id = customerorders.orders_id WHERE payment.orders_id = '$id'";
            
            $result =  $this->conn->query($sql);
            if($result->num_rows > 0){
                $row =  $result->fetch_assoc();
                return $row;
            }
        }

        function ordersUpdate( $orderstatus , $orderid){
            $sql = "UPDATE customerorders SET orders_status = '$orderstatus' WHERE orders_id = '$orderid'";

            $result = $this->conn->query($sql);
            header("location:orderAdminDetails.php?id=$orderid");

        }

        function paymentUpdate( $paymentstatus , $orderid){
            if($paymentstatus === 'Paid on delivery' || $paymentstatus === 'Paid with transfer'){
                //echo $paymentstatus;
                $sql = "UPDATE payment SET payment_status = '$paymentstatus' WHERE orders_id = '$orderid'";

                $result = $this->conn->query($sql);
                header("location:orderAdminDetails.php?id=$orderid");
            } else{
               header("location:orderAdminDetails.php?id=$orderid&insert=failed");
            }
           

        }
        function insertCustOrder($userid, $ordertotal, $productid, $productqty){
            $sql = "INSERT INTO customerorders SET users_id = '$userid', orders_amt = '$ordertotal'";
           

            $result = $this->conn->query($sql);
            $id = $this->conn->insert_id;
            

            $_SESSION['orderid'] = $id;

            if($id > 0){
                $ordersn = "POMAFRIQ/".date('Y'). '/' .str_pad($id, 3, '0');
                $this->conn->query("UPDATE customerorders SET orders_sn = '$ordersn' WHERE orders_id = '$id'");

                foreach ($productid as $key => $value){
                    $productid = $value;
                    $proQty = $productqty[$key];
                    $ordersid = $id;

                    $sql2 = "INSERT INTO orderdetails SET orders_id = '$ordersid', orddetails_qty = '$proQty', products_id = $productid ";

                    $result = $this->conn->query($sql2);
                    print_r($result);
                }
            }
        }

        function insertPayment($trxref, $ordertotal, $orderid){
            $sql = "INSERT INTO payment SET payment_amt = '$ordertotal', payment_txtref = '$trxref', orders_id = '$orderid'";

            $this->conn->query($sql);
            $id = $this->conn->insert_id;
        }


        function getCustOrder($userid){
            $sql = "SELECT CONCAT( user.firstnames,' ', user.lastnames)fullnames, customerorders.orders_date, customerorders.orders_amt, customerorders.orders_status, customerorders.orders_sn, customerorders.orders_type, customerorders.orders_id FROM customerorders LEFT JOIN user ON user.users_id = customerorders.user_id WHERE customerorders.users_id = '$userid'";

            $result = $this->conn->query($sql);
            $items = [];
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

    }

?>