<?php include('includes/header.php'); ?>



    <div id="content" class="site-content">
      <div class="page-header">
          <div class="container">
              <div class="breadc-box no-line">
                  <div class="row">
                      <div class="col-md-12">
                          <h2 class="page-title">Contact Us</h2>
                          <ul id="breadcrumbs" class="breadcrumbs none-style">
                              <li><a href="index.php">Home</a></li>
                              <li class="active">Contact Us</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <section class="bg-contact-info">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <h4 class="text-primary" style="padding-top:20px;">CONTACT INFO</h4>
              <div class="contact-info">
                <h2><span class="text-primary">+91-8265888882</span> </h2>
                <p><i class="icon ion-md-mail"></i> info@hitechrubber.co.in</p>
                <p><i class="icon ion-md-pin"></i> 41-A, Industrial Area, Mohakampur, Phase-l Delhi Road, meerut (UP) 250002</p>
              </div>
              <div class="space-industris" style="height: 40px;"></div>
              <hr>
            </div>
            <div class="col-md-12">

<?php    
$errors = [];
$errorMessage = '';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
     $contact = $_POST['contact'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($contact)) {
        $errors[] = 'Contact Number is invalid';
    }
    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'info@hitechrubber.co.in';
        $emailSubject = 'New email from your contant form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name},<br> Email: {$email},<br>Message: {$message}"];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            $errorMessage = "<p style='color: green;'>Message have been sent.</p>";
        } else {
            $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later.</p>";
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }

    
}

?>



            <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
              <form class="form-contact" action="#" method="post">
                <h3>Contact Us</h3>
                <div class="row">
                  <div class="col-md-4 form-group">
                    <input type="text" name="name" id="your-name" class="form-control" placeholder="Your name" required>
                  </div>
                  <div class="col-md-4 form-group">
                    <input type="number" name="contact" id="phone-number" class="form-control" placeholder="Phone number" required>
                  </div>
                  <div class="col-md-4 form-group">
                    <input type="email" name="email" id="your-email" class="form-control" placeholder="Email Address" required>
                  </div>
                  <div class="col-md-12 form-group">
                    <textarea type="text" rows="6" name="message" id="your-message" class="form-control" placeholder="your message" required></textarea>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" name="submit"  value="Submit" class="wpcf7-form-control wpcf7-submit btn btn-primary">
                  </div>
                </div>
              </form>
            </div>
          </div>
          </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3>View map:</h3>
              <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19748.190798079282!2d77.67005883354808!3d28.957134015247423!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9824eae1c921bb66!2sHi-Tech%20Rubber%20%26%20Engineering!5e0!3m2!1sen!2sin!4v1612964805634!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      
  
    </div>
      
<?php include('includes/footer.php'); ?>