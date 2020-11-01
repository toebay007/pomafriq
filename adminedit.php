<?php require("adminheader.php") ?>
<?php 
    $sat = $r->countStatus();
    $staff = $r->countStaff();
    $admin = $r->countAdmin();
    $detail = $r->getAdminDetail();
?>
<div class="col-md-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Admin Status</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-md-12">
       <p>Total Number of Admins: <?php if(!empty($admin)){ echo $admin; } else{ echo 0; }  ?> </p>  
       <p>Total Number of Staff: <?php if(!empty($staff)){ echo $staff; } else{ echo 0; }  ?> </p>
       <p>Total Number of Unassigned Admins: <?php echo $sat; ?> </p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-responsive-md">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th></th>
                    <th>Take Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($detail)){ foreach($detail as $dees) {  ?>
                <tr>
                    <td><?php echo $dees['fullname']; ?></td>
                    <td><?php echo $dees['phoneNumbwer']; ?></td>
                    <td><?php echo $dees['emailz']; ?></td>
                    <form action="adminUpdate.php" method="POST">
                        <td><?php if(!empty($dees['statuses'])){ echo $dees['statuses']; }else{ ?> 
                            <select name="adminstatus" class="form-control">
                                <option value="" selected></option>
                                <option value="staff">Staff</option>
                                <option value="Admin">Admin</option>
                            </select>
                            <?php } ?>
                        </td>
                        <td><input type="hidden" name="conID" value="<?php echo $dees['adminsz']; ?>"></td>
                        <td><?php if(empty($dees['statuses'])){?> <button type="submit" class="subss">Save</button> <?php } else{ ?>  <?php } ?></td>
                    </form>
                </tr>
                <?php } }else{ ?>
                    <tr>
                        <td colspan="6" class="alert alert-primary text-center">No Admin?...This is Wierd, Abeg no Vex...How did you get here?</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php require("footerss.php") ?>