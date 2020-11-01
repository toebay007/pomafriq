<?php  require("adminheader.php");  ?>
<?php 

$contact = $co->getMessages();
$MessageCount = $co->countMessage();
$pends = $co->PendingMessages();
$receive = $co->ResolvedMessages();

?>
<div class="col-md-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contacts</li>
        </ol>
    </nav>
</div>
<div class="row my-2">
    <div class="col-md-2">
        <button class="subss" id="NewM"><?php if(!empty($MessageCount)){ echo $MessageCount; } else{ echo 0;} ?> New Message</button>
    </div>
    <div class="col-md-2">
        <button class="subss" id="Pending">Pending Messages</button>
    </div>
    <div class="col-md-2">
        <button class="subss" id="Answer">Addressed Messages</button>
    </div>
</div>
<!-- Begining of New message -->
<div class="row my-2" id="newM">
    <div class="col-md-12 space">
        <table class="table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Take Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($contact)){ foreach($contact as $contacted ){ ?>
                <tr>
                    <td><?php echo $contacted['emails']; ?></td>
                    <td><?php echo $contacted['subjects']; ?></td>
                    <td><?php echo nl2br($contacted['messages']); ?></td>
                    <td><a href="contactdetails.php?id=<?php echo $contacted['con_id']; ?>"><button class="subss">Details</button></a></td>
                </tr>
                <?php } } else{ ?>
                    <tr>
                        <td colspan="6" class="alert alert-primary text-center">No New Messages</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- End of New message -->
<!-- Beginning of Pending Messages -->
<div class="row my-2" id="pend">
    <div class="col-md-12 space">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Take Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($pends)) { foreach($pends as $pending) { ?><tr>
                    <td><?php echo $pending['names']; ?></td>
                    <td><?php echo $pending['emails']; ?></td>
                    <td><?php echo $pending['subjects']; ?></td>
                    <td><?php echo $pending['messages']; ?></td>
                    <td><?php echo $pending['statuses']; ?></td>
                    <td><a href="contactdetails.php?id=<?php echo $pending['con_id']; ?>"><button class="subss">Details</button></a></td>
                </tr>
                   

              <?php } }else {  ?>
                 <tr>
                        <td colspan="6" class="alert alert-warning text-center">No Pending Messages</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- End of Pending Messages -->
<!-- Beginning of Answered Messages -->
<div class="row my-2" id="answer">
    <div class="col-md-12 space">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($receive)) { foreach($receive as $received) { ?><tr>
                    <td><?php echo $received['names']; ?></td>
                    <td><?php echo $received['emails']; ?></td>
                    <td><?php echo $received['subjects']; ?></td>
                    <td><?php echo $received['messages']; ?></td>
                    <td><?php echo $received['statuses']; ?></td>
                    <td>
                        <a href="contactdetails.php?id=<?php echo $received['con_id']; ?>">
                            <button class="subss">
                                Details
                            </button>
                        </a>
                    </td>
                </tr>
                   

              <?php } } else{  ?>
                 <tr>
                        <td colspan="6" class="alert alert-primary text-center">No Resolved Messages</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Ending of Answered Messages -->

<?php  require("footerss.php"); ?>