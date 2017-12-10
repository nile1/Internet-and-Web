<html>
	<head>
		<meta charset="utf-8">
		<meta name="referrer" content="no-referrer">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCozA2O3JNNd_UdUZ5X7em9woI8MfFAbQY&libraries=places&callback=initialize"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="/Noqoura/style.css">
		<title> NoQuora</title>
	</head>
	<body  style="background-color:#87CEFA">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand" style="color:blue">NoQuora</a>
				</div> 
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><i class="glyphicon glyphicon-list-alt"></i>  Home</a></li>
					<li><a href="#"><i class="fa fa-pencil-square-o"></i>  Answer</a></li>
					<li><a href="#"><i class="glyphicon glyphicon-bookmark"></i>  Bookmark</a></li>
					<li><a href="#" id="notificationtab" onclick="display_notification()"><i class="glyphicon glyphicon-bell"></i> Notification </a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<i class="glyphicon glyphicon-search" style="font-size:20px"></i>
									</button>
								</div>
							</div>
						</form>
					</li>
				

				
				
						<button class="btn btn-danger navbar-btn navbar-right" style="margin-right:30px;font-size:20px;">Ask Question</button>
				</ul>
					
			</div>
			
		</nav>
		<script src="animation.js" type="text/javascript"></script>
		<div class="container-fluid" id="wrapper"style="background-color:#FFFACD">
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-3 col-lg-3" id="side_column">
					<div class="popular_topics">
						<h3> Popular topics </h3>
						<a href="#"><article class="topics_content"> Cricket</article></a>
						<a href="#"><article class="topics_content"> Mythology </article></a>
						<a href="#"><article class="topics_content"> Technology </article></a>
						<a href="#"><article class="topics_content"> Jee Advanced </article></a>
						<a href="#"><article class="topics_content"> Tv Shows/Movies </article></a>
						
					</div>
					<div class="recommended_topics">
						<h3>Recommended</h3>
						<a href="#"><article class="topics_content"> Harry Potter</article></a>
						<a href="#"><article class="topics_content"> Ramayana </article></a>
						<a href="#"><article class="topics_content"> India vs Newzealand </article></a>
						<a href="#"><article class="topics_content"> Fluid Dynamics </article></a>
						<a href="#"><article class="topics_content"> Indian Premier League </article></a>
					</div>
					
					<div class="trending">
						<h3> <i class="fa fa-line-chart"></i>  Trending </h3>
						<h4 id="location"></h4>
						<?php
							$dbc = mysqli_connect('localhost','root','','index') or die('Error');
								$b=trim($_GET['var']);
								?><article class="topics_content" style="color:green"><?php echo $b; ?></article>_____________________________________________<br>
								<?php
								$query="SELECT * FROM `trending` WHERE location='".$b."';";
								$ret=mysqli_query($dbc,$query);
								if(mysqli_num_rows($ret) > 0)
								{
								while($res=mysqli_fetch_array($ret)){
								
								?>
								
								<a href="#"><article class="topics_content"><?php echo $res['topic']; ?></article></a>
						
								<?php 
								} 
								}
								else
								{
								?>
								
								<a href="#"><article class="topics_content"> GST</article></a>
						        <a href="#"><article class="topics_content"> O. Dembele </article></a>
								<a href="#"><article class="topics_content"> Bitcoin 2.0 </article></a>
								<a href="#"><article class="topics_content"> Baba Rahim </article></a>
								<a href="#"><article class="topics_content"> Bids on Ms Dhoni Retirement </article></a>
								
								<?php }?>
					</div>
					
				</div>
				<div class="col-md-6 col-lg-6 col-sm-8 col-xs-8" id="content">
				
				<?php
				    
					$dbc = mysqli_connect('localhost','root','','index') or die('Error');
					$query= 'SELECT * FROM `question`;';
					$result = mysqli_query($dbc, $query);
					while($row = mysqli_fetch_array($result)){
				?>	
					<div class="question_wrapper row">
						<div class="user col-md-3">
							<img src="user1.jpg" class="user_photo"><br>
							<a class="username">Vyom Saxena</a>
						</div>
						<div class="question_content col-md-9">
							<article class="question" style="color:blue;">
								<strong><b><?php echo $row['question'];?></b></strong>
							</article>
							<article class="topic" style="color:red">
								<?php echo $row['topic'];?>
							</article>
							<article class="answer">
								<?php echo $row['answer'];?>
								<article class="more" style="color:orange" >See more..</article>
							</article>
						</div>
					</div>
					
					<?php }?>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-3 col-lg-3" id="side_column">
					

					<div class="ads">
						<center><h3>Advertisements</h3></center>
						____________________________________________
						<aside class="ads_content">
							<center><img src="ad1.jpg" height="300" width="200"><center>
						</aside>
						<aside class="ads_content"  >
							<center><img src="ad2.jpg" height="300" width="200"><center>
						</aside>
						<aside class="ads_content" >
							<center><img src="ad3.jpg" height="300" width="200">	<center>
						</aside>
					</div>
				</div>	
			</div>
		</div>
		
		
		
				
	</body>
</html>
