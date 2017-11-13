<?php
	$this->load->view('public/_includes/header');
?>
	<div class="lab-results">
		<div id=body>
			<div class="content">
				<h2>Search Lab Results</h2>
				<form action="/pdf" method="POST">
					<label for="firstName">
						<input name="keyword" type="text" placeholder="Please enter your id number">
					</label>
					<input value="" id="submit" type="submit">
				</form>	
			</div>	
		</div>

<?php
	$this->load->view('public/_includes/footer');
?>