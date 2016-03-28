$(document).ready(function(){

  $('#myCarousel').on('slide.bs.carousel', function (ev) {
    var id = ev.relatedTarget.id;
    switch (id) {
      case "1":
      $('#f').val(1);
        // do something the id is 1
        break;
      case "2":
      $('#f').val(2);
        // do something the id is 1
            // do something the id is 2
        break;
      case "3":
      $('#f').val(3);
        // do something the id is 1

        // do something the id is 3
        break;
        case "4":
          // do something the id is 3
          $('#f').val(4);
            // do something the id is 1
            break;
          case "5":
            // do something the id is 3
            $('#f').val(5);
              // do something the id is 1
              break;
            case "6":
              // do something the id is 3
              $('#f').val(6);
                // do something the id is 1
                break;
                  //the id is none of the above
    }
      })




for (var i = 0; i <= $('.hiddenFeeling').length; i++) {

var imgFeeling = $('.hiddenFeeling').eq(i).text();

switch (imgFeeling) {
  case "1":
$('.hiddenFeeling').eq(i).append('<img src="/img/ps1.jpg" class="imgIndex" width="80" height="60"/>');
  break;
  case "2":
$('.hiddenFeeling').eq(i).append('<img src="/img/ps2.jpg" class="imgIndex" width="80" height="60"/>');
  break;
  case "3":
$('.hiddenFeeling').eq(i).append('<img src="/img/ps3.jpg" class="imgIndex" width="80" height="60"/>');
  break;
  case "4":
$('.hiddenFeeling').eq(i).append('<img src="/img/ps4.jpg" class="imgIndex" width="80" height="60"/>');
  break;
  case "5":
$('.hiddenFeeling').eq(i).append('<img src="/img/ps5.jpg" class="imgIndex" width="80" height="60"/>');
  break;
  case "6":
$('.hiddenFeeling').eq(i).append('<img src="/img/ps6.jpg" class="imgIndex" width="80" height="60"/>');
  break;


}

}

for (var i = 0; i <= $('.indexFeeling').length; i++) {

var indexf = $('.indexFeeling').eq(i).text();

switch (indexf) {
  case "1":
$('.indexFeeling').eq(i).text('No pain');
  break;
  case "2":
$('.indexFeeling').eq(i).text('Hurts a bit');
  break;
  case "3":
$('.indexFeeling').eq(i).text('Hurts a little more');
  break;
  case "4":
$('.indexFeeling').eq(i).text('Hurts even more');
  break;
  case "5":
$('.indexFeeling').eq(i).text('Hurts a lot');
  break;
  case "6":
$('.indexFeeling').eq(i).text('Unbearable pain');
  break;
}
}


$(function () {
    $('#mainChart').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'How have you been'
        },
        xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Feeling'
            }
        },
        series: [{
            name: 'Jane',
            data: [1, 0, 4]
        }, {
            name: 'John',
            data: [5, 7, 3]
        }]
    });
});







});
