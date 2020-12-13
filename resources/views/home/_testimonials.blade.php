<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Travel
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <img src="images/g7.jpg" alt=" " class="img-responsive" />
                <p>Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam,
                    nisi ut aliquid ex ea commodi consequatur? Quis autem
                    vel eum iure reprehenderit qui in ea voluptate velit
                    esse quam nihil molestiae consequatur, vel illum qui
                    dolorem eum fugiat quo voluptas nulla pariatur.
                    <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                        esse quam nihil molestiae consequatur.</i></p>
            </div>
        </div>
    </div>
</div>
<!-- //bootstrap-modal-pop-up -->


<!-- js -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery-2.1.4.min.js"></script>
<script>
    $('ul.dropdown-menu li').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
</script>
<script type="text/javascript" src="{{asset('assets')}}/js/bootstrap.js"></script>
<!-- Flexisel-js for-testimonials -->
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems:1,
            animationSpeed: 1000,
            autoPlay: false,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems:1
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 1
                }
            }
        });

    });
</script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.flexisel.js"></script>
<!-- Flexisel-js for-testimonials -->
<!-- stats -->
<script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
