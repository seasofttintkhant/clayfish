<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");
	incHeader();
	if(sessionGet("is_method_post") != true){
		header('Location: ../');
	}
	sessionUnset("is_method_post");
?>
	<div class="card">
		<div class="card-header">
			Application Email (admin)
		</div>
		<div class="card-body">
			<table class="table table-striped table-bordered">
			  <tbody>
			    <tr>
			      <td>Sender</td>
			      <td><?php echo sessionGet('old_application_email_data','sender_name'); ?></td>
			    </tr>
			    <tr>
			      <td>Sender Address</td>
			      <td><?php echo sessionGet('old_application_email_data','sender_address'); ?></td>
			    </tr>
			    <tr>
			      <td>Subject</td>
			      <td><?php echo sessionGet('old_application_email_data','subject'); ?></td>
			    </tr>
			    <tr>
			      <td>Body</td>
			      <td><?php echo nl2br(sessionGet('old_application_email_data','body')); ?></td>
			    </tr>
			    <tr>
			      <td>Footer</td>
			      <td><?php echo nl2br(sessionGet('old_application_email_data','footer')); ?></td>
			    </tr>
			  </tbody>
			</table>
		</div>
		<div class="card-footer">
			<form action="check_add_add.php" method="POST" id="contat_email_to_admin">
			  <button type="submit" class="btn btn-primary" onclick="submitForm('#contat_email_to_admin')">Submit</button>
			  <a href="<?php echo getPrevLink() ?>" class="btn btn-secondary">Cancel</a>
			</form>
		</div>
	</div>

<?php 
	incFooter();
?>