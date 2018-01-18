<?php
	// Define project root
	define('ROOT', dirname(__FILE__));
	// Get global.php 
	include_once ROOT . '/global.php';
?>
<!doctype html>
<html lang="rs">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Include Twitter Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
        
        <title><?php echo $title; ?></title>
    </head>
    <body>
    	<!-- Section -->
        <section class="jumbotron">
        	<!-- Title -->
            <h1 class="display-4"><?php echo $title; ?></h1>
            <!-- Title End -->
            
            <!-- Subtitle -->
            <p class="lead"><?php echo $subtitle; ?></p>
            <!-- Subtitle End -->
            
            <hr class="my-4">
            
            <!-- Content -->
            <?php foreach($content as $i => $paragraph) : ?>
            	<p><?php echo $paragraph; ?></p>
            <?php endforeach; ?>
            <!-- Content End -->
            
            <p>2+2=<?php echo some_function(2, 2); ?></p>
            
		</section>
        <!-- Section End -->
        
        <!-- Include jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Include Twitter Bootstrap Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
        <!-- Custom JavaScrip -->
        <script src="script.js"></script>
    </body>
</html>