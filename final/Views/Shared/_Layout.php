<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Layout Page</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    	body {
		  padding-top: 50px;
		}
    </style>
  </head>

  <body>
  	

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>Welcome!! </b></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          	
           
            
             <li class="active"><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Products.php?action=index"> Products </a></li>
            <li><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Catergory.php">Category</a></li>
            <li><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/SubCategory.php">Sub Category</a></li>
            <li><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Users.php"> Users </a></li>
            <li><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Addresses.php">Address</a></li>
            <li><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Order_Items.php">Order Item</a></li>
            <li><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Orders.php">Orders</a></li>
            <li><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Supliers.php">Suppliers</a></li>
            
            <li><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Products.php">Back To Main Page</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        <div class="navbar-right">
        	<?
        		$user = Accounts::GetCurrentUser();
				//print_r($user);
				echo $user['FirstName'];
        	?>
        </div>
      </div>
      
    </div>

    <div class="container">

      <? include $view; ?>


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <?
    	if(function_exists("JavaScripts")){
    		JavaScripts();
    	}
    ?>
  </body>
</html>