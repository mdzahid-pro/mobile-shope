$(document).ready(function(){
    /*  Owl Carousel Banner */
    $("#banner-aria .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });
    /*  !Owl Carousel Banner  */

    //Top Sale Owl Carousel
    $("#topsale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0: {
                items:1
            },600: {
                items: 3
            },1000: {
                items: 5
            }
        }

    });


    //Special Price

    //iso tope
    var $grid = $(".grid").isotope({
        itemSlector:'.grid-item',
        layoutMode:'fitRows'
    });

    $(".button-group").on("click","button",function(){
        $filterValue = $(this).attr("data-filter");
        $grid.isotope({filter: $filterValue});
    });


     $("#new-phone .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0: {
                items:1
            },600: {
                items: 3
            },1000: {
                items: 5
            }
        }

    });

    //Owl Carousel 
    $("#blogs .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },600:{
                items:3
            }
        }
    });

    //Product Quentity
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $input = $(".qty .qty-input");
    $qty_up.click(function(e){
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 9){
            $input.val(function(i,oldval){
                return ++oldval;
            });
        }
    });

    $qty_down.click(function(e){
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <=10){
            $input.val(function(i,oldval){
                return --oldval;
            });
        }
    });


});