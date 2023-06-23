@extends('../templates/auths')

@section('dashboard-acceuil')

<div class="container-fluid" style="border-radius: 6px; box-shadow:2px 3px 5px black">
    <div class="row mt-5 pb-5" >
        <div class="col-lg-2">
            <div class=" mt-4"> <img src="/images/espo2.png"  class=" " width="60px" alt="" style="clip-path:ellipse(50% 40%); ">
                <span class="">Espokeys</span>
            </div> 
            <div class="mt-4">
                <a href="" style="color: black;font-size:25px"><i class="fa-solid fa-list"></i></a>
                <span class="text-center"><a href="" style="text-decoration: none;color:green; font-size:25px">ACCEUIL</a></span>
            </div>
            <div class="mt-4">
                <span class="text-center"><a href="" style="text-decoration: none;color:green; font-size:28px">Bannieres</a></span>
                <ul class="">
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="/adminDash/produits/acceuil/addBannieres" style="text-decoration: none;color:black;font-size:22px">Ajoutes des Bannieres</a></li>
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="" style="text-decoration: none;color:black;font-size:22px">Liste des Bannieres</a></li>
                </ul>
            </div>
            <div class="mt-5">
                <span class="text-center"><a href="" style="text-decoration: none;color:green; font-size:28px">Montres</a></span>
                <ul class="">
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="/adminDash/produits/acceuil/addWatch" style="text-decoration: none;color:black;font-size:22px">Ajoutes des Watchs</a></li>
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="" style="text-decoration: none;color:black;font-size:22px">Liste des Watchs</a></li>
                </ul>
            </div>
            <div class="mt-5">
                <span class="text-center"><a href="" style="text-decoration: none;color:green; font-size:28px">Vetements</a></span>
                <ul class="">
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="" style="text-decoration: none;color:black;font-size:22px">Ajoutes des Vetements</a></li>
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="" style="text-decoration: none;color:black;font-size:22px">Liste des Vetements</a></li>
                </ul>
            </div>
            <div class="mt-5">
                <span class="text-center"><a href="" style="text-decoration: none;color:green; font-size:28px">Motos et voitures</a></span>
                <ul class="">
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="" style="text-decoration: none;color:black;font-size:22px">Ajoutes des Motos et Voitures</a></li>
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="" style="text-decoration: none;color:black;font-size:22px">Liste des Motos et Voitures</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-10" style="background-color: rgb(183, 178, 178);">
           <div class="container">
            <div class="row">
                <div class="col-lg-2 mt-2 " style="font-size: 26px">
                    <a href="/index" style="text-decoration: none"><span class="sp1">Achat</span><span class="sp2">Plus</span></a>
                   </div>
                <div class="col-lg-10">
                    <h3 class="mt-3 dhPnl" style="font-family: 'Merienda', cursive;font-family: 'Yatra One', cursive; color:rgb(230, 227, 227)">Gerez votre page d'acceuil comme bon vous semble</h3>
                </div>
            </div>
          
    </div>
</div>

@endsection