<!DOCTYPE html>
    <html>
    
    <head>
        <meta charset="utf-8">
        <title>Ajouter une fiche</title>
  		<link rel="stylesheet" href="style.css">
    </head>
 
    <body>
        <?php
            include("header.php");
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

                    $description = "";
                    if (isset($_POST["submit1"])){
                        $nom_fichier = $_POST["nom"].".txt";
                        $description = $_POST["description"];
                        move_uploaded_file($_FILES['image']['tmp_name'],"./images/".$_POST['nom'].".jpg");
                        
                        $filehandle = "";
                        $new_line = "";
                        if (isset ($nom_fichier)){
                            if (file_exists("./fiches/".$nom_fichier)) {
                                echo "<span style='color: red;' class='succes'>ERREUR : La fiche du Fish existe déjà !</span>";
                            }
                            else {
                                $filehandle = fopen("./fiches/".$nom_fichier,"a");
                                $new_line = $id."%-%".$_POST["nom"]."%-%".$description."%-%".$time."%-%0%-%".$_POST["resume"];
                                fwrite($filehandle, $new_line);
                                fclose($filehandle);
                                echo "<span style='color: green;' class='succes'>Fiche crée avec succès !</span><br>";
                                echo "<span style='color: green;' class='succes'>Veuillez retourner au catalogue pour consulter la fiche.</span>";
                            }
                        }
                    }
                    else {
                        echo '<section class="formulaire">
                            <h2 class="h2">Veuillez remplir les champs ci-dessous :</h2><br>
                                <form name="form1" method="POST" action="" enctype="multipart/form-data" >
                                    <span>Veuillez saisir le nom de la fiche :</span><br>
                                    <input class="creation" type="text" value="" name="nom" required><br><br>
                                    <span>Veuillez entrer une description courte du poisson :</span><br>
                                    <input class="creation" type="text" value="" name="description" required><br><br>
                                    <span>Veuillez sélectionner une image du poisson :</span><br>
                                    <input class="img" type="file" value="image" name="image" required><br><br>
                                    <span>Veuillez entrer le détail du poisson:</span><br>
                                    <!--<input class="creation2" type="textarea" value="" name="resume"><br>-->
                                    <textarea class="creation2" name="resume" cols="10" rows="200"></textarea><br>
                                    <input class="valid" type="submit" name="submit1" value="valider">
                                </form>
                        </section>';
                    }
        ?>        
    </body>
 </html> 