<?php include('includes/header.php');?>
	<div id="content" class="site-content">
		<div class="page-header">
		    <div class="container">
		        <div class="breadc-box no-line">
		            <div class="row">
		                <div class="col-md-12">
		                    <h3 class="page-title">Why Choose Us</h3>
		                    <ul id="breadcrumbs" class="breadcrumbs none-style">
		                        <li><a href="index.php">Home</a></li>
		                        <li class="active">Why Choose Us</li>
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
						<h3 class="text-primary" style="padding-top:30px;">Why Choose Us</h3>

						<p align="justify">Hi tech rubber have specialization in Technical Rubber Products with specialization in Rubber Gaskets for PlateHeat Exchangers (PHE‘s), Butterfly valves and Other Technical Rubber Products with almost 3 decades ofexperience. We had the technical capacity of our laboratory. We have developed our own rubber formulationswhich enable us to make high performance gaskets suited to the application requirements and to the technicalspecifications of our clients. To get the best quality to you, we rely on a team of experts working in themanufacturing and processing of elastomers, as well as a laboratory completely equipped with the necessary tools for accurate measurement and tests.</p>
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

	    


















