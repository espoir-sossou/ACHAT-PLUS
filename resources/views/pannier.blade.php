@extends('./templates/app')

@section('pannier-page')

<div class="text-center top_pannier"  style="font-size: 22px;padding: 6px;color:white;background-color:rgb(40, 37, 37)">Pour la securiter de vos donner Authentifier vous</div>
<div class="container-fuid" style="font-size: 25px">
    <div class="row mb-5" style="background-color: white; ">
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
                <div class="col-lg-3"><a href=""><i class="fa-solid fa-cart-shopping"></i></a></div>
                <div class="col-lg-3"><a href="/index/conn"><i class="fa-solid fa-user"></i></a></div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row mb-5" >
        <h3 class="text-center">Votre panier est actuellement vide. </h3>
        <h4 class="text-center"><a href="" style="text-decoration: none;color:green">Connectez-vous </a> pour payer plus vite.</h4>
       <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"><div class="text-center mt-4 achat_btn"> <h2 class="pt-2 h2_achat_btn"  >Poursuivre les Achats</h2></div></div>
        <div class="col-lg-4 "></div>
      </div>
    </div>
</div>
<div class=" mt-5 mb-5"></div>
<div class="container-fluid mt-5 mb-5">
  <div class="row mb-5 ">
    <div class="row">
      <div class="col-lg-11">
        <h2 class="txt_achat_top">Complétez votre commande</h2>
      </div>
      <div class="col-lg-1">
        <a href="" class="txt_achat_top" style="color: black;font-size:35px"> <span><i class="fa-solid fa-arrow-left"></i></span>    <span><i class="fa-solid fa-arrow-right"></i></span></a>
      </div>
    </div>
    <div class="col-lg-3 pt-3 pb-3 achat_pub">
      
      <div class="wch" style="width: 25.5rem;   ">
        <img src="/images/wch1.jpg"  class="card-img-top " alt="">
        <img src="/images/wch2.jpg"  class="card-img-top top-img" alt="">
        <div class="card-body">
          <p class="text-center">Une montre peofessionnel</p>
          <h5 class="text-center"> 45,24 £</h5>
          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 pt-3 pb-3 achat_pub">
      <div class="wch" style="width: 25.5rem;   ">
        <img src="/images/wch1.jpg"  class="card-img-top" alt="">
        <img src="/images/wch2.jpg"  class="card-img-top top-img" alt="">
        <div class="card-body">
          <p class="text-center">Une montre peofessionnel</p>
          <h5 class="text-center"> 45,24 £</h5>
          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
        </div>
    </div>
    </div>
    <div class="col-lg-3 pt-3 pb-3 achat_pub">
      <div class="wch" style="width: 25.5rem;   ">
        <img src="/images/wch1.jpg"  class="card-img-top" alt="">
        <img src="/images/wch2.jpg"  class="card-img-top top-img" alt="">
        <div class="card-body">
          <p class="text-center">Une montre peofessionnel</p>
          <h5 class="text-center"> 45,24 £</h5>
          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
        </div>
    </div>
    </div>
    <div class="col-lg-3 pt-3 pb-3 achat_pub mb-5">
      <div class="wch" style="width: 25.5rem;   ">
        <img src="/images/wch1.jpg"  class="card-img-top" alt="">
        <img src="/images/wch2.jpg"  class="card-img-top top-img" alt="">
        <div class="card-body">
          <p class="text-center">Une montre peofessionnel</p>
          <h5 class="text-center"> 45,25 £</h5>
          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
        </div>
    </div>
  </div>
  <div class="row mt-5" id="achat_row">
    <div class="row mb-1">
      <div class="row">
        <div class="col-lg-6 voir_plus">
          <h2 class="">Nos collections</h2>
         <a href="" class="mt-3" style="color: black; "> <h3 class="" >Voir tout</h3></a>
        </div>
        <div class="col-lg-6">
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="wch" style="width: 25rem;   ">
        <img src="/images/wch1.jpg"  class="card-img-top" alt="">
        <img src="/images/wch2.jpg"  class="card-img-top top-img" alt="">
        <div class="card-body">
          <p class="text-center">Une montre peofessionnel</p>
          <h5 class="text-center"> 45,24 £</h5>
          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="wch" style="width: 25rem;   ">
        <img src="/images/wch1.jpg"  class="card-img-top" alt="">
        <img src="/images/wch2.jpg"  class="card-img-top top-img" alt="">
        <div class="card-body">
          <p class="text-center">Une montre peofessionnel</p>
          <h5 class="text-center"> 45,24 £</h5>
          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
        </div>
    </div>
    </div>
    <div class="col-lg-3">
      <div class="wch" style="width: 25rem;   ">
        <img src="/images/wch1.jpg"  class="card-img-top" alt="">
        <img src="/images/wch2.jpg"  class="card-img-top top-img" alt="">
        <div class="card-body">
          <p class="text-center">Une montre peofessionnel</p>
          <h5 class="text-center"> 45,24 £</h5>
          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
        </div>
    </div>
    </div>
    <div class="col-lg-3">
      <div class="wch" style="width: 25rem;   ">
        <img src="/images/wch1.jpg"  class="card-img-top" alt="">
        <img src="/images/wch2.jpg"  class="card-img-top top-img" alt="">
        <div class="card-body">
          <p class="text-center">Une montre peofessionnel</p>
          <h5 class="text-center"> 45,24 £</h5>
          <div class="btns text-center pb-2"><a href="#" class="btn btn-success">Ajouter au panier</a></div>
        </div>
    </div>
  </div>
  </div>
</div>

@endsection