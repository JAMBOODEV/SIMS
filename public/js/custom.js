

$(function() {

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

      $("div.row.custom-value").hide();
      $("div.row.custom-value").first().hide();

      $("h6").click(function()
      {
          $(this).next("div.row.custom-value").slideToggle(200);
          $(this).siblings().next("div.row.custom-value").slideUp(200);
      });

});