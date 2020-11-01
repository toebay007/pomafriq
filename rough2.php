<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $(".checks").change(function(){
        var st = this.checked;
        if(st){
          $(".check").prop("disabled", false);
        } else{
          $(".check").prop("disabled", true);
        }
        
    });
   
});
</script>
        <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <p><input type="checkbox" class="checks" id="myCheck"> Are you sure?</p>
    <button type="button" class="check" disabled>Yes</button>
    <button type="button" class="uncheck">No</button> 


            <div class="defaults col-md-12">
                <form method="post" action="#" class="justifys">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <i class="fas fa-search text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control searchs-Box" type="search" placeholder="Search">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn  searchBtn" type="submit">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>
            </div>
</body>
</html> 