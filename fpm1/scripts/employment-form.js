$(document).ready(function() {

  $("#employmentForm").on("submit", function() {
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
    var heardIsValid = $("#heard").prop("validity").valid;
    if(heardIsValid) {
      $("#heardError").hide();
    } else {
      $("#heardError").show();
      IsValid = false;
    }
    // var msgIsValid = $("#msg").prop("validity").valid;
    var empty = document.getElementById("msg").value;
    // console.log(empty);
    // console.log(empty.length);
    if(empty.length > 0) {
      $("#msgError").hide();
    } else {
      $("#msgError").show();
      IsValid = false;
    }
    var isChecked =  $('input:checkbox').is(':checked')
    // console.log(isChecked);
    if(isChecked == true) {
      $("#jobError").hide();
    } else {
      $("#jobError").show();
      IsValid = false;
    }
    // console.log(IsValid);
    return IsValid;
  });

});
