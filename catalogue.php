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
            <table border = 1>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
                </tr>
                    <?php 
                        include("lecture.php");
                    ?>
            </table>
    </body>

</html>