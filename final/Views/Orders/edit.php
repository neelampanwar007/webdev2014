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
	        <h4 class="modal-title">Edit: <?=$model['FirstName']?> <?=$model['LastName']?></h4>
	      </div>


	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
<form action="?action=save" method="post" class="my-horizontal">
	
	
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	
	<div class="form-group <?if(isset($errors['FirstName'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="FirstName">First Name:</label>
		<input class="required form-control" type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>" placeholder="First Name" />
		<? if(isset($errors['FirstName'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['FirstName']?></span>
		<? endif ?>
	</div>
	
	<div class="form-group <?if(isset($errors['LastName'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="LastName">Last Name:</label>
		<input class="required form-control" type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>" placeholder="Last Name" />
		<? if(isset($errors['LastName'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['LastName']?></span>
		<? endif ?>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="Address">Address:</label>
		<input class="form-control" type="address" name="Address" id="Address" value="<?=$model['Address']?>" placeholder="Address" />
	</div>
	
	<div class="form-group">
		<label class="control-label" for="productname">ProductName:</label>
		<input class="form-control" type="text" name="productname" id="productname" value="<?=$model['ProductName']?>" placeholder="productname" />
	</div>
    
    <div class="form-group">
		<label class="control-label" for="Price">Price:</label>
		<input class="form-control" type="int" name="Price" id="Price" value="<?=$model['Price']?>" placeholder="price" />
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
		
		
		
		<ul>
			<li>
				Make dropdown
				<ul>
					<li>Make model to fetch list</li>
					<li>Make select tag</li>
				</ul>
			</li>
			<li>
				Set initial value through php
			</li>
			<li>Set initial value through javascript</li>
			<li>Notification of successful insert / edit</li>
			<li>Highlight changed row</li>
		</ul>
		
		
		
		
	<? } ?>