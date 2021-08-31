<?php include('includes/header.php');?>
	<div id="content" class="site-content">
		<div class="page-header">
		    <div class="container">
		        <div class="breadc-box no-line">
		            <div class="row">
		                <div class="col-md-12">
		                    <h3 class="page-title">We Serve</h3>
		                    <ul id="breadcrumbs" class="breadcrumbs none-style">
		                        <li><a href="index.php">Home</a></li>
		                        <li class="active">We Serve</li>
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

						<h3 class="text-primary" style="padding-top:30px;">We Serve</h3>
						<ul>
							<li>Jet cleaning of the received plates</li>
							<li>Gluing of Rubber Gasket on Exchanger Plate</li>
							<li>A wide variety of sizes</li>
							<li>We also provide assistance in selecting the kind of rubber best suited to your application, by studying the end use of the product</li>
						</ul>
						<h3 class="text-primary">Our Proficiency</h3>

						<p align="justify">We follow a unique method for removing the rubber gasket from its groove on the plate such that the plate is always safe and secure with zero chances of any damage. We ensure that the plate metal characteristics are not compromised during the process.</p>
						
						<h3 class="text-primary">Process</h3>
						<ul>
							<li>Reception Check of Plates</li>
							<li>Degreasing</li>
							<li>Pickling</li>
							<li>De-scaling</li>
							<li>Dye Penetrate Test for Crack Detection.</li>
							<li>Gasketing and post curing in hot - air oven for polymerization process to ensure perfect gluing and gasket fit</li>
							<li>Assembly &amp; Hydraulic Test</li>
							<li>Final Check, Expedition and Dispatch.</li>
							<li>Post- curing also prevents dislocation and falling out of gaskets from plates during operation and chemical cleaning</li>
						</ul>

						<h3 class="text-primary">Quality Check</h3>

						<p align="justify">To meet the expectations of our reputed and esteemed clients, a rigorous quality assurance program is maintained and implemented at each step of our operations</p>
						<p align="justify">Since we are catering to the most distinguished players in different industries, we ensure that our superior products enable them to deliver first class and paramount products to their customers in turn.</p>
						<p align="justify">Keeping in view the application of our product at our customer&#39;s end, we ensure that crucial features like high fluid compatibility, high tolerance levels, heat resistance over a broad temperature range etc, are taken with due care.</p>
						<p align="justify">The endeavor of our quality control department begins from the procurement of raw material itself and is carried out at all progressive levels.</p>

						<h3 class="text-primary">RAW MATERIAL INSPECTION</h3>
						<ul>
							<li>Strict control over the entire manufacturing process.</li>
							<li>Final inspection before shipment.</li>
							<li>Quality trace after delivery.</li>
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

	    


















