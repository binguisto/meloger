  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../<?= !empty($_SESSION['photo']) ? $_SESSION['photo'] : 'uploads/default-user.png' ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $_SESSION['prenoms']." ".$_SESSION['nom']  ?></p>
 
        </div>
      </div>
      <!-- search form -->
       
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Accueil</span>
            
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Utilisateurs</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i>Liste</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Ajouter</a></li>
             
          </ul>
        </li>
        <li class=" ">
          <a href="profile.php">
            <i class="fa fa-user"></i> <span>Profil</span>
            <span class="pull-right-container">
              <!-- i class="fa fa-angle-left pull-right"></i -->
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>