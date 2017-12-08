// Set variable CONTACT_TEST_PHP_FORM to true, if you want to test PHP form validation for contact-form without
// client-side jQuery validation.
var CONTACT_TEST_PHP_FORM = false;

$(document).ready(function() {
  if(!CONTACT_TEST_PHP_FORM){
  $("#contactForm").on("submit", function() {
    var IsValid = true;
    var nameEmpty = document.getElementById("name").value;
    var nameIsValid = $("#name").prop("validity").valid;
    if(nameEmpty.length > 0 && nameIsValid) {
      $("#nameError").hide();
    } else {
      $("#nameError").show();
      IsValid = false;
    }
    var emailEmpty = document.getElementById("email").value;
    var emailIsValid = $("#email").prop("validity").valid;
    if(emailEmpty.length > 0 && emailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      IsValid = false;
    }
    var subjectEmpty = document.getElementById("subject").value;
    var subjectIsValid = $("#subject").prop("validity").valid;
    if(subjectEmpty.length > 0 && subjectIsValid) {
      $("#subjectError").hide();
    } else {
      $("#subjectError").show();
      IsValid = false;
    }
    var empty = document.getElementById("msg").value;
    if(empty.length > 0) {
      $("#msgError").hide();
    } else {
      $("#msgError").show();
      IsValid = false;
    }

    return IsValid;
  });
  }
});
