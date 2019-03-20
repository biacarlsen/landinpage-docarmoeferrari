
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DoCarmo & Ferrari - imóveis com arte</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Hotjar Tracking Code for http://landingpage.docarmoeferrari.com.br/ -->
    <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:1246200,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <style type="text/css">

    </style>
</head>

<body>
    <section id="header" class="img-fluid" style="background-image: url(img/imovel/header.png); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                  <mdb-navbar-brand><a class="navbar-brand m-3" href="#"><img style="
                  height: 55px;" src="img/logo.png"></a></mdb-navbar-brand>

                    <h1 class="up-font mt-3 pt-5 text-white" style="font-size: 27px !important; ">Viva com grande <b>estilo</b> e ótima <b>localização</b> na cidade mais requisitada de Santa Catarina: Balneário Camboriú!</h1>
<!-- 
                    Esta é a sua chance de morar realmente <b>BEM</b> com uma ótima localização em <b> Balneário Camboriú</b> -->

                    <div class="separador2 my-3"></div>
                   <!--  <P class="mt-2 text-white"></P> -->
                  <div class="mt-3 <?php if(isset($_GET['sucess']) AND $_GET['sucess'] == true): ?> mb-5 <?php endif; ?>">

                    <ul class="bolinhanao mb-5 p-0 ">

                      <li class="text-white" style="font-size: 21px !important; ">
                        <i style="color:#d2ac67" class="fa fa-check"></i> 
                        Área privativa de 91 m²
                      </li>
                      <li class="text-white" style="font-size: 21px !important; ">
                        <i style="color:#d2ac67" class="fa fa-check"></i>
                        Com mobília
                      </li>
                      <li class="text-white" style="font-size: 21px !important; ">
                      <i style="color:#d2ac67" class="fa fa-check"></i>
                       1 Suíte + 1 dormitório
                      </li>
                       <li class="text-white" style="font-size: 21px !important; ">
                      <i style="color:#d2ac67" class="fa fa-check"></i>
                        Sacada com churrasqueira
                      </li>
                      <li class="text-white" style="font-size: 21px !important; ">
                      <i style="color:#d2ac67" class="fa fa-check"></i>
                       Salão de festas
                      </li>
                      <li class="text-white" style="font-size: 21px !important; ">
                      <i style="color:#d2ac67" class="fa fa-check"></i>
                        Piscina  
                      </li>
                      <li class="text-white" style="font-size: 21px !important; ">
                      <i style="color:#d2ac67" class="fa fa-check"></i>
                        Preço abaixo do mercado
                      </li>
                      <li class="text-white" style="font-size: 21px !important; ">
                      <i style="color:#d2ac67" class="fa fa-check"></i>
                        Atendimento Prime
                      </li>
                      <br>
                      <li class="text-white" style="font-size: 21px !important; ">
                      <i style="color:#B27300" class="fa fa-exclamation-triangle"></i>
                        Disponível apenas para compra!
                      </li>
                      
                      
                    </ul>
                  </div>
                   
                </div>
                <div class="col-md-5 <?php if(isset($_GET['sucess']) AND $_GET['sucess'] == true): ?> mt-5 <?php endif; ?>" id="formulario">
                  
                  <!-- Material form register -->
                  <div class="card my-4">

                    <h5 class="card-header info-color white-text text-center py-3" style="background-color: #0051B2!important;">
                      <strong>Ficou interessado? Envie uma mensagem!</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                      <?php if (isset($_GET['sucess']) AND $_GET['sucess'] == true): ?>
                        <h4 class="text-success my-2">Sua mensagem foi enviada com sucesso!</h4>
                        <p class="my-2">Entraremos em contato o mais breve possível!</p>
                      <?php else: ?>
                      <form class="text-center" style="color: #757575;"  action="https://docarmoeferrari.us19.list-manage.com/subscribe/post?u=d670ad4b8552b78ae4b544492&amp;id=6ed2f3502b" method="post" name="mc-embedded-subscribe-form" class="validate">

                        <div class="form-row">
                          <div class="col">
                            <!-- First name -->
                            <div class="md-form">
                              <input type="text" required name="FNAME" id="materialRegisterFormFirstName" class="form-control">
                              <label for="materialRegisterFormFirstName">Nome</label>
                            </div>
                          </div>
                          <div class="col">
                            <!-- Last name -->
                            <div class="md-form">
                              <input type="text" name="LNAME" id="materialRegisterFormLastName" class="form-control">
                              <label for="materialRegisterFormLastName">Sobrenome</label>
                            </div>
                          </div>
                        </div>

                        <!-- E-mail -->
                        <div class="md-form mt-0">
                          <input type="email" required name="EMAIL" id="materialRegisterFormEmail" class="form-control">
                          <label for="materialRegisterFormEmail">E-mail</label>
                        </div>

                        <!-- Phone number -->
                        <div class="md-form">
                          <input type="text" required name="PHONE" id="materialRegisterFormPhone" class="form-control telefoneMask" aria-describedby="materialRegisterFormPhoneHelpBlock">
                          <label for="materialRegisterFormPhone">Telefone</label>
                          <!-- <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                            Optional - for two step authentication
                          </small> -->
                        </div>

                          <!--Message-->
                          <div class="md-form">
                            <textarea type="text" required name="MENSAGEM" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                            <label for="materialContactFormMessage">Mensagem</label>
                          </div>

                        <!-- Sign up button -->
                        <button style="border-color: #0051B2!important; color: #0051B2!important;" class="btn btn-outline-info btn-rounded btn-block mt-4 waves-effect z-depth-0" type="submit">ENVIAR</button>
                        <a href="https://api.whatsapp.com/send?phone=5547999053693&text=Ol%C3%A1%2C%20estou%20interessado(a)%20no%20im%C3%B3vel%20de%20R%24%20750.000%2C00%20anunciado%20pelo%20Google." target="_blank" class="btn btn-outline-success btn-rounded btn-block mb-4 mt-2 waves-effect z-depth-0"><i class="pr-2 fa fa-whatsapp" style="font-size: 20px;position: relative; top: 3px;"></i>FALE NO WHATSAPP</a>
                        <!-- Social register -->
                        <p>Acompanhe nossas redes socias:</p>

                        <a target="_blank" href="https://www.facebook.com/docarmoeferrari/" type="button" class="btn-floating btn-fb btn-sm">
                          <i  class="fa fa-facebook"></i>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/docarmoeferrari" type="button" class="btn-floating btn-tw btn-sm">
                          <i class="fa fa-instagram"></i>
                        </a>
                       
                        <!-- <hr> -->

                        <!-- Terms of service -->
                        <!-- <p>By clicking
                          <em>Sign up</em> you agree to our
                          <a href="" target="_blank">terms of service</a> and
                          <a href="" target="_blank">terms of service</a>. </p> -->

                        </form>
                        <!-- Form -->
                        <?php endif; ?>
                      </div>

                    </div>
                    <!-- Material form register -->
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center py-4">
                  <a href="#carrossel" type="button" style="color:#fff !important; background:#0051b2 !important;"  class="m-3 btn btn-primary btn-rounded waves-effect pulse animated infinite">VER IMAGENS</a>
              </div>
              
            </div>
        </div>
    </section>
    <section id="contranst" class="my-5">
        <div id="destaque" class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center h3-responsive font-weight-bold dark-grey-text">FOTOS DO IMÓVEL</h3>
                    <div class="separador"></div>
                    <p class="mt-5  w-responsive text-center mx-auto" style="font-size: 16px !important; letter-spacing: 1px;">
                      Apartamento no <b style="font-size: 20px !important;">Centro de Balneário Camboriú</b> com
                      <b style="font-size: 20px !important;">área privativa de 91 m²</b>, mobília sofisticada, <b style="font-size: 20px !important;">1 Suíte mais 1 dormitório</b>, salas de estar e jantar, cozinha, área de serviço, BWC social e 1 vaga de garagem. O prédio possui <b style="font-size: 20px !important;">Piscina e Salão festas</b>. Encontra-se na Rua 902, no Centro da cidade. Próximo a Paróquia Santa Inês e também a ótimos<b style="font-size: 20px !important;"> restaurantes, lojas comerciais, padarias, hotéis, camelódromo e muito mais!</b></p>

                </div>
            </div>
        </div>
    </section>
    <section id='carrossel'>
        <!--Carousel Wrapper-->
        <div class="container-fluid">
          <div class="row">
          
          <div class="col-md-8">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                  <!--Indicators-->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="4"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="5"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="6"></li>
                   <!--  <li data-target="#carousel-example-1z" data-slide-to="14"></li> -->
                  </ol>
                  <!--/.Indicators-->
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="img/imovel/a.jpg" alt="First slide">
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/imovel/b.jpg" alt="Second slide">
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/imovel/c.jpg" alt="Third slide">
                    </div>
                    <!--/Third slide-->
                      <!--Third slide-->
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/imovel/d.jpg" alt="Third slide">
                    </div>
                    <!--/Third slide-->
                      <!--Third slide-->
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/imovel/e.jpg" alt="Third slide">
                    </div>
                    <!--/Third slide-->
                     <!--Third slide-->
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/imovel/f.jpg" alt="Third slide">
                    </div>
                    <!--/Third slide-->
                     <!--Third slide-->
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/imovel/g.jpg" alt="Third slide">
                    </div>
                    <!--/Third slide-->
                    
                  </div>
                  <!--/.Slides-->
                  <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
          </div>
          <div class="col-md-4 pt-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5979.210494727582!2d-48.636892730838305!3d-26.990329295632307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8b60784b95841%3A0x21f56476f0bc71db!2sR.+902+-+Centro%2C+Balne%C3%A1rio+Cambori%C3%BA+-+SC%2C+88330-632!5e0!3m2!1spt-BR!2sbr!4v1552333188368" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        </div>
        
    </section>
    <section id="callaction" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="h4-responsive">Imóvel no Centro de Balneário Camboriú</h4>
                    <p class="grey-dark-text p-0 m-0" style="font-size: 16px !important; letter-spacing: 1px;">Por apenas <b style="font-size: 20px !important;">R$ 750.000,00</b> com possibilidade de <b style="font-size: 20px !important;">parcelamento</b>. <br> Nos mande uma mensagem para consultar o valor à vista! <br> 
                    <a href="#header" type="button" style="color:#fff !important; background:#0051b2 !important;"  class="m-3 btn btn-primary btn-rounded waves-effect pulse animated infinite">ENTRAR EM CONTATO</a>
                </div>
            </div>
        </div>
        
    </section>
    <section id="localizacao">
  <div class="container-fluid">
    <div class="row">
      
    </div>
  </div>
