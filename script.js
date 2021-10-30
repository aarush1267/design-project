function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function checkEmail() {
  // var myForm = $("#mainForm").serialize();
  var fname = $("#first").val();
  var lname = $("#second").val();
  var email = $("#email").val();
  var password = $("#password").val();
  var repass = $("#en").val();
  if (fname && lname && email && password && repass && password.length >= 6 && password == repass && validateEmail(email)) {
    jQuery.ajax({
      url: "connection.php",
      data: {
          fname:fname,
          lname:lname,
          email:email,
          password:password,
          repass:repass
      },
      type: "POST",
      success:function(data){
  $("#emailExists").show();
  $("#email").css("border","2px solid green");
  $("#no").css("visibility","hidden");
  $("#yes").css("visibility","visible");
  if(data){
    $("#email").css("border", "2px solid red");
    $("#no").css("visibility","visible");
    $("#yes").css("visibility","hidden");
    }else
    {
    $("#email").css("border", "2px solid green");
    $("#no").css("visibility","hidden");
    $("#yes").css("visibility","visible");
    window.location.href = 'home.php';
    }
  $("#emailExists").html(data);
  },
  error:function (){
  }
  });
   }
}
