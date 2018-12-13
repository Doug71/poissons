<?php
    $handle = opendir('./fiches');
    $tmp = 0;
    while ($entry = readdir($handle)) {
        
        if ($entry != "." && $entry != "..") {
                            
        $file_handle = fopen("./fiches/$entry","r"); 
        $line_of_text = fgets($file_handle);
        $elements = explode("%-%",$line_of_text);
            
            if (isset($_POST['recherche']))
            {
                if (!$elements[4]  && strpos($elements['5'],$_POST['recherche'])){
                    
                    if ($tmp == 0)
                    {
                        echo "
                        <table border = 1 >
                        <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Image</th>
                        </tr>";
                        $tmp++;
                    }

                    echo "<tr>";                              
                                        
                        for ($i = 0; $i < 4; $i++){    
                            echo "<td><a class='lien' href='details.php?nom=".$elements[1]."'>".$elements[$i]."</a></td>";
                                                    
                        }
                        echo "<td><a class='lien' href='details.php?nom=".$elements[1]."'><img class='image' src='images/$elements[1].jpg'></a></td>
                            </tr>";
                    }
                    fclose ($file_handle);
                }
                else
                {
                    if (!$elements[4]){
                        if ($tmp == 0)
                        {
                            echo "
                            <table border = 1>
                            <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Image</th>
                            </tr>";
                            $tmp++;
                        }
                        echo "<tr>";
                                    
                                        
                        for ($i = 0; $i < 4; $i++){    
                            echo "<td><a class='lien' href='details.php?nom=".$elements[1]."'>".$elements[$i]."</a></td>";
                                                    
                        }
                        echo "<td><a class='lien' href='details.php?nom=".$elements[1]."'><img class='image' src='images/$elements[1].jpg'></a></td>
                            </tr>";
                    }
                    fclose ($file_handle);
            }
        }
    }
    if ($tmp == 0)
        echo "<p class='succes' style='color:red;'>Désolé, aucun résultat ne correspond à votre recherche."."\r\n"." <a href='catalogue.php'>Revenez au catalogue</a></p>";
    closedir($handle);
?>
</table>