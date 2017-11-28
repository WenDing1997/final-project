// Set variable EMPLOYMENT_TEST_PHP_FORM to true, if you want to test PHP form validation for employment-form without
// client-side jQuery validation.
var EMPLOYMENT_TEST_PHP_FORM = false;

$(document).ready(function() {
  if(!EMPLOYMENT_TEST_PHP_FORM){
  $("#employmentForm").on("submit", function() {
    // console.log(1);
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
    var heardEmpty = document.getElementById("heard").value;
    var heardIsValid = $("#heard").prop("validity").valid;
    if(heardEmpty.length > 0 && heardIsValid) {
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
    var resumeEmpty = document.getElementById("resumeupload").value
    if(resumeEmpty != "") {
      $("#resumeError").hide();
    } else {
      $("#resumeError").show();
      IsValid = false;
    }
    var job1isChecked = $("#job1").is(":checked");
    var job2isChecked = $("#job2").is(":checked");
    var job3isChecked = $("#job3").is(":checked");
    var job4isChecked = $("#job4").is(":checked");
    var job5isChecked = $("#job5").is(":checked");
    var job6isChecked = $("#job6").is(":checked");
    var job7isChecked = $("#job7").is(":checked");
    var job8isChecked = $("#job8").is(":checked");
    var job9isChecked = $("#job9").is(":checked");
    var job10isChecked = $("#job10").is(":checked");
    var isChecked = job1isChecked || job2isChecked || job3isChecked || job4isChecked || job5isChecked || job6isChecked || job7isChecked || job8isChecked || job9isChecked || job10isChecked;
    // var isChecked = $('input:checkbox').is(':checked')
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
  }
});
