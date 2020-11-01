$(document).ready(function(){


        // $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
        // $("#success-alert").slideUp(500);
        //         });

        //$("#success-alert").hide();
        // $("#myWish").click(function showAlert() {
        // //   $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
        // //     $("#success-alert").slideUp(500);
        // //   });
        //   //window.location.href = "wishlist.php?product=<?php echo $data['products_name']; ?>&id=<?php echo $data['products_id']; ?>&user=<?php echo $_SESSION['user']; ?>";
        // });


    $(function() {
        $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
    });

     var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }
    
    $(".ordersz").click(function(){
        $(".orders").show();
        $(".ordersinTrans").hide();
        $(".ordersHistory").hide();
        $(".frequentCus").hide();
    })

    $(".ordersinTransit").click(function(){
        $(".orders").hide();
        $(".ordersinTrans").show();
        $(".ordersHistory").hide();
        $(".frequentCus").hide();
    })

    $(".orderHis").click(function(){
        $(".orders").hide();
        $(".ordersinTrans").hide();
        $(".ordersHistory").show();
        $(".frequentCus").hide();
    })
    $(".frequent").click(function(){
        $(".orders").hide();
        $(".ordersinTrans").hide();
        $(".ordersHistory").hide();
        $(".frequentCus").show();

    })

    

    $(".searchPro").click(function(){
        $(".searchP").show();
        $(".viewC").hide();
        $(".viewP").hide();
        $(".editP").hide();
        
    })

    $(".viewcat").click(function(){
        $(".searchP").hide();
        $(".viewC").show();
        $(".viewP").hide();
        $(".editP").hide();
        
    })

    $(".viewPro").click(function(){
        $(".searchP").hide();
        $(".viewC").hide();
        $(".viewP").show();
        $(".editP").hide();
        
    })

    $(".editPro").click(function(){
        $(".searchP").hide();
        $(".viewC").hide();
        $(".viewP").hide();
        $(".editP").show();
        
    })

    $(".create").click(function(){
        $(".creaT").show();
        $(".edit").hide();
        $(".views").hide();
    })

    $(".editsB").click(function(){
        $(".creaT").hide();
        $(".edit").show();
        $(".views").hide();
    })

    $(".viewsB").click(function(){
        $(".creaT").hide();
        $(".edit").hide();
        $(".views").show();
    })

    $("#NewM").click(function(){
        $("#newM").show();
        $("#pend").hide();
        $("#answer").hide();
    })
    $("#Pending").click(function(){
        $("#newM").hide();
        $("#pend").show();
        $("#answer").hide();
    })
    $("#Answer").click(function(){
        $("#newM").hide();
        $("#pend").hide();
        $("#answer").show();
    })
    
    $("#gridsCheck").change(function(){
        var st = this.checked;
        if(st){
          $(".signups").prop("disabled", false);
        } else{
          $(".signups").prop("disabled", true);
        }
        
    });
});