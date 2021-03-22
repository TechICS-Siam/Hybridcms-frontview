
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/popper.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/mdb.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/nav-scroll.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/top-scroll.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/tilt.jquery.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/sharepost.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/aos.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/backend/js/blog.script.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/backend/js/blog.scrpt.s.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>


<script type="text/javascript">
    AOS.init({
        offset: 300,
        duretion: 1000,
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".mousy").tilt({
            maxTilt: 20,
            scale: 1,
            glare: false,
            maxGlare: 0.5,
        });
    });
</script>

<script>
    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
<script>
    $("#search-icon").click(function () {
        $(".nav").toggleClass("search");
        $(".nav").toggleClass("no-search");
        $(".search-input").toggleClass("search-active");
    });

    $('.menu-toggle').click(function () {
        $(".nav").toggleClass("mobile-nav");
        $(this).toggleClass("is-active");
    });

</script>
<script>
    $(".owl-carousel").owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        items: 5,
        button: false,
        nav: true,
        dots: false,
        loop: true,
        margin: 0,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true
            },
            300: {
                items: 1,
                nav: true,
                loop: true
            },
            600: {
                items: 3,
                nav: true,
                loop: true
            },
            1000: {
                items: 5,
                nav: true,
                loop: true
            }
        }
    });

</script>
<script>
    $("#tile-1 .nav-tabs a").click(function () {
        var position = $(this).parent().position();
        var width = $(this).parent().width();
        $("#tile-1 .slider").css({"left": +position.left, "width": width});
    });
    var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
    var actPosition = $("#tile-1 .nav-tabs .active").position();
    $("#tile-1 .slider").css({"left": +actPosition.left, "width": actWidth});
</script>
<script>
    $.each($(".share"), function (index, val) {

        var url = $(this).data('url');
        $(this).jsSocials({
            shares: ["facebook", "twitter", "linkedin"],
            showLabel: false,
            url: url,
        });
    });

</script>


<script>
    function afterReveal(el) {
        el.addEventListener('animationend', function () {
            var elem = $(el).find('.counter-up');
            if (elem) {
                animateCount(elem);
            }
        });
    }

    new WOW({callback: afterReveal}).init();


    $('.pop').popover({
        trigger: 'manual',
        html: true,
        animation: true,
        title: '',
        offsets: '0 0',
        content: function () {
            return $('#location-pop-over').html();
        },
    })
            .on('mouseenter', function () {
                var _this = this;
                var pop = $(this).popover('show');
                var id = $(this).attr('aria-describedby');

                var popover = $('#' + id);
                //popover.css('width', 250);

                popover.find('.popover-header').hide();

                popover.css({
                    'width': '280px',
                    'margin-top': '10px',
                });

                $('.popover').on('mouseleave', function () {


                    setTimeout(function () {
                        if (!$('.popover:hover').length) {
                            $(_this).popover('hide');
                        }
                    }, 500);

                });
            }).on('mouseleave', function () {
        var _this = this;
        setTimeout(function () {
            if (!$('.popover:hover').length) {
                $(_this).popover('hide');
            }
        }, 50);
    });



    $(".pop").on('shown.bs.popover', function () {
        $('.popover-body .card').on('mouseenter', function () {
            $(this).find('.collapse').collapse("show");
        }).on('mouseleave', function () {
            $(this).find('.collapse').collapse("hide");
        });
    });






    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('.portfolio-card').on('mouseenter', function () {

        var val = $(this).width() > $(this).height() ? $(this).width() : $(this).height();
        $(this).find('.overly').css({
            'width': val + 100,
            'height': val + 100,
        });
    }).on('mouseleave', function () {
        $(this).find('.overly').css({
            'width': '0',
            'height': '0',
        });
    });



    $('.share-toggle').click(function (t) {
        t.preventDefault(), $(this).toggleClass("share-expanded").parent().find("div").toggleClass("social-reveal-active")
    });




    $('.search-icon').click(function (event) {
        $(this).find('div').toggleClass('active');
    });




</script>


<script>
    $(function () {
        $('.class_er_name ').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
</script>


<script type="text/javascript">
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 10000);
</script>



