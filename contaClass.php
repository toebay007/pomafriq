<?php
    require("connCon.php");

    class contact extends connCon{

        function conForm($names, $emails, $subjects, $messages){
            if(!$names || !$emails || !$subjects || !$messages){
                header("location:contact.php?empty=field");
            }else{
                $sql = "INSERT INTO contacts SET
                        names = '$names',
                        emails = '$emails',
                        subjects = '$subjects',
                        messages = '$messages'";

                $this->conn->query($sql);
                $id =  $this->conn->insert_id;
                // echo $sql;
                // die();
                if($id > 0){
                header("location:contact.php?form=success");
                } else {
                header("location:contact.php?form=fail");
                }
            }
        }

        function getMessages(){
            $sql = "SELECT * FROM contacts WHERE statuses IS NULL";
            $result = $this->conn->query($sql);
            $items = [];
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        } 

        function ResolvedMessages(){
            $sql = "SELECT * FROM contacts WHERE statuses = 'Resolved'";
            $result = $this->conn->query($sql);
            $items = [];
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function PendingMessages(){
            $sql = "SELECT * FROM contacts WHERE statuses = 'Pending'";
            $result = $this->conn->query($sql);
            $items = [];
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $items[] = $row;
                }
                return $items;
            }
        }

        function countMessage(){
            $sql = "SELECT * FROM contacts WHERE statuses IS NULL";
            $result = $this->conn->query($sql);

            $items = [];
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    $items[] = $rows;
                }
                return count($items);
            }
        }

        function getMessageStatus($id){
            $sql = "SELECT * FROM contacts WHERE con_id = '$id'";
            
            $result =  $this->conn->query($sql);
            if($result->num_rows > 0){
                $row =  $result->fetch_assoc();
                return $row;
            }
        }

        function messageUpdate( $orderstatus , $orderid){
            $sql = "UPDATE contacts SET statuses = '$orderstatus' WHERE con_id = '$orderid'";

            $result = $this->conn->query($sql);
            header("location:adminContact.php?id=$orderid");

        }


    }



?>