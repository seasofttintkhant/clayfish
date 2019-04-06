<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");
	incHeader();

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}

	$sql = "SELECT * FROM topics";
	$cond="WHERE";
	if(isset($_GET['status']))
	{
		if(($_GET['status'] == 0 && $_GET['status'] != "") || $_GET["status"] == 1){
			$sql.=" $cond status = {$_GET['status']}";
		}
		if($_GET['status'] == ""){
			$sql.=" $cond (status = 0 OR status = 1)";
		}
	}
	if(isset($_GET['title']) && !empty($_GET['title']))
	{
		if(isset($_GET['status'])){
			$sql .= " AND";
		}else{
			$sql .= " $cond";
		}
		$sql.=" title LIKE '%{$_GET['title']}%'";
	}
	if(isset($_GET['content']) && !empty($_GET['content']))
	{
		if(isset($_GET['title'])){
			$sql .= " AND";
		}else{
			$sql .= " $cond";
		}
		$sql.=" content LIKE '%{$_GET['content']}%'";
	}


	$sql.=" ORDER BY id DESC";
	// For Pagination
	$per_page = 1;
	$offset = ($page-1) * $per_page; 
	$conn = $GLOBALS["conn"];
	$count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS count FROM topics"));
	$total_pages = ceil($count["count"] / $per_page);
	####For Pagination

	$sql.=" LIMIT $per_page OFFSET $offset";
	$topics = mysqli_query($conn,$sql);
?>
	<div class="card">
		<div class="card-header">
			Topics
		</div>
		<div class="card-body">
			<form>
			  <div class="form-row align-items-center">
			    <div class="col-sm-3 my-1">
			      <label class="sr-only" for="title">Title</label>
			      <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($_GET['title']) ? $_GET['title'] : '' ?>" placeholder="Title">
			    </div>
			    <div class="col-sm-3 my-1">
			      <label class="sr-only" for="content">Content</label>
			      <input type="text" class="form-control" id="content" name="content" value="<?php echo isset($_GET['content']) ? $_GET['content'] : '' ?>" placeholder="Content">
			    </div>
			    <div class="col-sm-3 my-1">
					<select name="status" class="form-control">
						<?php 
							$checked_all = "";
							$checked_publish = "";
							$checked_draft = "";
							if(isset($_GET['status']) && $_GET['status'] != ""){
								if($_GET['status'] == 0){
									$checked_draft = "selected";
								}elseif($_GET['status'] == 1){
									$checked_publish = "selected";
								}else{
									$checked_all = "selected";
								}
							}
						?>
						<option value="" <?php echo $checked_all ?>>ALL</option>
						<option value="1" <?php echo $checked_publish ?>>Publish</option>
						<option value="0" <?php echo $checked_draft ?>>Draft</option>
					</select>
			    </div>
			    <div class="col-auto my-1">
			      <button type="submit" class="btn btn-primary">Search</button>
			    </div>
			  </div>
			</form>
			<table class="table table-striped table-bordered">
			  <tbody>
			  	<tr>
			  		<th>
			  			ID
			  		</th>
			  		<th>
			  			Status
			  		</th>
			  		<th>
			  			Title
			  		</th>
			  		<th>
			  			Published At
			  		</th>
			  		<th>
			  			Created
			  		</th>
			  		<th>
			  			Options
			  		</th>
			  	</tr>
				<?php 
					foreach($topics as $topic):
						// $topic = mysqli_fetch_assoc($topic);
				?>
				  	<tr>
				  		<td>
				  			<?php echo $topic["id"] ?>
				  		</td>
				  		<td>
				  			<?php echo $topic["status"] ? 'Published' : 'Draft'?>
				  		</td>
				  		<td>
				  			<?php echo $topic["title"] ?>
				  		</td>
				  		<td>
				  			<?php echo $topic["published_at"] ? date("Y年m月d日",$topic["published_at"]) : 'Draft'?> 
				  		</td>
				  		<td>
				  			<?php echo $topic["created_at"] ? date("Y年m月d日",$topic["created_at"]) : 'Draft'?> 
				  		</td>
				  		<td>
				  			<a href="edit/?id=<?php echo $topic["id"] ?>" class="btn btn-info">Edit</a>
				  			<a href="#" class="btn btn-danger" onclick="submitForm('#delete_form_<?php echo $topic["id"] ?>')">Delete</a>
				  			<form action="delete/?id=<?php echo $topic["id"] ?>" id="delete_form_<?php echo $topic["id"] ?>" method="POST">
				  				<input type="hidden" name="delete_id" value="<?php echo $topic["id"] ?>">
				  			</form>
				  		</td>
				  	</tr>
				<?php endforeach ?>
			  </tbody>
			</table>
		</div>
		<div class="card-footer">
			<nav aria-label="...">
			  <ul class="pagination">
			    <li class="page-item disabled">
			      <a class="page-link" href="/?page=1" tabindex="-1">Previous</a>
			    </li>
			    <?php 
			    	$i = 1;
			    	while($i < $total_pages):
			    ?>
			    <li class="page-item"><a class="page-link" href="?<?php echo http_build_query($_GET) ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
			    <?php 
			    	$i++;
			    	endwhile;
			    ?>
			    <li class="page-item">
			      <a class="page-link" href="#">Next</a>
			    </li>
			  </ul>
			</nav>
		</div>
	</div>

<?php 
	unsetPopulatedData();
	unsetErrorData();
	incFooter();
?>