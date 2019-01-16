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
    $retours['success'] = true; 
    $retours['message'] = "connexion à la base de la caisse web réussie";
    // echo json_encode($retour);

} catch(Exception $e) {
	//Si la connexion n'est pas établie, on stop le chargement de la page.
	$retours['success'] = false; 
    $retours['message'] = "Echec de la connexion à la base de données";
    	echo json_encode($retours);
    	exit();

}

//----------------------- CONNEXION A LA BASE DE DONNEE -----------------------//


          //----------------------- Afficher les factures impayées -----------------------//

/* ----------------------- Juste mais avec des problèmes d'implémentations -----------------------//

    $requete = $pdo->prepare("SELECT * FROM cw_sync_facture WHERE DET_REFDETTE in (SELECT DET_REFABN FROM cw_sync_facture where DET_REFDETTE = :Reference_Facture) ");

//-----------------------  Juste mais avec des problèmes d'implémentations ----------------------- */



    //----------------------- Afficher les factures impayées Script de base Archaïque -----------------------//

            // Requête (1)
    $requete1 = $pdo->prepare("SELECT DET_REFABN FROM cw_sync_facture where DET_REFDETTE = :Reference_Facture ");
    $requete1->bindParam(':Reference_Facture', $_GET['DET_REFDETTE']);
     $requete1->execute();
    $resultats1 = $requete1->fetchAll();
    $res1 = $resultats1[0]["DET_REFABN"];
            // Requête (1)

            // Requête (2)
    $requete2 = $pdo->prepare("SELECT * FROM cw_sync_facture where DET_REFABN = $res1 ");
    $requete2->execute();
    $resultats2 = $requete2->fetchAll();
            // Requête (2)


    /*  DEBUGUER LE RESULTAT
        var_dump($resultats2); 
        exit();  
    */

    //----------------------- Afficher les factures impayées Script de base Archaïque -----------------------//   
if(count($resultats2) > 0){

    $retour['message'] = "Voici les factures du client ".$resultats2[0]['DET_NOMPAYEUR'];
    $retour['success'] = true; 
    $retour['resultat']['Nombre_fact'] = count($resultats2);
    $retour['resultat']['facture'] = $resultats2;

    echo json_encode($retour);

} else {
    //Sinon on affiche tous les vols
  $ret['success'] = false;
  $ret['message'] = "Aucunes factures clients trouvées";
  echo json_encode($ret);
}



//----------------------- Afficher les factures impayées -----------------------//

