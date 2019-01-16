<?php require ('function/header.php'); ?>

<main role="main">



  <div class="album py-5 bg-light">
    <div class="container-fluid">

        <div class="row">
	       <div class="col-lg-12">
	      		<h1 class="text-center text-muted"> Consultation de facture client</h1>
	       </div>
	    </div>
	
	   
    </div>
  </div>

</main>





<div class="container-fluid">
	<br>
	<div class="row">
		<div class="col-lg-12 text-center text-muted"><h2> Consulter toutes les factures <b>d'un client</b> </h2> </div>
	</div>

	<br>
	 <div class="row">
	     
	       <div class="col-lg-8 offset-2">
	       		<div class="row">
					  <div class="col-4">
					    <div class="list-group" id="list-tab" role="tablist">
					      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-homes" role="tab" aria-controls="home">Menu</a>
					      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profiles" role="tab" aria-controls="profile">Procédure de consultation </a>
					      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messagess" role="tab" aria-controls="messages">Retour </a>
					     
					    <!--   <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settingss" role="tab" aria-controls="settings">Règles</a> -->
					    </div>
					  </div>
					  <div class="col-8">
					    <div class="tab-content" id="nav-tabContent">
					      <div class="tab-pane fade show active text-center text-muted" id="list-homes" role="tabpanel" aria-labelledby="list-home-list"><b>ÉTAPE DE CONSULTATION.</b></div>
					      <div class="tab-pane fade text-center text-muted" id="list-profiles" role="tabpanel" aria-labelledby="list-profile-list">
					      	<b>ETAPE</b>
					      	<ol>
					      	<li>Renseigner le nom du service se présentant sous cette forme : <br>Exemple : <b> "name" = "FacturesClient"</b></li> 	
					      <li>
					      		Renseigner l'adresse du serveur Exemple : <b>http://AdresseIpSERVEUR/master/</b>
					      	</li>
					      	<li>
					      		Passer en paramètres ces identifiants. Puis lancer la requête.
					      	</li>
					      </ol>
					 	 </div>
					 	 <div class="tab-pane fade text-center text-muted" id="list-messagess" role="tabpanel" aria-labelledby="list-messages-list">
					      	<b>Message de retour</b>
					      	<br>
					      	<br>
					      	<ul>
					      		<li class="text-success">
					      			{
									    "Response": {
									        "status": {
									            "status": 200,
									            "message": "Voici les factures du client ALI HIMIDI",
									            "success": true,
									            "resultat": {
									                "Nombre_fact": 2
									            }
									        },
									        "resultat": [
									            
									            {
									                "IRO_EXERCICE": "2018",
									                "IRO_NUMERO": "9968",
									                "IRO_NUMERODANSROLE": "1682",
									                "DET_REFDETTE": "6343318901682",
									                "DET_DATEEMISSION": "2018-10-22",
									                "DET_RESTANTDU": "9409.0000000000",
									                "DET_CODEMONNAIE": "2",
									                "DET_DATEMISEAJOUR": "2019-01-15 00:00:00",
									                "DET_REFBORD": null,
									                "DET_REFABN": "63433",
									                "DET_MNTTC": "9409.0000000000",
									                "DET_REFPAYEUR": "63433",
									                "DET_NOMPAYEUR": "ALI HIMIDI",
									                "DET_NUMCPT": "EA29536908600133",
									                "DET_INSID": "30331",
									                "DET_ADRESSE": null,
									                "CLI_ID": "63433",
									                "DET_COMMENT": null
									            },
									            {
									                "IRO_EXERCICE": "2018",
									                "IRO_NUMERO": "9896",
									                "IRO_NUMERODANSROLE": "3",
									                "DET_REFDETTE": "6343318900003",
									                "DET_DATEEMISSION": "2018-04-25",
									                "DET_RESTANTDU": "42645.0000000000",
									                "DET_CODEMONNAIE": "2",
									                "DET_DATEMISEAJOUR": "2019-01-15 00:00:00",
									                "DET_REFBORD": null,
									                "DET_REFABN": "63433",
									                "DET_MNTTC": "92253.0000000000",
									                "DET_REFPAYEUR": "63433",
									                "DET_NOMPAYEUR": "ALI HIMIDI",
									                "DET_NUMCPT": "EA29536908600133",
									                "DET_INSID": "30331",
									                "DET_ADRESSE": null,
									                "CLI_ID": "63433",
									                "DET_COMMENT": null
									            }
									        ]
									    }
									}
														      		</li>
					      		<li class="text-danger">
									{
									    "Response": {
									        "status": 102,
									        "resultat": "Aucunes factures clients trouvées"
									    }
									}
					      		</li>
					      		
					      	</ul>
					      	
						   </div>
					      
					      <!-- <div class="tab-pane fade text-danger text-center" id="list-settingss" role="tabpanel" aria-labelledby="list-settings-list"><b></b> </div> -->
					    </div>
					  </div>
				</div>
	       </div>
		</div>
<br>
<div class="row">
		<div class="col-lg-12 text-center text-muted"><h2> Tableau de description.</h2>
		<p class="text-center text-muted"> Cette fonctionnalité est disponible pour tous nos clients </p>
		<p class="text-center text-warning"> Renseigner obligatoirement les entêtes (<b>Authorization</b>) </p>
		 </div>
	</div>
<br>
		<div class="row">
			<br>

			<!-- <div class="col-lg-4"></div> -->
			<div class="col-lg-8 offset-2">
				<table class="table table-borderless table-dark">
				  <thead>
				   <tr>
				      <th scope="row" colspan="2" class="text-center">(URL) DU SERVEUR</th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <td colspan="2" class="text-center">http://AdresseIp/master</td>
				    </tr>
				  </thead>
				  <tbody>
				  	<tr>
				      <th scope="row" colspan="2" class="text-center text-warning"><b>Authorization</b></th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <td colspan="2" class="text-center text-warning"><b>Bearer + Secure_Key_Token</b></td>
				    </tr>
				    <tr>
				      <th scope="row" colspan="2" class="text-center text-muted">name</th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <td colspan="2" class="text-center text-muted">FacturesClient</td>
				    </tr>
					<tr>
				      <th scope="row" colspan="4" class="text-center text-muted">param</th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <!-- <td colspan="2" class="text-center text-muted">Secure_Key_Token</td> -->
				    </tr>
				     <tr>
				      <th scope="row" colspan="2" class="text-center text-muted">DET_REFDETTE</th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <td colspan="2" class="text-center text-muted">4318711311325</td>
				    </tr>
				     
				    
				    <!-- Button trigger modal -->
				    <tr>
				      <th scope="row" colspan="4" class="text-center text-muted"><button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-xl">Voir un Aperçu ?</button></th>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
</div>



<!-- Modal -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
     <div class="container-fluid">
	    <div class="modal-content">
	     	 <img src="images/apercu/fact_client.png" height="500" width="100%" alt="Token">
	     <br>
		    <div class="col-lg-5 offset-5">
		        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fermer</button>
		    </div>
	    </div>
	   
    </div>
  </div>
</div>

	
<?php require ('function/footer.php'); ?>
