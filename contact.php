<!DOCTYPE html>

<html lang="fr">
	<head>
  		<meta charset="utf-8">
  		<title>Catalogue de Fish</title>
  		<link rel="stylesheet" href="style.css">
  		</head>

	<body>
        <?php
            include("header.php");
<<<<<<< HEAD
                if (isset($_POST["envoyer"])){
                    $sep = "%-%";
                    $message = $_POST["name"].$sep.$_POST["mail"].$sep.$_POST["objet"].$sep.$_POST["message"]."\r\n";
                    $filehandle = fopen ("./messages/message.txt","a");
                    fwrite($filehandle, $message);
                    fclose($filehandle);
                    echo "Votre message a bien été envoyé";
                }
        ?>
        
            <form id="contact" method="POST" action="">
                <fieldset><legend><h2>Formulaire de contact</h2></legend>
                <label for="name">Votre nom et prénom :</label><br>
                <input class='contact' type="text" value="" name="name" required><br><br>
                <label for="mail">votre mail :</label><br>
                <input class='contact' type="text" value="" name="mail" required><br><br>
                <label for="objet">Objet de votre demande :</label><br>
                <input class='contact' type="text" value="" name="objet" required><br><br>
                <label for="message">Votre message :</label><br>
                <textarea cols=67 rows=10 required></textarea><br><br>
                <input class='envoyer' type="submit" value="envoyer" name="envoyer"><br><br>
            </form>
        </fieldset>
        
=======
        ?>
    </body>
>>>>>>> 9ac2f63c3d25a9b90a928f826a2fa7b1ec78cad3

</html>