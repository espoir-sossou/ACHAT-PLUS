@extends('./templates/app')

@section('acceuil-body')




<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 mt-2" style="font-size: 26px">
         <a href="/index" style="text-decoration: none"><span class="sp1">Achat</span><span class="sp2">Plus</span></a>
        </div>
        <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Promotions</a>
                          </li>  --}}

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Digitales
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Shots
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Musicals
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Publicites</a>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Automobiles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>

                       <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Beauty
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Alicaments
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Relectures</a>
                  </li> 
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
        <div class="col-lg-2 mt-3">
            <div class="row" style="display: flex">
                <div class="col-lg-3"><div class="dropdown">
                    <div class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     Fr
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">En</a></li>
                      <li><a class="dropdown-item" href="#">All</a></li>
                    </ul>
                  </div></div>
                <div class="col-lg-3"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                <div class="col-lg-3"><a href="/index/pannier"><i class="fa-solid fa-cart-shopping"></i></a></div>
                <div class="col-lg-3"><a href="/index/conn"><i class="fa-solid fa-user"></i></a></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="" style="background-color: rgb(65, 63, 63); padding-top: 2px"></div>
        <div class="col-lg-1">
           
            <div class="text-center">
                <i class="fa-solid fa-house"></i>
                <h5 class="text-center">Acceuil</h5>
            </div>
            <div class="text-center mt-5">
                <i class="fa-solid fa-star"></i>
                <h5 class="text-center">Promotions</h5>
            </div>
            <div class="text-center mt-5">
                <i class="fa-brands fa-shopify"></i>
                <h5 class="text-center">Publicites</h5>
            </div>
            <div class="text-center mt-5">
                <i class="fa-solid fa-list"></i>
                <h5 class="text-center">Profil</h5>
            </div>
            <div class="text-center mt-5">
                <i class="fa-solid fa-question"></i>
                <h5 class="text-center">Aide</h5>
            </div>
        </div>
        <div class="col-lg-11">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/images/img5.jpg" class="d-block w-100"   alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/img6.jpg" class="d-block w-100"  alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/img7.jpg" class="d-block w-100"  alt="">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <h3 class="text-center mt-3 after-img"> Tous les meilleurs produits ou articles disponibles et accesibles a tous </h3>
              <div class="row mt-4">
                <div class="col-lg-3 ">
                    <div class="wch" style="width: 13.5rem;   ">
                        <img src="/images/wch1.jpg"  class="card-img-top" alt="">
                        <div class="card-body">
                          <p class="text-center">Une montre peofessionnel</p>
                          <h5 class="text-center"> 45,25 £</h5>
                          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                        </div>
                      </div>
                </div>

                <div class="col-lg-3 after_ban">
                    <div class="wch" style="width: 13.5rem;">
                        <img src="/images/wch3.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                          <p class="text-center">Nouvelle generation de watch</p>
                          <h5 class="text-center"> 15,25 £</h5>
                          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                        </div>
                      </div>
                </div>

                <div class="col-lg-3">
                    <div class="wch" style="width: 13.5rem;">
                        <img src="/images/wch4.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                          <p class="text-center">Vivre le lux a un moment de la vie</p>
                          <h5 class="text-center"> 96,25 £</h5>
                          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                        </div>
                      </div>
                </div>

                <div class="col-lg-3">
                    <div class="wch" style="width: 13.5rem;">
                        <img src="/images/wch5.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                          <p class="text-center">Pour booster sont propre carisme</p>
                          <h5 class="text-center"> 106,25 £</h5>
                          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                        </div>
                      </div>
                </div>

              </div>
              
              <div class="row mt-4 mt-5">
                <div class="col-lg-3 second_car">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/images/vst1.jpg" class="d-block w-100" alt="">
                          </div>
                          <div class="carousel-item">
                            <img src="/images/vst2.jpg" class="d-block w-100" alt="">
                          </div>
                          <div class="carousel-item">
                            <img src="/images/vst3.jpg" class="d-block w-100" alt="">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <h5 class="text-center"> 106,25 £</h5>
                      <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                </div>

                <div class="col-lg-3 second_car">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/images/ptl1.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/hbs4.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/ptl1.jpg" class="d-block w-100" alt="">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <h5 class="text-center"> 16,25 £</h5>
                  <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                </div>

                <div class="col-lg-3 second_car">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/images/hbs1.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/wch1.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/hbs4.jpg" class="d-block w-100" alt="">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <h5 class="text-center"> 145,25 £</h5>
                  <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                </div>

                <div class="col-lg-3 second_car">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/images/vst3.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/img3.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/img2.png" class="d-block w-100" alt="">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <h5 class="text-center"> 654,25 £</h5>
                  <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                </div>

              </div>

              <div class="bg-success mt-5" style="padding: 0.5px"></div>
              <h3 class="after-img text-center mt-3">Nous disposons de tous les Articles dont vous avez besoin veuillez passer vos commandes</h3>
              <div class="bg-success mt-4" style="padding: 0.5px"></div>

              <div class="row mt-5 mb-5 " >
                <div class="col-md-6 third_card">
                  <div class=" mb-3">
                    <img src="/images/v4.jpg" height="500px" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <h5 class="text-center"> 654,25 £</h5>
                      <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-6 third_card">
                  <div class=" mb-3">
                    <img src="/images/m1.jpg" height="500px" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <h5 class="text-center"> 654,25 £</h5>
                      <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                    </div>
                  </div>

                </div>
                
              </div>
              <div class="row mt-3 mb-5">
                <div class="col-md-6 third_card">
                  <div class=" mb-3">
                    <img src="/images/m4.jpg" height="500px" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                       <h5 class="text-center"> 654,25 £</h5>
                  <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 third_card">
                  <div class=" mb-3">
                    <img src="/images/v1.jpg" height="500px" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <h5 class="text-center"> 654,25 £</h5>
                      <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
                    </div>
                  
                </div>
              </div>
              <div class="p-5 mt-2"></div>
              <div class="row mt-1">
                <div class="col-lg-4 after_card">
                  <i class="fa-solid fa-tachograph-digital" style="  display: flex; justify-content: center;  text-align: center; align-items: center; font-size: 35px;"></i>
                  <h4 class=" text-center mt-4 phr1">Payement en ligne securise</h4>
                  <h5 class=" text-center mt-2 phr2">Mastercard /Visa /Prepayer </h5>
                </div>
                <div class="col-lg-4 after_card">
                  <i class="fa-solid fa-car" style=" display: flex; justify-content: center;  text-align: center; align-items: center;  font-size: 35px;"></i>
                  <h4 class=" text-center mt-4 phr3">Livraison Rapide</h4>
                  <h5 class=" text-center mt-2 phr4">Expedition pour la commande<br> le plus vite possible </h5>
              </div>
                 <div class="col-lg-4 after_card">
                  <i class="fa-solid fa-envelope" style=" display: flex; justify-content: center;  text-align: center; align-items: center;  font-size: 35px;"></i>
                  <h4 class=" text-center mt-4 phr5"> Client Services</h4>
                  <h5 class=" text-center mt-2 phr6">Une question ? Contactez notre service client<br> Nous vous répondrons dans les meilleurs délais </h5>
                </div>
              </div>
        </div>
       
    </div>

