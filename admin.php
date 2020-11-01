<?php 
	require("connAdmin.php");
	/**
	 * Admin function
	 */
	class Admin extends connAdmin
	{

	
	// function signup($admin_Fname,$admin_Lname,$admin_Phone,$admin_Email,$admin_Pwd)
	// {
    //     // $encrypt = md5($pwd);
	// 	$sql= "INSERT INTO adminReg SET
	// 	finame = '$admin_Fname',
	// 	laname = '$admin_Lname',
    //     passwordz = '$admin_Pwd',
    //     emails = '$admin_Email',
	// 	phoneN0 = '$admin_Phone'";

		
    //     $this->conn->query($sql);


	// 	$id = $this->conn->insert_id;

    //     $_SESSION['staff'] = $id;
    //     header("location:adminPage.php");

        
        

	// }

    function getAdminDetails($username){
        $sql = "SELECT * FROM adminReg WHERE username = '$username'" ;
        $result = $this->conn->query($sql);

        $row = [];
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
                    return $row;

        }     
    }

    function adminUpdate( $orderstatus , $orderid){
        $sql = "UPDATE adminReg SET statuses = '$orderstatus' WHERE id = '$orderid'";

        $result = $this->conn->query($sql);
        header("location:adminedit.php");

    }

    function getAdminDetail(){
        $sql = "SELECT CONCAT(finame , '  ' , laname)fullname, id as adminsz, username as usersname, emails as emailz, phoneN0 as phoneNumbwer, statuses FROM adminReg" ;
        $result = $this->conn->query($sql);

        $items = [];
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $items[] = $rows;
            }
             return $items;
        }     
    }

    function register($finame,$laname,$username,$passwordz,$confirm_pass,$emails,$phoneN0)
    {
        if(!$finame || !$laname || !$username || !$passwordz || !$confirm_pass || !$emails || !$phoneN0){
            header("location: adminreg.php?reg=password");
        }
        else if($passwordz === $confirm_pass){
            $encrypted = md5($passwordz); 

            $sql = "INSERT INTO adminReg SET
                finame = '$finame',
                laname = '$laname',
                username    =   '$username',
                passwordz    =   '$encrypted',
                emails  =   '$emails',
                phoneN0 =   '$phoneN0'";


                $id=    $this->conn->insert_id;

                $_SESSION['username']   =   $id;

                $result = $this->conn->query($sql);
                if($result == true){
                    header("location: indexAdmin.php");
                } 
        } else{
            header("location: adminreg.php?reg=fail");
        }
    }

	function login($username,$pwd)
	{
		$encrypted = md5($pwd);

        $sql= "SELECT * FROM adminReg WHERE username = '$username' AND passwordz = '$encrypted' LIMIT 1";
        // echo($sql);
        // die;
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) { //==1 valid details

            $deets = $result->fetch_assoc();

            $_SESSION['user'] = $deets['id'];
            $_SESSION['usernamezz'] = $deets['username'];
            $sess = $_SESSION['status'] = $deets['statuses'];
            
          // print_r($_SESSION['username']);

          header("location:indexAdmin.php?p=success&login=$username?status=$sess");
        

        } else {
            header ("location: admins.php?p=fail");
        }
	}


    function editProfile($admin_Fname,$admin_Lname,$admin_Phone,$admin_Email,$admin_Pwd, $staffid,$file_array)
    {
        // $custid = $_SESSION['user'];
        $tmp_location = $file_array['profilePics']['tmp_name'];
        $original = $file_array['profilePics']['name'];
        $dst = "upload/$original";
        move_uploaded_file($tmp_location, $dst);


        $sql = "UPDATE staff SET
            staff_fname = '$admin_Fname',
            staff_lname = '$admin_Lname',
            staff_password = '$admin_Pwd',
            staff_email = '$admin_Email',
            staff_phone = '$admin_Phone',
            staff_photo = '$original'
            WHERE staff_id = '$staffid'"; 


        $result = $this->conn->query($sql);

        header("location: adminLoginPage.php");

    }

    function getStaffDetails()
    {
        $sql = "SELECT * FROM staff" ;
        $result = $this->conn->query($sql);

        $items = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $items[] = $row;
            }
        }
        return $items; 
    }

    function countAdmins(){
        $sql = "SELECT * FROM adminReg";
        $result = $this->conn->query($sql);

        $items = [];
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $items[] = $rows;
            }
            return count($items);
        }
    }

    function countStatus(){
        $sql = "SELECT * FROM adminReg WHERE statuses IS NULL OR statuses = ''";
        $result = $this->conn->query($sql);

        $items = [];
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $items[] = $rows;
            }
            return count($items);
        }
    }

    function countStaff(){
        $sql = "SELECT * FROM adminReg WHERE statuses = 'staff'";
        $result = $this->conn->query($sql);

        $items = [];
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $items[] = $rows;
            }
            return count($items);
        }
    }

    function countAdmin(){
        $sql = "SELECT * FROM adminReg";
        $result = $this->conn->query($sql);

        $items = [];
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $items[] = $rows;
            }
            return count($items);
        }
    }

    function countAdminss(){
        $sql = "SELECT * FROM adminReg WHERE statuses = 'Admin'";
        $result = $this->conn->query($sql);

        $items = [];
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $items[] = $rows;
            }
             return $items;
        }  
    }
}


?>


