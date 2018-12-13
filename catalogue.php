<!DOCTYPE html>

<html lang="fr">
	<head>
  		<meta charset="utf-8">
  		<title>Catalogue</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="images/favicon.png" /> 
        <link rel="shortcut icon" href="timages/favicon.png" type="image/x-icon"/>
  	</head>

	<body>
        <?php
            include("header.php");
        ?>        
        <article class='tableau'>
            <?php 
                include("lecture.php");
            ?>
        </article>
        <footer class="copyright2">
			<?php
				include "copyright.php";
			?>
		</footer>
    </body>
</html>