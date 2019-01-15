<?php require ('function/header.php'); ?>

<main role="main">



  <div class="album py-5 bg-light">
    <div class="container-fluid">

        <div class="row">
	       <div class="col-lg-12">
	      		<h1 class="text-center text-muted"> Cryptage de données</h1>
	       </div>
	    </div>
	
	   
    </div>
  </div>

</main>


<div class="container-fluid">
	<br>
	 <div class="row">
	     
	       <div class="col-lg-8 offset-2">
	       		<div class="row">
					  <div class="col-4">
					    <div class="list-group" id="list-tab" role="tablist">
					      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Menu</a>
					      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Visiter la documentation.</a>
					      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Le payload</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Règles</a>
					    </div>
					  </div>
					  <div class="col-8">
					    <div class="tab-content" id="nav-tabContent">
					      <div class="tab-pane fade show active text-center text-muted" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><b>Description de la documentation.</b>
					      </div>
					      <div class="tab-pane fade text-center text-muted" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><b>Via ce lien <a href="https://jwt.io/" target="blank">JSON WEB TOKEN (JWT)</a> , vous aurez plus (+) d'informations sur la méthode de cryptage.</b></div>
					      <div class="tab-pane fade text-center text-muted" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
					      	<b>Le payload, Il s’agit tout comme le header, d’un objet JSON encodé en base64 qui représente cette fois-ci le corps du token</b>
					      	<ul>
						      	<li>“iss” (Issuer) : Permet d’identifier le serveur ou le système qui a émis le token</li>
						      	<li>“sub” (Subject) :  Il s’agit généralement de l’identifiant de l’utilisateur que le token représente</li>
						      	<li>“aud” (Audience) : Il s’agit généralement de l’application ou du site qui reçoit le token</li>
						      	<li>“iat”  (Issued At) : Il s’agit de la date de génération du token</li>
						      	<li>“exp” (Expiration Time) : Il s’agit de la date d’expiration du token.</li>
						    </ul>
						   </div>
					      <div class="tab-pane fade text-danger text-center" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><b>! Attention le payload ne doit pas contenir de données sensibles.</b> <br> 
							<p class="text-warning"><b><i>NB: Cette clé générer est valide durant un labs de temps.</i></b></p>
					      </div>
					    </div>
					  </div>
				</div>
	       </div>
		</div>
</div>


<div class="container-fluid">
	<br>
	<div class="row">
		<div class="col-lg-12 text-center text-muted"><h2> Génération d'une clé sécurisée (Token)</h2> </div>
	</div>

	<br>
	 <div class="row">
	     
	       <div class="col-lg-8 offset-2">
	       		<div class="row">
					  <div class="col-4">
					    <div class="list-group" id="list-tab" role="tablist">
					      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-homes" role="tab" aria-controls="home">Menu</a>
					      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profiles" role="tab" aria-controls="profile">Procédure de génération </a>
					      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messagess" role="tab" aria-controls="messages">Retour </a>
					    <!--   <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settingss" role="tab" aria-controls="settings">Règles</a> -->
					    </div>
					  </div>
					  <div class="col-8">
					    <div class="tab-content" id="nav-tabContent">
					      <div class="tab-pane fade show active text-center text-muted" id="list-homes" role="tabpanel" aria-labelledby="list-home-list"><b>ÉTAPE DE GÉNÉRATION DU TOKEN.</b></div>
					      <div class="tab-pane fade text-center text-muted" id="list-profiles" role="tabpanel" aria-labelledby="list-profile-list">
					      	<b>ETAPE</b>
					      	<ol>
					      	<li>Choisir un utilisateur provenant de la table <b>CW_UTILISATEUR.</b></li>
					      	<li>Recupérer son login et son mot de passe <br>Exemple : <b> "USR_LOGIN" = "yves"</b> et <b> "USR_PASS" = "1234".</b></li>
					      	<li>Renseigner le nom du service se présentant sous cette forme : <br>
								<b>"name" = "Secure_Key_Token". </b>
					      	</li>
					      	<li>
					      		Renseigner l'adresse du serveur Exemple : <b>http://localhost/master/</b>
					      	</li>
					      	<li>
					      		Passer en paramètres ces identifiants. Puis lancer la requête.
					      	</li>
					      </ol></div>
					      <div class="tab-pane fade text-center text-muted" id="list-messagess" role="tabpanel" aria-labelledby="list-messages-list">
					      	<b>Message de retour</b>
					      	<br>
					      	<br>
					      	<ul>
					      		<li class="text-success">
					      			{
									    "Response": {
									        "status": 200,
									        "resultat": {
									            "token": "eyJiJ9.eyJpc3MiOidWxsfQ.d5ZRW3
									        }
									    }
									}
					      		</li>
					      		<li class="text-danger">
									{
									    "Response": {
									        "status": 108,
									        "resultat": "Les identifiants renseignés ne sont pas correctes. "
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
		<p class="text-center text-muted"> Cette fonctionnalité est exclusivement réservée à un <b>Administrateur d'EBURTIS.</b></p>
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
				      <th scope="row" colspan="2" class="text-center text-muted">name</th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <td colspan="2" class="text-center text-muted">Secure_Key_Token</td>
				    </tr>
				  <tr>
				      <th scope="row" colspan="4" class="text-center text-muted">param</th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <!-- <td colspan="2" class="text-center text-muted">Secure_Key_Token</td> -->
				    </tr>
				     <tr>
				      <th scope="row" colspan="2" class="text-center text-muted">USR_LOGIN</th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <td colspan="2" class="text-center text-muted">yves</td>
				    </tr>
				    <tr>
				      <th scope="row" colspan="2" class="text-center text-muted">USR_PASS</th>
				      <!-- <td>Mark</td> -->
				      <!--  <td>Otto</td> -->
				      <td colspan="2" class="text-center text-muted">1234</td>
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
	     	 <img src="images/apercu/token.png" height="500" width="100%" alt="Token">
	     <br>
		    <div class="col-lg-5 offset-5">
		        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fermer</button>
		    </div>
	    </div>
	   
    </div>
  </div>
</div>

<div class="container-fluid">
	<br>
	<div class="row">
	<div class="col-lg-12">
		<h3 class="text-center text-warning"> Apercu d'une entête d'Authorization (Header).</b></h3>
	</div>
<!-- Authorization -->
	<div class="col-lg-8 offset-2">
		<img src="images/apercu/Authorization.png" height="auto" width="100%" alt="Token">
	</div>
	</div>
</div>

	
<?php require ('function/footer.php'); ?>
