<?php 
// if($this->Session->isLogged()){
//   if($controller=='auths' )
// header("Location:".Router::url("personnels/dashboard")); }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Groupe MEDIA CONTACT BUSINESS INTELLIGENCE INTERFACE">
    <meta name="author" content="DRI BENIN">

    <title>GMC Business Intelligence Interface </title>

    <!-- vendor css -->
    <link href="<?php echo BASE_URL; ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bracket.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bracket.simple-white.css">
  </head>

  <body>
<form method="post" action="<?php echo BASE_URL ?>/auths/connect">
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
        <img src="<?php echo BASE_URL; ?>/img/img22.jpg" class="wd-100p ht-100p object-fit-cover" alt="">
        <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
        <div class="signin-logo tx-center tx-15 tx-bold tx-white"><span class="tx-bold">[</span>Business <span class="tx-info">Intelligence Interface</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">Outil décisionnel GMC</div>

        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Login">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" name="pass" class="form-control" placeholder="Mot de passe">
     
        </div><!-- form-group -->
        <button type="submit" class="btn btn-danger btn-block">Se connecter</button>

       
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    </div><!-- d-flex -->
</form>
    <script src="<?php echo BASE_URL; ?>/lib/jquery/jquery.js"></script>
    <script src="<?php echo BASE_URL; ?>/lib/popper.js/popper.js"></script>
    <script src="<?php echo BASE_URL; ?>/lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
