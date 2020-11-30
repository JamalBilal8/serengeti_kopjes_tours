 <?php
   $email_content = "";

// email_footer
   // kwanza hakikisha yafuatayo
   // 1> field ya your email name='email'
   // 2>field ya your name name='name'
   // 3>field ya message name ='message'
   // 4>button ya submit name = 'submit'


if (isset($_POST['submit'])) { //hii ni ile button ya submit button

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = strip_tags(trim($_POST['name']));
    $number = strip_tags(trim($_POST['number']));
    $subject = strip_tags(trim($_POST['subject']));
    $name = str_replace(array("\r", "\n"), array(" ", " "),$name);
    $email =filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message= trim($_POST['message']);


    if (empty($name) or empty($message) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      http_response_code(400);
      echo "oops! Message could not be sent!";
      exit();
      }
      $recipient = "serengetikojestours@gmail.com";  //hii ni email inayofika hii message ko weka email yako unayotaka
      $subject = "(Serengeti Kopjes Tours)<b>Message from</b> $name";
      $email_content .= "Name: $name\n";
      $email_content .= "Email: $email\n\n";
      $email_content .= "Message: \n$message\n";

      $email_headers = "From: $name <$email>";

     

      //sending email

      if (mail($recipient, $subject, $email_content, $email_headers)) {
          http_response_code(200);
          echo "Thanks! Message has been sent successfully";

        }  else{
          http_response_code(500);
          echo "Oopps! Something went wrong. Please try again.";

        }

  }else{
    http_response_code(403);
    echo "Something went wrong.";
  }
}

// end of email footer

?>