<?php

@session_start();

if(!isset($_SESSION["cpt"]))
	$_SESSION["cpt"] = 0;

$tab = (array(0=>array("?"=>"qu'est ce qui est vert, qui a un tronc et un animal roux à un mettre sur une branche ?","R"=>"un arbre avec une poule")
					, 1=>array("?"=>"qu'est ce qui est un cube rouge emballé en quatre mots ?","R"=>"un cadeau surprise rouge"	)
					, 2=>array("?"=>"qu'est ce qui est lumineux et en face en deux mots ?","R"=>"un ecran")) );

$val = rand(0,2);

echo '<form name="myTinyCms" action="" method="post">

	<input type="hidden" value="'.$val.'" name="value" />
	<input type="text" name="alors" value="" /><br/>
	<input type="submit" value="essayer" />

</form>';



echo $tab[$val]["?"] ;

if(isset($_POST["alors"]))

	$_SESSION["cpt"]++ ;

	if(trim($_POST['alors'])==trim($tab[$_REQUEST["value"]]["R"])|| $_SESSION["cpt"] > 12)
	{
		echo "<p/><a href='http://inkodeo.be/_BCK_/alors.zip'>myTinyCms.zip</a>";
		echo "<p/><a href='http://inkodeo.be/_BCK_/docMyTinyCMS.pdf'>doc.pdf</a>";

		echo "<p>
		
			<img src='Noel.jpg' />
		
			<b>Il n'y a plus beaucoup de bugs. MyTinyCMS est stable</b><p/>
			<b> My TinyCMS repose sur Xml et n'a pas besoin de base de donnée</b></p>
			Pour tester ce mini CMS il faut :<br/>
			<br/>
				php installé avec <b><a href='http://www.wampserver.com/' target='_blank'>wamp server</a></b> ou une autre solution<br/>
				décompresser le miniCMS dans la racine C:\wamp\www ou une autre destination
				<br/>
			Decompresser myTinyCMS dans le repertoire web de votre serveur (www sous  wampserver) ou espace php offert par votre provider:<br/>
			<br/>
				http://localhost/miniCMS/main.php<br/>
		
				<p/>l'interface d'administration est :
					<br/>
					<br/>http://localhost/miniCMS/main.php?admin=1
				<p/>l'interface du CMS (encodeur) est :
					<br/>
					<br/>http://localhost/miniCMS//main.php?entry=Root
				<p/>la sortie pour la navigation (client) :
					<br/>
					<br/>http://localhost/miniCMS//index.php?entry=Root
		</p>";
		
	} else {
		
		echo "<p/><b style='color:red;'>La VeRSioN est pRETE !!! </b><p />peut-etre une prochaine fois<p><img src='Noel.jpg' />";
		
	}
?>