<div class="row">
<div class="col-lg-12 col-xs-12">
<div class=" bg-primary text-center text-white rounded shadow-bottom h3 pt-2 pb-2">
ME2U &#x00A9; 2018
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function () {
      // password-reset
      $("#res-form").on("click",function(){
        var res_user = $("#res-user").val();
        var res_email =$("#res-email").val();
        $.ajax({
          type: "POST",
          url: "../controller/PasswordresetController.php",
          data: {
            PasswordReset:1,
            user:res_user,
            email:res_email
          },
          dataType: "text",
          success: function (response){
          console.log(response);
          if(response.indexOf('not_valid')>=0){
            $("#erroremail1").html(res_email+' is not a vaild email');
          }
          if(response.indexOf('too_short')>=0){
           $("#erroruser1").html(res_user+' is too short ');
          }
          }
        });
      })
      // search
      $("#search").on("keyup",function(){
        var search = $("#search").val();
        $.ajax({
          type: "POST",
          url: "../controller/SearchController.php",
          data:{
          search:search,
          },
          dataType: "text",
          success: function (response) {
            console.log(response);
          }
        });
      })
      // Reset
      $("#reset-link").on("click",function(){
        window.location="../user/email-link.php";
      })
      // search
      $("#search_link").on("click",function(){
        window.location="../user/search.php";
      })
      // logout 
      $("#logout").on("click",function(){
        window.location="../controller/LogoutController.php";
      })
      // profile link
      $("#pro-link").on("click",function(){
        window.location="../user/profile.php";
      })
      // signup link
      $("#reg-link").on("click",function(){
        window.location="../user/sign-up.php";
      })
      // contacts 
      $("#contact").on("click", function(){
        window.location="../user/contact.php";
      })
      // home
     $("#home").on("click",function(){
       window.location="../index.php";
     })
      // sign up
    $("#signup").on("click", function () {
      var user = $("#user").val();
      var email =$("#email").val();
      var retype_password = $("#retype-password").val();
      var password = $("#password").val();
     $.ajax({
         type: "POST",
         url: "../controller/Sign-upController.php",
         data: {
             sign_up:1,
             user:user,
             email:email,
             retype_password:retype_password,
             password:password
         },
         dataType: "text",
         success: function (response) {
            console.log(response);
            if(response.indexOf('user_name_short')>=0){ 
              $("#empty-user").html("Name is too short..");
            }else
            if(response.indexOf('not_email')>=0){ 
              $("#error-email").html("Not a valid email..");
            }else
            if(response.indexOf('already_exist')>=0){ 
              $("#error-email").html("This email is already in use..");
            }else
            if(response.indexOf('password_does_not_match')>=0){ 
              $("#error-retypepassword").html("Password does not match..");
            }else if(response.indexOf('success')>=0){
              window.location="../index.php";
             }
           
         }
     });
    });
    // login
    $("#logpassword").add("#logemail").on("keyup", function(){
      var email = $("#logemail").val();
      var password = $("#logpassword").val();
      $.ajax({
        type: "POST",
        url: "../controller/LoginController.php",
        data:{
          login:1,
          email:email,
          password:password
        },
        dataType: "text",
        success: function (response) {
        console.log(response);
        if(response.indexOf("success")>=0){
         window.location="../user/profile.php";
        }
        }
      });
    });
      // profile
    //  $.get("../controller/ProfileController.php", function(data){
    //    var user= jQuery.parseJSON(data);

    //    $("#pr_name").html(user.username);
    //    if(user.active==1){
    //     $("#pr_active").html("Online");
    //    }else{
    //     $("#pr_active").html("Offline");
    //    }
    //    $("#pr_email").html(user.email);
    //    console.log(user);
    //  })
    });
    </script>
    </div>
    </div>
  </body>
</html>
