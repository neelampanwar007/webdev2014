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
	
	<div class="form-group <?if(isset($errors['Order_id'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Order_id">Order id:</label>
		<input class="required form-control" type="text" name="Order_id" id="Order_id" value="<?=$model['Order_id']?>" placeholder="Order id" />
		<? if(isset($errors['Order_id'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['Order_id``']?></span>
		<? endif ?>
	</div>
	
	<div class="form-group <?if(isset($errors['Product_id'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Product_id">Product Name:</label>
		<input class="required form-control" type="int" name="Product_id" id="Product_id" value="<?=$model['Product_id']?>" placeholder="Last Name" />
		<? if(isset($errors['Product_id'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['Product_id']?></span>
		<? endif ?>
	</div>
	
	

	<div class="form-group <?if(isset($errors['Product_id'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Product_id">Product id:</label>
		<input class="required form-control" type="int" name="Product_id" id="Product_id" value="<?=$model['Product_id']?>" placeholder="Last Name" />
		
		<!--<select size="1" class="required form-control" name="UserType" id="UserType">
			<option value="">--Product Type--</option>
			<? foreach (Keywords::SelectListFor(2) as $row): ?>
				<option value="<?=$row['id']?>">
					<?=$row['Name']?>
				</option>
			<? endforeach; ?>
	</select>-->
		
		
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