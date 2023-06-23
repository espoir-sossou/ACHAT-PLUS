@extends('./templates/app')

@section('reinitialise-mot_pass')

<div class="text-center top_p"  style="padding: 6px;color:white;">Pour la securiter de vos donner Authentifier vous</div>
<div class="container-fuid">
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
    <div class="container" >
        <div class="row mt-5 mb-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 ">
                <div class=" connection_card p-5 mb-5">
                    <h2 class="text-center pt-4" style="font-family: 'Merienda', cursive;font-family: 'Yatra One', cursive;">Réinitialiser votre mot de passe</h2>
                    <p class="text-center">Nous vous ferons parvenir un courriel pour réinitialiser votre mot de passe.</p>
                   <div class="text-center "><a class="" href="/index/conn/"  style="font-size: 14px; text-decoration:none;color:rgb(83, 81, 81); text-decoration:underline">RETOUR A LA CONNEXION</a></div>
                    
                    <form class="pt-3 ">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label" style="font-size: 15px">ADDRESSE MAIL</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="exemple@gmail.com" aria-describedby="emailHelp">
                        </div>
                       <div class="pb-3 mt-5" style="text-align: center"><button type="submit" class="btn  w-100 " style=" background-color:#007266;color:white" >JE REINITIALISE</button></div>
                      </form>

                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

@endsection