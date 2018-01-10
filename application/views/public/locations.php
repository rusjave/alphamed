<?php
	$this->load->view('public/_includes/header');
?>

<?php
    $this->load->view('public/_includes/slider');
?>

<div class="services-content">
	<div class="content">
		<h2>3 BRANCHES NOW OPEN TO SERVE YOU:</h2>	
	</div>
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
			<div class="col-md-2">
				<ul class="list-unstyled">
					<li><img alt="140x140" data-src="holder.js/140x140" class="img-rounded" style="width: 140px; height: 140px;" src="<?php echo base_url('assets/images/alphamed-slider8.jpg'); ?>" data-holder-rendered="true"></li>
					<li><p><a href="https://www.google.com.ph/maps/search/Unit+102+Citicorp+Business+Center+San+Isidro/@15.048483,120.6460772,15z/data=!3m1!4b1?hl=en">View Roadmap</a></p></li>
				</ul>	
			</div>
			<div class="col-md-9">
				<h4>San Fernando Main Branch</h4>
				<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Unit 102 Citicorp Business Center San Isidro&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="http://www.embedgooglemap.net">embed google map</a></div><style>.mapouter{overflow:hidden;height:500px;width:600px;}.gmap_canvas {background:none!important;height:500px;width:600px;}</style></div>
			</div>
		<div class="row">
			<div class="col-md-1">
            </div>
			<div class="col-md-2">
				<img alt="140x140" data-src="holder.js/140x140" class="img-rounded" style="width: 140px; height: 140px;" src="<?php echo base_url('assets/images/alphamed-slider7.jpg'); ?>" data-holder-rendered="true">
				<p><a href="https://www.google.com.ph/maps/place/V.L.+Makabali+Memorial+Hospital/@15.0318433,120.6867064,17z/data=!3m1!4b1!4m5!3m4!1s0x3396f70b4cefcb39:0x683cea7ddfa49793!8m2!3d15.0318381!4d120.6888951?hl=en">View Roadmap</a></p>
			</div>
			<div class="col-md-9">
				<h4>Makabali</h4>
				<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=B. Mendoza St. CSFP Makabali Pamapnga&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="http://www.embedgooglemap.net">embed google map</a></div><style>.mapouter{overflow:hidden;height:500px;width:600px;}.gmap_canvas {background:none!important;height:500px;width:600px;}</style></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
            </div>
            <div class="col-md-2">
				<img alt="140x140" data-src="holder.js/140x140" class="img-rounded" style="width: 140px; height: 140px;" src="<?php echo base_url('assets/images/alphamed-slider6.jpg'); ?>" data-holder-rendered="true">
				<p><a href="https://www.google.com.ph/maps/search/JP+Rizal+St.+Parian+Mexico+Pampanga/@15.0646086,120.718276,17z/data=!3m1!4b1?hl=en">View Roadmap</a></p>

			</div>
			<div class="col-md-9">
				<h4>Mexico</h4>
				<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=JP Rizal St. Parian Mexico Pampanga&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="http://www.embedgooglemap.net">embed google map</a></div><style>.mapouter{overflow:hidden;height:500px;width:600px;}.gmap_canvas {background:none!important;height:500px;width:600px;}</style></div>
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