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
            $message = "";
            $filehandle = "";
            $sep = "%-%";
                if (isset($_POST["envoyer"])){
=======
                if (isset($_POST["envoyer"])){
                    $sep = "%-%";
>>>>>>> 6d709b9d20cc25414899a3887987a2a5daf58584
                    $message = $_POST["name"].$sep.$_POST["mail"].$sep.$_POST["objet"].$sep.$_POST["message"]."\r\n";
                    $filehandle = fopen ("./messages/message.txt","a");
                    fwrite($filehandle, $message);
                    fclose($filehandle);
<<<<<<< HEAD
                    echo "<span style='color: green;' class='succes'>Votre message a bien été envoyé !<br></span>";
                    echo "<form class='succes' action ='index.php' method='form'>
                        <input class='modif' type='submit' name='retour' value='Retour'>
                        </form></p>";
                }
                else {
                    echo '<form id="formulaire" method="POST" action="">
                        <fieldset class="contactus"><legend><h2>Formulaire de contact</h2></legend>
                        <label class="label" for="name">Votre nom et prénom :</label><br>
                        <input class="contact" type="text" value="" name="name" required><br><br>
                        <label class="label" for="mail">votre mail :</label><br>
                        <input class="contact" type="text" value="" name="mail" required><br><br>
                        <label class="label" for="objet">Objet de votre demande :</label><br>
                        <input class="contact" type="text" value="" name="objet" required><br><br>
                        <label class="label" for="message">Votre message :</label><br>
                        <textarea name="message" cols=67 rows=10 required></textarea><br><br>
                        <input class="envoyer" type="submit" value="envoyer" name="envoyer"><br><br>
                        </form>
                        </fieldset>';
                }
        ?>
=======
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
        
>>>>>>> 6d709b9d20cc25414899a3887987a2a5daf58584

</html>