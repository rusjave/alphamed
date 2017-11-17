<?php
	$this->load->view('public/_includes/header');
?>

<?php
    $this->load->view('public/_includes/slider');
?>

<div class="services-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
               <img src="<?php echo base_url('assets/images/alphamed-slider3.jpg'); ?>"  style="height: 300px; width: 100%; padding: 20px;" alt="...">
               <img alt="140x140" data-src="holder.js/140x140" class="img-rounded" style="width: 100%; height: 300px; padding: 20px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWZjNGE0ODE3YyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ZmM0YTQ4MTdjIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQzLjUiIHk9Ijc0LjgiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
            </div>
            <div class="col-md-7">             
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