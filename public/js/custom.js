$(function() {
	
	$("#slide-div-2").hide();
    $("#slide-div-3").hide();

    $("input[name='slide-name']").click(function() {
     if ($("#slide-radio-1").is(":checked")) {
       $("#slide-div-1").show();
       $("#slide-div-2").hide();
       $("#slide-div-3").hide();
     }
     if ($("#slide-radio-2").is(":checked")) {
       $("#slide-div-1").hide();
       $("#slide-div-2").show();
       $("#slide-div-3").hide();
     }
     if ($("#slide-radio-3").is(":checked")) {
       $("#slide-div-1").hide();
       $("#slide-div-2").hide();
       $("#slide-div-3").show();
     }
   });

});