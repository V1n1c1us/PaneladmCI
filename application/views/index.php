<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Home - Josué Goelzer Imóveis</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- build:css -->
      <link href="<?php echo base_url('assets/front/css/style.css')?>" rel="stylesheet">
      <!-- endbuild-->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/owl.carousel.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/owl.theme.default.css')?>">
   </head>
   <body>
      <header>
         <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <img src="<?php echo base_url('assets/images/logo.png')?>" alt="Josue Goelzer Imóveis">
            </div>
            <div class="col-md-12">
               <ul class="nav  justify-content-center">
                  <li class="nav-item">
                     <a class="nav-link active" href="<?php echo base_url('home')?>">HOME</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('propriedades')?>">PROPRIEDADES</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('home')?>">PROJETOS</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('contato')?>">CONTATO</a>
                  </li>
               </ul>
            </div>
         </div>
      </header>
      <section class="slide">
         <div class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo base_url('assets/images/bg-page-top.jpg')?>" alt=""></div>
         </div>
      </section>
      </header>
      <section class="back-form container-fluid">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <form class="formBusca" action="serach.php">
                     <div class="row">
                        <div class="col">
                           <select class="form-control">
                              <?php foreach ($categorias as $categoria){  
                                 ?>
                              <option><?php echo $categoria->nome; ?></option>
                              <?php }?>
                           </select>
                        </div>
                        <div class="col">
                           <input name="quartos" type="text" class="form-control" placeholder="Nº de Quartos">
                        </div>
                        <div class="col">
                           <input name="banheiros" type="text" class="form-control" placeholder="Nº de Banheiros">
                        </div>
                        <div class="col">
                           <input name="garagem" type="text" class="form-control" placeholder="Nº de Garagem">
                        </div>
                        <div class="col">
                           <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <section class="propriedades-sec">
         <div class="container">
            <div class="titulo-header margin-70">
               <h2 class="titulo">propriedades</h2>
            </div>
            <div class="row animatedParent animateOnce">
               <div class="col-md-4 col-sm-6">
                  <div class="at-prorpiedade-item at-col-default-mar animated fadeInUpShort slow go">
                     <div class="at-prorpiedade-img">
                        <img src="http://awesome-theme.com/tf/projects/homy/images/property/1.jpg" alt="">
                        <div class="at-prorpiedade-overlayer"></div>
                        <a class="btn btn-default at-prorpiedade-btn" href="prorpiedade-details.html" role="button">View Details</a>
                        <h4>For Sale</h4>
                        <h5>$59,999</h5>
                     </div>
                     <div class="at-prorpiedade-dis">
                        <ul>
                           <li><i class="fa fa-object-group" aria-hidden="true"></i> 520 sq ft</li>
                           <li><i class="fa fa-bed" aria-hidden="true"></i> 6</li>
                           <li><i class="fa fa-bath" aria-hidden="true"></i> 3</li>
                        </ul>
                     </div>
                     <div class="at-prorpiedade-location">
                        <h4><i class="fa fa-home" aria-hidden="true"></i><a href="prorpiedade-details.html">New Superb Villa</a></h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 1st Width Road, , summit, new york</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="at-prorpiedade-item at-col-default-mar animated fadeInUpShort slow go">
                     <div class="at-prorpiedade-img">
                        <img src="http://awesome-theme.com/tf/projects/homy/images/property/1.jpg" alt="">
                        <div class="at-prorpiedade-overlayer"></div>
                        <a class="btn btn-default at-prorpiedade-btn" href="prorpiedade-details.html" role="button">View Details</a>
                        <h4>For Sale</h4>
                        <h5>$59,999</h5>
                     </div>
                     <div class="at-prorpiedade-dis">
                        <ul>
                           <li><i class="fa fa-object-group" aria-hidden="true"></i> 520 sq ft</li>
                           <li><i class="fa fa-bed" aria-hidden="true"></i> 6</li>
                           <li><i class="fa fa-bath" aria-hidden="true"></i> 3</li>
                        </ul>
                     </div>
                     <div class="at-prorpiedade-location">
                        <h4><i class="fa fa-home" aria-hidden="true"></i><a href="prorpiedade-details.html">New Superb Villa</a></h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 1st Width Road, , summit, new york</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="at-prorpiedade-item at-col-default-mar animated fadeInUpShort slow go">
                     <div class="at-prorpiedade-img">
                        <img src="http://awesome-theme.com/tf/projects/homy/images/property/1.jpg" alt="">
                        <div class="at-prorpiedade-overlayer"></div>
                        <a class="btn btn-default at-prorpiedade-btn" href="prorpiedade-details.html" role="button">View Details</a>
                        <h4>For Sale</h4>
                        <h5>$59,999</h5>
                     </div>
                     <div class="at-prorpiedade-dis">
                        <ul>
                           <li><i class="fa fa-object-group" aria-hidden="true"></i> 520 sq ft</li>
                           <li><i class="fa fa-bed" aria-hidden="true"></i> 6</li>
                           <li><i class="fa fa-bath" aria-hidden="true"></i> 3</li>
                        </ul>
                     </div>
                     <div class="at-prorpiedade-location">
                        <h4><i class="fa fa-home" aria-hidden="true"></i><a href="prorpiedade-details.html">New Superb Villa</a></h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 1st Width Road, , summit, new york</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="at-prorpiedade-item at-col-default-mar animated fadeInUpShort slow go">
                     <div class="at-prorpiedade-img">
                        <img src="http://awesome-theme.com/tf/projects/homy/images/property/1.jpg" alt="">
                        <div class="at-prorpiedade-overlayer"></div>
                        <a class="btn btn-default at-prorpiedade-btn" href="prorpiedade-details.html" role="button">View Details</a>
                        <h4>For Sale</h4>
                        <h5>$59,999</h5>
                     </div>
                     <div class="at-prorpiedade-dis">
                        <ul>
                           <li><i class="fa fa-object-group" aria-hidden="true"></i> 520 sq ft</li>
                           <li><i class="fa fa-bed" aria-hidden="true"></i> 6</li>
                           <li><i class="fa fa-bath" aria-hidden="true"></i> 3</li>
                        </ul>
                     </div>
                     <div class="at-prorpiedade-location">
                        <h4><i class="fa fa-home" aria-hidden="true"></i><a href="prorpiedade-details.html">New Superb Villa</a></h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 1st Width Road, , summit, new york</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="at-prorpiedade-item at-col-default-mar animated fadeInUpShort slow go">
                     <div class="at-prorpiedade-img">
                        <img src="http://awesome-theme.com/tf/projects/homy/images/property/1.jpg" alt="">
                        <div class="at-prorpiedade-overlayer"></div>
                        <a class="btn btn-default at-prorpiedade-btn" href="prorpiedade-details.html" role="button">View Details</a>
                        <h4>For Sale</h4>
                        <h5>$59,999</h5>
                     </div>
                     <div class="at-prorpiedade-dis">
                        <ul>
                           <li><i class="fa fa-object-group" aria-hidden="true"></i> 520 sq ft</li>
                           <li><i class="fa fa-bed" aria-hidden="true"></i> 6</li>
                           <li><i class="fa fa-bath" aria-hidden="true"></i> 3</li>
                        </ul>
                     </div>
                     <div class="at-prorpiedade-location">
                        <h4><i class="fa fa-home" aria-hidden="true"></i><a href="prorpiedade-details.html">New Superb Villa</a></h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 1st Width Road, , summit, new york</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="at-prorpiedade-item at-col-default-mar animated fadeInUpShort slow go">
                     <div class="at-prorpiedade-img">
                        <img src="http://awesome-theme.com/tf/projects/homy/images/property/1.jpg" alt="">
                        <div class="at-prorpiedade-overlayer"></div>
                        <a class="btn btn-default at-prorpiedade-btn" href="prorpiedade-details.html" role="button">View Details</a>
                        <h4>For Sale</h4>
                        <h5>$59,999</h5>
                     </div>
                     <div class="at-prorpiedade-dis">
                        <ul>
                           <li><i class="fa fa-object-group" aria-hidden="true"></i> 520 sq ft</li>
                           <li><i class="fa fa-bed" aria-hidden="true"></i> 6</li>
                           <li><i class="fa fa-bath" aria-hidden="true"></i> 3</li>
                        </ul>
                     </div>
                     <div class="at-prorpiedade-location">
                        <h4><i class="fa fa-home" aria-hidden="true"></i><a href="prorpiedade-details.html">New Superb Villa</a></h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 1st Width Road, , summit, new york</p>
                     </div>
                  </div>
               </div>
               <div class="text-center">
                   <a class="btn btn-default hvr-bounce-to-right" href="prorpiedade-col-3.html" role="button">More prorpiedade</a>
               </div>
            </div>
         </div>
      </section>
      <section class="margin-70">
      </section>
      <section class="margin-70">
      </section>