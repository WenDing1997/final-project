$(document).ready(function() {

  $("#vendorForm").on("submit", function() {
    var IsValid = true;
    var businessorgEmpty = document.getElementById("businessorg").value;
    var businessorgIsValid = $("#businessorg").prop("validity").valid;
    // console.log(businessorgIsValid);
    if(businessorgEmpty.length > 0 && businessorgIsValid) {
      $("#businessnameError").hide();
    } else {
      $("#businessnameError").show();
      IsValid = false;
    }
    var contactnameEmpty = document.getElementById("contactname").value;
    var contactnameIsValid = $("#contactname").prop("validity").valid;
    // console.log(contactnameIsValid);
    if(contactnameEmpty.length > 0 && contactnameIsValid) {
      $("#contactnameError").hide();
    } else {
      $("#contactnameError").show();
      IsValid = false;
    }
    var emailEmpty = document.getElementById("email").value;
    var emailIsValid = $("#email").prop("validity").valid;
    // console.log(emailIsValid);
    if(emailEmpty.length > 0 && emailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      IsValid = false;
    }
    var numberEmpty = document.getElementById("telephone").value;
    var numberIsValid = $("#telephone").prop("validity").valid;
    // console.log(numberIsValid);
    if(numberEmpty.length > 0 && numberIsValid) {
      $("#numberError").hide();
    } else {
      $("#numberError").show();
      IsValid = false;
    }
    // console.log(IsValid);
    return IsValid;
  });

});
