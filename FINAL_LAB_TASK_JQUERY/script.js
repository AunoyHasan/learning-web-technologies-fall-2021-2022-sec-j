$("#submit").click(() => {
  let error = false;

  let name = $("#name").val();
  let email = $("#email").val();
  let gender = $("#gender").val();
  let dateofbirth = new Date($("#dateofbirth").val());
  let bloodgroup = $("#bloodgroup").find(":selected").text();

  
  if (name =="") {
    $("#nameError").html("Name can not be empty");
    error = true;
  } else {
    $("#nameError").html("");
  }

  if (email =="") {
    $("#nameError").html("email can not be empty");
    error = true;
  } else {
    $("#emailError").html("");
  }

   
  if (dateofbirth=="") {
    $("#dateOfBirthError").html("Fill dateofbirth");
    error = true;
  } else {
    $("#dateOfBirthError").html("");
  }

  if (gender =="") {
    $("#genderError").html("Gender can not be empty");
    error = true;
  } else {
    $("#nameError").html("");
  }


  if (!error) {
    alert("Submission Successfull");
  }
});