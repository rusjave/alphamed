<?php
	$this->load->view('public/_includes/header');
?>

	<div class="lab-results">
		<div id=body>
			<div class="content">
				<h2>Search Lab Results</h2>
				<form action="page/search" method="POST">
					<label for="firstName">
						<input name="keyword" type="text" placeholder="Please enter your id number">
					</label>
					<input value="" id="submit" type="submit">
				</form>	
			</div>	
		</div>

	</div>
	<div id="section">
		<div>
			<div>
				<h1>accurate.reliable.fast</h1>
				<p>
					When it comes to finding answers to questions and getting results. Illumelabs is number one. No other diagnostic laboratory is faster, more reliable and accurate. Choose Alphamed.
				</p>
			</div>
		</div>
	</div>
	<div id="featured">
		<div>
			<div class="article">
				<h2>Welcome to Alphamed Diagnostic Center</h2>
				<img src="<?php echo base_url('assets/images/diagnostic-center.jpg'); ?>" alt="">
				<p>
					"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</p>
				<p>
					"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</p>
				<p>
					"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</p>
			</div>
			<ul>
				<li>
					<h3>hematology</h3>
					<div>
						<p>
							Blood extraction using seismic energy for painless testing.
						</p>
						<a href="blog.html" class="more">read more</a>
					</div>
					<img src="<?php echo base_url('assets/images/hematology.jpg'); ?>" alt="">
				</li>
				<li>
					<h3>urine &amp; drug testing</h3>
					<div>
						<p>
							Accurate and secure testing of urine for diseases and drugs and medicines.
						</p>
						<a href="blog.html" class="more">read more</a>
					</div>
					<img src="<?php echo base_url('assets/images/urine-and-drug-testing.jpg'); ?>" alt="">
				</li>
				<li>
					<h3>x-ray</h3>
					<div>
						<p>
							Fast and clear x-ray results. You’ll be assisted by our friendly staff all the way.
						</p>
						<a href="blog.html" class="more">read more</a>
					</div>
					<img src="<?php echo base_url('assets/images/x-ray.jpg'); ?>" alt="">
				</li>
				<li>
					<h3>pathology and dna</h3>
					<div>
						<p>
							State of the art testing for DNA that’s sure to be have fast and accurate results.
						</p>
						<a href="blog.html" class="more">read more</a>
					</div>
					<img src="<?php echo base_url('assets/images/pathology-and-dna.jpg'); ?>" alt="">
				</li>
			</ul>
		</div>
	</div>

<?php
	$this->load->view('public/_includes/footer');
?>