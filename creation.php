<!DOCTYPE html>
    <html>
    
    <head>
<<<<<<< HEAD
        <meta charset="utf-8">
        <title>Ajouter une fiche</title>
  		<link rel="stylesheet" href="style.css">
=======
        <title>Ajouter une fiche</title>
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
    </head>
 
    <body>
        <?php
            include("header.php");
        ?>
<<<<<<< HEAD
            <h2 class="h2">Veuillez remplir les champs ci-dessous :</h2>
                <form name="form1" method="POST" action="" enctype="multipart/form-data" >
                    <p>Veuillez saisir le nom de la fiche :</p>
                    <input type="text" value="" name="nom" required>
                    <p>Veuillez entrer une description courte du poisson :</p>
                    <input type="text" value="" name="description" required><br><br>
                    <input type="file" value="image" name="image" required><br><br>
                     <p>Veuillez entrer le détail :</p>
                    <input type="textarea" value="" name="resume" /><br><br>
=======
            <h1>Veuillez remplir les champs ci-dessous :</h1>
                <form name="form1" method="POST" action="">
                    <p>Veuillez saisir le nom de la fiche :</p>
                    <input type="text" value="" name="nom" required>
                    <p>Veuillez entrer une description courte du poisson :</p>
                    <input type="text" value="" name="description" required>
                    <p>Veuillez inserer une image :</p>
                    <input type="file" value="image" name="image" /*required*/><br><br>
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
                    <input type="submit" name="submit1" value="valider">
                </form>
                <?php
                    $id=1;

                    $handle = opendir("./fiches");
                        while ($entry = readdir($handle)) {
                            if ($entry != "." && $entry != "..") {
                                $id++;
                            }
                        }
                    closedir($handle);
                    $id=sprintf("%'.03d",$id);

                    $time = date("d/m/y");

                    //$nom_fichier = "";
                    $description = "";
<<<<<<< HEAD
                    if (isset($_POST["submit1"])){
                        $nom_fichier = $_POST["nom"].".txt";
                        $description = $_POST["description"];
                        move_uploaded_file($_FILES['image']['tmp_name'],"./images/".$_POST['nom'].".jpg");
=======
                    $repository = "C:/wamp64/www/poissons/images/";
                    if (isset($_POST["submit1"])){
                        $nom_fichier = $_POST["nom"].".txt";
                        $description = $_POST["description"];
                        move_uploaded_file($_FILES['image']['tmp_name'], $repository);
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
                    }

                    $filehandle = "";
                    $new_line = "";
                    if (isset ($nom_fichier)){
                        if (file_exists("./fiches/".$nom_fichier)) {
                            echo "La fiche du Fish existe déjà";
                        }
                        else {
                            $filehandle = fopen("./fiches/".$nom_fichier,"a");
<<<<<<< HEAD
                            $new_line = $id."%-%".$_POST["nom"]."%-%".$description."%-%".$time."%-%0%-%".$_POST["resume"];
                            fwrite($filehandle, $new_line);
                            fclose($filehandle);
                            echo "fiche crée avec succès !";
                            echo "<br><a class='retour' href='catalogue.php'>retour</a>";
=======
                            $new_line = $id."%-%".$_POST["nom"]."%-%".$description."%-%"."%-%".$time;
                            fwrite($filehandle, $new_line);
                            fclose($filehandle);
                            echo "fiche crée avec succès !";
                            echo "<form action='catalogue.php'>";
                            echo "<br><input type='submit' name'submit2' value='retour'>";
                             echo "</form>";
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
                        }
                    }
                ?>          
    </body>
 </html> 