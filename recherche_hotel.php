<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recherche Hotel</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/recherche_hotel.css" rel="stylesheet" type="text/css">
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
              <div class="box-bottom-info-content1" id="content1">
                  <form>
                      <div class="form-row">
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-1">
                            <label for="validationCustom01">Destination</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Ville...">
                          </div>
                          <div class="col-lg-2 col-md-3 col-sm-1 col-xs-1">
                            <label for="validationCustom01">Date d'arrivée</label>
                            <input type="date" class="form-control" id="validationCustom01" placeholder="Ville...">
                          </div>
                          <div class="col-lg-2 col-md-3 col-sm-1 col-xs-1">
                            <label for="validationCustom01">Date de départ</label>
                            <input type="date" class="form-control" id="validationCustom01" placeholder="Ville...">
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-1 col-xs-1">
                            <label for="validationCustom01">Nombre de chambres</label>
                            <select type="text" class="form-control" id="validationCustom01" placeholder="Ville...">
                              <option>1 Chambre(s)</option>
                              <option>2 Chambre(s)</option>
                              <option>3 Chambre(s)</option>
                              <option>4 Chambre(s)</option>
                              <option>5 Chambre(s)</option>
                              <option>6 Chambre(s)</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-row">
                          Chambre n°1
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
                      <button class="btn btn-primary" type="submit">Recherche</button>
                  </form>
              </div>  
          </div>   
      </div>
  </section>
  <section class="filter">
    <div class="container-fluid">
      <button id="filter">Afficher leFilter</button>
    </div>
  </section>
  <section class="list">
    <div class="container-fluid">
    <div class="row" style="position: relative;">
        <!-- left -->
        <div class="col-xl-2 col-lg-4 col-md-12 col-sm-2 col-xs-1 search-bar" id="search-bar">
          <div class="affiner">
            <h3><i class="fas fa-search"></i> affiner votre recherche</h3>
          </div>
          <div class="recherche-hotel">
            <div class="top">
              recherche hotel
            </div>
            <form action="">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Choisir un établissement">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-search"></i> </span>
                </div>
              </div>
            </form>
            
          </div>
          <div class="prix">
            <div class="top">
              prix
            </div>
            <div class="slider-range">
              prix
            </div>
          </div>
          <div class="etoile">
            <div class="top">
              prix
            </div>
            <div class="stars">
              <div class="start-5">
                <input type="checkbox" name="" checked>
                <label>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </label>
              </div>
              <div class="start-4">
                <input type="checkbox" name="">
                <label>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </label>
              </div>
              <div class="start-3">
                <input type="checkbox" name="">
                <label>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </label>
              </div>
              <div class="start-2">
                <input type="checkbox" name="">
                <label>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </label>
              </div>
              <div class="start-1">
                <input type="checkbox" name="">
                <label>
                  <i class="fas fa-star"></i>
                </label>
              </div>
              <div class="autre">
                <input type="checkbox" name="">
                <label>Auberge</label>
              </div>
              <div class="autre">
                <input type="checkbox" name="">
                <label>Autres</label>
              </div>
              <div class="autre">
                <input type="checkbox" name="">
                <label>-1*</label>
              </div>
            </div>
          </div>
          <div class="favoris">
            <div class="top">
              favoris
            </div>
            <div class="bottom">
                <input type="checkbox" name="" >
                <label>Mes hôtels favoris</label>
            </div>
          </div>
          <div class="regime">
            <div class="top">
              régime
            </div>
            <div class="types">
              <div class="chambre">
                <input type="checkbox" name="" checked>
                <label>Chambre seule</label>
              </div>
              <div class="chambre">
                <input type="checkbox" name="">
                <label>Demi-pension</label>
              </div>
              <div class="chambre">
                <input type="checkbox" name="">
                <label>Pension compléte</label>
              </div>
              <div class="chambre">
                <input type="checkbox" name="">
                <label>Petit déjeuner</label>
              </div>
            </div>
          </div>
          <div class="situation">
            <div class="top">
              situation
            </div>
            <div class="types">
              <div class="coin">
                <input type="checkbox" name="" checked>
                <label>AlcalÃ¡ de Henares</label>
              </div>
              <div class="coin">
                <input type="checkbox" name="">
                <label>AlcalÃ¡ Norte</label>
              </div>
              <div class="coin">
                <input type="checkbox" name="">
                <label>Alcobendas</label>
              </div>
              <div class="coin">
                <input type="checkbox" name="">
                <label>Getafe</label>
              </div>
            </div>
          </div>
          <div class="hebergement">
            <div class="top">
              type d'hébergement
            </div>
            <div class="types">
              <div class="coin">
                <input type="checkbox" name="" checked>
              </div>
              <div class="coin">
                <input type="checkbox" name="">
              </div>
              <div class="coin">
                <input type="checkbox" name="">
              </div>
              <div class="coin">
                <input type="checkbox" name="">
              </div>
            </div>
          </div>
          <div class="equipements">
            <div class="top">
              equipements
            </div>
            <div class="types">
              
            </div>
          </div>
        </div>
        <!-- right -->
        <div class="col-xl-10 col-lg-8 col-md-12 col-sm-2 col-xs-1 list-hotel">
          <div class="trier">
            <div class="row"> 
                <span class="col-lg-6 col-md-12 col-sm-2 col-xs-1 etablissement">
                  1492 établissements correspondant à votre recherche
                </span>
                <div class="col-lg-4 col-md-8 col-sm-2 col-xs-1 trier-select">
                  <span>trier</span>
                  <select>
                    <option>trier</option>
                  </select>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-2 col-xs-1 bars">
                  <a href="#"><i class="fas fa-bars bar-hor"></i></a>
                  <a href="#"><i class="fas fa-bars bar-point"></i></a>
                  <a href="#"><i class="fas fa-map-marker-alt maps"></i></a>
                </div>
            </div>
          </div>
          <div class="hotel">
            <div class="row">
              <div class="col-lg-4 col-md-5 col-sm-2 col-xs-1 left">
                <img class="img-thumbnail" src="images/MAD-MEL-2.jpg">
              </div>
              <div class="col-lg-6 col-md-4 col-sm-2 col-xs-1 center">
                <h1>titre</h1>
                <div class="etoile">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <span class="map"><i class="fas fa-map-marker-alt"></i></span>
                <div class="row info-room">
                  <div class="col-lg-5 col-md-12 col-sm-2 col-xs-1 left">
                    <i class="fas fa-bars bar-hor"></i>
                    <span>the level room</span>
                  </div>
                  <div class="col-lg-5 col-md-12 col-sm-2 col-xs-1 offset-lg-1 left">
                    <i class="fas fa-bars bar-hor"></i>
                    <span>the level room</span>
                  </div>
                </div>
                <div class="adresse">
                  C/ PRINCESA, 27
                </div>
                <div class="bookmarks">
                  <span>LIKE & SHARE</span>
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-instagram"></i>
                </div>                                                            
              </div>
              <div class="col-lg-2 col-md-3 col-sm-2 col-xs-1 right">
                <div class="inside">
                  <div class="prix">1 818 Dh</div>
                  <div class="prix-pour">Prix pour nuit</div>
                  <button>GO!</button>
                </div>
                
              </div>
            </div>
          </div>
          <div class="hotel">
            <div class="row">
              <div class="col-lg-4 col-md-5 col-sm-2 col-xs-1 left">
                <img class="img-thumbnail" src="images/MAD-MEL-2.jpg">
              </div>
              <div class="col-lg-6 col-md-4 col-sm-2 col-xs-1 center">
                <h1>titre</h1>
                <div class="etoile">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <span class="map"><i class="fas fa-map-marker-alt"></i></span>
                <div class="row info-room">
                  <div class="col-lg-5 col-md-12 col-sm-2 col-xs-1 left">
                    <i class="fas fa-bars bar-hor"></i>
                    <span>the level room</span>
                  </div>
                  <div class="col-lg-5 col-md-12 col-sm-2 col-xs-1 offset-lg-1 left">
                    <i class="fas fa-bars bar-hor"></i>
                    <span>the level room</span>
                  </div>
                </div>
                <div class="adresse">
                  C/ PRINCESA, 27
                </div>
                <div class="bookmarks">
                  <span>LIKE & SHARE</span>
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-instagram"></i>
                </div>                                                            
              </div>
              <div class="col-lg-2 col-md-3 col-sm-2 col-xs-1 right">
                <div class="inside">
                  <div class="prix">1 818 Dh</div>
                  <div class="prix-pour">Prix pour nuit</div>
                  <button>GO!</button>
                </div>
                
              </div>
            </div>
          </div>
          <div class="hotel">
            <div class="row">
              <div class="col-lg-4 col-md-5 col-sm-2 col-xs-1 left">
                <img class="img-thumbnail" src="images/MAD-MEL-2.jpg">
              </div>
              <div class="col-lg-6 col-md-4 col-sm-2 col-xs-1 center">
                <h1>titre</h1>
                <div class="etoile">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <span class="map"><i class="fas fa-map-marker-alt"></i></span>
                <div class="row info-room">
                  <div class="col-lg-5 col-md-12 col-sm-2 col-xs-1 left">
                    <i class="fas fa-bars bar-hor"></i>
                    <span>the level room</span>
                  </div>
                  <div class="col-lg-5 col-md-12 col-sm-2 col-xs-1 offset-lg-1 left">
                    <i class="fas fa-bars bar-hor"></i>
                    <span>the level room</span>
                  </div>
                </div>
                <div class="adresse">
                  C/ PRINCESA, 27
                </div>
                <div class="bookmarks">
                  <span>LIKE & SHARE</span>
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-instagram"></i>
                </div>                                                            
              </div>
              <div class="col-lg-2 col-md-3 col-sm-2 col-xs-1 right">
                <div class="inside">
                  <div class="prix">1 818 Dh</div>
                  <div class="prix-pour">Prix pour nuit</div>
                  <button>GO!</button>
                </div>
                
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
