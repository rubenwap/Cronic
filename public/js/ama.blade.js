
$(document).ready(function() {

 $(".aaa").on("click", function(){
     
     bootbox.dialog({
                title: "This is a form in a modal.",
                 message:   '<div class="container">' + 
      '<div class="row">'+
          '<div class="col-md-10 col-md-offset-1">'+
              '<div class="panel panel-default">'+
                  '<div class="panel-heading">Today is {{date("l")}} the {{date("dS")}} of {{date("F Y")}}</div>'+

                  '<div class="panel-body">'+



  '<h2>{!! Auth::user()->name !!}, how do you feel?</h2>'+

  '{!!Form::open(["url" => "articles"])!!}'+

'@include("articles.form", ["submitBtn" => "Save Entry"])'+
  '{!!Form::close()!!}'+

'@include("errors.list")'+
'</div>'+
'</div>'+
'</div>'+
'</div>'+
'</div>',
                buttons: {
                    success: {
                        label: "Save",
                        className: "btn-success",
                        callback: function () {
                            var name = $('#name').val();
                            var answer = $("input[name='awesomeness']:checked").val()
                            Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");
                        }
                    }
                }
            }
        );
 
     
     
     
 });
 
 
 


});
