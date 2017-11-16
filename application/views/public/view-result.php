<?php
	$this->load->view('public/_includes/header');
?>
	<div class="lab-results">
		<div id=body>
			<div class="content">
				<h2>Search Lab Results</h2>
				<form action="<?php echo base_url('/pdf'); ?>" method="POST">
					<label for="firstName">
						<input name="keyword" type="text" placeholder="Please enter your Transaction Code">
					</label>
					<input value="" id="submit" type="submit">
				</form>	
			</div>	
		</div>
      <center>  <img src="<?php echo base_url('/assets/images/lisreceipt.jpg'); ?>" alt=""><br>
             To View and dwonload your laboratory result/s Please Enter your  Transaction code on the about text field and hit enter.
 </center>

<?php
	$this->load->view('public/_includes/footer');
?>