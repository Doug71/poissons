<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Détails</title>
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    
</head>
<body>
    <?php
        include("header.php");
          
        if (isset($_POST['suppression']))
=======
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
    <?php   
        if (isset($_GET['suppression']))
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
        {
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","r");
            $chaine = fgets($file_handle);
            $chaine = str_replace("%-%0%-%","%-%1%-%",$chaine);
            fclose ($file_handle);
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","w");
            fwrite ($file_handle,$chaine);
            fclose ($file_handle);

        }
<<<<<<< HEAD
        if (isset($_POST['modification']))
=======
        if (isset($_GET['modification']))
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
        {
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","r+");
            $chaine = fgets($file_handle);
            $tab = explode("%-%",$chaine);
<<<<<<< HEAD
            echo '  <form action="details.php?nom='.$_GET['nom'].'" method="post">
            <fieldset><legend>Nom : <input type="text" name ="nom" value="'.htmlspecialchars($tab[1]).'"></legend>
                    <p>Description :</p><textarea cols="202" rows="1">'.$tab[2].'</textarea><br><br>
                    <p>Résumé :</p><textarea cols="202" rows="10">'.$tab[5].'</textarea><br><br>
                    <input type="text" name="id" value="'.$tab[0].'" hidden><br><br>
                    <input type="submit" name="Valider" value="Valider">
                    
                    </p></fieldset></form>';
                    /*<p>Date :</p><input class="modif" type="date" name="date" value="'.$tab[3].'">*/
=======
            echo "  <form action='details.php?nom=".$_GET['nom']."' method='post'>
            <fieldset><legend>Nom : <input type='text' name ='nom' value='".htmlspecialchars($tab[1])."'></legend>
                    <p>Description : <input type='text'name='description' value='".$tab[2]."'></p>
                    <p>Date : <input type='date' name='date' value='".$tab[3]."'></p>
                    <p>Résumé : <input type='text'name='resume' value='".$tab[5]."'></p>
                    <input type='text' name='id' value='".$tab[0]."' hidden>
                    <input type='submit' name='Valider' value='Valider'>
                    
                    </p></fieldset></form>";

>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3


            fclose($file_handle);
        }
        if(isset($_GET['nom']))
        {
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","r");
            $chaine = fgets($file_handle);
            $tab = explode("%-%",$chaine);
            echo "  <fieldset><legend>".$tab[1]."</legend>
                    <p>".$tab[2]."</p>
                    <img src='images/".$tab[1]."'>
                    <p>".$tab[5]."</p>";
<<<<<<< HEAD
                    echo "<p><form action='details.php?nom=".$_GET['nom']."' method='post'>
                    <input type='submit' name='modification' value='Modifier'>
                    </form>";
                    echo "<form action='details.php?nom=".$_GET['nom']."' method='post'>
=======
                    echo "<p><form action='details.php?nom=".$_GET['nom']."' method='GET'>
                    <input type='submit' name='modification' value='Modifier'>
                    </form>";
                    echo "<form action='details.php?nom=".$_GET['nom']."' method='GET'>
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
                    <input type='submit' name='suppression' value='Supprimer'>
                    </form></p></fieldset>";
        }
        



?>
</body>
</html>