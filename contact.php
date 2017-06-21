<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<div id="contactHeroImage">
  <div class="container-fluid aboutOverlay">
    <div class="aboutHero">
      <h1 class="aboutHeroHeading"><span class="whiteBorder">Contact Us</span></h1>
    </div>
  </div>
</div>

<div class="about-offwhite-bg">
  <div class="container contact-container text-center">
    <div class="row">

      <div class="col-xs-12 mediumTopPadding mediumBottomPadding">
        <h2 class="contactHeading">Mickie Nagel</h2>
        <p class="contactSubText"><a href="mailto:mickie@belocalgrp.com" target="_top">mickie@belocalgrp.com</a></p>
      </div>

    </div>


  <?php
    //response generation function
    $response = "";
    //function to generate response
    function my_contact_form_generate_response($type, $message){
      global $response;
      if($type == "success") {
        $response = "<div class='success'>{$message}</div>";
      }
      else $response = "<div class='error'>{$message}</div>";
    }
    //response messages
    $missing_content = "Name Invalid.";
    $email_invalid   = "Email Address Invalid.";
    $message_unsent  = "Email not recorded. Try Again.";
    $message_sent    = "Thanks! Your email has been recorded.";

    //user posted variables
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $message = 'This is a test';

    //php mailer variables
    $to = 'tsalgado96@gmail.com';
    $subject = "BeLocal Group Contact Form";
    $headers = 'From: '. $email . "\r\n" .
      'Reply-To: ' . $email . "\r\n";

    if($_POST['submit']){
      //validate email
      if (!$_POST['submitted']) {
        my_contact_form_generate_response("error", $missing_content);
      }
      else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        my_contact_form_generate_response("error", $email_invalid);
      }
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }


    }
  ?>
  <div id="formSubmission" class="row">
    <h2 class="contactHeading">Join Our Mailing List!</h2>
  </div>
  <form class="contactOptinForm" action="#formSubmission" method="post">
    <div class="row">
      <div class="col-sm-6">
        <input class="regInput" type="text" name="contactName" id="contactName" value="<?php echo esc_attr($_POST['contactName']) ?>" placeholder="Name*">
        <?php if(empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)){ echo $response; } ?>
      </div>

      <div class="col-sm-6">
        <input class="regInput" type="text" name="contactEmail" id="email" value="<?php echo esc_attr($_POST['contactEmail']) ?>" placeholder="Email*">
        <?php if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ echo $response; } ?>
      </div>
    </div>
    <br>
    <input type="hidden" name="submitted" value="1">
    <input class="submit" type="submit" name="submit" value="Sign Up">
    <?php if($sent == true){ echo $response;} ?>
  </form>

  </div>
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7739106.085288365!2d42.338880904017024!3d-18.715067408349096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21d1a4e3ea238545%3A0x5244e3c1977b1388!2sMadagascar!5e0!3m2!1sen!2sus!4v1497917726888" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<?php get_footer(); ?>
