<html>
    <head>
    
   <style>
       .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
    .searchs-Box {
    border: none;
}

.searchs-Box:hover, .searchs-Box:active, .searchs-Box:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
/* New CSS for news carousel */
.cta-100 {
  margin-top: 100px;
  padding-left: 8%;
  padding-top: 7%;
}
.col-md-4{
    padding-bottom:20px;
}

.white {
  color: #fff !important;
}
.mt{float: left;margin-top: -20px;padding-top: 20px;}
.bg-blue-ui {
  background-color: #708198 !important;
}
figure img{width:300px;}

#blogCarousel {
  padding-bottom: 100px;
}

.blog .carousel-indicators {
  left: 0;
  top: -50px;
  height: 50%;
}


/* The colour of the indicators */

.blog .carousel-indicators li {
  background: #708198;
  border-radius: 50%;
  width: 8px;
  height: 4px;
}

.blog .carousel-indicators .active {
  background-color: #E56399;
}




.item-carousel-blog-block {
  outline: medium none;
  padding: 15px;
}

.item-box-blog {
  border: 1px solid #dadada;
  text-align: center;
  z-index: 4;
  padding: 20px;
}

.item-box-blog-image {
  position: relative;
}

.item-box-blog-image figure img {
  width: 100%;
  height: auto;
}

.item-box-blog-date {
  position: absolute;
  z-index: 5;
  padding: 4px 20px;
  top: -20px;
  right: 8px;
  background-color: #41cb52;
}

.item-box-blog-date span {
  color: #fff;
  display: block;
  text-align: center;
  line-height: 1.2;
}

.item-box-blog-date span.mon {
  font-size: 18px;
}

.item-box-blog-date span.day {
  font-size: 16px;
}

.item-box-blog-body {
  padding: 10px;
}

.item-heading-blog a h5 {
  margin: 0;
  line-height: 1;
  text-decoration:none;
  transition: color 0.3s;
}

.item-box-blog-heading a {
    text-decoration: none;
}

.item-box-blog-data p {
  font-size: 13px;
}

.item-box-blog-data p i {
  font-size: 12px;
}

.item-box-blog-text {
  max-height: 100px;
  overflow: hidden;
}

.mt-10 {
  float: left;
  margin-top: -10px;
  padding-top: 10px;
}

.btn.bg-blue-ui.white.read {
  cursor: pointer;
  padding: 4px 20px;
  float: left;
  margin-top: 10px;
}

.btn.bg-blue-ui.white.read:hover {
  box-shadow: 0px 5px 15px inset #4d5f77;
}
/* top selling carousel */
.blo .carousel-indicators {
	left: 0;
	top: auto;
    bottom: -50px;

}

/* The colour of the indicators */
.blo .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 4px;
}

