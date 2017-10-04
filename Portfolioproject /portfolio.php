<?php
require "displayData.php";
require "loginPageFunctions.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>portfolio | Josh Turner | Software Developer</title>
	
		<link rel="stylesheet" type="text/css" href="index.css">
		
		<link href="https://fonts.googleapis.com/css?family=Anton|Gruppo|Hind+Vadodara:300|Oswald:300,400|Patrick+Hand+SC|Roboto" rel="stylesheet">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="content">
		<div class="portfolioHeader">
			<div class="container">
				<img src="images/logo.PNG" class="logo">
					<div class="hamburger">
						<img src="images/burger.png">
					</div>
					<div class="navbar">
						<div>
							<a href="index.php">HOME</a>
						</div>
						<div>
							<a href="about.php">ABOUT</a>
						</div>
						<div>
							<a href="portfolio.php">PORTFOLIO</a>
						</div>
						<div>
							<a href="contact.php">CONTACT</a>
					</div>
				</div>
			</div>	
		</div>
		<div class="portfolioPage">
			<div class=PortfolioDiscription>
				<h1><strong>PORTFOLIO</strong></h1>
				<p><strong>WELCOME TO MY PORTFOLIO, HERE YOU'LL FIND ALL OF THE PROJECTS I'VE BEEN WORKING ON 
				</strong>
				<br>
				<br>
				</p>	
			</div>
			<div class="portfolioImages container">
                <?php $projects = selectPortfoliopageData();
                foreach($projects as $project){
                    echo $project["text_content"];
                }
                ?>
				</div>		
			</div>
		</div>
<!--   THIS IS WHERE THE CMS IS-->
                <div class="editPortfolioButton">
                    <?php if (isLoggedIn()) { ?>
                        <a href="cmsPortfolioForm.php">EDIT</a>
                    <?php } ?>
                </div>
			<footer>	
				<div class="footer">
					<a href="https://www.facebook.com/Josh-Turner-JT-771689736307675/"><img src="images/if_facebook_2308066.png"></a>
					<a href="https://www.twitter.com/joshturner11"><img src="images/if_twitter_2308045.png"></a>
					<a href="https://www.instagram.com/joshturner_jt"><img src="images/if_instagram_2308118.png"></a>
				</div>
                <div class="loginButton">
                    <a href="loginPage.php"> Log In </a>
                </div>
			</footer>	
		</div>	
	 </div>	
 </div>
</body>
</html>