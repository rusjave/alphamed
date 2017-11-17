<?php
	$this->load->view('public/_includes/header');
?>

<?php
    $this->load->view('public/_includes/slider');
?>

<div class="about-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
               <img src="<?php echo base_url('assets/images/alphamed-slider3.jpg'); ?>"  style="height: 300px; width: 100%; padding: 20px;" alt="...">
               <img alt="140x140" data-src="holder.js/140x140" class="img-rounded" style="width: 100%; height: 300px; padding: 20px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWZjNGE0ODE3YyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ZmM0YTQ4MTdjIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQzLjUiIHk9Ijc0LjgiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
            </div>
            <div class="col-md-7">             
                <img src="<?php echo base_url('/assets/images/about-us.png'); ?>" alt="">
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