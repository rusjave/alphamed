<?php
	$this->load->view('public/_includes/header');
?>

<?php
    $this->load->view('public/_includes/slider');
?>

<div class="facilities-content">
    <div class="container">
        <div class="row">
        	<h2>Facilities</h2>
			<div class="col-md-2">
               <!-- <img src="<?php echo base_url('assets/images/alphamed-slider3.jpg'); ?>"  style="height: 500px; width: 280px; padding: 20px;" alt="..."> -->
            </div>              
            <div class="col-md-2">             
			 	<img src="<?php echo base_url('/assets/images/lab-1.png'); ?>" alt="">
			 	<img src="<?php echo base_url('/assets/images/lab-2.png'); ?>" alt="">
				<img src="<?php echo base_url('/assets/images/lab-3.png'); ?>" alt="">
            </div>
            <div class="col-md-8">
            	<h4>BIOSYSTEMS A15 FULLY AUTOMATED CHEMISTRY ANALYZER</h4>
					<ul class="list-unstyled">
						<li>
							<span>Capable of processing </span>
						</li>
						<li>
							<span>200 test/hour with</span>						
						</li>
						<li>
							<span>results ready in minutes</span>
						</li>
					</ul>
					<hr>
				<h4>PHILIPS CLEARVIEW 550 </h4>
					<ul class="list-unstyled">
						<li>
							<span>For ultra fast and accurate</span>
						</li>
						<li>
							<span>hematology test</span>						
						</li>
					</ul>
					<hr>
				<h4>2DECHO W/ DOPPLER AND GENERAL ULTRASOUND</h4>
					<ul class="list-unstyled">
						<li>
							<span>USA made with high resolution images</span>
						</li>
						<li>
							<span>resolution graphics</span>						
						</li>
					</ul>

				<hr>
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