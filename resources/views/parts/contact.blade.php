		<p id="about-anchor"></p>
		<!--Footer-->
		<div class="footer">
			<div class="container">
							<h2>CONTACT</h2>
				<div class="row justify-content-center">
			<!--Contact -->
						<div class="col-12 col-sm-4 col-md-4 col-lg-4" id="contact_form">	
							<div class="footer-block">
								   <form action="" method="post">
								<div class="form-group">
								   <label for="name">Your Name:</label>
								   <input type="name" name="name" class="form-control" id="name" placeholder="Name">
								</div>
								<div class="form-group">
								   <label for="email1">E-mail:</label>
								   <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
								</div>
								<div class="form-group">
								   <label for="phone">Your number:</label>
								   <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone">
								</div>
								<div class="form-group">
								   <label for="message">Message:</label>
								   <textarea class="form-control" name="message" rows="2"></textarea>
								</div>
								   <button type="submit" id="send_message" class="btn btn-outline-info">Send message</button>
								</form>
								</div>
							</div>
					<div class="col-12 col-sm-4 col-md-4 col-lg-4">									
						<div class="footer-block">
							<div class="card border-primary mb-3" style="max-width: 26rem; min-height: 25rem;">
							  <div class="card-header">About Us</div>
							  <div class="card-body text-primary">
							    <p class="card-text">
							    	Work Phone : {{ $maininfo['workphone'] }}<br>
							    	Mobile Phone : {{ $maininfo['mobilephone'] }}<br>
							    	Address : {{ $maininfo['address'] }}<br>
							    	Email : {{ $maininfo['email'] }}
							    </p>
							  </div>
							</div>
						</div>
					</div>
			<!--Contact  end-->
			<!--Map-->
					<div class="col-12 col-sm-4 col-md-4 col-lg-4">									
						<div class="footer-block">
						{!! $maininfo['map'] !!}		
						</div>
					</div>
			<!--Map end-->
					</div>
				</div>
			</div>
		<!--Footer end-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/main.js"></script>