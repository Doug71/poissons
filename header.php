<header>
    <h1>Catalogue de poissons</h1>
</header>

<nav id='nav'>
    <ul>
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="catalogue.php">CATALOGUE</a>
            <ul>
                <li><a href="creation.php">CRÉATION</a></li>
            </ul>
        </li>
        <li><a href="contact.php">CONTACT</a></li>
        <li id="recherche"><form action="catalogue.php" method="POST">
        <input class="searchtext" type="text" name="recherche" required>
        <input class="recherche" type="submit" name="valider" value="Rechercher">
    </form></li>
    </ul>
</nav>