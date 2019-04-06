<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");
	incHeader();
	if(isset($_GET["id"]) && !empty($_GET["id"])){
		$id = $_GET["id"];
		$sql = "SELECT * FROM topics WHERE id='$id' AND deleted = 0";
		$conn = $GLOBALS["conn"];
		$topic = mysqli_fetch_assoc(mysqli_query($conn,$sql));
		if(!$topic){
			header('Location: ../');
		}
	}else{
		if(!$topic){
			header('Location: ../');
		}
	}
?>
	<div class="card">
		<div class="card-header">
			Topics
		</div>
		<div class="card-body">
			<form action="../confirm/check.php?id=<?php echo $topic['id'] ?>" method="POST" id="topic_save">
			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Status</label>
			    <div class="col-sm-10">
			    	<?php 
			    		$checked_publish = "";
			    		$checked_draft = "";
			    		if($topic["status"]){
			    			$checked_publish = "checked = ''";
			    		}else{
			    			$checked_draft = "checked = ''";
			    		}
			    	?>
			      <input type="radio" id="published" name="status" value="1" <?php echo $checked_publish ?>>
			      <label for="published">Published</label>
			      <input type="radio" id="draft" name="status" value="0" <?php echo $checked_draft ?>>
			      <label for="draft">Draft</label>
		      	<?php if(getErrorData('status')): ?>
					<div class="invalid-feedback forced-show">
					  <?php echo getErrorData('status') ?>
					</div>
				<?php endif ?>
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="title" class="col-sm-2 col-form-label">Title</label>
		    <div class="col-sm-10">
		    	<?php print_r(sessionGet('old_topic_data','title')); ?>
		      <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?php echo firstOrSecond(sessionGet('old_topic_data','title'),$topic["title"]) ?>">
		      	<?php if(getErrorData('title')): ?>
					<div class="invalid-feedback forced-show">
					  <?php echo getErrorData('title') ?>
					</div>
				<?php endif ?>
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="content" class="col-sm-2 col-form-label">Content</label>
		    <div class="col-sm-10">
		      <textarea class="" id="content" placeholder="Content" name="content"><?php echo firstOrSecond(sessionGet('old_topic_data','content'),$topic["content"]) ?></textarea>
		      	<?php if(getErrorData('content')): ?>
					<div class="invalid-feedback forced-show">
					  <?php echo getErrorData('content') ?>
					</div>
				<?php endif ?>
			    </div>
			  </div>
			</form>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary" onclick="submitForm('#topic_save')">Submit</button>
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
	sessionUnset('old_topic_data');
	incFooter();
?>