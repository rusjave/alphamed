<?php
	$this->load->view('public/_includes/header');
?>

<div id="body">
	<div class="content">
		<h2>Laboraroty Test Results:</h2>
		<!-- <form action="/page/search" method="POST">
			<label for="firstName"> <span>Official Reciept ID</span>
				<input name="keyword" type="text" placeholder="Ex. 02-1267">
			</label>
			<input value="" id="submit" type="submit">
		</form>	 -->
	 <table style="width:100%">
		<?php foreach ($results as $result): ?>
			<tr>
				<th>Patient ID</th>
			    <th>OR</th> 
			    <th>First Name</th>
			    <th>Last Name</th>
			    <th>Blood Type</th>
			    <th>Urinal Results</th>
			</tr> 
			<tr>   
				<td><?php  echo  $result->id; ?></td>
				<td><?php  echo $result->or_number; ?></td>
				<td><?php  echo $result->first_name; ?></td>
				<td><?php  echo $result->last_name; ?></td>
				<td><?php  echo $result->blood_type; ?></td>
				<td><?php  echo $result->urinal_examination; ?></td>
			</tr>	
		<?php endforeach; ?>
		</table> 
		<!-- <?php print_r($results); ?> -->
	</div>
</div>

<?php
	$this->load->view('public/_includes/footer');
?>