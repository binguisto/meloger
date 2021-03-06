<?php 
 include 'header.php';
 extract($_POST);
 $stat = "";
 $modif = "";
 if(isset($_GET['id'])){
  $mod = "select * from articles where id=".$_GET['id'];
  $result1 = $connexion->query($mod);
  $modif = $result1->fetch();
 }
 if(isset($_GET['sup'])){
  $del = "delete from articles where id=".$_GET['sup'];
  $connexion->query($del);
  $stat = "deleted";
 }
 
 if(isset($_POST["enregistrer"])) {
  $sql = "INSERT INTO articles VALUES('', ".$connexion->quote($libelle).",".$connexion->quote($description).",".$connexion->quote($prix).",".$connexion->quote($commune).",".$connexion->quote($quartier).",".$connexion->quote($typeArticle).",'".date('d/m/y')."',".$connexion->quote($_SESSION['id']). ")";
  $result = $connexion->query($sql);
  $last_id = $connexion->lastInsertId();
  if(!$result){
    $stat = "error";
  }else{
    $stat = "saved";
  }
  if (isset($_FILES['image']['name'])){
   
  
    for($i=0; $i<count($_FILES['image']['name']); $i++) {
      $target_dir = "../uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"][$i]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if file already exists
    if (file_exists($target_file)) {
        $imgstat = "exist";
        $uploadOk = 0;
    }elseif ($_FILES["image"]["size"][$i] > 2000000) {
        $imgstat = "size";
        $uploadOk = 0;
    }elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $imgstat = "format";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
       $imgstat = $stat;
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
            $imgstat = "success";
        } else {
            $imgstat = "unknow";
        }
    }
    if($imgstat !== "success") {
      $photo ="";
    }else{
      $photo = "uploads/". basename($_FILES["image"]["name"][$i]);
    }
    $sql2 = "INSERT INTO images VALUES('', ".$connexion->quote($photo).",".$connexion->quote($last_id).",'NON')";
          $result = $connexion->query($sql2);
    }
  }
 }
 if(isset($_POST["modifier"])) {
  $sql = "update articles set libelle = '".$libelle."', description = '".$description."', prix = ".$prix.", commune = '".$commune."', quartier = '".$quartier."', typeArticle = '".$typeArticle."' where id = ".$id;
  $result = $connexion->query($sql);
  if(!$result){
    $stat = "error";
  }else{
    $stat = "modified";
  }
 }
 
 ?>

