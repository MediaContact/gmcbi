  <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box" style="padding-left:30px">
                                    <h4 class="page-title "><i class="fa fa-users"></i> Liste ds agents </h4>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
  <div class="col-md-12" style="margin-top:10px;"  >
     <div class="row">
        <div class="col-sm-4">
             <a data-toggle="modal" data-target="#custom-modal"  class="btn btn-sm btn-danger btn-bordered waves-effect waves-light m-b-20" data-animation="fadein" data-plugin="custommodal"
                                    data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i> Add user</a>
        </div><!-- end col -->
    </div>
  <table id="datatable-scroller" class="table table-striped table-bordered table-colored table-primary" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Username</th>
                                            <th>Profil</th>
                                            <th width="2%"></th>
                                            <th width="2%"></th>
                                            <th width="2%"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
$i = 1;
                                            foreach ($listeuser as $key => $value) {
                                              ?>
                                              <tr>
                                                <td></td>
                                                <td><?php echo $value->Nom ?></td>
                                                <td><?php echo $value->Prenom ?></td>
                                                <td><?php echo $value->username ?></td>
                                                <td><?php echo $value->libelle_profil ?></td>
                                                <td><button type="button" class="btn btn-warning waves-effect waves-light btn-xs m-b-5" 
                                                    data-toggle="modal" data-target="#con-close-modal<?php echo $i?>">Modifier</button> </td>
                                                <td><button type="button" class="btn btn-success waves-effect waves-light btn-xs m-b-5" 
                                                    data-toggle="modal" data-target="#valide<?php echo $i?>">Reinitialiser Pass</button> </td>
                                                <td> <button type="button" class="btn btn-danger waves-effect waves-light btn-xs m-b-5" 
                                                    data-toggle="modal" data-target="#del<?php echo $i?>">Supprimer</button></td>
                                              </tr>

 <div id="con-close-modal<?php echo $i?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Modifier <?php echo $value->username ?></h4>
                                                </div>
                                                <form method="post">
                                                     <div class="form-group">
                                                        <label for="name">Nom</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Enter name" value="<?php echo $value->Nom ?>" name="Nom" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="position">Prenom</label>
                                                        <input type="text" class="form-control" id="position" placeholder="Enter Prenom" value="<?php echo $value->Prenom ?>" name="Prenom">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="company">Username</label>
                                                        <input type="text" class="form-control" id="company" placeholder="Enter Userename" value="<?php echo $value->username ?>" name="username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Profil</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Profil" value="<?php echo $value->libelle_profil ?>" name="libelle_profil">
                                                    </div>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-success waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-sm btn-danger waves-effect" name ="update" >Modifier</button>
                                                </div>
                                            </div></form>
                                        </div>
                                    </div>
                                    </div>

 <div id="valide<?php echo $i?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Valider la réponse</h4>
                                                </div>
                                                <form method="post">
                                                    <input type="hidden" name="idbase_reponse" value="<?php //echo $value->idbase_reponse ?>">
                                                <div class="modal-body">
                                                  Voulez vraiment reinitialier le mot de pass de <?php echo $value->username ?> ?

                                                  </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-success waves-effect" data-dismiss="modal">Fermer</button>
                                                    <button type="submit" class="btn btn-sm btn-danger waves-effect" name ="valide" >Oui</button>
                                                </div>
                                            </div></form>
                                        </div>
                                    </div>
                                    </div>

 <div id="del<?php echo $i?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Suppression</h4>
                                                </div>
                                                <form method="post">
                                                    <input type="hidden" name="idbase_reponse" value="<?php //echo $value->idbase_reponse ?>">
                                                <div class="modal-body">
                                                  Voulez vraiment supprimer <span class="label label-default"><?php echo $value->username ?></span> ?

                                                  </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-success waves-effect" data-dismiss="modal">Fermer</button>
                                                    <button type="submit" class="btn btn-sm btn-danger waves-effect" name ="del" >Oui</button>
                                                </div>
                                            </div></form>
                                        </div>
                                    </div>
                                    </div>
                                              <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>

<div id="custom-modal" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header">
                <button type="button" class="close" onclick="Custombox.close();">
                    <span>&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="custom-modal-title">Add Contact</h4>
    </div>
     <div class="modal-body">
                <div class="custom-modal-text text-left">
                    <form role="form">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="position">Prenom</label>
                            <input type="text" class="form-control" id="position" placeholder="Enter Prenom">
                        </div>
                        <div class="form-group">
                            <label for="company">Username</label>
                            <input type="text" class="form-control" id="company" placeholder="Enter Userename">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Profil</label>
                            <select type="text" class="form-control" name="idstatus" required>
         <option></option>
        <?php foreach ($les_status as $value): ?>
          <option value="<?php echo $value->idstatus; ?>"><?php echo $value->Libelle_status; ?></option>
           <?php endforeach ?>
           </select>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light" name="add">Save</button>
                        <button type="button" class="btn btn-sm btn-danger waves-effect waves-light m-l-10">Cancel</button>
                    </form>
                </div>
        </div>
            </div>
                                 <script type="text/javascript">
            $(document).ready(function () {
               
                $('#datatable-scroller').DataTable();
               
            });
           // TableManageButtons.init();

        </script>

                            
