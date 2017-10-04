<?php
	$this->load->view('public/_includes/header');
?>

<div id="body">
		<div class="content">
			<img src="/assets/images/telephone.jpg" alt="">
			<h2>send us a message</h2>
			<form action="index.html">
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
					<span class="address">address</span>
					<ul>
						<li>
							Alphamed
						</li>
						<li>
							Diagnostic Center
						</li>
						<li>
							3952 Glen Falls Road
						</li>
						<li>
							Wayne, PA 19088
						</li>
					</ul>
				</li>
				<li>
					<span class="phone">telephone</span>
					<ul>
						<li>
							215.859.9423
						</li>
					</ul>
				</li>
				<li>
					<span class="email">email</span>
					<ul>
						<li>
							<a href="#">nyc@volumeone.com</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="twitter">twitter</span>
					<ul>
						<li>
							<a href="#">@mattovolumeone</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="facebook">facebook</span>
					<ul>
						<li>
							<a href="#">www.facebook/illumelabs</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

<?php
	$this->load->view('public/_includes/footer');
?>