<?php
    $handle = opendir('./fiches');

                    while ($entry = readdir($handle)) {
                        if ($entry != "." && $entry != "..") {
                            $file_handle = fopen("./fiches/$entry","r"); 
                            $line_of_text = fgets($file_handle);        // en utilisant %-% comme séparateur
                            $elements = explode("%-%",$line_of_text);   // cela remplit un tableau $elements avec une information par case (ID-Nom-Détail-[Image]-Date)
<<<<<<< HEAD
                            if (!$elements[4]){
                                echo "<tr>";
                            
                                for ($i = 1; $i < 4; $i++){    
                                    echo "<td><a class='lien' href='details.php?nom=".$elements[1]."'>".$elements[$i]."</a></td>";        
                                }
                                
                                echo "<td><img class='image' src='images/$elements[1].jpg'></td>
                                </tr>";                                     // Puis on affiche les éléments (contenus dans $elements) du tableau entre des balises <td>
                            }
=======
                            echo "<tr>";
                            for ($i = 0; $i < 4; $i++){    
                                echo "<td><a href='details.php?nom=".$elements[1]."'>".$elements[$i]."</a></td>";        
                            }
                                
                            echo "<td><img src='images/$elements[1].jpg'></td>
                             </tr>";                                     // Puis on affiche les éléments (contenus dans $elements) du tableau entre des balises <td>
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3
                            fclose ($file_handle);                       // Pour finir on referme le fichier ainsi que le tableau html
                        }
                    }

                closedir($handle);
?>
