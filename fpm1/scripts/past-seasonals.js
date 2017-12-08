$(document).ready(function () {

  var isShowing = false;

  $('.past-seasonals').click(function(){

    if (!isShowing) {
      $("#past-seasonals-container").show();
      $(".dt").hide();
      $(".rt").show();
      isShowing = true;

    } else {
      $("#past-seasonals-container").hide();
      $(".rt").hide();
      $(".dt").show();
      isShowing = false;
    }
  });

});
