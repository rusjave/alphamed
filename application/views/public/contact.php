<?php
	$this->load->view('public/_includes/header');
?>

<?php
    $this->load->view('public/_includes/slider');
?>

<div class="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
               <!-- <img src="<?php echo base_url('assets/images/alphamed-slider3.jpg'); ?>"  style="height: 370px; width: 100%; padding: 20px;" alt="..."> -->
            </div>
            <div class="col-md-8">             
                <img src="<?php echo base_url('/assets/images/telephone.jpg'); ?>" alt="">
                <h2>Contact Us</h2>
					<div class="content-1">
						<h3>Unit 102 Citicorp Business Center San Isidro CSFP (Main Branch)</h3>
							<ul>
							    <li>Globe Mobile: 09175228123</li>
							    <li>Sun/Smart Mobile: 09328750856</li>
							    <li>Landline: 045-4553972</li>
							    <li>Email: alphamedmedicalgroup@yahoo.com</li>
							</ul>
						<h3>B. Mendoza St. CSFP (Beside Makabali Hosp)  </h3>
							<ul>
							    <li>Globe Mobile: 091716066253</li>
							    <li>Sun/Smart Mobile: 09437071443</li>
							    <li>Landline: 045-4027512</li>
							    <li>Email: alphamedmedicalgroup@yahoo.com</li>
							</ul>
						<h3>JP Rizal St. Parian Mexico Pampanga</h3>
							<ul>
							    <li>Globe Mobile: 09171338211</li>
							    <li>Sun/Smart Mobile: 09338676280</li>
							    <li>Landline: 045-4027612</li>
							    <li>Email: alphamedmakabali@gmail.com</li>
							</ul>
					</div> 
                </div>
          
            <div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">CONTACT</h3>
					</div>
					<div class="panel-body">
					<ul class="list-unstyled">
						<li>
							<span class="email">Email</span>
							<ul class="list-unstyled">
								<li>
									<a href="#">alphamedmedicalgroup@yahoo.com</a>
								</li>
							</ul>
						</li>
						<li>
							<span class="twitter">Twitter</span>
							<ul class="list-unstyled">
								<li>
									<a href="#">@alphamed</a>
								</li>
							</ul>
						</li>
						<li>
							<span class="facebook">Facebook</span>
							<ul class="list-unstyled">
								<li>
									<a href="#">www.facebook/alphamed</a>
								</li>
							</ul>
						</li>
					</ul>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="contact-content-2">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-10">
				<h2>send us a message</h2>
				<form action="">
					<label for="firstName"> <span>first name*</span>
						<input name="first" id="firstName" type="text">
					</label>
					<label for="lastName"> <span>last name*</span>
						<input name="last" id="lastName" type="text">
					</label>
					<label for="email"> <span>email*</span>
						<input name="email" id="email" type="text">
					</label>
					<label for="phoneNumber"> <span>Phone Number</span>
						<input name="phone" id="phoneNumber" type="text">
					</label>
					<label for="subject"> <span>subject*</span>
						<input name="subject" id="subject" type="text">
					</label>
					<label for="message"> <span>message</span>
						<textarea name="" id="message" cols="30" rows="10"></textarea>
					</label>
					<input value="" id="submit" type="submit">
				</form>
			</div>	
		</div>
	</div>
</div>

<div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>

<?php
	$this->load->view('public/_includes/footer');
?>