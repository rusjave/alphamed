<?php
	$this->load->view('public/_includes/header');
?>

<?php
    $this->load->view('public/_includes/slider');
?>

<div class="contact-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
               <img src="<?php echo base_url('assets/images/alphamed-slider3.jpg'); ?>"  style="height: 300px; width: 100%; padding: 20px;" alt="...">
               <img alt="140x140" data-src="holder.js/140x140" class="img-rounded" style="width: 100%; height: 300px; padding: 20px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWZjNGE0ODE3YyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ZmM0YTQ4MTdjIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQzLjUiIHk9Ijc0LjgiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
            </div>
            <div class="col-md-7">             
                <img src="<?php echo base_url('/assets/images/telephone.jpg'); ?>" alt="">
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
               
          
            <div class="col-md-2">
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