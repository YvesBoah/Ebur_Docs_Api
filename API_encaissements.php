<?php require ('function/header.php'); ?>

<main role="main">



  <div class="album py-5 bg-light">
    <div class="container-fluid">

        <div class="row">
	       <div class="col-lg-12">
	      		<h1 class="text-center text-muted"> Procédure d'encaissement de facture</h1>
	       </div>
	    </div>
	
	   
    </div>
  </div>

</main>





<div class="container-fluid">
	<br>
	<div class="row">
		<div class="col-lg-12 text-center text-muted"><h2> Faire un encaissement </h2> </div>
	</div>

	<br>
	 <div class="row">
	     
	       <div class="col-lg-8 offset-2">
	       		<div class="row">
					  <div class="col-4">
					    <div class="list-group" id="list-tab" role="tablist">
					      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-homes" role="tab" aria-controls="home">Menu</a>
					      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profiles" role="tab" aria-controls="profile">Procédure d'encaissement </a>
					     

					    <!--   <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settingss" role="tab" aria-controls="settings">Règles</a> -->
					    </div>
					  </div>
					  <div class="col-8">
					    <div class="tab-content" id="nav-tabContent">
					      <div class="tab-pane fade show active text-center text-muted" id="list-homes" role="tabpanel" aria-labelledby="list-home-list"><b>ÉTAPE DE CONSULTATION.</b></div>
					      <div class="tab-pane fade text-center text-muted" id="list-profiles" role="tabpanel" aria-labelledby="list-profile-list">
					      	<b>ETAPE</b>
					      	<ol>
					      	<li>Renseigner le nom du service se présentant sous cette forme : <br>Exemple : <b> "name" = "EncaissementFacturesClient"</b></li> 	
					      	<li>
					      		Renseigner l'adresse du serveur Exemple : <b>http://AdresseIpSERVEUR/master/</b>
					      	</li>
					      	<li>
					      		Passer en paramètres ces identifiants. Puis lancer la requête.
					      	</li>
					      </ol>
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
				      <td colspan="2" class="text-center text-muted">EncaissementFacturesClient</td>
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
				    <tr>
				      <th scope="row" colspan="2" class="text-center text-muted">ENC_MONTANT</th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <td colspan="2" class="text-center text-muted">Montant_que_vous_régler</td>
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
	     	 <img src="images/apercu/enc.png" height="500" width="100%" alt="Token">
	     <br>
		    <div class="col-lg-5 offset-5">
		        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fermer</button>
		    </div>
	    </div>
	   
    </div>
  </div>
</div>

	
<?php require ('function/footer.php'); ?>
