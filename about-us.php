<?php include('includes/header.php'); ?>

		<div id="content" class="site-content">
			<div class="page-header">
			    <div class="container">
			        <div class="breadc-box no-line">
			            <div class="row">
			                <div class="col-md-12">
			                    <h3 class="page-title">About Us</h3>
			                    <ul id="breadcrumbs" class="breadcrumbs none-style">
			                        <li><a href="index.html">Home</a></li>
			                        <li class="active">About Us</li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12">
								<h3 style="padding-top:30px;">About Us</h3>
								<p class="box wow fadeInLeft" align="justify">Hi – tech rubber is an enterprise dedicated to technical 
									rubber products with specialization in Rubber gaskets for PHE’s (Plate 
									heat exchangers) and butterfly valves. We had an expertise in high 
									performance sealing technology. We had a goal for high quality in
									 Technical rubber products and sealing technology which is very essential 
									 in technical industries. </p>

								<h3 style="padding-top:30px;">Our Journey</h3>
								<p  class="box wow fadeInLeft" align="justify">We started in the early 1980s and in no time became a 
									prominent brand name in Rubber Spare Parts manufacturing for heavy and
									 light industries. Since then we have always strived for ‘Greater heights’.</p>
						</div>
						<div class="col-md-6 col-sm-12 sm-center">
							<div class="about-img-right">
								<img src="images/industries/industry.jpg" alt="">
								<div class="about-img-small">
									<!-- <div class="overlay"><img src="https://via.placeholder.com/211x211.png" class="circle-img" alt=""></div>
										<div class="about-content">
									</div> -->
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
						<h3 style="padding-top:30px;">Our Core Expertise</h3>
						<p class="wow fadeInUp" align="justify">We offer a wide range of products and services for various makes and models of PHEs 
							including rubber gaskets as well as complete reconditioning services. <br>
							At our All Brand Setup, we re-condition, re-gasket and also provide just spare gaskets for all brands of
							PHE	makes like Alfa Laval,  Vicarb,	Tranter, APV, GEA, STAR, HISAKA	JAPAN, FILTRON/DPING FISCHER and PRAJ/REHEAT/DOVER/SWEP etc.<br>
							 In addition to these, we expertise in manufacturing any rubber gasket as per the clients’ specifications and requirements in
							  different rubbers including Nitrile, Neoperene, EPDM, Silicone, Butyle, VAMAC, Hypalon and Viton rubbers.<br>
							We follow a unique method for removing the rubber gasket from its groove on the plate such that the plate is 
							always safe and secure with zero chances of any damage.  We	ensure	that the plate metal characteristics are not
							 compromised during the process.</p>
                        </div>
                    </div>
			    </div>

			    <div class="industris-space-60"></div>
			    <div class="industris-space"></div>
			    
			</section>

			<section class="bg-contact-info wow fadeInUp">
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

		</div>
	    
<?php include('includes/footer.php'); ?>