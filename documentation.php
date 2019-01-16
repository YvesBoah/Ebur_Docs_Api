<?php require ('function/header.php'); ?>




<main role="main">



  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Facture</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Factures (ALL)</text></svg>
            <div class="card-body">
              <p class="card-text">Cette fonctionnalité nous permet de consulter toutes les <b>factures des clients.</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="API_facture.php">
                  <button type="button" class="btn btn-outline-warning" >Consulter</button>
                  </a>
                </div>
                <small class="text-muted"><?php echo $date ?> à <?php echo $heure ?>.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Solde Client</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Solde Client</text></svg>
            <div class="card-body">
              <p class="card-text">Cette fonctionnalité nous permet de consulter <b>le solde des factures d'un client.</b></p>
              <div class="d-flex justify-content-between align-items-center">
               <div class="btn-group">
                <a href="API_SoldeClient.php">
                  <button type="button" class="btn btn-outline-primary">Consulter</button>
                </a>
               </div>
                 <small class="text-muted"><?php echo $date ?> à <?php echo $heure ?>.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Encaissements</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Encaissement</text></svg>
            <div class="card-body">
              <p class="card-text">Cette fonctionnalité permet d'effectuer <b>les encaissements des factures clients.</b></p>
              <div class="d-flex justify-content-between align-items-center">
               <div class="btn-group">
                <a href="API_encaissements.php">
                  <button type="button" class="btn btn-outline-primary">Consulter</button>
                </a>
                </div>
                 <small class="text-muted"><?php echo $date ?> à <?php echo $heure ?>.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Cryptage</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Cryptage de données</text></svg>
            <div class="card-body">
              <p class="card-text">Cette fonctionnalité nous permet de <b> sécuriser les échanges de données</b> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="API_Cryptage.php">
                    <button type="button" class="btn btn-outline-primary">Consulter</button>
                  </a>
                </div>
               <small class="text-muted"><?php echo $date ?> à <?php echo $heure ?>.</small>
              </div>
            </div>
          </div>
        </div>

      
     
      

       
        
        
      </div>

      <!-- Fin Row  -->
       <div class="row">
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Facture</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Factures (ONE)</text></svg>
            <div class="card-body">
              <p class="card-text">Cette fonctionnalité nous permet de consulter <b>une facture d'un client.</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="API_facture_one.php">
                  <button type="button" class="btn btn-outline-warning" >Consulter</button>
                  </a>
                </div>
                <small class="text-muted"><?php echo $date ?> à <?php echo $heure ?>.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Facture</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Factures Client (ONE)</text></svg>
            <div class="card-body">
              <p class="card-text">Cette fonctionnalité nous permet de consulter <b>toutes les factures d'un client.</b> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="API_facture_client.php">
                  <button type="button" class="btn btn-outline-warning" >Consulter</button>
                  </a>
                </div>
                <small class="text-muted"><?php echo $date ?> à <?php echo $heure ?>.</small>
              </div>
            </div>
          </div>
        </div>
     
 
      </div>

      <!-- Fin Row  -->
    </div>
  </div>

</main>



	
<?php require ('function/footer.php'); ?>
