<?php
	$this->load->view('public/_includes/header');
?>
<div class="contact-section">
	<div id="body" >
		<div class="content">
			<img src="<?php echo base_url('/assets/images/telephone.jpg'); ?>" alt="">
			<div style="padding:25px;">
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
			<h2>send us a message</h2>
			<form action="">
				<label for="firstName"> <span>first name*</span>
					<input type="text" name="first" id="firstName">
				</label>
				<label for="lastName"> <span>last name*</span>
					<input type="text" name="last" id="lastName">
				</label>
				<label for="email"> <span>email*</span>
					<input type="text" name="email" id="email">
				</label>
				<label for="phoneNumber"> <span>Phone Number</span>
					<input type="text" name="phone" id="phoneNumber">
				</label>
				<label for="subject"> <span>subject*</span>
					<input type="text" name="subject" id="subject">
				</label>
				<label for="message"> <span>message</span>
					<textarea name="" id="message" cols="30" rows="10"></textarea>
				</label>
				<input type="submit" value="" id="submit">
			</form>						
		</div>
		<div class="sidebar">
			<h3>contact</h3>
			<ul>
				<li>
					<span class="email">email</span>
					<ul>
						<li>
							<a href="#">alphamedmedicalgroup@yahoo.com</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="twitter">twitter</span>
					<ul>
						<li>
							<a href="#">@alphamed</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="facebook">facebook</span>
					<ul>
						<li>
							<a href="#">www.facebook/alphamed</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>


<?php
	$this->load->view('public/_includes/footer');
?>