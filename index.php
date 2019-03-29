<?php
    include_once 'header.php';
?>

<body id="page-top">
  
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand mr-1" href="index.html">Tere tulemast E-Korvi</a>
    
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Otsi siit..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <button class="dropdown-item" id="seaded">Seaded</button>
          <a class="dropdown-item" href="#">Tegevus logi</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logivälja</a>
        </div>
      </li>
    </ul>
  </nav>
  
  <!-- wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
      <a id="esileht" class="nav-link">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Esileht</span>
        </a>
      <li class="nav-item active">
        <a id="koostaKorv" class="nav-link">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ostukorv</span>
        </a>
      </li>
    </ul>
    
    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Area -->
        <div class="area" id="area">
          <div class="row">
            <div class="col-sm">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">List 1!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Vaata sisu</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- area1 -->
        <div class="area1" id="area1">
        <h2>Muuda profiili</h2>
          <hr>
            <div class="row d-flex justify-content-center">
              <!-- edit form column -->
              <div class="col-md-9 personal-info justify-content-center">
                <form class="form-horizontal" role="form">
                  <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a> 
                    <i class="fa fa-coffee form-horizontal"></i>
                    See on hoiatus <strong>.sõnum</strong>. Ala tähtsa sõnumi edastamiseks kasutajale.
                  </div>
                  <div class="form-group d-flex justify-content-center">
                    <div class="col-lg-6">
                      <label class="col-lg-4 control-label">Eesnimi:</label>
                      <input class="form-control" type="text" placeholder="Eesnimi">
                    </div>
                  </div>
                  <div class="form-group d-flex justify-content-center">
                    <div class="col-lg-6">
                      <label class="col-lg-4 control-label">Perenimi:</label>
                      <input class="form-control" type="text" placeholder="Perenimi">
                    </div>
                  </div>
                  <div class="form-group d-flex justify-content-center">
                    <div class="col-lg-6">
                      <label class="col-lg-4 control-label">Email:</label>
                      <input class="form-control" type="text" placeholder="user@exsample.com">
                    </div>
                  </div>
                  <div class="form-group d-flex justify-content-center">
                    <div class="col-md-6">
                      <label class="col-md-4 control-label">Parool:</label>
                      <input class="form-control" type="password" placeholder="Parool">
                    </div>
                  </div>
                  <div class="form-group d-flex justify-content-center">
                    <div class="col-md-6">
                      <label class="col-md-4 control-label">Parool uuesti:</label>
                      <input class="form-control" type="password" placeholder="Parool uuesti">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 d-flex justify-content-center">
                      <input type="button" class="btn btn-primary" value="Save Changes">
                      <span></span>
                      <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          <hr>
        </div>
        
        <!-- area2 -->
        <div class="area2" id="area2">
          <h2>Nimekiri</h2>
          <hr>
            <!--<form>-->
            <!--  <input type="text" id="Toode" placeholder="Toode">-->
            <!--  <td>-->
            <!--    <label for="number"></label>-->
            <!--    <select name="number" id="number">-->
            <!--      <option>0</option>-->
            <!--      <option>1</option>-->
            <!--      <option>2</option>-->
            <!--      <option>3</option>-->
            <!--      <option>4</option>-->
            <!--      <option>5</option>-->
            <!--      <option>6</option>-->
            <!--      <option>7</option>-->
            <!--      <option>8</option>-->
            <!--      <option>9</option>-->
            <!--      <option>10</option>-->
            <!--    </select>-->
            <!--  </td>-->
            <!--	<input type="button" class="add-row" value="Lisa toode">-->
            <!--</form>-->
            <!--<table>-->
            <!--  <thead>-->
            <!--    <tr>-->
            <!--      <th>Select</th>-->
            <!--      <th>Name</th>-->
            <!--      <th>Email</th>-->
            <!--    </tr>-->
            <!--  </thead>-->
            <!--  <tbody>-->
            <!--    <tr>-->
            <!--      <td><input type="checkbox" name="record"></td>-->
            <!--      <td>Peter Parker</td>-->
            <!--      <td>peterparker@mail.com</td>-->
            <!--    </tr>-->
            <!--  </tbody>-->
            <!--</table>-->
            <!--<button type="button" class="delete-row">Kustuta sisestus</button>-->
            <!-- DataTables Example -->
            <div class="card mb-2">
              <div class="card-header">
              <i class="fas fa-table"></i>>>>Nimekirja nimi siia<<<</div>
              <div class="card-body">
                <div class="table-responsive">
                  <input type="text" id="Toode" placeholder="Toode">
                  <input type="button" class="add-row" value="Lisa toode">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Toode</th>
                        <th>Kogus</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th></th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">>>>Millal viimati uuendati kuupäev/kell<<<  </div>
            </div>
          <hr>
        </div>
      <!-- /.container-fluid -->  
      </div>
    <!-- /.content-wrapper -->
    </div>
    
    
    
    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Autoriõigus © E-Korv 2019</span>
        </div>
      </div>
    </footer>
  
  </div>
  <!-- /.content-wrapper -->
  
  </div>
  <!-- /#wrapper -->
  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Valmis lahkuma?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Vali "Logivälja" kui oled valmis lõpetama enda sessiooni.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tühista</button>
          <a class="btn btn-primary" href="../../e_korv/login.html">Logivälja</a>
        </div>
      </div>
    </div>
  </div>

<?php include_once "footer.php"; ?>