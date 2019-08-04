<!DOCTYPE html>
<html lang="en">
<head>
	<title>Talkathon Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="favicon.png"/>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

		
		


	<div class="container-contact100">
		<div class="wrap-contact100">
				<div class="img-container">
					<img src="TEDxSriSairamIT.png" width="100%">
				</div>
				<span class="contact100-form-title">
					Registration
				</span>

			<form class="contact100-form validate-form" id="SpeakersForm" action="speaker.php" method="post">
				<div class="Speaker">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="sName" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="sEmail" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>
<!--
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Needed Services</span>
					<div>
						<select class="selection-2" name="service">
							<option>Choose Services</option>
							<option>Online Store</option>
							<option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Budget</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Select Budget</option>
							<option>1500 $</option>
							<option>2000 $</option>
							<option>2500 $</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
-->				<div class="wrap-input100 input100-select">
						<span class="label-input100">Department</span>
						<div>
							<select class="selection-2" name="sDepartment" required>
								<option value="">Choose Department</option>
								<option value="IT">IT</option>
								<option value="CSE">CSE</option>
								<option value="ECE">ECE</option>
								<option value="EEE">EEE</option>
								<option value="MECH">MECH</option>
								<option value="CIVIL">CIVIL</option>
							</select>
						</div>
						<span class="focus-input100"></span>
					</div>
	
					<div class="wrap-input100 input100-select">
						<span class="label-input100">Year</span>
						<div>
							<select class="selection-2" name="Year">
								<option value="">Select Year</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 input100-select">
							<span class="label-input100">Section</span>
							<div>
								<select class="selection-2" name="Section">
									<option value="">Select Section</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
								</select>
							</div>
							<span class="focus-input100"></span>
						</div>

	

				<div class="wrap-input100 validate-input" data-validate = "Answer is required">
					<span class="label-input100">Share your thoughts about TEDxSriSairamIT</span>
					<textarea class="input100" name="message1" placeholder="Your answer here..."></textarea>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Answer is required">
						<span class="label-input100">What are you going to showcase in this platform?</span>
						<textarea class="input100" name="message2" placeholder="Your answer here..."></textarea>
						<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100 validate-input" data-validate="Number is required">
					<span class="label-input100">Number of performers in your team?</span>
					<input class="input100" type="text" name="teamnumber" placeholder="Enter number of performers">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Answer is required">
						<span class="label-input100">What are you good at?</span>
						<textarea class="input100" name="message3" placeholder="Your answer here..."></textarea>
						<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="submit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</div>



			</form>

<!--Audience-->
			
			
		</div>
	</div>



	<div id="dropDownSelect1"></div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
