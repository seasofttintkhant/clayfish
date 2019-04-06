<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");
	incHeader();
?>
	<div class="card">
		<div class="card-header">
			Application Email (admin)
		</div>
		<div class="card-body">
			<form action="confirm/check.php" method="POST" id="contat_email_form_to_admin">
			  <div class="form-group row">
			    <label for="sender_name" class="col-sm-2 col-form-label">Sender</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="sender_name" placeholder="Sender" name="sender_name" value="<?php echo populatedOrData(getPopulateData('sender_name'),getValueByKey("application_email_sender_name_to_admin")); ?>">
			      	<?php if(getErrorData('sender_name')): ?>
						<div class="invalid-feedback forced-show">
						  <?php echo getErrorData('sender_name') ?>
						</div>
					<?php endif ?>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="sender_address" class="col-sm-2 col-form-label">Sender Address</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="sender_address" placeholder="Sender Address" name="sender_address" value="<?php echo populatedOrData(getPopulateData('sender_address'),getValueByKey("application_email_sender_addresss_to_admin")); ?>">
			      	<?php if(getErrorData('sender_address')): ?>
						<div class="invalid-feedback forced-show">
						  <?php echo getErrorData('sender_address') ?>
						</div>
					<?php endif ?>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="admin_address" class="col-sm-2 col-form-label">Admin Address</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="admin_address" placeholder="Admin Address" name="admin_address" value="<?php echo populatedOrData(getPopulateData('admin_address'),getValueByKey("application_email_admin_address_to_admin")); ?>">
			      	<?php if(getErrorData('admin_address')): ?>
						<div class="invalid-feedback forced-show">
						  <?php echo getErrorData('admin_address') ?>
						</div>
					<?php endif ?>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" value="<?php echo populatedOrData(getPopulateData('subject'),getValueByKey("application_email_subject_to_admin")); ?>">
			      	<?php if(getErrorData('subject')): ?>
						<div class="invalid-feedback forced-show">
						  <?php echo getErrorData('subject') ?>
						</div>
					<?php endif ?>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="body" class="col-sm-2 col-form-label">Body</label>
			    <div class="col-sm-10">
			      <textarea class="" id="body" placeholder="Body" name="body"><?php echo populatedOrData(getPopulateData('body'),getValueByKey("application_email_body_to_admin")); ?></textarea>
			      	<?php if(getErrorData('body')): ?>
						<div class="invalid-feedback forced-show">
						  <?php echo getErrorData('body') ?>
						</div>
					<?php endif ?>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="footer" class="col-sm-2 col-form-label">Footer</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" id="footer" placeholder="Footer" name="footer"><?php echo populatedOrData(getPopulateData('footer'),getValueByKey("application_email_footer_to_admin")); ?></textarea>
			      	<?php if(getErrorData('footer')): ?>
						<div class="invalid-feedback forced-show">
						  <?php echo getErrorData('footer') ?>
						</div>
					<?php endif ?>
			    </div>
			  </div>
			</form>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary" onclick="submitForm('#contat_email_form_to_admin')">Submit</button>
		</div>
	</div>

	<script src="../../../js/editor/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body');
		CKEDITOR.editorConfig = function( config ) {
			// Define changes to default configuration here.
			config.filebrowserBrowseUrl = '../../../js/editor/kcfinder/browse.php?opener=ckeditor&type=files';
			config.filebrowserImageBrowseUrl = '../../../js/editor/kcfinder/browse.php?opener=ckeditor&type=images';
			config.filebrowserFlashBrowseUrl = '../../../js/editor/kcfinder/browse.php?opener=ckeditor&type=flash';
			config.filebrowserUploadUrl = '/../../../js/editor/kcfinder/upload.php?opener=ckeditor&type=files';
			config.filebrowserImageUploadUrl = '../../../js/editor/kcfinder/upload.php?opener=ckeditor&type=images';
			config.filebrowserFlashUploadUrl = '../../../js/editor/kcfinder/upload.php?opener=ckeditor&type=flash';
			config.filebrowserUploadMethod = 'form';
		    config.enterMode = CKEDITOR.ENTER_BR;
		};
    </script>

<?php 
	unsetPopulatedData();
	unsetErrorData();
	incFooter();
?>