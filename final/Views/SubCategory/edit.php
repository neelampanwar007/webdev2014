<style type="text/css">
	.error {
		color: red;
	}
	.my-horizontal label {
		display: inline-block;
		width: 150px;
		text-align: right;
		margin-right: 10px;
	}
	.my-horizontal .form-control{
		display: inline-block;
	}

	.has-feedback .form-control-feedback {
		display: inline-block;
		right: auto;
		top: auto;
		margin-left: -40px;
	}
	.has-error {
		color: red;
	}

	@media screen and (min-width: 768px) {
		.my-horizontal .form-control{
			width: 25%;
		}
	}
</style>


	      <div class="modal-header">
	        <a href="?" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
	        <h4 class="modal-title">Edit: <?=$model['SubCategoryName']?></h4>
	      </div>


	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
<form action="?action=save" method="post" class="my-horizontal">
	
	
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	
	
	<div class="form-group">
		<label class="control-label" for="id">Sub Category Id:</label>
		<input class="form-control" type="int" name="id" id="id" value="<?=$model['id']?>" placeholder="Sub Category id" />
	</div>
	
	<div class="form-group <?if(isset($errors['SubCategoryName '])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="SubCategoryName ">Sub Category Name:</label>
		<input class="required form-control" type="text" name="SubCategoryName " id="SubCategoryName " value="<?=$model['SubCategoryName']?>" placeholder="Sub Category Name" />
		<? if(isset($errors['SubCategoryName '])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['SubCategoryName ']?></span>
		<? endif ?>
	</div>
	
	

	<div class="form-group <?if(isset($errors['Catergory_id'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Catergory_id">Catergory Type:</label>
		
		<select size="1" class="required form-control" name="Catergory_id" id="Catergory_id">
			<option value="">--Category Type--</option>
			<? foreach (Keywords::SelectListFor(5) as $row): ?>
				<option value="<?=$row['id']?>">
					<?=$row['Name']?>
				</option>
			<? endforeach; ?>
		</select>
		
		
	</div>
	
		  <div class="modal-footer>
			<label class="control-label"></label>
			<input class="btn btn-primary" type="submit" value="Save" />
			<a href="?" data-dismiss="modal">Cancel</a>
	      </div>

	
</form>

	<? function JavaScripts(){ global $model; ?>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
		<script type="text/javascript">
			$(function(){
				
				//$("form").validate();
				$("#Catergory_id").val(<?=$model['Catergory_id']?>);
				
			})
		</script>
		
		
		
		
		
		
		
	<? } ?>