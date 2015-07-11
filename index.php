<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Responsive Dimensions</title>
		<meta name="description" content="">
		<meta name="author" content="chris">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="stylesheet" href="css/style.css" />
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>	
		<script src="js/scripts.js" type="text/javascript"></script>	
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<div id="container">
			
			<h1>Navigation</h1>
			<div class="content">
				<div class="nav-bar">
					<ul>
						<?php for( $i =0; $i <= 9; $i++) : ?>
							<li><a href="<?php echo $i; ?>">Link #<?php echo $i +1; ?></a>
								<ul>
									<?php for($n =0; $n <= 5; $n++) : ?>
										<li><a href="<?php echo $n; ?>">Submenu Link #<?php echo $n + 1; ?></a></li>
									<?php endfor; ?>
								</ul>
							</li>
						<?php endfor; ?>
					</ul>
				</div><!-- end div nav-bar -->
			</div><!-- end div content -->
			
			<h1>Mobile Menu</h1>
			<div class="content">
				<div class="mobile-menu">
					<span></span>
					<span></span>
					<span></span>
					<ul class="flyout-nav">
						<?php for( $i = 0; $i <= 4; $i++) : ?>
							<li><a href="<?php echo $i; ?>">hamburger menu link <?php echo $i +1; ?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div><!-- end div content -->
			
			<h1>6 Columns</h1>			
			<div class="content">
				<?php for( $i =0; $i <= 5;$i++) :?>
					<div class="dimensions-sixteen">dimensions sixteen grid number <?php echo $i + 1;?></div>
				<?php endfor; ?>	
			</div><!-- end div content -->
			
			<h1>5 Columns</h1>
			<div class="content">
				<?php for( $i = 0; $i <= 4; $i++) : ?>
					<div class="dimensions-twenty-five"><p>dimensions twenty-five grid number <?php echo $i + 1; ?></p></div>
				<?php endfor; ?>
			</div><!-- end div content -->
			
			<h1>4 Columns</h1>
			<div class="content">
				<?php for( $i = 0; $i <= 3; $i++) : ?>
					<div class="dimensions-fourty"><p>dimensions fourty grid number <?php echo $i + 1; ?></p></div>
				<?php endfor; ?>
			</div><!-- end div content -->
						
			<h1>3 Columns</h1>			
			<div id="header">
				<?php for( $i = 0; $i <= 2; $i++ ) : ?>
					<div class="dimensions-thirty-three"><p>dimensions thirty three content grid number <?php echo $i +1; ?></p></div>
				<?php endfor; ?>
			</div><!-- end div header -->
			
			<h1>2 columns</h1>
			<div class="content">
				<?php for( $i = 0; $i <=1; $i++) : ?>
					<div class="dimensions-fifty"><p>dimensions fifty grid number <?php echo $i + 1; ?></p></div>
				<?php endfor; ?>
			</div><!-- end div content -->
					
			<h1>Sidebar and content area</h1>
			<div class="content">
				<div class="dimensions-thirty-three">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tellus ex, tempus vel turpis non, molestie condimentum metus. 
					Duis tempor neque rutrum, efficitur lectus vel, posuere neque. Proin molestie eros sapien, et laoreet nisl varius id. Phasellus 
					lobortis blandit turpis, sit amet tincidunt mi blandit vel. Morbi vel fringilla risus. Vestibulum tempus volutpat mi, eget vulputate 
					mauris imperdiet eu. Morbi nec urna et ligula rutrum tincidunt ac vel tortor. Cras a aliquet lectus. Nullam euismod sagittis massa, 
					nec posuere arcu dictum vel. Aliquam pharetra vitae quam vel tincidunt. Suspendisse potenti. Curabitur non ligula condimentum, 
					accumsan neque sit amet, tincidunt velit. Quisque sit amet ex tempus, aliquam elit et, commodo tellus.</p>
				</div><!-- end div thirty-three -->
				<div class="dimensions-seventy">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tellus ex, tempus vel turpis non, molestie condimentum metus. 
					Duis tempor neque rutrum, efficitur lectus vel, posuere neque. Proin molestie eros sapien, et laoreet nisl varius id. Phasellus 
					lobortis blandit turpis, sit amet tincidunt mi blandit vel. Morbi vel fringilla risus. Vestibulum tempus volutpat mi, eget vulputate 
					mauris imperdiet eu. Morbi nec urna et ligula rutrum tincidunt ac vel tortor. Cras a aliquet lectus. Nullam euismod sagittis massa, 
					nec posuere arcu dictum vel. Aliquam pharetra vitae quam vel tincidunt. Suspendisse potenti. Curabitur non ligula condimentum, 
					accumsan neque sit amet, tincidunt velit. Quisque sit amet ex tempus, aliquam elit et, commodo tellus.</p>									
				</div><!-- end div fifty -->
				
				<h1>Vertical Align Stuff</h1>
				<div class="dimensions-one-hundred">
					<div class="child"><p>I am vertically aligned in the middle</p></div>
				</div><!-- end div dimensions-one-hundred -->
				
				<h1>Mega Nav Menu</h1>
				<div class="mega-menu">
					<ul>
						<?php for( $i = 0; $i <= 9; $i++ ) : ?>
							<li><a href="#">Link <?php echo $i + 1; ?></a>
								<ul>
									<?php for( $mm = 0; $mm <= 4; $mm++ ) : ?>
										<li><a href="<?php echo $mm + 1; ?>">Submenu Link <?php echo $mm + 1; ?></a></li>
									<?php endfor; ?>
								</ul>
							</li>
						<?php endfor; ?>
					</ul>
				</div>
			</div><!-- end div content -->
			
			<div id="footer">
				
			</div><!-- end div footer -->
		</div><!-- end div container -->
		
	</body>
	</html>