<!DOCTYPE html>
    <html>
    
    <head>
        <title>Ajouter une fiche</title>
    </head>
 
    <body>
        <?php
            include("header.php");
        ?>
            <h1>Veuillez remplir les champs ci-dessous :</h1>
                <form name="form1" method="POST" action="">
                    <p>Veuillez saisir le nom de la fiche :</p>
                    <input type="text" value="" name="nom" required>
                    <p>Veuillez entrer une description courte du poisson :</p>
                    <input type="text" value="" name="description" required>
                    <p>Veuillez inserer une image :</p>
                    <input type="file" value="image" name="image" /*required*/><br><br>
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
                    $repository = "C:/wamp64/www/poissons/images/";
                    if (isset($_POST["submit1"])){
                        $nom_fichier = $_POST["nom"].".txt";
                        $description = $_POST["description"];
                        move_uploaded_file($_FILES['image']['tmp_name'], $repository);
                    }

                    $filehandle = "";
                    $new_line = "";
                    if (isset ($nom_fichier)){
                        if (file_exists("./fiches/".$nom_fichier)) {
                            echo "La fiche du Fish existe déjà";
                        }
                        else {
                            $filehandle = fopen("./fiches/".$nom_fichier,"a");
                            $new_line = $id."%-%".$_POST["nom"]."%-%".$description."%-%"."%-%".$time;
                            fwrite($filehandle, $new_line);
                            fclose($filehandle);
                            echo "fiche crée avec succès !";
                            echo "<form action='catalogue.php'>";
                            echo "<br><input type='submit' name'submit2' value='retour'>";
                             echo "</form>";
                        }
                    }
                ?>          
    </body>
 </html> 