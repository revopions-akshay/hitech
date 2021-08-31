<?php include('includes/header.php');?>
	<div id="content" class="site-content">
		<div class="page-header">
		    <div class="container">
		        <div class="breadc-box no-line">
		            <div class="row">
		                <div class="col-md-12">
		                    <h3 class="page-title">House Testing Facilities</h3>
		                    <ul id="breadcrumbs" class="breadcrumbs none-style">
		                        <li><a href="index.php">Home</a></li>
		                        <li class="active">House Testing Facilities</li>
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
						<h3 class="text-primary" style="padding-top:30px;">House Testing Facilities</h3>

						<p align="justify">Every batch undergoes strict physical and chemical tests at every stage to ensure the quality of products. A variety of tests are conducted to study Tensile properties (Tensile Strength, Modulus, Elongation), Hardness (Shore Hardness), Compression set, Accelerated ageing tests etc.</p>
						<h4>List of Hi-Tech Rubber Other Technical Facilities</h4>
						<ul>
							<li><a href="collaboration-laboratories.php">Collaboration with NABL Accredited Laboratories</a></li>
							<li><a href="continuously-practices.php">Continuously Updated Technology and Practices</a></li>
							<li><a href="flexibility-innovation.php">Flexibility and Openness to Innovations</a></li>
						</ul>

						<h4>HI – Tech Rubber &amp; Engineering technical specifications include:</h4>
						<p>The Synthetic Rubbers</p>
						<ul>
							<li>NITRILE (Acrylonitrile-butadiene Rubbers)</li>
							<li>NEOPRENE (P o l y c h l- o r o p r e n e)</li>
							<li>SBR (Styrene-butadiene rubbers)</li>
							<li>EPDM (Ethylene-propylene rubbers)</li>
							<li>BUTYL (Isobutene-isoprene Rubbers)</li>
							<li>HYPALON</li>
							<li>SILICONE</li>
							<li>VITON (Fluoro rubbers)</li>
							<li>AFLAS</li>
						</ul>
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

	    


















