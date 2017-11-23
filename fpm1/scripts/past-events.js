$(document).ready(function () {

  var isShowing = false;

  $('#past-events-title').click(function(){

    if (!isShowing) {
      $("#past-events-container").show();
      $("#past-events-title").css("border-bottom", "none");
      $(".dt").hide();
      $(".rt").show();
      isShowing = true;

    } else {
      $("#past-events-container").hide();
      $("#past-events-title").css("border-bottom", "8px solid #f4e7d7");
      $(".rt").hide();
      $(".dt").show();
      isShowing = false;
    }
  });

});
