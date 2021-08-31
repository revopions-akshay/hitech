<?php include('includes/header.php');?>
	<div id="content" class="site-content">
		<div class="page-header">
		    <div class="container">
		        <div class="breadc-box no-line">
		            <div class="row">
		                <div class="col-md-12">
		                    <h3 class="page-title">Chairman Message</h3>
		                    <ul id="breadcrumbs" class="breadcrumbs none-style">
		                        <li><a href="index.php">Home</a></li>
		                        <li class="active">Chairman Message</li>
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
						<h3 class="text-primary">Chairman Message</h3>
						<p align="justify">Passionate Team to the right job has helped a mass of successful stories!</p>
						<p align="justify">For almost a decade Hi Tech Rubber has emerged as the industrial sealant rubber product manufacturing firm</p>

						<p align="justify">With highly versatile machinery and skill developed labour a vast range of quality products whch spanning successful brands in the rubber industry. We are very happy that Hi tech has the best team who works as a family and they come with rich experience in manufacturing rubber products.</p>
						<p align="justify">Thanks to our capacity to adapt to dynamic innovations while keeping the remarkable needs of our regarded clients at the front line of the company’s core interest.</p>
						<p align="justify">Our strength is developed by our unique ideas and values, wherein we develop excellent and smart services by giving equal importance to all stakeholders involved in the chain, such as our diverse talented work team, partners, clients, and the society.</p>
						<p align="justify">Finding new ideas and strategies to creating brilliant business opportunities and giving value-added services to our clients, we develop new products and services and induce excellent techniques to develop our products technically tested.</p>
						<p align="justify">All you need to do is to let us know how we can improve our products and what kind of new product range we can launch. Our team is happy to answer your question about our products and services. Innovative ideas not only improve processes but also gain the success of your business.</p>
						<p align="justify">We stand by the Motto; Clients Satisfaction is our success. Thanks</p>
						<h4>Shiva Gupta (Director)</h4>
						<h4>Hi- Tech Rubber</h4>
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

	    