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
			Topics
		</div>
		<div class="card-body">
			<table class="table table-striped table-bordered">
			  <tbody>
			    <tr>
			      <td>Status</td>
			      <td><?php echo sessionGet('old_topic_data','status') ? 'Published' : 'Draft' ?></td>
			    </tr>
			    <tr>
			      <td>Title</td>
			      <td><?php echo sessionGet('old_topic_data','title'); ?></td>
			    </tr>
			    <tr>
			      <td>Content</td>
			      <td><?php echo nl2br(sessionGet('old_topic_data','content')); ?></td>
			    </tr>
			    </tr>
			  </tbody>
			</table>
		</div>
		<div class="card-footer">
			<form action="save_or_update.php" method="POST" id="save_topic">	
			<input type="hidden" name="id" value="<?php echo sessionGet('id'); sessionUnset('id') ?>">	
			  <button type="submit" class="btn btn-primary" onclick="submitForm('#save_topic')">Submit</button>
			  <a href="<?php echo getPrevLink() ?>" class="btn btn-secondary">Cancel</a>
			</form>
		</div>
	</div>

	<script src="../../js/editor/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
		CKEDITOR.editorConfig = function( config ) {
			// Define changes to default configuration here.
			config.filebrowserBrowseUrl = '../../js/editor/kcfinder/browse.php?opener=ckeditor&type=files';
			config.filebrowserImageBrowseUrl = '../../js/editor/kcfinder/browse.php?opener=ckeditor&type=images';
			config.filebrowserFlashBrowseUrl = '../../js/editor/kcfinder/browse.php?opener=ckeditor&type=flash';
			config.filebrowserUploadUrl = '/../../js/editor/kcfinder/upload.php?opener=ckeditor&type=files';
			config.filebrowserImageUploadUrl = '../../js/editor/kcfinder/upload.php?opener=ckeditor&type=images';
			config.filebrowserFlashUploadUrl = '../../js/editor/kcfinder/upload.php?opener=ckeditor&type=flash';
			config.filebrowserUploadMethod = 'form';
		    config.enterMode = CKEDITOR.ENTER_BR;
		};
    </script>

<?php 
	unsetPopulatedData();
	unsetErrorData();
	incFooter();
?>