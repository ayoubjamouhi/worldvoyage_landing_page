<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recherche vol</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/recherche_vol.css" rel="stylesheet" type="text/css">
</meta>
</head>
<body>
<!-- Start Header -->
<?php include('header.php') ?>
<!-- End Header -->
<!-- Start Main -->
<main>
  <section class="search">
      <div class="container-fluid">
          <div class="search-tab">
              <div class="box-bottom-info-content2" id="content2">
                  <form action="recherche_vol.php">
                      <div class="form-row">
                          <div class="col-lg-3 col-md-4 col-sm-2 col-xs-1">
                            <label for="validationCustom01">Au départ de</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Ville ou aéroport...">
                          </div>
                          <div class="col-lg-3 col-md-4 col-sm-2 col-xs-1">
                            <label for="validationCustom01">À destination de</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Ville ou aéroport...">
                          </div>
                          <div class="col-lg-2 col-md-4 col-sm-2 col-xs-1">
                            <label for="validationCustom01">Date de départ</label>
                            <input type="date" class="form-control" id="validationCustom01" placeholder="Ville...">
                          </div>
                      </div>
                      <div class="form-row">

                          <div class="col-lg-2 col-md-3 mb-3">
                            <label for="validationCustom01">Adultes (18+)</label>
                            <select type="text" class="form-control" id="validationCustom01" placeholder="Ville...">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                            </select>
                          </div>
                          <div class="col-lg-1 col-md-3 pull-md-2 mb-3"></div>
                          <div class="col-lg-2 col-md-3 mb-3">
                            <label for="validationCustom01">Enfants (0-17)</label>
                            <select type="text" class="form-control" id="validationCustom01" placeholder="Ville...">
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="col-lg-2 col-md-4 col-sm-2 col-xs-1 mb-3">
                            <label for="validationCustom01">Classe souhaitée</label>
                            <select class="form-control" id="validationCustom01" placeholder="Ville...">
                                <option disabled="">Cabine...</option>
                                <option>Indifferent</option>
                                <option>Economique</option>
                                <option>Business</option>
                                <option>First Class</option>
                            </select>
                          </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Recherche</button>
                  </form>
              </div>  
          </div>   
      </div>
  </section>
  <section class="filter">
    <div class="container-fluid">
      <button id="filter">Afficher le Filter</button>
    </div>
  </section>
  <section class="list">
    <div class="container-fluid">
      <div class="row">
          <!-- left -->
          <div class="col-xl-2 col-lg-4 col-md-3 col-sm-2 search-bar">
            <div class="affiner">
              <h3><i class="fas fa-search"></i> affiner votre recherche</h3>
            </div>
            <div class="prix">
              <div class="top">
                prix
              </div>
              <div class="slider-range">
                prix
              </div>
            </div>
            <div class="compagnie">
              <div class="top">
                compagnie
              </div>
              <div class="types">
                <div class="chambre">
                  <input type="checkbox" name="">
                  <label>Transavia</label>
                </div>
                <div class="chambre">
                  <input type="checkbox" name="">
                  <label>TUI Airlines Belgium NV</label>
                </div>
              </div>
            </div>
            <div class="aeroport-origin">
              <div class="top">
                aéroport origine
              </div>
              <div class="types">
                <div class="chambre">
                  <input type="checkbox" name="">
                  <label>CMN - airport</label>
                </div>
              </div>
            </div>
            <div class="aeroport-destination">
              <div class="top">
                aéroport destination
              </div>
              <div class="types">
                <div class="chambre">
                  <input type="checkbox" name="">
                  <label>ORY - airport</label>
                </div>
              </div>
            </div>
            <div class="classe">
              <div class="top">
                classe
              </div>
              <div class="types">
                <div class="chambre">
                  <input type="checkbox" name="">
                  <label>Economy Premium</label>
                </div>
                <div class="chambre">
                  <input type="checkbox" name="">
                  <label>Economy With Restrictions</label>
                </div>
                <div class="chambre">
                  <input type="checkbox" name="">
                  <label>Economy Without Restrictions</label>
                </div>
              </div>
            </div>
            <div class="escale">
              <div class="top">
                escale
              </div>
              <div class="types">
                <div class="chambre">
                  <input type="checkbox" name="">
                  <label>Sans Escale</label>
                </div>
              </div>
            </div>
          </div>
          <!-- right -->
          <div class="col-xl-10 col-lg-8 col-md-3 col-sm-2 list-vol">
            <div class="trier">
              <div class="row"> 
                  <span class="col-lg-6 col-md-6 col-sm-2 col-12 text-lg-left text-center etablissement">
                    1492 vols correspondant à votre recherche
                  </span>
                  <div class="col-lg-6 col-md-6 col-sm-2 col-xs-1 trier-select">
                    <span>trier</span>
                    <select>
                      <option>trier</option>
                    </select>
                  </div>
              </div>
            </div>
            <div class="vol">
              <div class="row top text-center">
                <div class="col-lg-3 col-md-6 col-sm-2 col-12 prix">
                  8676<span>Dh</span>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-2 col-1 reste">
                </div>
              </div>
              <div class="row center-bottom">
                <div class="col-lg-3 col-md-6 col-sm-2 col-12 compagnie text-center">
                  <img src="images/vueling.gif">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-2 col-3 depart">
                  <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-2 col-xs-1 depart">
                      <i class="fas fa-plane-departure"></i>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-2 col-xs-1 depart">
                      <div>Casablanca [CMN]</div>
                      <div>Paris [ORY]</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-2 col-xs-1 depart">
                      <i class="fas fa-plane-arrival"></i>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-2 col-xs-1 depart">
                      <div>Paris [ORY]</div>
                      <div>Casablanca [CMN]</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-2 col-5 date">
                  <div>le 20/08/2018 06:45</div>
                  <div>le 20/08/2018 06:45</div>
                  <div>le 20/08/2018 06:45</div>
                  <div>le 20/08/2018 06:45</div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-2 direct">
                  <div class="aller">Direct</div>
                  <div class="retour">Direct</div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-2 heure">
                  <div class="aller">03h20</div>
                  <div class="retour">03h25</div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-12 choisir">
                  <form action="recap.html" method="get"> 
                    <button>Choisir</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="vol">
              <div class="row top text-center">
                <div class="col-lg-3 col-md-6 col-sm-2 col-12 prix">
                  8676<span>Dh</span>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-2 col-1 reste">
                </div>
              </div>
              <div class="row center-bottom">
                <div class="col-lg-3 col-md-6 col-sm-2 col-12 compagnie text-center">
                  <img src="images/vueling.gif">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-2 col-3 depart">
                  <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-2 col-xs-1 depart">
                      <i class="fas fa-plane-departure"></i>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-2 col-xs-1 depart">
                      <div>Casablanca [CMN]</div>
                      <div>Paris [ORY]</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-2 col-xs-1 depart">
                      <i class="fas fa-plane-arrival"></i>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-2 col-xs-1 depart">
                      <div>Paris [ORY]</div>
                      <div>Casablanca [CMN]</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-2 col-5 date">
                  <div>le 20/08/2018 06:45</div>
                  <div>le 20/08/2018 06:45</div>
                  <div>le 20/08/2018 06:45</div>
                  <div>le 20/08/2018 06:45</div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-2 direct">
                  <div class="aller">Direct</div>
                  <div class="retour">Direct</div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-2 heure">
                  <div class="aller">03h20</div>
                  <div class="retour">03h25</div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-12 choisir">
                  <button>Choisir</button>
                </div>
              </div>
            </div>
            <div class="vol">
              <div class="row top text-center">
                <div class="col-lg-3 col-md-6 col-sm-2 col-12 prix">
                  8676<span>Dh</span>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-2 col-1 reste">
                </div>
              </div>
              <div class="row center-bottom">
                <div class="col-lg-3 col-md-6 col-sm-2 col-12 compagnie text-center">
                  <img src="images/vueling.gif">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-2 col-3 depart">
                  <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-2 col-xs-1 depart">
                      <i class="fas fa-plane-departure"></i>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-2 col-xs-1 depart">
                      <div>Casablanca [CMN]</div>
                      <div>Paris [ORY]</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-2 col-xs-1 depart">
                      <i class="fas fa-plane-arrival"></i>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-2 col-xs-1 depart">
                      <div>Paris [ORY]</div>
                      <div>Casablanca [CMN]</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-2 col-5 date">
                  <div>le 20/08/2018 06:45</div>
                  <div>le 20/08/2018 06:45</div>
                  <div>le 20/08/2018 06:45</div>
                  <div>le 20/08/2018 06:45</div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-2 direct">
                  <div class="aller">Direct</div>
                  <div class="retour">Direct</div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-2 heure">
                  <div class="aller">03h20</div>
                  <div class="retour">03h25</div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-12 choisir">
                  <button>Choisir</button>
                </div>
              </div>
            </div>
          </div>  
      </div>
    </div>
  </section>
</main>
<!-- End Main -->
<!-- Start Footer -->
<?php include('footer.php') ?>
<!-- End Footer -->