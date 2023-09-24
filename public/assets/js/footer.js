
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

    $(document).ready(function() {
        $(".btn2").click(function() {
            $(".grid-item.filter2").removeClass('d-none');
        });

        $(".btn3").click(function() {
            $(".grid-item.filter3").removeClass("d-none");
        });
    });

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
                           ;
                        }                    
                       
               }
            ]
        } );
    });


    $(document).ready(function() {
        const searchParams = new URLSearchParams(window.location.search);       
        const vDate = new Date(searchParams.get('date'));
        let vMonth = vDate.getMonth();
        let bDate = vDate.getDate();
        let vYear = vDate.getFullYear();        
    
        $('.example1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {              
                    extend: 'print',
                        title: function() {
                            return "<div style='display:flex;justify-content: space-between;align-items: center;'> <div style='font-size: 25px;margin-bottom:20px;'>Vaccination Schedule</div> <div style='font-size: 18px;margin-bottom:20px;'> Date : "+`${bDate +"-" + (Number(vMonth) + 1)  + "-" + vYear}`+" </div> <ul style='display:block;position: absolute; bottom :75%'><li style='font-size: 16px;font-weight:400; margin-bottom:10px;'>1- Site of vaccine injection: Adult/Children : Deltoid muscle (IM/ID) Infant and Children : Anterolateral thigh(IM) </li> <li style='font-size: 16px;font-weight:400;margin-bottom:10px;'>2- All category III bites wounds must be infiltrated with Rabies immunoglobulin.</li>  <li style='font-size: 16px;font-weight:400'>3- If you have never been vaccinated for Rabies, this is the schedule you need to follow.</li></ul>";
                        }                          
               }
            ]
        } );
    });
    


function checkYesNo(e){
    var html = '';
    if(e=='1'){
        $("#txtDate").removeAttr('required', 'true'); 
        html +=`<input class="from-control mt-2" type="date" name="date" placeholder="Name" id="txtDate1" required>`;
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

    $("document").ready(function(){
        setTimeout(function(){
           $("div.alert").remove();
        }, 5000 ); // 5 secs
    
    });
    // disable alphate
    $('.phone').keypress(function(e) {
       // alert('hii');
        var regex = new RegExp("^[0-9_]");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        e.preventDefault();
        return false;
    });

$(document).ready(function(){ 
    $(".BDC_CaptchaImageDiv a").remove(); 
 
});