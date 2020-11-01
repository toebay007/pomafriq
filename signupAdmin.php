
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="signUpdetails.php" method="post">
            <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="finame" class="form-control" value="">
            </div> 
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="laname" class="form-control" value="">
            </div> 
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
            </div>    
            <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" value="">
                </div>
            <div class="form-group">
                <label>Emails</label>
                <input type="text" name="emails" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="number" name="phoneNo" class="form-control" value="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>