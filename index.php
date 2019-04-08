<?php
    include_once 'header.php';
    include_once 'DATA/function.php';
    
?>

<body id="page-top">
  
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    
    <a href="index.php">
      <img src="images/logo.png" style="max-width: 220px; max-height: 47.5px" alt="logo">
    </a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
  </nav>
  
  <!-- wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
      <a id="esileht" class="nav-link">
          <i class="fas fa-fw fa-home"></i>
          <span>Esileht</span>
        </a>
      <li class="nav-item active">
        <a id="koostaKorv" class="nav-link">
          <i class="fas fa-shopping-cart"></i>
          <span>Ostukorv</span>
        </a>
      </li>
      <li class="nav-item active">
        <a id="ajalugu" class="nav-link">
          <i class="fas fa-history"></i>
          <span>Ajalugu</span>
        </a>
      </li>
      <li class="nav-item active">
        <a id="seaded" class="nav-link">
          <i class="fas fa-user"></i>
          <span>Profiil</span>
        </a>
      </li>
      <li class="nav-item active">
        <a id="kontakt" class="nav-link">
          <i class="fas fa-tty"></i>
          <span>Kontakt</span>
        </a>
      </li>
      <li class="nav-item active">
        <a id="kkk" class="nav-link">
          <i class="fas fa-question"></i>
          <span>KKK</span>
        </a>
      </li>
      <li class="nav-item active">
        <a id="logout" class="nav-link" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt"></i>
          <span>Välju</span>
        </a>
      </li>
    </ul>
    
    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Area -->
        <div class="area" id="area">
          <div class="row content-center">
            <div class="col-sm">
              <h2 class="subTitle">Tere tulemast ostukorvi</h2>
            </div>
          </div>
        </div>
        
        <!-- area1 profiil -->
        <div class="area1" id="area1">
        <h2 class="subTitle">Muuda profiili</h2>
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
          <h2 class="subTitle">Ostukorvi koostamine</h2>
          <hr>
            <div class="card mb-2">
              <div class="card-header">
              <i class="fas fa-table"></i><input type="text" id="listName" placeholder="Listi nimi..."/>Ostukorvi nimi</div>
              <div class="card-body">
                <div class="table-responsive">
                  <input type="text" id="Toode" placeholder="Toode">
                  <input type="button" id="add-row" value="Lisa toode">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Toode</th>
                        <th>Kogus</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          <hr>
        </div>
        
        <!-- area3 ajalugu -->
        <div class="area3" id="area3">
          <h2 class="subTitle">Ajalugu</h2>
          <hr>
          
          <hr>
        </div>

        <!-- area4 Kontakt -->
        <div class="area4" id="area4">
          <h2 class="subTitle">Kontakt</h2>
          <hr>
            <section class="our-webcoderskull padding-lg">
              <div class="container">
                <div class="row heading heading-icon">
                </div>
                <ul class="row d-flex justify-content-around">
                  <li class="col-12 col-md-6 col-lg-3">
                      <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
                        <h3><a href="http://www.webcoderskull.com/">Alvar</a></h3>
                        <p>Freelance Web Developer</p>
                        <ul class="follow-us clearfix">
                          <li><a href=""><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                          <li><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href=""><i class="far fa-envelope" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                  </li>
                  <li class="col-12 col-md-6 col-lg-3">
                      <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
                        <h3><a href="#">Tanel</a></h3>
                        <p>Freelance Web Developer</p>
                        <ul class="follow-us clearfix">
                          <li><a href=""><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                          <li><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href=""><i class="far fa-envelope" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                  </li>
                  <li class="col-12 col-md-6 col-lg-3">
                      <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team3.png" class="img-responsive" alt=""></figure>
                        <h3><a href="http://www.webcoderskull.com/">Marko </a></h3>
                        <p>Freelance Web Developer</p>
                        <ul class="follow-us clearfix">
                          <li><a href=""><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                          <li><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href=""><i class="far fa-envelope" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                   </li>
                </ul>
              </div>
            </section>
          <hr>
        </div>
        <!-- area5 KKK -->
        <div class="area5" id="area5">
          <h2 class="subTitle">Korduma Kippuvad Küsimused</h2>
          <hr>
            <div class="kkkList">  
              <h4>Kuidas saan teha konto?</h4>
              <ul>
                <li>Vali menüüs registreeri.</li>
              </ul>
              <h4>Kuidas saan sisse logida oma kontole?</h4>
              <ul>
                <li>Vali menüüs või üleval äärel logi sisse.</li>
              </ul>
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