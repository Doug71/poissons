<!DOCTYPE html>

<html lang="fr">
	<head>
  		<meta charset="utf-8">
  		<title>Catalogue de Fish</title>
  		<link rel="stylesheet" href="style.css">
  	</head>

	<body>
        <?php
            include("header.php");
        ?>
        <section class="tableau">
            <table border = 1>
                <tr>
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