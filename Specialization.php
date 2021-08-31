<?php include('includes/header.php');?>
	<div id="content" class="site-content">
		<div class="page-header">
		    <div class="container">
		        <div class="breadc-box no-line">
		            <div class="row">
		                <div class="col-md-12">
		                    <h3 class="page-title">Our Specialization</h3>
		                    <ul id="breadcrumbs" class="breadcrumbs none-style">
		                        <li><a href="index.php">Home</a></li>
		                        <li class="active">Our Specialization</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<section>
			<div class="container">
				<div class="row flex-row">
					<div class="col-md-12 col-sm-12 align-self-center">
						<h3 class="text-primary" style="padding-top:30px;">Our Specialization</h3>

						<p align="justify">We make rubber gaskets for temperature resistant from – 72 dg. C to high temp. Resistant for 110 dg. C. 125 dg. C. 148 dg. C. 200 dg. C, 250 dg. C, 315 dg. C, Minimum Compression set and permanent set, Resistant to Gas, Sea Water, and Oil (Edible and Non-Edible) steam etc. Resistant to impact shocks, vibration, Radiation, Corona- Ozone, Infrared, Ultra Violet Rays. We manufacture rubber Gaskets to withstand/resistant destructive effect of most of the organic & inorganic fluids. Specially compounds have also been developed to serve the severe conditions in application.</p>
						<div class="industris-space-xs"></div>
					</div>
				</div>
		    </div>
		</section>
	</div>


	<section class="bg-contact-info">
        <div class="container">
          <div class="row">
           
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

<?php include('includes/footer.php'); ?>

	    