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
	        <h4 class="modal-title">Edit: <?=$model['name']?></h4>
	      </div>


	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
<form action="?action=save" method="post" class="my-horizontal">
	
	
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	
	<div class="form-group <?if(isset($errors['id'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="id">Category id:</label>
		<input class="required form-control" type="text" name="id" id="id" value="<?=$model['id']?>" placeholder="Category id" />
		<? if(isset($errors['id'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['id']?></span>
		<? endif ?>
	</div>
	
	<div class="form-group <?if(isset($errors['name'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="name">Category Name:</label>
		<input class="required form-control" type="text" name="name" id="name" value="<?=$model['name']?>" placeholder="Category Name" />
		<? if(isset($errors['name'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['name']?></span>
		<? endif ?>
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
		<script type="text/javascript"></script>
		
		
		
		
		
		
		
	<? } ?>