$(document).ready(function() {

  $("#contactForm").on("submit", function() {
    // console.log(1);
    var IsValid = true;
    var nameIsValid = $("#name").prop("validity").valid;
    if(nameIsValid) {
      $("#nameError").hide();
    } else {
      $("#nameError").show();
      IsValid = false;
    }
    var emailIsValid = $("#email").prop("validity").valid;
    if(emailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      IsValid = false;
    }
    var subjectIsValid = $("#subject").prop("validity").valid;
    if(subjectIsValid) {
      $("#subjectError").hide();
    } else {
      $("#subjectError").show();
      IsValid = false;
    }
    // var msgIsValid = $("#msg").prop("validity").valid;
    var empty = document.getElementById("msg").value;
    // console.log(empty);
    console.log(empty.length);
    if(empty.length > 0) {
      $("#msgError").hide();
    } else {
      $("#msgError").show();
      IsValid = false;
    }
    // console.log(IsValid);
    return IsValid;
  });

});