.blo .carousel-indicators .active {
background: #707070;

}

   </style>
    <link rel="stylesheet" href="css/bootstrap.css" type='text/css'>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="row">
        <div class="container my-4">
             <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                    <div class="row">
                    <div class="col-md-4">
                        <div class="mb-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="images/01.jpg" width="150px" style="border-radius: 50%;" height="150px" alt=""></h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span><i>Student/ Central University</i></span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="mb-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="images/07.jpg" width="150px" style="border-radius: 50%;" height="150px" alt=""></h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span><i>Student/ Central University</i></span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="mb-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="images/05.jpg" width="150px" style="border-radius: 50%;" height="150px" alt=""></h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span><i>Student/ Central University</i></span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                 </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                <div class="carousel-item">

                    <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                <img class="card-img-top" src="images/01.jpg" height="300px" alt="Card image cap">
                                    
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">

                                    <img class="card-img-top" src="images/01.jpg" height="300px" alt="Card image cap">
                                
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">

                                    <img class="card-img-top" src="images/01.jpg" height="300px" alt="Card image cap">
                            
                                </div>
                            </div>
                    </div>
                </div>
                    <!--/.Second slide-->

                </div>
                <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->


        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="border: 1px solid red; min-height: 100px;">
            
        </div>
        <div class="col-md-4" style="border: 1px solid red; min-height: 100px;">
        
        </div>
        <div class="col-md-4" style="border: 1px solid red; min-height: 100px;">
        
        </div>
    </div>
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg searchs-Box" type="search" placeholder="Search topics or keywords">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!-- carousel -->
                        <div class="container">
                            <div class="row">
                                <div class="MultiCarousel" data-items="1,3,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                    <div class="MultiCarousel-inner">
                                        <div class="item">
                                            <div class="pad15">
                                            <img src="images/05.jpg" width="100%" class="proImg" alt="">
                                                <div>
                                                    <p class="text-center mt-4">
                                                        <b>Hand Sanitizers</b>
                                                        <br>
                                                        <span>
                                                            <button class=" mt-1 btn btn-block subss">Shop now</button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                                <img src="images/03.jpg" width="100%" class="proImg" alt="">
                                                <div>
                                                    <p class="text-center mt-4">
                                                        <b>Hand Sanitizers</b>
                                                        <br>
                                                        <span>
                                                            <button class=" mt-1 btn btn-block subss">Shop now</button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                                <img src="images/07.jpg" width="100%" class="proImg" alt="">
                                                <div>
                                                    <p class="text-center mt-4">
                                                        <b>Hand Sanitizers</b>
                                                        <br>
                                                        <span>
                                                            <button class=" mt-1 btn btn-block subss">Shop now</button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                                <img src="images/06.jpg" width="100%" class="proImg" alt="">
                                                <div>
                                                    <p class="text-center mt-4">
                                                        <b>Hand Sanitizers</b>
                                                        <br>
                                                        <span>
                                                            <button class=" mt-1 btn btn-block subss">Shop now</button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary leftLst"><</button>
                                    <button class="btn btn-primary rightLst">></button>
                                </div>
                            </div>
                        </div>

                        <!-- second carousel to check -->
                        <div class="container">
                            <div class="row">
                                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                    <div class="MultiCarousel-inner">
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                    <img src="images/07.jpg" class="proImg" alt="">
                                                </div>
                                                <div class="col-12">
                                                    <p class="pros">
                                                        <b>
                                                            POMAFRIQ PROPERTY
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="pros">
                                                    <p>
                                                        <b>
                                                            $450.00
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                    <img src="images/02.jpg" class="proImg" alt="">
                                                </div>
                                                <div class="col-12">
                                                    <p class="pros">
                                                        <b>
                                                            POMAFRIQ PROPERTY
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="pros">
                                                    <p>
                                                        <b>
                                                            $450.00
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                <img src="images/04.jpg" class="proImg" alt="">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                        POMAFRIQ PROPERTY
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="pros">
                                                <p>
                                                    <b>
                                                        $450.00
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                <img src="images/08.jpg" class="proImg" alt="">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                        POMAFRIQ PROPERTY
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="pros">
                                                <p>
                                                    <b>
                                                        $450.00
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                                <div class="col-12">
                                                    <img src="images/06.jpg" class="proImg" alt="">
                                                </div>
                                                <div class="col-12">
                                                    <p class="pros">
                                                        <b>
                                                            POMAFRIQ PROPERTY
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="pros">
                                                    <p>
                                                        <b>
                                                            $450.00
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                <img src="images/03.jpg" class="proImg" alt="">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                        POMAFRIQ PROPERTY
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="pros">
                                                <p>
                                                    <b>
                                                        $450.00
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                    <img src="images/04.jpg" class="proImg" alt="">
                                                </div>
                                                <div class="col-12">
                                                    <p class="pros">
                                                        <b>
                                                            POMAFRIQ PROPERTY
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="pros">
                                                    <p>
                                                        <b>
                                                            $450.00
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                <img src="images/03.jpg" class="proImg" alt="">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                        POMAFRIQ PROPERTY
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="pros">
                                                <p>
                                                    <b>
                                                        $450.00
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                <img src="images/06.jpg" class="proImg" alt="">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                        POMAFRIQ PROPERTY
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="pros">
                                                <p>
                                                    <b>
                                                        $450.00
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                <img src="images/05.jpg" class="proImg" alt="">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                        POMAFRIQ PROPERTY
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="pros">
                                                <p>
                                                    <b>
                                                        $450.00
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                    <img src="images/08.jpg" class="proImg" alt="">
                                                </div>
                                                <div class="col-12">
                                                    <p class="pros">
                                                        <b>
                                                            POMAFRIQ PROPERTY
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="pros">
                                                    <p>
                                                        <b>
                                                            $450.00
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                <img src="images/06.jpg" class="proImg" alt="">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                        POMAFRIQ PROPERTY
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="pros">
                                                <p>
                                                    <b>
                                                        $450.00
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                    <img src="images/03.jpg" class="proImg" alt="">
                                                </div>
                                                <div class="col-12">
                                                    <p class="pros">
                                                        <b>
                                                            POMAFRIQ PROPERTY
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="pros">
                                                    <p>
                                                        <b>
                                                            $450.00
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                <img src="images/04.jpg" class="proImg" alt="">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                        POMAFRIQ PROPERTY
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="pros">
                                                <p>
                                                    <b>
                                                        $450.00
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                <img src="images/02.jpg" class="proImg" alt="">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                        POMAFRIQ PROPERTY
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="pros">
                                                <p>
                                                    <b>
                                                        $450.00
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="pad15">
                                            <div class="col-12">
                                                    <img src="images/01.jpg" class="proImg" alt="">
                                                </div>
                                                <div class="col-12">
                                                    <p class="pros">
                                                        <b>
                                                            POMAFRIQ PROPERTY
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="pros">
                                                    <p>
                                                        <b>
                                                            $450.00
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                                                </div>
                                                <div class="col-12" style="text-align: center;">
                                                <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn slides leftLst"><</button>
                                    <button class="btn slides rightLst">></button>
                                </div>
                            </div>
                        </div>
            <div class="row">
                <div class=" col-md-2 card" style="border:1px solid red; min-height:100px;">
                    <img src="images/06.jpg" width="100%" class="proImg" alt="">
                    <div>
                        <p class="text-center mt-4">
                            <b>Hand Sanitizers</b>
                            <br>
                            <span>
                                <button class=" mt-1 btn btn-block subss">Shop now</button>
                            </span>
                        </p>
                    </div>
                </div>
                <div class=" col-md-2 card" style="border:1px solid red; min-height:100px;">
                    <div class="col-12" style="border: 1px solid red;">

                            <div style="border: 1px solid green; float:right; z-index:10;"> <span>fhf</span></div> 

                        <img style="z-index: -2;" src="images/06.jpg" width="100%" height="200px" alt="">


                            <div style="clear:both"></div>
                    </div>
                    <div class="col-12">
                        <p class="pros">
                            <b>
                                POMAFRIQ PROPERTY
                            </b>
                        </p>
                    </div>
                    <div class="pros">
                        <p>
                            <b>
                                $450.00
                            </b>
                        </p>
                    </div>
                    <div class="col-12" style="text-align: center;">
                       <a href="#"> <button class="btn btn-block details"> View Details</button> </a>
                    </div>
                    <div class="col-12" style="text-align: center;">
                       <a href="#"> <button class="btn btn-block cartsAdd"> Add to Cart</button> </a> 
                    </div>
                </div>
            </div>
            <div class="container cta-100 ">
        <div class="container">
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                  <div class="carousel-item ">
                    <div class="row">
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                             <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
   
                      <div class="container">
            <div class="row blo">
                <div class="col-md-12">
                    <div id="bloCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#bloCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#bloCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <a href="#">
                                            <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <a href="#">
                                            <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <a href="#">
                                            <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <a href="#">
                                            <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
</div>

<!-- modal button for signup -->
<button class="btn btn-danger" data-toggle="modal" data-target="#signup">Sign Up</button>
<!-- end of button and start for the code itself -->

<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Sign Up</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="signup.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="fname" placeholder="enter firstname" name="fname" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="lname" placeholder="enter lastname" name="lname" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="pwd1" placeholder="Password" name="pwd1" required> 
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="pwd2" placeholder="Password" name="pwd2" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phoneNo" placeholder="phone number" name="phoneNo" required>
                            </div>
                            
                            
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    I agree to terms and conditions of usage on this website.
                                </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-custom">Sign Up</button>
                        </form>      
                    </div>
                </div>       
            </div>
        </div>  
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="red" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg>

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
        <script src='js/jquery.js' type='text/javascript' ></script>
        <script src='js/popper.min.js' type='text/javascript' ></script>
        <script src='js/bootstrap.min.js'  type='text/javascript'></script>
    <script type="text/javascript" src="styles.js"></script>
    <script>
        // optional
		$('#bloCarousel').carousel({
				interval: 5000
		});
    </script>
    </body>
</html>
