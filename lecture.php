<?php
    $handle = opendir('./fiches');

                    while ($entry = readdir($handle)) {
                        if ($entry != "." && $entry != "..") {
                            $file_handle = fopen("./fiches/$entry","r"); 
                            $line_of_text = fgets($file_handle);
                            $elements = explode("%-%",$line_of_text);
                
                            if (!$elements[4]){
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

                closedir($handle);
?>
