<?php
  if( isset($_POST['action']) && !empty($_POST['action']) ):
    switch($_POST['action']):
      case "subscribe_with_recaptcha":
            $secret = "6Lcl5hQTAAAAAHmUrZxd_9TDNRaL7Ltu1Ipwwtnv";
            $recaptcha_res = filter_var($_POST["recaptcha_res"], FILTER_SANITIZE_STRING);

            $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptcha_res."&remoteip=".$_SERVER['REMOTE_ADDR']), TRUE);

            $email_addr = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

            require_once "db_connect.php";

            if(filter_var($email_addr, FILTER_VALIDATE_EMAIL)):
              if ($response['success'] == TRUE):
                if (mysqli_query($link,"INSERT INTO `tbl_subscribers` (`email`) VALUES ('" . $email_addr . "')")):
                  echo json_encode( array(
                      "final_msg" => TRUE,
                      "message" => "<div class='bg-success p-a-1'>" . $_POST["email"] . " has been added to our mailing list. Thank you for subscribing!</div>"
                      )
                    );
                else:
                  echo json_encode( array(
                      "final_msg" => FALSE,
                      "message" => "<div class='bg-warning p-a-1'>" . $_POST["email"] . " has already been added to our list.</div>"
                    )
                  );
                endif;
              else:
                echo json_encode( array(
                    "final_msg" => FALSE,
                    "message" => "<div class='bg-danger p-a-1'>reCaptcha validation failed</div>"
                  )
                );
              endif;
            else:
              echo json_encode( array(
                  "final_msg" => FALSE,
                  "message" => "<div class='bg-danger p-a-1'>This email address is not valid</div>"
                )
              );
            endif;

            mysqli_close($link);

      break;
    endswitch;
  endif;
?>
