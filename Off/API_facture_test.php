<?php
//----------------------- CONNEXION A LA BASE DE DONNEE -----------------------//
$hote = 'localhost';
$port = "3306";
$nom_bdd = 'bdcaisseweb';
$utilisateur = 'root';
$mot_de_passe ='';
header('Content-Type: application/json');
try {
	//On test la connexion à la base de donnée
    $pdo = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bdd, $utilisateur, $mot_de_passe);
    $retour['success'] = true; 
    $retour['message'] = "connexion à la base de la caisse web réussie";
    // echo json_encode($retour);

} catch(Exception $e) {
	//Si la connexion n'est pas établie, on stop le chargement de la page.
	$retour['success'] = false; 
    $retour['message'] = "Echec de la connexion à la base de données";
    	echo json_encode($retour);
    	exit();

}

//----------------------- CONNEXION A LA BASE DE DONNEE -----------------------//


//----------------------- Afficher les factures impayées -----------------------//

$requete = $pdo->prepare("SELECT * FROM cw_sync_facture LIMIT 20");
$requete->execute();
$resultats = $requete->fetchAll();

if(count($resultats) > 0){

    $retour['message'] = "Voici toutes les factures clients";
    $retour['success'] = true; 
    $retour['resultat']['Nombre_fact'] = count($resultats);
    $retour['resultat']['facture'] = $resultats;

    echo json_encode($retour);

} else {
    //Sinon on affiche tous les vols
  $ret['success'] = false;
  $ret['message'] = "Aucunes factures clients trouvées";
  echo json_encode($ret);
}

//----------------------- Afficher les factures impayées -----------------------//

