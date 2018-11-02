<!DOCTYPE html>

<html lang="fr">
	<head>
  		<meta charset="utf-8">
  		<title>Catalogue de fish</title>
  		<link rel="stylesheet" href="style.css">
  		</head>

	<body>
<table border = 1>

    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Image</th>
        <th>Date</th>
</tr>
<?php
                                        //      On a déclaré le début du tableau en html


$file_handle = fopen("fish.txt","r"); 
while(!feof($file_handle)){             //      Dans cette boucle on lit les lignes du fichier une à une et on fait un explode de ces ligne
    $line_of_text = fgets($file_handle);//      en utilisant %-% comme séparateur
    $elements = explode("%-%",$line_of_text);// cela remplit un tableau $elements avec une information par case (ID-Nom-Détail-[Image]-Date)
    echo "<tr>  <td>$elements[0]</td>        
                <td>$elements[1]</td>
                <td><p>$elements[2]</p></td>
                <td><img src='Images/$elements[1].jpg'></td>
                <td>$elements[4]</td>
        </tr>";//                               Puis on affiche les éléments (contenus dans $elements) du tableau entre des balises <td>
}
fclose ($file_handle);//                        Pour finir on referme le fichier ainsi que le tableau ht
//                                              De cette façon il suffit d'ajouter les nouveaux éléments dans le fichier texte pour qu'ils
//                                              s'affichent dynamiquement.
?>
</table>
    </body>

    </html>