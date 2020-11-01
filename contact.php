<?php require "headerss.php"    ?>
    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="breadcrumbs">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 shops">
        <?php 
            if(isset($_GET['empty']) && ($_GET['empty'] == 'field')){
                echo'<div class="alert text-center alert-warning alert-dismissible fade show">';
                echo'<p>Check that all Fields are filled correctly</p>';
                echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span></button>';
                echo'</div>';
            }
        ?>
        <?php 
            if(isset($_GET['form']) && ($_GET['form'] == 'success')){
                echo'<div class="alert text-center alert-success alert-dismissible fade show">';
                echo'<p>Your message has been recieved. We would get back to you Shortly</p>';
                echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span></button>';
                echo'</div>';
            }
        ?>
        <?php 
            if(isset($_GET['form']) && ($_GET['form'] == 'fail')){
                echo'<div class="alert text-center alert-danger alert-dismissible fade show">';
                echo'<p>Error :: Please try again in few minutes time</p>';
                echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span></button>';
                echo'</div>';
            }
        ?>
            <form action="contacts.php" method="POST">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <label for="name">Your Name(required)</label>
                                    <input type="text" name="names" id="name" class="form-control">
                                </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="email">Your Email Address(required)</label>
                                    <input type="email" name="emails" id="email" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="subject">Subject</label>
                                <input type="text" name="subjects" id="subject" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="texts">Your message</label>
                                <textarea name="messages" id="texts" cols="30" rows="10" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="submit" class="btn btn-secondary btn-block">Send</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
           </form>
        </div>
        <div class="col-md-4 shops">
           <div class="col-12">
                <div class="col-12">
                    <h4>Latest Post</h4>
                    <hr width="100%" class="hr">
                </div>
                <table class="table table-borderless">
                    <tbody>
                        <?php foreach ($blogPro as $blogPros) {?>
                        <tr>
                            <td><a href="read.php?id=<?php echo $blogPros['id']; ?>" class="readB"><span><?php echo $blogPros['Topic']; ?></span></a></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>



<?php require "footerss.php"    ?>