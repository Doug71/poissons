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
<<<<<<< HEAD
        <section class="tableau">
            <table border = 1>
                <tr>
                    <th>Nom</th>
=======
            <table border = 1>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
                </tr>
                    <?php 
                        include("lecture.php");
                    ?>
            </table>
<<<<<<< HEAD
        </section>
=======
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
    </body>

</html>