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
	        <h4 class="modal-title">Edit: <?=$model['FirstName']?> <?=$model['LastName']?>
	        </h4>
	      </div>


	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
<form action="?action=save" method="post" class="my-horizontal">
	
	
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	
	<div class="form-group <?if(isset($errors['Addresses'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Addresses">Addresses:</label>
		<input class="required form-control" type="text" name="Addresses" id="Addresses" value="<?=$model['Addresses']?>" placeholder="Addresses" />
		<? if(isset($errors['Addresses'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['Addresses']?></span>
		<? endif ?>
	</div>
	
	<div class="form-group <?if(isset($errors['City'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="City">City:</label>
		<input class="required form-control" type="text" name="City" id="City" value="<?=$model['City']?>" placeholder="City" />
		<? if(isset($errors['City'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['City']?></span>
		<? endif ?>
	</div>
	<div class="form-group <?if(isset($errors['State'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="State">State:</label>
		<input class="required form-control" type="text" name="State" id="State" value="<?=$model['State']?>" placeholder="State" />
		<? if(isset($errors['State'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['State']?></span>
		<? endif ?>
	</div>
	<div class="form-group <?if(isset($errors['Zip'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Zip">Zip:</label>
		<input class="required form-control" type="int" name="Zip" id="Zip" value="<?=$model['Zip']?>" placeholder="Zip" />
		<? if(isset($errors['Zip'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['Zip']?></span>
		<? endif ?>
	</div>
	
	
	<div class="form-group <?if(isset($errors['Address Type'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Address Type">Address Type:</label>
		
		<select size="1" class="required form-control" name="Address Type" id="Address Type">
			<option value="">--Address Type--</option>
			<? foreach (Keywords::SelectListFor(4) as $row): ?>
				<option value="<?=$row['id']?>">
					<?=$row['Name']?>
				</option>
			<? endforeach; ?>
		</select>
	</div>
	
	<div class="form-group <?if(isset($errors['Users_id'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Users_id">User Type:</label>
		
		<select size="1" class="required form-control" name="Users_id" id="Users_id">
			<option value="">--User Type--</option>
			<? foreach (Keywords::SelectListFor(2) as $row): ?>
				<option value="<?=$row['id']?>">
					<?=$row['Name']?>
				</option>
			<? endforeach; ?>
		</select>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="Country">Country:</label>
		<input class="form-control" type="text" name="Country" id="Country" value="<?=$model['Country']?>" placeholder="fbid" />
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