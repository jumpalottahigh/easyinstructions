function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function subscribeClick() {
  $('.subscribe_btn').unbind();
  $('.subscribe_btn').bind( 'click', function(e) {
    e.preventDefault();

    recaptcha_res = $('#g-recaptcha-response').val();

    if ( validateEmail( $('#email_address').val() ) ) {

      if ( recaptcha_res ) {

        var post_data = {
          action: "subscribe_with_recaptcha",
          recaptcha_res: recaptcha_res,
          email: $('#email_address').val()
        };
      //Get the required data for google
      $.post("assets/php/subscribe.php", post_data, function(res_json) {
        res = $.parseJSON(res_json);
        if(res.final_msg) {
          $(".subscribe_form").slideUp();
        } else {
          grecaptcha.reset();
        }
        $(".subscribe_msg").slideUp().html(res.message).slideDown();
      });
      } else {
        alert( "Please verify that you are indeed not a robot" );
      }
    } else {
      alert( "Please enter a valid e-mail address" );
    }

  });
}