</section>
    <section id="qualidades" class="p-5" id="sobre" style="background-color: #f2f2f2">
        <div  class="container" >
            <div class="row">
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <i style="font-size: 65px; color:#d2ac67;" class="fa fa-home p-2"></i>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h3 class="h3-responsive font-weight-bold dark-grey-text ">Imóvel Excepcional</h3>
                      <p style="letter-spacing: 1px;" class="dark-text ">Imóvel com excelente mobília contendo <b>uma Suíte mais um dormitório</b>, sacada com churrasqueira a carvão e <b>prédio com piscina e salão de festas</b>. Possui apenas 2 apartamentos por andar garantindo sua tranquilidade.
                    </div>
                  </div>   
                </div>

                <div class="col-md-4">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <i style="font-size: 65px; color:#d2ac67;"  class="fa fa-usd p-2" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h3 class="h3-responsive font-weight-bold dark-grey-text ">Preço flexível</h3>
                      <p style="letter-spacing: 1px;" class="dark-text ">Você pode morar nesse belíssimo apartamento por <b>R$ 750.000,00 </b>com possibilidade de <b>parcelamento</b> ou com um ótimo preço <b>á vista</b>. E ai vai perder?</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <i style="font-size: 65px; color: #d2ac67;" class="fa fa-location-arrow p-2"></i>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h3 class="h3-responsive font-weight-bold dark-grey-text ">Ótima localização</h3>
                      <p style="letter-spacing: 1px;" class="dark-text ">Está localizado na <b>Rua 902</b> no <b>Centro</b> de Balneário Camboriú e possui ótimos estabelecimentos em sua proximidade: <b>restaurantes, lojas comerciais, padarias, hotéis, camelódromo, farmácia e muitas outras opções de comércio e lazer</b>.
                     </p>
                    </div>
                  </div>   
                </div>

            </div>
        </div>
    </section> 
  <!-- Section: Team v.4 -->
  <section class="py-5"  >

    <div class="container">

      <!-- Section heading -->
      <h3 id="corretores" class=" h3-responsive font-weight-bold text-center">OS CORRETORES</h3>
      <div class="separador"></div>
      <!-- Section description -->
      <p class=" text-center w-responsive mx-auto mb-5 mt-2">Somos corretores, atuamos no mercado de imóveis selecionados no litoral catarinense e visamos arte contemporânea brasileira, nosso foco é Balneário Camboriú.
      São 15 anos de aprendizado e experiência adquiridas no ramo imobiliário.</p>

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-6 col-md-12 mb-lg-0 mb-4">

          <!-- Rotating card -->
          <div class="card-wrapper">
            <div id="card-1" class="card-rotating effect__click text-center w-100 h-100">
              <!-- Front Side -->
              <div class="face front">
                <!-- Image -->
                <div class="card-up">
                  <img class="card-img-top" src="img/capa-maria.jpg" alt="Team member card image">
                </div>
                <!-- Avatar -->
                <div class="avatar mx-auto white" style="background-color: white !important;">
                  <img src="img/maria.png" class="rounded-circle img-fluid" alt="First sample avatar image">
                </div>
                <!-- Content -->
                <div class="card-body">
                  <h4 class="font-weight-bold mt-1 mb-3">Maria Do Carmo</h4>
                  <p class="font-weight-bold dark-grey-text">Corretora de Imóveis</p>
                  <p class="font-weight-bold dark-grey-text">(47) 99925-5776</p>
                  <p class="font-weight-bold dark-grey-text">contato@docarmoeferrari.com.br</p>
                  <!-- Triggering button -->
                  <a class="rotate-btn grey-text" data-card="card-1">
                    <i class="fa fa-repeat grey-text"></i> click para virar</a>
                  </div>
                </div>
                <!-- Front Side -->
                <!-- Back Side -->
                <div class="face back">
                  <!-- Content -->
                  <div class="card-body">
                    <!-- Content -->
                    <h4 class="font-weight-bold mt-4 mb-2">
                      <strong>Minha profissão</strong>
                    </h4>
                    <hr>
                    <p>A profissão de corretor exige que se tenha foco, persistência e determinação. A concretização de um negocio é fator de motivação, pois instiga a busca de novos negócios.
                    </p>
                    <hr>
                    <!-- Social Icons -->
                    <ul class="list-inline list-unstyled">
                      <li class="list-inline-item">
                        <a target="_blank" href="https://www.facebook.com/mariadocarmopeixer" class="p-2 fa-lg fb-ic">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                    
                      <li class="list-inline-item">
                        <a target="_blank" href="https://www.instagram.com/peixermariadocarmo" class="p-2 fa-lg ins-ic">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                      
                    </ul>
                    <!-- Triggering button -->
                    <a class="rotate-btn grey-text" data-card="card-1">
                      <i class="fa fa-repeat grey-text"></i>clique para voltar</a>
                    </div>
                  </div>
                  <!-- Back Side -->
                </div>
              </div>
              <!-- Rotating card -->

            </div>
            <!-- Grid column -->

           
                <!-- Grid column -->
                <div class="col-lg-6 col-md-12">
                  <!-- Rotating card -->
                  <div class="card-wrapper">
                    <div id="card-3" class="card-rotating effect__click text-center w-100 h-100">
                      <!-- Front Side -->
                      <div class="face front">
                        <!-- Image -->
                        <div class="card-up">
                          <img class="card-img-top" src="img/capa-ferrari.jpg" alt="Team member card image">
                        </div>
                        <!-- Avatar -->
                        <div class="avatar mx-auto white" style="background-color: white !important;">
                          <img src="img/ferrari.png" class="rounded-circle img-fluid" alt="Third sample avatar image">
                        </div>
                        <!-- Content -->
                        <div class="card-body">
                          <h4 class="font-weight-bold mt-1 mb-3">Marcio Ferrari</h4>
                          <p class="font-weight-bold dark-grey-text">Corretor de Imóveis</p>
                          <p class="font-weight-bold dark-grey-text">(47) 99905-3693</p>
                          <p class="font-weight-bold dark-grey-text">contato@docarmoeferrari.com.br</p>
                          <!-- Triggering button -->
                          <a class="rotate-btn grey-text" data-card="card-3">
                            <i class="fa fa-repeat grey-text"></i>clique para virar</a>
                          </div>
                        </div>
                        <!-- Front Side -->
                        <!-- Back Side -->
                        <div class="face back">
                          <!-- Content -->
                          <div class="card-body">
                            <!-- Content -->
                            <h4 class="font-weight-bold mt-4 mb-2">
                              <strong>Minha profissão</strong>
                            </h4>
                            <hr>
                            <p>Ser corretor é, antes de tudo, não ser imediatista e construir um nome de valor no mercado.
                            </p>
                            <hr>
                            <!-- Social Icons -->
                            <ul class="list-inline list-unstyled">
                              <li class="list-inline-item">
                                <a target="_blank" href="https://www.facebook.com/marcio.ferrari.161" class="p-2 fa-lg fb-ic">
                                  <i class="fa fa-facebook"></i>
                                </a>
                              </li>
                              
                              <li class="list-inline-item">
                                <a target="_blank" href="https://www.instagram.com/ferrarifg" class="p-2 fa-lg ins-ic">
                                  <i class="fa fa-instagram"> </i>
                                </a>
                              </li>
                            
                            </ul>
                            <!-- Triggering button -->
                            <a class="rotate-btn grey-text" data-card="card-3">
                              <i class="fa fa-repeat grey-text"></i>clique para voltar</a>
                            </div>
                          </div>
                          <!-- Back Side -->
                        </div>
                      </div>
                      <!-- Rotating card -->
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->
                </div>
              </section>
              <!-- Section: Team v.4 -->

