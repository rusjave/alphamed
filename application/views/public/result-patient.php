<?php
	$this->load->view('public/_includes/header');
?>
	<div class="lab-results">
		<div id=body>
			<div class="content">
				<h2>This are the results</h2>
				<form action="/" method="POST">
					<label for="firstName">
						<input name="keyword" type="text" placeholder="Please enter your id number">
					</label>
					<input value="" id="submit" type="submit">
                                          
				</form>	

                                   
			</div>	
		</div>
<center><img src="<?php echo base_url('/assets/images/lisreceipt.jpg'); ?>" alt=""><center>

View and download your Medical Result/s by typing your transaction code on the about textbox then hit enter.
<?php
	$this->load->view('public/_includes/footer');
?>