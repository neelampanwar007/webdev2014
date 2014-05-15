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
<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
<form action="?action=save" method="post" class="my-horizontal">
	
	
	<input type="hidden" name="id" value="<?=$model['id']?>" />


	      <div class="modal-header">
	        <a href="?" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
	        <h4 class="modal-title">Edit: <?=$model['ProductName']?> </h4>
	      </div>
	      
	      <</div>
		<div class="form-group <?if(isset($errors['Suplier_id'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Suplier_id'">Suplier:</label>
		
		<select size="1" class="required form-control" name="Suplier_id'" id="Suplier_id'">
			<option value="">--Suplier Name--</option>
			<? foreach (Keywords::SelectListFor(8) as $row): ?>
				<option value="<?=$row['id']?>">
					<?=$row['Name']?>
				</option>
			<? endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label class="control-label" for="Name">Product Name:</label>
		<input class="form-control" type="text" name="Name" id="Name" value="<?=$model['ProductName']?>" placeholder="Name" />
	</div>
	
	<div class="form-group">
		<label class="control-label" for="Price">Price:</label>
		<input class="form-control" type="int" name="Price" id="Price" value="<?=$model['Price']?>" placeholder="Price" />
	</div>
	
	<div class="form-group">
		<label class="control-label" for="Description">Description:</label>
		<input class="form-control" type="text" name="Description" id="Description" value="<?=$model['Description']?>" placeholder="Description" />
	</div>
	
	<div class="form-group">
		<label class="control-label" for="Picture_url">Picture Url:</label>
		<input class="form-control" type="url" name="Picture_url" id="Picture_url" value="<?=$model['Picture_url']?>" placeholder="Picture url" />
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
		<div class="form-group <?if(isset($errors['SubCategory_id'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="SubCategory_id">Sub Category Type:</label>
		
		<select size="1" class="required form-control" name="SubCategory_id" id="SubCategory_id">
			<option value="">--Sub Category Type--</option>
			<? foreach (Keywords::SelectListFor(18) as $row): ?>
				<option value="<?=$row['id']?>">
					<?=$row['Name']?>
				</option>
			<? endforeach; ?>
		</select>
		
	</div>
		<div class="form-group <?if(isset($errors['Manufacturer_id'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Manufacturer_id'">Manufacturer:</label>
		
		<select size="1" class="required form-control" name="Manufacturer_id'" id="Manufacturer_id'">
			<option value="">--Manufacturer Name--</option>
			<? foreach (Keywords::SelectListFor(41) as $row): ?>
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
				$("#UserType").val(<?=$model['UserType']?>);
				
			})
		</script>
		
		
		
		
		
		
	<? } ?>
