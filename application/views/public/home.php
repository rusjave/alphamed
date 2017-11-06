<?php
	$this->load->view('public/_includes/header');
?>
<section class="section-white">
  <div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo base_url('assets/images/alphamed-slider5.jpg'); ?>"  style="height: 450px; width: 100%;" alt="...">
          <div class="carousel-caption">
            <h2></h2>
          </div>
        </div>
        <div class="item">
        <img src="<?php echo base_url('assets/images/alphamed-slider2.jpg'); ?>"  style="height: 450px; width: 100%;" alt="...">
          <div class="carousel-caption">
            <h2></h2>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url('assets/images/alphamed-slider3.jpg'); ?>"  style="height: 450px; width: 100%;" alt="...">
          <div class="carousel-caption">
            <h2></h2>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url('assets/images/alphamed-slider4.jpg'); ?>"  style="height: 450px; width: 100%;" alt="...">
          <div class="carousel-caption">
            <h2></h2>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url('assets/images/alphamed-slider6.jpg'); ?>"  style="height: 450px; width: 100%;" alt="...">
          <div class="carousel-caption">
            <h2></h2>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

  </div>
</section>
 
<div class="home-page-section-1">
	<div id="featured">
		<div>
			<div class="section-1">
				<h2>Welcome to Alphamed Diagnostic Center</h2>
			</div>
			<div class="home-content">
				<h4>Trust the FASTEST growing diagnostic laboratory in Pampanga!</h4>
				<h4>With 3 conveniently located branches and soon to open in Mabalacat</h4>
					<ul>
				      	<li>No need to wait for your results, we will email them directly to your doctor or to you, or download directly from our website</li>
					</ul>
				 <h4>Value for Money</h4>
				 	<ul>
				     	<li>Avail of our Loyalty card and get great discounts and freebies!</li>
				     	<li>Get free ECG!</li>
					</ul>
				<h4>We care for you</h4>	
					<ul>
				     	<li>Enjoy free coffee and biscuits after blood extraction</li>
					</ul>	
			</div>		
		</div>	
	</div>
</div>
	

<?php
	$this->load->view('public/_includes/footer');
?>