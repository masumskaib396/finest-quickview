/*
Jquery Ready!
*/
jQuery(document).ready(function($){
    "use strict";

    function fdquickviewimageslider(){
        $('.finest-quick-view-learg-img').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.finest-quick-view-thumbnails'
        });
    }

    function fdqucikviewthumb(){
        $('.finest-quick-view-thumbnails').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.finest-quick-view-learg-img',
            dots: false,
            arrows: false,
            focusOnSelect: true,

        });
    }

    $('.storquickview').click(function(event){
        event.preventDefault();
        var $a = $(this),
        id = $a.data('id');
        $('.fdqv-modal-body').html(''); /*clear content*/
        $('#fdquick-viewmodal').addClass('storquickview-open stloading');
        $('#fdquick-viewmodal .fdqvcloseqv').hide();
        $('.fdqv-modal-body').html('<div class="stor-loading"><div class="stds-css"><div style="width:100%;height:100%" class="stds-ripple"><div></div><div></div></div>');
        var url = $a.data('url');
        var nonce = $a.data('referrar');
        var data = {
            id: id,
            action: "finest_quickview",
        };
        $.ajax({
            url: url,
            data: data,
            method: 'POST',
            success: function (response) {
                setTimeout(function () {
                    $('.fdqv-modal-body').html(response);
                    $('#fdquick-viewmodal .fdqvcloseqv').show();
                    storCartQtyBtn();
                    fdquickviewimageslider();
                    fdqucikviewthumb();

                }, 300 );
            },
            complete: function () {
                $('#fdquick-viewmodal').removeClass('stloading');
                $('.fdqv-modal-dialog').addClass("modal-style");
            },
            error: function () {
                console.log("Quick View Not Loaded");
            },
        });

    });
    $('.fdqvcloseqv').on('click', function(event){
        $('#fdquick-viewmodal').removeClass('storquickview-open');
        $('body').removeClass('storquickview');
        $('.fdqv-modal-dialog').removeClass("modal-style");
    });

    $( 'body' ).on( 'click tap', '.storquickview-open', function() {
		$('#fdquick-viewmodal').removeClass('storquickview-open');
        $('body').removeClass('storquickview');
        $('.fdqv-modal-dialog').removeClass("modal-style");
	} );


    function storCartQtyBtn() {
        $(".woocommerce .quantity").append('<span class="stor-qty-dec-btn stor-qty-counter">-</span><span class="stor-qty-inc-btn stor-qty-counter">+</span>');
        $(".woocommerce .quantity .stor-qty-counter").on("click", function () {
            var $button = $(this);
            var oldValue = $button.parent('.quantity').find("input").val();
            oldValue = oldValue ? oldValue : 0;
            if ($button.hasClass("stor-qty-inc-btn")) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent('.quantity').find("input").val(newVal);
            $('.woocommerce div.quantity input.qty').change();
        });
    }
    // End basic front-end scripts here
});