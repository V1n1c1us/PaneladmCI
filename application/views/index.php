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
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/hover.css')?>">
      <style type="text/css" id="jarallax-clip-0">#jarallax-container-0 {
   clip: rect(0px 1349px 256px 0);
   clip: rect(0px, 1349px, 256px, 0);
}</style>
<style type="text/css" id="jarallax-clip-1">#jarallax-container-1 {
   clip: rect(0px 1349px 322px 0);
   clip: rect(0px, 1349px, 322px, 0);
}</style>
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
                        <a class="btn btn-default at-prorpiedade-btn" href="prorpiedade-details.html" role="button">Mais Detalhes</a>
                        <h4>Vende-se</h4>
                        <h5>RS 15,000</h5>
                     </div>
                     <div class="at-prorpiedade-dis">
                        <ul>
                           <li><i class="fa fa-object-group" aria-hidden="true"></i> 520 sq ft</li>
                           <li><i class="fa fa-bed" aria-hidden="true"></i> 6</li>
                           <li><i class="fa fa-bath" aria-hidden="true"></i> 3</li>
                        </ul>
                     </div>
                     <div class="at-prorpiedade-location">
                     <h4><i class="fa fa-home" aria-hidden="true"></i><a href="prorpiedade-details.html">Condomínio Rego</a></h4>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> Av. Pereira Rego, 1000 , Candelária/RS</p>
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
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Av. Pereira Rego, 1000 , Candelária/RS</p>
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
               <div class="text-center"><a class="btn btn-default hvr-bounce-to-right" href="properties-col-3.html" role="button">Mais Propriedades</a>
               </div>
            </div>
         </div>
      </section>
      <section class="at-Call-sec jarallax at-over-layer-black" style="background-image: none;background-attachment: scroll;background-size: auto;">
      <div id="jarallax-container-0" style="position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;overflow: hidden;pointer-events: none;transition: transform linear -1ms, -webkit-transform linear -1ms;visibility: hidden;z-index: -100;"><div style="background-position: 50% 50%; background-repeat: no-repeat; background-image: url(&quot;http://awesome-theme.com/tf/projects/homy/images/background/1.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; transition: transform linear -1ms, -webkit-transform linear -1ms; background-size: 1349px 692.06px; visibility: visible; transform: translate3d(0px, 15.87px, 0px);"></div></div>    
        <div class="at-Call-both-side clearfix">
            <div class="at-Call-left">
                <div class="at-inside-Call">
                    <h5>BOOK YOUR</h5>
                    <h2>APPARTMENT OR HOUSE</h2>
                </div>
            </div>
            <div class="at-Call-right">
                <div class="at-Call-right-inside">
                    <h2>we are ready to receive your call</h2>
                    <div class="at-short-line"></div>
                    <h3><span>+0412 001 123</span></h3>
                </div>
            </div>
        </div>
    </section>
    <section class="margin-70">
        <div class="container">
            <div class="row">
                <div class="col-md col-xs feature animate-from-bottom animation-from-bottom" data-animation-direction="from-bottom" data-animation-delay="250">
                    <i class="fa fa-pencil"></i>
                    <h3>IMÓVEL SOB ENCOMENDA</h3>
                    <p>Entre em contato conosco e descreva o imóvel que você procura e nós avisaremos quando encontrá-lo</p>
                </div>  
                <div class="col-md col-xs feature animate-from-bottom animation-from-bottom" data-animation-direction="from-bottom" data-animation-delay="250">
                    <i class="fa fa-pencil"></i>
                    <h3>FINANCIAMENTO</h3>
                    <p>As melhores ofertas de crédito para você financiar seu imóvel</p>
                </div> 
                <div class="col-md col-xs feature animate-from-bottom animation-from-bottom" data-animation-direction="from-bottom" data-animation-delay="250">
                    <i class="fa fa-pencil"></i>
                    <h3>PRÉDIO COMERCIAL</h3>
                    <p>Sua empresa precisa de um novo espaço? Temos imóveis comercias com preços excelentes e espaços arrojados</p>
                </div>             
            </div>    
        </div>    
    </section>
    <section  id="quemsomos" class="bgParallax" data-speed="15">
    <div class="container">
        <div class="row">
            <div class="col-md col-xs">
                <i class="fa fa-pencil"></i>
                <h3><span class='numscroller' data-min='1' data-max='1000' data-delay='5' data-increment='10'>1000</span></h3>
            </div>  
            <div class="col-md col-xs">
                <i class="fa fa-pencil"></i>
                <h3><span class='numscroller' data-min='1' data-max='1000' data-delay='5' data-increment='10'>1000</span></h3>
            </div>  
            <div class="col-md col-xs">
                <i class="fa fa-pencil"></i>
                <h3><span class='numscroller' data-min='1' data-max='1000' data-delay='5' data-increment='10'>1000</span></h3>
            </div>  
         </div>  
    </div>  
        </section>
        <section class="margin-70">
        <div class="container">
            <div class="row">
                <div class="col-md col-xs feature animate-from-bottom animation-from-bottom" data-animation-direction="from-bottom" data-animation-delay="250">
                    <i class="fa fa-pencil"></i>
                    <h3>IMÓVEL SOB ENCOMENDA</h3>
                    <p>Entre em contato conosco e descreva o imóvel que você procura e nós avisaremos quando encontrá-lo</p>
                </div>  
                <div class="col-md col-xs feature animate-from-bottom animation-from-bottom" data-animation-direction="from-bottom" data-animation-delay="250">
                    <i class="fa fa-pencil"></i>
                    <h3>FINANCIAMENTO</h3>
                    <p>As melhores ofertas de crédito para você financiar seu imóvel</p>
                </div> 
                <div class="col-md col-xs feature animate-from-bottom animation-from-bottom" data-animation-direction="from-bottom" data-animation-delay="250">
                    <i class="fa fa-pencil"></i>
                    <h3>PRÉDIO COMERCIAL</h3>
                    <p>Sua empresa precisa de um novo espaço? Temos imóveis comercias com preços excelentes e espaços arrojados</p>
                </div>             
            </div>    
        </div>    
    </section>