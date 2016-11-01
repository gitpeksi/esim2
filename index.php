<?php
session_start();
$tunnus="Vieras";
if($_SESSION['kirjautunut']==TRUE)
{
	$tunnus=$_SESSION['user'];
}
?>
<?php include "menu.php" ?>

Tervetuloa <?php echo $tunnus;?>
<h1>Esimerkki2</h1>
<p>
	Tällä sivustolla on harjoiteltu php-ohjelmointia ja
	css-tiedoston käyttöä.
</p>
<p>
	Tiedostoa yhteys.php ei pitäisi viedä githubiin, jos kyseessä olisi oikea sovellus.
	Nythän käytämme public-tyyppistä git-repositoryä, joka on siis kaikkien luettavissa.
	Ja koska, tuossa yhteys-tiedostossa on tietokannan salasana, se kannattaisi siis
	poistaa Git-hubista. Ja sitten kannattaisi tehdä .gitignore tiedosto ja merkitä sinne tuo "yhteys.php".
</p>

<?php include "footer.php" ?>