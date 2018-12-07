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
        <section class="tableau">
            <table border = 1>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
                </tr>
                    <?php 
                        include("lecture.php");
                    ?>
            </table>
        </section>
    </body>

</html>