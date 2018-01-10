<?php
	$this->load->view('public/_includes/header');
?>

<?php
    $this->load->view('public/_includes/slider');
?>

<div class="services-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <img src="<?php echo base_url('assets/images/alphamed-slider3.jpg'); ?>"  style="height: 500px; width: 370px; padding: 20px;" alt="...">
            </div>
            <div class="col-md-8">             
					<div class="content-1">
						<h2>General Services</h2>
						<img src="http://local-alphamed.com/assets/images/general-services.jpg" alt="">
						<div class="article">
							<p>
								When it comes to finding answers to questions and getting results. Alphamed is number one. No other diagnostic laboratory is faster, more reliable and accurate. Choose Alphamed.
							</p>
							<ul>
								<li>
									<a href="#">Family Medicine</a>
								</li>
								
								<li>
									<a href="#">Internal Medicine</a>
								</li>
								
							</ul>
							
							<ul>
								<li>
									<a href="#">Diabetology</a>
								</li>
								
								<li>
									<a href="#">Cardiology</a>
								</li>
							</ul>
							<ul>
								<li>
									<a href="#">Obstetrics and Gynecology</a>
								</li>
								<li>
									<a href="#">Gastroenterology</a>
								</li>
								
							</ul>
						</div>
					</div> 
                </div>
               
            </div>
            <div class="col-md-2">
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