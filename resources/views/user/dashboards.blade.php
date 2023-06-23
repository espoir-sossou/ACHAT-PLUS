@extends('../templates/auths')

@section('dashboard-panel')

<div class="container-fluid" style="border-radius: 6px; box-shadow:2px 3px 5px black">
    <div class="row mt-5" >
        <div class="col-lg-1">
            <div class=" mt-3"> <img src="/images/espo2.png"  class=" " width="60px" alt="" style="clip-path:ellipse(50% 40%); ">
                <span class="">Espokeys</span>
            </div> 
            <div class="mt-4">
                <a href="" style="color:black; font-size:25px"><i class="fa-solid fa-chart-simple" ></i></a>
                <span class="text-center"><a href="" style="text-decoration: none;color:black">Tableau de bord</a></span>
            </div>
                <div class="mt-3">
                <a href="" style="color: black; font-size:25px"><i class="fa-solid fa-cart-shopping"></i></a>
                <span class="text-center"><a href="/adminDash/produits" style="text-decoration: none;color:black">Produit</a></span>
            </div>
            <div class="mt-3">
                <a href="" style="color: black;font-size:25px"><i class="fa-solid fa-book"></i></a>
                <span class="text-center"><a href="" style="text-decoration: none;color:black">Commandes</a></span>
            </div>
            <div class="mt-3">
                <a href="" style="color: black;font-size:25px"><i class="fa-solid fa-list"></i></a>
                <span class="text-center"><a href="" style="text-decoration: none;color:black">Stocks</a></span>
            </div>
        </div>
        <div class="col-lg-10" style="background-color: rgb(183, 178, 178);">
           <div class="container">
            <div class="row">
                <div class="col-lg-2 mt-2" style="font-size: 26px">
                    <a href="/index" style="text-decoration: none"><span class="sp1">Achat</span><span class="sp2">Plus</span></a>
                   </div>
                <div class="col-lg-10">
                    <h3 class="mt-3 dhPnl" style="font-family: 'Merienda', cursive;font-family: 'Yatra One', cursive; color:rgb(230, 227, 227)">Welcome to you Admin Panel</h3>
                </div>
            </div>
           </div>
            <img src="/images/dash.png" class="card-img-top img-fuid" alt="">
        </div>
    </div>
</div>

@endsection