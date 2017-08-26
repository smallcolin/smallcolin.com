<?php
  include "includes/include.php";

  // Check to see if any data exists
  if (isset($_SESSION['formPostData'])) {
    // Save all form data to one associated array variable
    $postedData = $_SESSION['formPostData'];
    unset($_SESSION['formPostData']);
  } else {
    header("Location: index.php");
  }

  // echo $postedData['name'] . ' ' . $postedData['email'] . ' ' . $postedData['textarea'] . '.';

  // Send a message to my email with all the form data
  $to = 'smallcolin@smallcolin.se';
  $subject = "Direct mail from smallcolin.com";

  $message = 'Name: ' . $postedData['name'] . "\r\n\r\n";
  $message .= 'Email: ' . $postedData['email'] . "\r\n\r\n";
  $message .= 'Commments: ' . $postedData['textarea'];

  $success = mail($to, $subject, $message, $headers);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Thanks!</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
  	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  	<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
  	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <section class="contact-form">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="thank-you-message">
              <?php
                if (isset($success) && $success) { ?>
                  <h4>
                    Thank you <?php echo $postedData['name'];?> for your message.  I'll be touch soon.
                  </h4>
                <?php } else { ?>
                  Sorry, there was a problem sending your message.  My apologies…please try again later.
                <?php }
              ?>
              <a href="index.php#contact">
                <button class="btn back-button">Back to Contact</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
