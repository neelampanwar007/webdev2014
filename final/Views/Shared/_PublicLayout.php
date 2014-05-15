<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Layout Page</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    
    
    
  <script type="text/javascript">
  function calluserlogin()
  {  	
  	window.location.replace("http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Accounts.php");  	
  }
  	
  .button {
  padding:5px;
  background-color: #dcdcdc;
  border: 1px solid #666;
  color:#000;
  text-decoration:none;
}
  	
  </script>
      </head>

  <body>  			

	<header class="jumbotron">
		<div class="container">
			<h1 class="glyphicon glyphicon-leaf">Neelams Fashion Store</h1>		
		</div>
	</header>

    <div class="container">
    
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
       
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Her Grace</a>
        </div>
        
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="#">
            	<span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li class=""><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/about.php">
            	<span class="glyphicon glyphicon-pencil"></span>About</a></li>
            <li><a href="#contact">
            	<span class="glyphicon glyphicon-phone-alt"></span>Contact</a></li> 
            <li ><a href="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Controllers/Accounts.php">
            	<span class="glyphicon glyphicon-user"></span><b>Login</b>
            	</a></li>           
          </ul>
        </div><!--/.nav-collapse -->
      
      
      
      			
      	</div>
      </div>
    </div>
    
    
    
		    
		  <div id="slideShowImages" height=>
		  	 <marquee scrollamount="2" direction="left">
		    <img src="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Images/apparel.jpg" width="500px" height="350px"alt="Slide 1" />
		    <img src="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Images/accesory.jpg" width="500px" height="350px"alt="Slide 2" />
		    <img src="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Images/aurora.jpg" width="500px" height="350px"alt="Slide 3" />    
		    <img src="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Images/beauty-care.jpg" width="500px" height="350px"alt="Slide 4" />
		    <img src="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Images/fashionable.jpg" width="500px" height="350px"alt="Slide 1" />
		    <img src="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Images/summer-collection.jpg" width="500px" height="350px"alt="Slide 1" />
		    <img src="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Images/apparel5.jpg" width="500px" height="350px"alt="Slide 1" />
		    <img src="http://www.cs.newpaltz.edu/~panwarn1/spring2014/final/Images/apparel6.jpg" width="500px" height="350px"alt="Slide 1" />
		    </marquee>
		  </div>  
		  <button id="slideShowButton"></button> <!-- Optional button element. -->
		  
		
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