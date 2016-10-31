<?php include "menu.php";?>
<pre>
CREATE DATABASE esim2;

USE esim2;

CREATE TABLE asiakkaat (
id_asiakas INT primary key auto_increment,
etunimi VARCHAR(50),
sukunimi VARCHAR(50)
);


INSERT INTO asiakkaat (etunimi,sukunimi) VALUES('Matti','Virtanen');
INSERT INTO asiakkaat (etunimi,sukunimi) VALUES('Jussi','Virta');
INSERT INTO asiakkaat (etunimi,sukunimi) VALUES('Liisa','Joki');
INSERT INTO asiakkaat (etunimi,sukunimi) VALUES('Aino','Jokinen');

GRANT ALL ON esim2.* TO 'phpuser'@'localhost' IDENTIFIED BY 'phppass';

</pre>
<?php include "footer.php";?>