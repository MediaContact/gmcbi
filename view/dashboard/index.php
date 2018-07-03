  <div class="row">
  <?php foreach ($liste_departement as $key => $value) {
  ?>

<div class="col-sm-6 col-xl-3 col-md-3 mb-4">
            <div class="bg-<?php echo $value->color ?> rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class=" <?php echo $value->icon ?> tx-70 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-8 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10"></p>
                  <p class="tx-16 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php echo $value->libelle_departement ?></p>
                  <span class="tx-11 tx-roboto tx-white-10 "><a href="analytics/index/<?php echo $value->iddepartement ?>" class="btn btn-xs btn-default">Voir</a></span>
                </div>
              </div>
            </div>
          </div>

<?php } ?>

</div>