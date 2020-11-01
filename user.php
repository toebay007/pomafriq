<?php 
	require("connUser.php");
	/**
	 * Admin function
	 */
	class users extends connUser
	{

	
    function reg($fname,$lname,$username,$pwd1,$pwd2,$email,$phoneNo)
    {
        if(!$fname || !$lname || !$username || !$pwd1 || !$pwd2 || !$email || !$phoneNo){
            header("location:signups.php?input=not_complete");
        } 
        else if($pwd1 === $pwd2 && strlen($pwd1) > 6){
            $encrypted = md5($pwd1); 

            $sql = "INSERT INTO user SET
                firstnames = '$fname',
                lastnames = '$lname',
                username    =   '$username',
                passwords    =   '$encrypted',
                emails  =   '$email',
                phoneNumbers =   '$phoneNo'";


                $id=    $this->conn->insert_id;

                //$_SESSION['username']   =   $id;

               $result = $this->conn->query($sql);

               if($result == true){
                    header("location:index.php?success=successful");
                } else{
                    header("location:signups.php?data=error");
                }
        } 
        else{
            header("location:signups.php?short=password");
        }
    }

	function login($username,$pwd)
	{
		$encrypted = md5($pwd);

        $sql= "SELECT * FROM user WHERE username = '$username' AND passwords = '$encrypted' LIMIT 1";

        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) { //==1 valid details

            $deets = $result->fetch_assoc();

            $_SESSION['user'] = $deets['users_id'];
            $_SESSION['username'] = $deets['username'];
            //$_SESSION['username'] = $deets['firstnames'];
        //    if(isset($_SESSION['user'])){
        //         echo('true');
        //    } 
           //echo $_SESSION['username'];
            header("location: index.php?p=success&login=$username");
        

        } else {
            header ("location: index.php?p=fail");
        }
	}

    function getDetails($userid)
        {
            $sql = "SELECT * FROM poma WHERE user_sid = '$userid' " ;
            $result = $this->conn->query($sql);
            $row = 0;
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            }
            return $row; 
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

   


}


?>