</div>

@endsection
{{-- <div class="main-container d-flex">
  <div class="slidebar" id="slide_nav">
   <div class="header-box px-2 pb-4 pt-3 d-flex justify-content-between">
    <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">Mon</span><span class="text-white">Slide</span></h1>
    <button class="btn d-mb-none d-block btn close-btn px-1 py-0 text-white fs-3"><i class="fas fa-window-close"></i></button>
</div>
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-2 mt-2" style="font-size: 26px">
           <a href="/index" style="text-decoration: none"><span class="sp1">Achat</span><span class="sp2">Plus</span></a>
          </div>
          <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg">
                  <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
  
                           <li class="nav-item">
                              <a class="nav-link" href="#">Promotions</a>
                            </li> 
  
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Digitales
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </li>
  
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Shots
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </li>
  
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Musicals
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>
  
                        <li class="nav-item">
                          <a class="nav-link" href="#">Publicites</a>
                        </li>
  
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Automobiles
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>
  
                         <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Beauty
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>
  
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Alicaments
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
  
                    <li class="nav-item">
                      <a class="nav-link" href="#">Relectures</a>
                    </li> 
                      </ul>
                    </div>
                  </div>
                </nav>
          </div>
          <div class="col-lg-2 mt-3">
              <div class="row" style="display: flex">
                  <div class="col-lg-3"><div class="dropdown">
                      <div class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                       Fr
                      </div>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">En</a></li>
                        <li><a class="dropdown-item" href="#">All</a></li>
                      </ul>
                    </div></div>
                  <div class="col-lg-3"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                  <div class="col-lg-3 active"><button class="btn open-btn"><a href=""><i class="fa-solid fa-cart-shopping"></i></a></button></div>
                  <div class="col-lg-3 "><a href="/index/conn"><i class="fa-solid fa-user"></i></a></div>
              </div>
          </div>
      </div>
  </div>
  </div>
</div> --}}


