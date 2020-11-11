<?php
	function connexiondb(){
		try{
			$db = new PDO('mysql:host=localhost;dbname=db_naledi', "root", null);
			return $db;
		}
		catch(PDOException $e){
			print("Erreur !: ".$e->getMessage()."<br/>");
			die();
		}
	}

	function saveArticle($codeArticle, $article, $nombre, $prixAU, $prixAT, $date,  $codeCom, $nomVendeur){
		$db = connexiondb();

		$sql = "INSERT INTO articles(codearticle, article, nbvendu, prixAU, prixAT,date_m, codecom, vendeur) VALUES(:codearticle, :article, :nbvendu, :prixAU, :prixAT, :date_m, :codecom, :vendeur)";
		
		$req = $db->prepare($sql);
		$req->bindValue(':codearticle', $codeArticle);
		$req->bindValue(':article', $article);
		$req->bindValue(':nbvendu', $nombre);
		$req->bindValue(':prixAU', $prixAU);
		$req->bindValue(':prixAT', $prixAT);
		$req->bindValue(':date_m', $date);
		$req->bindValue(':codecom', $codeCom);
		$req->bindValue(':vendeur', $nomVendeur);
		$req->execute();
		return true;
	}
	//saveArticle('odeArticle', 'article', 2, 2.5, 5, 10/2020,  8, 'muhesi');
	
function getartkicle(){
	$db = connexiondb();
	$sql = "SELECT
				id,
				nom,
				fonction,
				contactmail,
				img
			FROM
				equipemanager
			WHERE
				date_m = :date_m";
	$req = $db->prepare($sql);
	$req->bindValue(':id', $id);
	$req->execute();
	$membre = $req->fetchall();
	return $membre;
	
	}

	function getarticle(){
	$db = connexiondb();
	$sql = "SELECT
					id,
				article,
				nbvendu,
				prixAU,
				prixAT,
				date_m
			FROM
				articles
			ORDER BY date_m";
	$req = $db->prepare($sql);
	$req->execute();
	$articles = $req->fetchall();
	return $articles;
	 }
	