<html>
<head>
  <?php wp_head();?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div class = "navbar navbar-inverse navbar-static-top">
  			<div class = "container">

  				<a href="#" class="pull-left"><img src=<?php echo get_template_directory_uri().'/img/logo.jpg'?> width="50%"></a>

  				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
  					<span class = "icon-bar"></span>
  					<span class = "icon-bar"></span>
  					<span class = "icon-bar"></span>
  				</button>

  				<div class = "collapse navbar-collapse navHeaderCollapse">

  					<ul class = "nav navbar-nav navbar-right">

  						<li><a href = "#">Home</a></li>

  						<li class = "dropdown">

  							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Projects<b class = "caret"></b></a>
  							<ul class = "dropdown-menu">
  								<li><a href = "#">Project 1</a></li>
  								<li><a href = "#">Project 2</a></li>
  								<li><a href = "#">Project 3</a></li>
  								<li><a href = "#">Project 4</a></li>
  							</ul>

  						</li>
  						<li><a href = "#">Gallery</a></li>
  						<li><a href = "#contact" data-toggle="modal">Contact</a></li>

  					</ul>

  				</div>

  			</div>
  		</div>
  <div class="main">
