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

// AJAX for login system

function checkLogin() {
  var uname = $("#ema").val();
  var psw = $("#pswd").val();

  if (uname.length > 0 && psw.length > 0) {
    jQuery.ajax({
      url:"backend.php",
      data:{
        uname:uname,
        psw:psw
      },
      type:"POST",
      success:function(data){
        $("#checkLogin").show();
        $("#ema").css("border", "2px solid green");
        $("#pswd").css("border", "2px solid green");
        $("#emailYes").css("visibility","visible");
        $("#emailNo").css("visibility","hidden");
        $("#passwordYes").css("visibility","visible");
        $("#passwordNo").css("visibility","hidden");
        if(data) {
          $("#ema").css("border", "2px solid red");
          $("#pswd").css("border", "2px solid red");
          $("#emailNo").css("visibility","visible");
          $("#emailYes").css("visibility","hidden");
          $("#passwordNo").css("visibility","visible");
          $("#passwordYes").css("visibility","hidden");
        } else {
          $("#ema").css("border", "2px solid green");
          $("#pswd").css("border", "2px solid green");
          $("#emailNo").css("visibility","hidden");
          $("#emailYes").css("visibility","visible");
          $("#passwordNo").css("visibility","hidden");
          $("#passwordYes").css("visibility","visible");
          window.location.href = 'home.php';
          }
        $("#checkLogin").html(data);
        },
        error:function (){

        }
    });
      }
}
