$(document).ready(function() {

  $("#vendorForm").on("submit", function() {
    var IsValid = true;
    var businessorgIsValid = $("#businessorg").prop("validity").valid;
    // console.log(businessorgIsValid);
    if(businessorgIsValid) {
      $("#businessnameError").hide();
    } else {
      $("#businessnameError").show();
      IsValid = false;
    }
    var contactnameIsValid = $("#contactname").prop("validity").valid;
    // console.log(contactnameIsValid);
    if(contactnameIsValid) {
      $("#contactnameError").hide();
    } else {
      $("#contactnameError").show();
      IsValid = false;
    }
    var emailIsValid = $("#email").prop("validity").valid;
    // console.log(emailIsValid);
    if(emailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      IsValid = false;
    }
    var numberIsValid = $("#telephone").prop("validity").valid;
    // console.log(numberIsValid);
    if(numberIsValid) {
      $("#numberError").hide();
    } else {
      $("#numberError").show();
      IsValid = false;
    }
    // console.log(IsValid);
    return IsValid;
  });

});
