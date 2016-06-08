




$(document).ready(function() {



$($($($('.minimize')[1]).parent().parent()).children()[1]).hide();
$($($($('.minimize')[2]).parent().parent()).children()[1]).hide();
$($($($('.minimize')[3]).parent().parent()).children()[1]).hide()

$($('.minimize')[1]).toggleClass('fa-minus fa-plus');
$($('.minimize')[2]).toggleClass('fa-minus fa-plus');
$($('.minimize')[3]).toggleClass('fa-minus fa-plus');


$('.minimize').on("click", function(){
$($(this).parent().parent().children()[1]).slideToggle('500');
$(this).toggleClass('fa-minus fa-plus');
 
});





$('#bprogress').on("click", function(){
    
    $('#panelprogress').toggle();
    
});

$('#loader')
    .hide()  // Hide it initially
    .ajaxStart(function() {
        $(this).show();
    })
    .ajaxStop(function() {
        $(this).hide();
    })
;



  $( "#allergensselect" ).select2({
      theme: "bootstrap",
      tags: true
  }).on('change', function() {

  $('#allergies').val($("#allergensselect option:selected").text());
  });

  $( "#doctorsselect" ).select2({
      theme: "bootstrap",
      tags: true
  }).on('change', function() {

  $('#doctor').val($("#doctorsselect option:selected").text());
  });







jQuery('#birth').datetimepicker({

  timepicker:false,
  format:'Y-m-d'
});


    $('#myCarousel').on('slide.bs.carousel', function(ev) {
        var id = ev.relatedTarget.id;

//This gives numerical values to the pain according to the chose graph
// f is the id for the hidden text field in the form
        switch (id) {
            case "1":
                $('#f').val(1);
                break;
            case "2":
                $('#f').val(2);
                break;
            case "3":
                $('#f').val(3);
                break;
            case "4":
                $('#f').val(4);
                break;
            case "5":
                $('#f').val(5);
                break;
            case "6":
                $('#f').val(6);
                break;

        }
    })

// The following populates the faces in the view article mode
// TODO replace with divs in the blade Page

    for (var i = 0; i <= $('.hiddenFeeling').length; i++) {

        var imgFeeling = $('.hiddenFeeling').eq(i).text();

        switch (imgFeeling) {
            case "1":
                $('.hiddenFeeling').eq(i).append('<img src="../images/ps1.png" title="No Pain" class="imgIndex" width="100" />');
                break;
            case "2":
                $('.hiddenFeeling').eq(i).append('<img src="../images/ps2.png" title="Hurts a bit" class="imgIndex" width="100" />');
                break;
            case "3":
                $('.hiddenFeeling').eq(i).append('<img src="../images/ps3.png" title="Hurts a little more" class="imgIndex" width="100"/>');
                break;
            case "4":
                $('.hiddenFeeling').eq(i).append('<img src="../images/ps4.png" title="Hurts even more" class="imgIndex" width="100"/>');
                break;
            case "5":
                $('.hiddenFeeling').eq(i).append('<img src="../images/ps5.png" title="Hurts a lot" class="imgIndex" width="100"/>');
                break;
            case "6":
                $('.hiddenFeeling').eq(i).append('<img src="../images/ps6.png" title="Unbearable pain" class="imgIndex" width="100"/>');
                break;


        }

    }




    if (typeof dates !== 'undefined') {




        $(function() {
            $('#mainChart').highcharts({
                chart: {
                    type: 'line'
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: dates
                },
                yAxis: {
                    title: {
                        text: 'Pain scale'
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: [{
                    name: document.getElementsByClassName("dropdown-toggle")[0].text.trim(),
                    data: pains
                }]
            });
        });
    }

if ($('#calendar')) {

  $('#calendar').fullCalendar({
        // put your options and callbacks here
        events: '../calfeed',
        header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
    },


    firstDay: 1,

    defaultView: 'month'

    })

    jQuery('.timepicker').datetimepicker();


}


});