<!-- Section: Testimonials v.2 -->
<section class="text-center py-5" style="background-color: #f2f2f2">

  <!-- Section heading -->
  <h3 class="h3-responsive font-weight-bold">Os que conhecem, aprovam!</h3>

  <!-- Carousel Wrapper -->
  <div id="carousel-example-1" class="mt-4 carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
    data-interval="false">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto mb-4">
            <img src="img/junior.jpg" class="rounded-circle img-fluid"
              alt="First sample avatar image">
          </div>
          <!--Content-->
          <p>
            <i class="fa fa-quote-left"></i>Excelentes corretores, equipe atenciosa e prestativa. Minha experiência foi ótima. Recomendo!!!
          </p>
          <h5 class="font-weight-bold">Júnior Kuchenbecker</h5>
          <h6 class="font-weight-bold my-3">Comprador</h6>
          <!--Review-->
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
        </div>
      </div>
      <!--First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto mb-4">
            <img src="img/luis.jpg" class="rounded-circle img-fluid"
              alt="Second sample avatar image">
          </div>
          <!--Content-->
          <p>
            <i class="fa fa-quote-left"></i>Excelentes profissionais! Além de serem profissionais de extrema confiança, conhecem muito bem o mercado imobiliário da nossa região. 
            Com certeza recomendo o trabalho dessa dupla 'Maria e Ferrari'. </p>
          <h4 class="font-weight-bold">Luis Fernando Fabre</h4>
          <h6 class="font-weight-bold my-3">Comprador</h6>
          <!--Review-->
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
        </div>
      </div>
      <!--Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto mb-4">
            <img src="img/fernanda.jpg" class="rounded-circle img-fluid"
              alt="Third sample avatar image">
          </div>
          <!--Content-->
          <p>
            <i class="fa fa-quote-left"></i>Ótimos profissionais! Recomendo seu trabalho pelo profissionalismo, atendimento criterioso e com excelência. Parabéns Maria e Ferrari! Desejamos sucesso e prosperidade.</p>
          <h4 class="font-weight-bold">Fernanda Benvenuti Santos</h4>
          <h6 class="font-weight-bold my-3">Compradora</h6>
          <!--Review-->
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
        </div>
      </div>
      <!--Third slide-->
       <!--Four slide-->
      <div class="carousel-item">
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto mb-4">
            <img src="img/amanda.jpg" class="rounded-circle img-fluid"
              alt="Third sample avatar image">
          </div>
          <!--Content-->
          <p>
            <i class="fa fa-quote-left"></i>Melhor equipe de corretores de BC!! Atendimento diferenciado e produto de excelente qualidade!!</p>
          <h4 class="font-weight-bold">Amanda Dos Reis Sales</h4>
          <h6 class="font-weight-bold my-3">Compradora</h6>
          <!--Review-->
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
          <i class="fa fa-star" style="color: #D2AC67;"></i>
        </div>
      </div>
      <!--Four slide-->
    </div>
    <!--Slides-->
    <!--Controls-->
    <a class="carousel-item-prev left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-item-next right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--Controls-->
  </div>
  <!-- Carousel Wrapper -->

