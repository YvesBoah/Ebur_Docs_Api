<?php require ('function/header.php'); ?>




<main role="main">



  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Facture</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Factures</text></svg>
            <div class="card-body">
              <p class="card-text">Cette fonctionnalité nous permets de consulter les <b>factures</b> des clients.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="API_facture.php">
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
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Solde Client</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Solde Client</text></svg>
            <div class="card-body">
              <p class="card-text">Cette fonctionnalité nous permets de consulter les <b>soldes</b> des clients.</p>
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
              <p class="card-text">Cette fonctionnalité permets d'effectuer les <b>encaissements</b> des factures clients.</p>
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
              <p class="card-text">Cette fonctionnalité nous permets de sécuriser les <b>échanges de données</b> </p>
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
    </div>
  </div>

</main>



	
<?php require ('function/footer.php'); ?>
