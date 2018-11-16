<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Détails</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
    <?php   
        if (isset($_GET['suppression']))
        {
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","r");
            $chaine = fgets($file_handle);
            $chaine = str_replace("%-%0%-%","%-%1%-%",$chaine);
            fclose ($file_handle);
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","w");
            fwrite ($file_handle,$chaine);
            fclose ($file_handle);

        }
        if (isset($_GET['modification']))
        {
            $file_handle = fopen("fiches/".$_GET['nom'].".txt","r+");
            $chaine = fgets($file_handle);
            $tab = explode("%-%",$chaine);
            echo "  <form action='details.php?nom=".$_GET['nom']."' method='post'>
            <fieldset><legend>Nom : <input type='text' name ='nom' value='".htmlspecialchars($tab[1])."'></legend>
                    <p>Description : <input type='text'name='description' value='".$tab[2]."'></p>
                    <p>Date : <input type='date' name='date' value='".$tab[3]."'></p>
                    <p>Résumé : <input type='text'name='resume' value='".$tab[5]."'></p>
                    <input type='text' name='id' value='".$tab[0]."' hidden>
                    <input type='submit' name='Valider' value='Valider'>
                    
                    </p></fieldset></form>";



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
                    echo "<p><form action='details.php?nom=".$_GET['nom']."' method='GET'>
                    <input type='submit' name='modification' value='Modifier'>
                    </form>";
                    echo "<form action='details.php?nom=".$_GET['nom']."' method='GET'>
                    <input type='submit' name='suppression' value='Supprimer'>
                    </form></p></fieldset>";
        }
        



?>
</body>
</html>