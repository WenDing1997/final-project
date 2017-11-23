// on load
$(document).ready(function () {

  var isRunning = true;
  // var totLength = images.length;
  var idx = 0;

  // start automatic slideshow function
  slideshow();

  // set up function to have the slideshow run automatically
  function slideshow() {
    var images = document.getElementsByClassName("slide");
    var buttons = document.getElementsByClassName("btn");
    var totImgLength = images.length;
    var totBtnLength = buttons.length;

    for (var i = 0; i < totBtnLength; i++) {
      var btn = buttons[i];
      $(btn).css("background-color", "#e6e600");
      $(btn).css("border-color","#e6e600");
    }

    for (var j = 0; j < totImgLength; j++) {
      images[j].style.display = "none";
    }  // end for

    var currentImage = images[idx];
    currentImage.style.display = "block";
    if (idx == 0) {
      $("#btn_1").css("background-color", "#408000");
      $("#btn_1").css("border-color", "#408000");
    } else if (idx == 1) {
      $("#btn_2").css("background-color", "#408000");
      $("#btn_2").css("border-color", "#408000");
    } else if (idx == 2) {
      $("#btn_3").css("background-color", "#408000");
      $("#btn_3").css("border-color", "#408000");
    } else if (idx == 3) {
      $("#btn_4").css("background-color", "#408000");
      $("#btn_4").css("border-color", "#408000");
    } else if (idx == 4) {
      $("#btn_5").css("background-color", "#408000");
      $("#btn_5").css("border-color", "#408000");
    }

    // update index to point to next image
    idx++;
    // if index is out of bounds, go back to first image
    if (idx == totImgLength) { idx = 0 }

    // $(".slide").attr("src", currentImage);
    setTimeout(slideshow, 5000);
  }


  // handle button_1 image selector
  $("#btn_1").click( function() {
    console.log("Hello World! I'm Button 1!");
    var images = document.getElementsByClassName("slide");
    var buttons = document.getElementsByClassName("btn");
    var totImgLength = images.length;
    var totBtnLength = buttons.length;
    currentImage = images[0];

    for (var i = 0; i < totBtnLength; i++) {
      var btn = buttons[i];
      $(btn).css("background-color", "#e6e600");
      $(btn).css("border-color","#e6e600");
    }

    for (var j = 0; j < totImgLength; j++) {
      images[j].style.display = "none";
    }  // end for
    currentImage.style.display = "block";
    $("#btn_1").css("background-color", "#408000");
    $("#btn_1").css("border-color", "#408000");

    idx = 0;
  });  // end btn_1 click function


  // handle button_2 image selector
  $("#btn_2").click( function() {
    console.log("Hello World! I'm Button 1!");
    var images = document.getElementsByClassName("slide");
    var buttons = document.getElementsByClassName("btn");
    var totImgLength = images.length;
    var totBtnLength = buttons.length;
    currentImage = images[1];

    // reset all button styling
    for (var i = 0; i < totBtnLength; i++) {
      var btn = buttons[i];
      $(btn).css("background-color", "#e6e600");
      $(btn).css("border-color","#e6e600");
    }

    // hide all images
    for (var j = 0; j < totImgLength; j++) {
      images[j].style.display = "none";
    }  // end for

    // display currenti mage only
    currentImage.style.display = "block";
    // highlight current button only
    $("#btn_2").css("background-color", "#408000");
    $("#btn_2").css("border-color", "#408000");

    idx = 1;
  });  // end btn_1 click function


  // handle button_3 image selector
  $("#btn_3").click( function() {
    console.log("Hello World! I'm Button 1!");
    var images = document.getElementsByClassName("slide");
    var buttons = document.getElementsByClassName("btn");
    var totImgLength = images.length;
    var totBtnLength = buttons.length;
    currentImage = images[2];

    // reset all button styling
    for (var i = 0; i < totBtnLength; i++) {
      var btn = buttons[i];
      $(btn).css("background-color", "#e6e600");
      $(btn).css("border-color","#e6e600");
    }

    // hide all images
    for (var j = 0; j < totImgLength; j++) {
      images[j].style.display = "none";
    }  // end for

    // display currenti mage only
    currentImage.style.display = "block";
    // highlight current button only
    $("#btn_3").css("background-color", "#408000");
    $("#btn_3").css("border-color", "#408000");

    idx = 2;
  });  // end btn_1 click function


  // handle button_4 image selector
  $("#btn_4").click( function() {
    console.log("Hello World! I'm Button 1!");
    var images = document.getElementsByClassName("slide");
    var buttons = document.getElementsByClassName("btn");
    var totImgLength = images.length;
    var totBtnLength = buttons.length;
    currentImage = images[3];

    // reset all button styling
    for (var i = 0; i < totBtnLength; i++) {
      var btn = buttons[i];
      $(btn).css("background-color", "#e6e600");
      $(btn).css("border-color","#e6e600");
    }

    // hide all images
    for (var j = 0; j < totImgLength; j++) {
      images[j].style.display = "none";
    }  // end for

    // display currenti mage only
    currentImage.style.display = "block";
    // highlight current button only
    $("#btn_4").css("background-color", "#408000");
    $("#btn_4").css("border-color", "#408000");

    idx = 3;
  });  // end btn_1 click function


  // handle button_5 image selector
  $("#btn_5").click( function() {
    console.log("Hello World! I'm Button 1!");
    var images = document.getElementsByClassName("slide");
    var buttons = document.getElementsByClassName("btn");
    var totImgLength = images.length;
    var totBtnLength = buttons.length;
    currentImage = images[4];

    // reset all button styling
    for (var i = 0; i < totBtnLength; i++) {
      var btn = buttons[i];
      $(btn).css("background-color", "#e6e600");
      $(btn).css("border-color","#e6e600");
    }

    // hide all images
    for (var j = 0; j < totImgLength; j++) {
      images[j].style.display = "none";
    }  // end for

    // display currenti mage only
    currentImage.style.display = "block";
    // highlight current button only
    $("#btn_5").css("background-color", "#408000");
    $("#btn_5").css("border-color", "#408000");

    idx = 4;
  });  // end btn_1 click function

});
