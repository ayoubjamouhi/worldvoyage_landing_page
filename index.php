<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"></meta>
  <title>Landing Page</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/index.css" rel="stylesheet" type="text/css">
  <script src="js/float-panel.js"></script>
</head>
<body>
<?php include('header.php') ?>
<!-- Start Main -->
<main>
    <section class="search slideanim">
        <div class="container-fluid">
            <div class="search-tab">
                <input id="tab1" type="radio" name="tabs" checked>
                <label class="label" for="tab1"><i class="fas fa-hotel"></i>  Hôtels</label>

                <input id="tab2" type="radio" name="tabs">
                <label class="label" for="tab2"><i class="fas fa-plane"></i>  Vols</label> 
                <div class="box-bottom-info-content1" id="content1">
                    <form action="recherche_hotel.php">
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
                            <div class="col-lg-2 col-md-3 col-sm-1 col-xs-1">
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
    <section class="coups-de-coeur slideanim">
        <div class="container-fluid">
           <h3>nos coups de coeur <i class="fas fa-heart"></i></h3>
           <div class="row coups-de-coeur-items">
               <div class="col-md-4 coups-de-coeur-row">
                    <a href="#">
                      <div class="image">
                         <img src="images/coups-coeur-item.jpeg">
                      </div>
                      <div class="titre">Lixus Beach Resort</div>
                      <div class="prix">
                        <span class="apartir">à partir de</span> 
                        <span class="number">1 350 </span>
                        <span class="dh">MAD</span>
                      </div> 
                    </a>
               </div>
               <div class="col-md-4 coups-de-coeur-row">
                    <a href="#">
                        <div class="image">
                           <img src="images/coups-coeur-item.jpeg">
                        </div>
                        <div class="titre">Lixus Beach Resort</div>
                        <div class="prix">à partir de <span class="number">1 350 </span><span class="dh">MAD</span></div> 
                    </a>
               </div>
               <div class="col-md-4 coups-de-coeur-row">
                    <a href="#">
                        <div class="image">
                           <img src="images/coups-coeur-item.jpeg">
                        </div>
                        <div class="titre">Lixus Beach Resort</div>
                        <div class="prix">à partir de <span class="number">1 350 </span><span class="dh">MAD</span></div> 
                    </a>
               </div>
           </div> 
        </div>
    </section>
    <section class="promotions slideanim">
        <div class="container-fluid">
          <h1>top promotions</h1>
          <h4>best travel packages available</h4>
          <hr >
            <div class="row promotion-items">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 promotion-row">
                <div class="image">
                   <img src="images/package-berlin.jpg">
                   <div class="prix"><a href="#"><span class="number">700 $</span></a></div>
                </div>
                <div class="city">Berlin</div>
                <div class="row continent-type">
                  <div class="col-md-6 col-6 continent">Europe</div>
                  <div class="col-md-6 col-6 type">Cultural</div>
                </div>
                <div class="bottom-item">
                  <div class="text-item">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.
                  </div>
                  <button class="btn btn-secondary">details</button>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 promotion-row">
                <div class="image">
                   <img src="images/package-newdelhi.jpg">
                   <div class="prix"><a href="#"><span class="last-price">1000</span><span class="number">500 $</span></a></div>
                </div>
                <div class="city">New Delhi</div>
                <div class="row continent-type">
                  <div class="col-md-6 continent">Asia</div>
                  <div class="col-md-6 type">History</div>
                </div>
                <div class="bottom-item">
                  <div class="text-item">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.
                  </div>
                  <button class="btn btn-secondary">details</button>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12  promotion-row">
                <div class="image">
                   <img src="images/package-london.jpg">
                   <div class="prix"><a href="#"><span class="number">400 $</span></a></div>
                </div>
                <div class="city">London</div>
                <div class="row continent-type">
                  <div class="col-md-6 continent">England</div>
                  <div class="col-md-6 type">Sport</div>
                </div>
                <div class="bottom-item">
                  <div class="text-item">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.
                  </div>
                  <button class="btn btn-secondary">details</button>
                </div>
              </div>
            </div> 
        </div>
    </section>
    <section class="one-promotion slideanim">
      <div class="info">
        <h1 class="type">summer promotion</h1>
        <hr>
        <div class="titre">SANTORINI - GREEK ISLAND TOUR</div>
        <div class="text-price">1000 $ for person - 6 nights</div>
        <button class="btn details">more details</button>  
      </div>
    </section>    
    <section class="meilleurs-ventes slideanim">
        <div class="container">
           <h3>NOS MEILLEURES VENTES <i class="fas fa-star"></i></h3>
           <div class="row ventes-items">
               <div class="col-lg-3 col-md-6 col-sm-3 col-xs-1 ventes-row">
                    <a href="#">
                        <div class="image">
                           <img src="images/coups-coeur-item.jpeg">
                        </div>
                        <div class="titre">Lixus Beach Resort</div>
                        <div class="prix">à partir de <span class="number">1 350 </span><span class="dh">MAD</span></div> 
                    </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-3 col-xs-1 ventes-row">
                    <a href="#">
                        <div class="image">
                           <img src="images/coups-coeur-item.jpeg">
                        </div>
                        <div class="titre">Lixus Beach Resort</div>
                        <div class="prix">à partir de <span class="number">1 350 </span><span class="dh">MAD</span></div> 
                    </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-3 col-xs-1 ventes-row">
                    <a href="#">
                        <div class="image">
                           <img src="images/coups-coeur-item.jpeg">
                        </div>
                        <div class="titre">Lixus Beach Resort</div>
                        <div class="prix">à partir de <span class="number">1 350 </span><span class="dh">MAD</span></div> 
                    </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-3 col-xs-1 ventes-row">
                    <a href="#">
                        <div class="image">
                           <img src="images/coups-coeur-item.jpeg">
                        </div>
                        <div class="titre">Lixus Beach Resort</div>
                        <div class="prix">à partir de <span class="number">1 350 </span><span class="dh">MAD</span></div> 
                    </a>
               </div>
           </div> 
        </div>
    </section>
</main>
<!-- End Main -->
<?php include('footer.php') ?>
