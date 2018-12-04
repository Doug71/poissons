<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Détails</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    
</head>
<body>

    <?php   
    include ('header.php');
        if (isset($_POST['modifier']))
        {
                    $sep = "%-%";
                    $machaine = $_POST['id'].$sep.$_POST['nom'].$sep.$_POST['description'].$sep.date('d/m/y').$sep."0".$sep.$_POST['resume'];
                    $file_handle = fopen("fiches/".$_GET['nom'].".txt", "w");
                    fwrite($file_handle,$machaine);
                    fclose ($file_handle);
					if (isset($_FILES["image"])){
                        move_uploaded_file($_FILES['image']['tmp_name'],"./images/".$_GET['nom'].".jpg");
                    }
                    rename("images/".$_GET['nom'].".jpg","images/".$_POST['nom'].".jpg");
                    rename("fiches/".$_GET['nom'].".txt","fiches/".$_POST['nom'].".txt");
                    $_GET['nom'] = $_POST['nom'];
        }
        if (isset($_GET['suppression']))
        {
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","r");
            $chaine = fgets($file_handle);
            $chaine = str_replace("%-%0%-%","%-%1%-%",$chaine);
            fclose ($file_handle);
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","w");
            fwrite ($file_handle,$chaine);
            fclose ($file_handle);
            echo "  <p>La fiche de fish a bien été supprimé !</p>
                    <p><a href='catalogue.php'>Retour à l'accueil</a></p>";
        }
        elseif (isset($_GET['modification']))
        {
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","r+");
            $chaine = fgets($file_handle);
            $tab = explode("%-%",$chaine);
                foreach ($tab as $value)
                    $value = str_replace('"',"'",$value);
            echo '  <form action="details.php?nom='.$_GET['nom'].'" method="post" enctype="multipart/form-data">
            <fieldset><legend>Nom : <input type="text" name ="nom" value="'.$tab[1].'"></legend>
                    <p>Description : <input type="text"name="description" value="'.$tab[2].'"></p>
                    <p>Résumé : <input type="text"name="resume" value="'.$tab[5].'"></p>
					<input type="file" value="image" name="image">
                    <input type="text" name="id" value="'.$tab[0].'" hidden>
                    <input type="submit" name="modifier" value="Valider">
                    
                    </p></fieldset></form>';
            fclose($file_handle);
        }
        else
        {
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","r");
            $chaine = fgets($file_handle);
            $tab = explode("%-%",$chaine);
            echo "  <fieldset><legend>".$tab[1]."</legend>
                    <p>".$tab[2]."</p>
                    <img src='images/".$tab[1]."'>
                    <p>".$tab[5]."</p>";
                    echo "<p><a href='details.php?nom=".$_GET['nom']."&modification=o'>Modification</a><p>";
                    echo "<p><a href='details.php?nom=".$_GET['nom']."&suppression=o'>Suppression</a><p>";
        }
        
?>
</body>
</html>