<?php include 'aside.php'  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="col-md-11">
      <h1> Administration </h1>
      <?php if($stat === "saved") { ?>
      <div class="alert alert-success alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                Les données ont bien été enregistrées!
       </div>
      <?php } ?>
      <?php if($stat === "modified") { ?>
      <div class="alert alert-success alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                Les données ont bien été modifiées!
       </div>
      <?php } ?>
      <?php if($stat === "error") { ?>
      <div class="alert alert-danger alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                Une erreur s'est produite, veuillez réessayer.
       </div>
      <?php } ?>

      <?php if($stat === "deleted") { ?>
      <div class="alert alert-danger alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Les données ont bien été supprimées!
       </div>
      <?php } ?>
      </div>

      <!-- Main row -->
      <div class="col-md-11">
      <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#create" data-toggle="tab">Créer un article</a></li>
              <li><a href="#list" data-toggle="tab">Liste des articles</a></li>
              <?= ($_SESSION['typeUser'] === "admin") ? '<li><a href="#all" data-toggle="tab">tous les articles</a></li>' : "" ?>  
            </ul>
            <br>
            <div class="tab-content">
              <div class="active tab-pane" id="create">
              <form class="form-horizontal" enctype="multipart/form-data" method="post" action="index.php">
                  <div class="form-group">
                    <label for="libelle" class="col-sm-2 control-label">Libellé* :</label>
                    <div class="col-sm-10 col-md-6">
                      <input type="text" name="libelle" value="<?= !empty($modif) ? $modif['libelle'] : "" ?>" class="form-control" id="libelle" required placeholder="Libellé">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description* :</label>
                    <div class="col-sm-10 col-md-6">
                      <textarea class="form-control" name="description" id="description" required placeholder="Description"><?= !empty($modif) ? $modif['description'] : "" ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="prix" class="col-sm-2 control-label">Prix* :</label>
                    <div class="col-sm-10 col-md-6">
                      <input type="number" class="form-control" name="prix" value="<?= !empty($modif) ? $modif['prix'] : "" ?>"  required id="prix" placeholder="Prix">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="commune" class="col-sm-2 control-label">Commune* :</label>
                    <div class="col-sm-10 col-md-6">
                      <input type="text" class="form-control" name="commune" value="<?= !empty($modif) ? $modif['commune'] : "" ?>" required id="commune" placeholder="Commune">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="quartier" class="col-sm-2 control-label">Quartier* :</label>
                    <div class="col-sm-10 col-md-6">
                      <input type="text" class="form-control" name="quartier" value="<?= !empty($modif) ? $modif['quartier'] : "" ?>" required id="quartier" placeholder="Quartier">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="quartier" class="col-sm-2 control-label">Type d'article* :</label>
                    <div class="col-sm-10 col-md-6">
                       <select class="form-control" required name="typeArticle" >
                       <?php if(empty($modif)) {?>
                         <option selected disabled value="parcelle" >Choisir le type</option>
                         <option  value="parcelle">Parcelle</option>
                         <option value="terrain">Terrain</option>
                         <option value="divers">Divers</option>
                       <?php }else{ ?>
                        <option  value="<?= $modif['typeArticle'] ?>"><?= $modif['typeArticle'] ?></option>
                        <?php } ?>
                       </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="quartier" class="col-sm-2 control-label">Quartier* :</label>
                    <div class="col-sm-10 col-md-6">
                      <input type="file" class="form-control" name="image[]" >
                    </div>
                  </div>
                <div class="box-footer ">
                  <input type="hidden" name="id" value="<?= $modif['id'] ?>">
                  <input type="submit" name="<?= empty($modif) ? 'enregistrer' : 'modifier' ?>" class="btn btn-primary pull-right" value="<?= empty($modif) ? 'enregistrer' : 'modifier' ?>"> 
                </div>
              </form>
              </div>
 
              <div class="tab-pane" id="list">
              <table id="example1" class="table text-center table-bordered table-hover table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Libellé</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Commune</th>
                    <th>Quartier</th>
                    <th>Type</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $q = $connexion->query("select * from articles where user =".$_SESSION['id']);                       
                  foreach($q as $k => $a){ ?>
                  <tr>
                    <td><?= ++$k ?></td>
                    <td><?= $a["libelle"] ?></td>
                    <td><?= $a["description"] ?></td>
                    <td><?= $a["prix"] ?></td>
                    <td><?= $a["commune"] ?></td>
                    <td><?= $a["quartier"] ?></td>
                    <td><?= $a["typeArticle"] ?></td>
                    <td><a href="index.php?id=<?= $a["id"] ?>" class="btn btn-xs btn-primary" title="Modifier" ><i class="fa fa-edit"></i></a> <a href="index.php?sup=<?= $a["id"] ?>" title="Supprimer"  class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></a></td>
                  </tr> 
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <?php if($_SESSION['typeUser'] === "admin" ){ ?>
              <div class="tab-pane" id="all">
              <table id="example2" class="table text-center table-bordered table-hover table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Libellé</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Commune</th>
                    <th>Quartier</th>
                    <th>Type</th>
                    <th>utilisateur</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $q = $connexion->query("select * from articles, users where users.id = articles.user");                       
                  foreach($q as $k => $a){ ?>
                  <tr>
                    <td><?= ++$k ?></td>
                    <td><?= $a["libelle"] ?></td>
                    <td><?= $a["description"] ?></td>
                    <td><?= $a["prix"] ?></td>
                    <td><?= $a["commune"] ?></td>
                    <td><?= $a["quartier"] ?></td>
                    <td><?= $a["typeArticle"] ?></td>
                    <td><?= $a["prenoms"]." ".$a["nom"] ?></td>
                    <td><a href="index.php?id=<?= $a["id"] ?>" class="btn btn-xs btn-primary" title="Modifier" ><i class="fa fa-edit"></i></a> <a href="index.php?sup=<?= $a["id"] ?>" title="Supprimer"  class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></a></td>
                  </tr> 
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <?php } ?>
            </div>
      </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'  ?>