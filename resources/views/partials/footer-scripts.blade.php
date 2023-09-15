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
<script src="{{ asset('assets/js/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>


<script>

var scrollBottom = $(window).scrollTop() + $(window).height();
$(window).scroll(function(){
      if($(this).scrollTop() > 400) {
        $('.button').css({'display': 'none'});
       } else if (scrollBottom  > 200) {
        $('.button').css({'display': 'block'});
      }
    });
$(document).ready(function() {
    $('img').lazyload();
});
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
        var divContents = document.getElementById("wholePagePrint").innerHTML;
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
                {              
                    extend: 'print',
                        title: function() {
                            return "<div style='font-size: 25px;'>National Rabies Control Program</div>";
                        } 
                }
            ]
        } );
    });


function checkYesNo(e){
    var html = '';
    if(e=='1'){
        $("#txtDate").removeAttr('required', 'true'); 
        html +=`<label class="pl-2">{{ __('Date of 1st Dose of vaccination (day 0)') }}</label>
                <input class="from-control mt-2" type="date" name="date" placeholder="Name" id="txtDate1" required>`;
    $(function(){
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#txtDate1').attr('max', maxDate);
});
    }else{
        $("#txtDate").attr('required', 'true'); 
        html +=``;
    }
    $('#yesINput').html(html);
}

  $(function(){
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#txtDate').attr('max', maxDate);
    $('#txtDate1').attr('max', maxDate);
});
</script>
<script type="text/javascript">
    function ctime(){
    if (!document.getElementById)
    return
    timeElement=document.getElementById("timeid")
    var curdate=new Date()
    var hours=curdate.getHours()
    var minutes=curdate.getMinutes()
    var seconds=curdate.getSeconds()
    var DayNight="PM"
    if (hours<12) DayNight="AM";
    if (hours>12) hours=hours-12;
    if (hours==0) hours=12;
    if (minutes<=9) minutes="0"+minutes;
    if (seconds<=9) seconds="0"+seconds;
    var ctime=hours+":"+minutes+":"+seconds+" "+DayNight;
    timeElement.innerHTML="<p class='time'>"+ctime+"</p>"
    setTimeout("ctime()",1000)
    }
    window.onload=ctime
</script>

@stack('post-scripts')