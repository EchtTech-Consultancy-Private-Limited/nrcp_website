<script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
<!-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/rsmenu-main.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/contact.form.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>


<script>
$(document).ready(function() {
    $(".btn2").click(function() {
        $(".grid-item.filter2").removeClass('d-none');
    });

    $(".btn3").click(function() {
        $(".grid-item.filter3").removeClass("d-none");
    });
    $(".btn4").click(function() {
        $(".grid-item.filter4").removeClass("d-none");
    });
});
</script>
<script>
    $(document).ready(function() {
        $(".btn2").click(function() {
            $(".grid-item.filter2").removeClass('d-none');
        });

        $(".btn3").click(function() {
            $(".grid-item.filter3").removeClass("d-none");
        });
    });
</script>
<script>
$(document).ready(function() {
    $('.image-link').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function
            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
});

    function printDiv() {
        var divContents = document.getElementById("tabContent").innerHTML;
        var a = window.open('', '', 'height=600, width=600');
        a.document.write('<html>');
        a.document.write('<body>');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }


    $(document).ready(function() {
    $('.example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
} );

</script>


@stack('post-scripts')