</section>
<!-- Section: Testimonials v.2 -->


    <!-- Footer -->
<footer class="page-footer font-small indigo" style="background-color:#333333 !important;">

    <!-- Footer Links -->
    <div class="container">

      <!-- Grid row-->
      <div class="row text-center d-flex justify-content-center pt-4">

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase" style="letter-spacing: 1px;">
            <a href="#formulario">Contato</a>
          </h6>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase" style="letter-spacing: 1px;">
            <a href="#destaque">Fotos</a>
          </h6>
        </div>

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase" style="letter-spacing: 1px;">
            <a href="#qualidades">Sobre o imóvel</a>
          </h6>
        </div>
        
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase" style="letter-spacing: 1px;">
            <a href="#corretores">Corretores</a>
          </h6>
        </div>
        <!-- Grid column -->
        

      </div>
      <!-- Grid row-->
      <hr class="rgba-white-light" style="margin: 0 15%;">

      <!-- Grid row-->
      <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

        <!-- Grid column -->
        <div class="col-md-8 col-12 mt-5">
          <p>
            <h6 class="p-0 m-0">Conheça também nosso site:</h6>
            <br>
            <a class="btn btn-primary btn-rounded waves-effect m-0" target="_blank" href="https://www.docarmoeferrari.com.br/" style="background-color: #D2AC67 !important; letter-spacing: 1px;"><b>Clique aqui</b></a>
            <br>
            <h6 class="p-0 m-3">E confira todos imóveis disponíveis em nossa plataforma.</h6>
            
          </p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->
      <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

      <!-- Grid row-->
      <div class="row pb-3">

        <!-- Grid column -->
        <div class="col-md-12">

          <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a target="_blank" href="https://www.facebook.com/docarmoeferrari/" href="#contranst" class="fb-ic">
              <i style="color: #D2AC67 !important;" class="fa fa-facebook fa-lg white-text mr-4"> </i>
            </a>
      
            <!--Instagram-->
            <a target="_blank" href="https://www.instagram.com/docarmoeferrari"  class="ins-ic">
              <i style="color: #D2AC67 !important;" class="fa fa-instagram fa-lg white-text mr-4"> </i>
            </a>
         

          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyrigh - 
      <a href="https://aliencodes.com.br"> AlienCodes </a>
    </div>


    <!-- Copyright -->

  </footer>
  <!-- Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
      $(".telefoneMask")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
    </script>
</body>

</html>
