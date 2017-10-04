<?php
	$this->load->view('public/_includes/header');
?>
<style>


</style>
<div class="login-section">
	<div id="body">
		<div class="content">
		<h2>Login</h2>
			
			<form action="<?php echo base_url('page/auth');?>" method="POST">
				<label for="Username"> <span>Username:</span>
					<input name="username" type="text">
				</label>
				<label for="Username"> <span>Password:</span>
					<input name="password" type="password">
				</label>
				<input value="" id="submit" type="submit">		
			</form>	
			<?php if ($this->session->flashdata('login_error')){
					echo '<p class="flashdata">'. $this->session->flashdata('login_error').'<p/>';
				}
			?>
		</div>
	</div>
</div>

<?php
	$this->load->view('public/_includes/footer');
?>