<?php
	$this->load->view('public/_includes/header');
?>

<?php
    $this->load->view('public/_includes/slider');
?>

<div class="about-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <img src="<?php echo base_url('assets/images/alphamed-slider3.jpg'); ?>"  style="height: 500px; width: 370px; padding: 20px;" alt="...">
            </div>
            <div class="col-md-8">             
               <!--  <img src="<?php echo base_url('/assets/images/about-us.png'); ?>" alt=""> -->
					<div class="content-1">
						<h2>about</h2>
						<p>
							<strong>Affordability:</strong> Quality diagnostics need not be expensive. We ensure that our services are 30 percent lower compared with hospitals and other diagnostic laboratories. 

						</p>
						<p>
							<strong>Reliability:</strong> We believe in providing the highest standards of service possible. Our staff are highly trained and utilize state of the art equipment for our clinical laboratory and ultrasound imaging.
						</p>
						<p>
							<strong>Convenience.:</strong> Our diagnostic centre is conveniently located 
							(just along Mac Arthur Hi-way in front of San Miguel Complex in San Fernando) with ample parking space and receiving area. 
						</p>
						<h3 class="text-center">
							<strong>“A reliable, convenient and affordable  diagnostic  laboratory is a vital component  in patient care”.</strong>

						</h3>
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