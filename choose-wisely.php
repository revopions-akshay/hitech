<?php include('includes/header.php');?>
	<div id="content" class="site-content">
		<div class="page-header">
		    <div class="container">
		        <div class="breadc-box no-line">
		            <div class="row">
		                <div class="col-md-12">
		                    <h3 class="page-title">Choose It Wisely</h3>
		                    <ul id="breadcrumbs" class="breadcrumbs none-style">
		                        <li><a href="index.php">Home</a></li>
		                        <li class="active">Choose It Wisely</li>
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
						<h3 class="text-primary" style="padding-top:30px;">Choose It Wisely</h3>
						<p>Rubber Gasket is the main item which prevents failures of PHE’s</p>
						<h4 class="text-primary">Professional advice from sealing technology experts</h4>
						<p align="justify">HTRP has global reach with local expertise in more than 100 countries. No matter where you are in the world, you’re never far from our most valuable resources – the knowledgeable people who make HTRP specialists in sealing technology. Two of the many services that we offer are gasket advice and reconditioning.</p>
						<h4 class="text-primary">Gasket Advice</h4>
						<p align="justify">Our customers, upon request, can take advantage of complimentary professional services to determine which rubber compound best suits your real world requirements. For instance, we can support testing the new media in your plate heat exchanger by providing a test pile with a range of appropriate test seals to use in your process. Our experts then analyze the gasket material for changes in properties and sealing force, and recommend the best gasket-compound to use with the new media.</p>
						<h4 class="text-primary">The Working Environment</h4>
						<p align="justify">The nature of the duty and the location in which the heat exchanger is used can bear heavily on the choice of gasket material. The most important factor is, of course, to ensure full compatibility between the gasket material and the chemical profile of the product being heated or cooled. Almost compatible simply won’t do since even minute traces of other chemicals can change the equation quite significantly. As an example, while EPDM rubber is ideal for duties involving liquid or gaseous ammonia it is unsuitable for refrigeration system because traces if compressor oil in the ammonia can cause the elastomer to swell. Equally, while Fluorocarbon elastomers are generally compatible with an oil contaminated mixture of glycol and water, the picture changes radically with the addition of just 100ppm of amine type corrosion inhibitor into the mix. The alien component causes the fluorocarbon polymer to dehydroflourinate and leads, ultimately, to gasket failure. To ensure peak gasket performance it is essential to take into account every potential chemical reaction and evaluate – and more importantly, understand – it’s possible effects on the gasket material.</p>
						<p align="justify">Our experts can also advise you on the right gasket for your plate heat exchanger based on your operating conditions using our comprehensive gasket database.</p>
						<p align="justify">Reconditioning. When it’s time to replace your gaskets, we are there to assist you – no matter-what kind of gaskets are in place. We help you make the best gasket replacement decisions based on your needs.</p>
						<p align="justify">If regasketing is required, we employ the same meticulous processes as those used during the original manufacturing procedures to ensure opti-mal gasket performance is restored. Our service centres also assess and test the plates and gaskets- to ensure the quality of the sealing function of the entire plate heat exchanger.</p>
						<h4 class="text-primary">Quality Means Reliability</h4>
						<p align="justify">Choosing to use HTRP Rubber gaskets for your plate heat exchangers means more uptime.</p>
						<p align="justify">When it comes to replacing a plate heat exchanger gasket, buying on basis of price alone can be risky. If a failure occurs during operation, any savings made by purchasing a cheaper gasket could pale into insignificance when set against the value of lost production. There are number factors that need to be considered when selecting a replacement gasket that you can rely on.</p>
						<p align="justify">Replacing a PHE gasket requires slightly more technical expertise than re-sealing a double-glazed window or a car windscreen. That is why, when it comes to re-gasketing, buying on price alone can be a very risky thing to do. With gaskets, you get what you pay for and, if you pay less than premium price, the chances are that you will end up with a less than premium re-gasketing job. Simply formulating the right gasket compound and profile for a specific duty is an art – or more accurately – a science in itself. To compound the right rubber mixture can involve the selection of anywhere from five to fifteen different substances from around 1700 of different grades of polymer, vulcanizing chemicals and processing materials currently available. And that selection process is, itself, influenced by a host of other parameters that could affect the eventual performance of the gasket. The working environment, the service temperature and pressure, the actual nature of the duty and the interreaction between the gasket material and the plates all, individually and collectively, help to determine the final choice of materials used.</p>
					
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

	    


















