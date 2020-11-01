<?php require("adminheader.php") ?>
<div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="adminContact.php" class="breadcrumbs">Contacts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Details</li>
            </ol>
        </nav>
        </div>
<?php
    if(isset(($_GET['id']))){
        $id = $_GET['id'];
    $messagecrudeInfos = $co->getMessageStatus(($_GET['id']));
?>
<?php  
     require "configN.php";

    $records = $mysqli->query("SELECT * FROM contacts where con_id = '$id'"); // fetch data from database
    while($data = $records->fetch_assoc()) {
       
?>
<form action="contactUpdate.php" method="POST">
<div class="form-row">
        <label for="messagestatus" class="col-md-2 col-form-label">Message Status</label>
        <div class="form-group col-md-3">
            <select name="messagestatus" id="orderstatus" class="form-control">
                <option value="<?php echo $messagecrudeInfos['statuses']  ?>" selected><?php echo $messagecrudeInfos['statuses']  ?></option>
                <option value="Pending">Pending</option>
                <option value="Resolved">Resolved</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <input type="hidden" name="conID" value="<?php echo $_GET['id']; ?>">
            <button type="submit" class="subss" style="margin-top: 0px;">Save</button>
        </div>    
    </div>
</form>
<div class="row">
<div class="col-md-12 space">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $data['names']  ?></td>
                    <td><?php echo $data['emails']  ?></td>
                    <td><?php echo $data['subjects']  ?></td>
                    <td><?php echo $data['messages']  ?></td>
                    <td><?php if(empty($data['statuses'])){echo("Not Resolved");} else{echo $data['statuses'];} ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php } }else{ ?>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center" style="margin-top: 100px; font-size:100px;"> 
            WRONG MOVE ADMIN...WRONG MOVE!!!
        </h1>
        <center>
            <span id="cents">
                Kindly go back by clicking 
                <a href="adminContact.php"><i><u> here</u></i>
                </a>
            </span>
        </center>
    </div>
</div>
<?php } ?>
<?php  require("footerss.php"); ?>