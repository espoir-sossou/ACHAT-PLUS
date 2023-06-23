@extends('../templates/auths')

@section('Ajout-bannieres')

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
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="" style="text-decoration: none;color:black;font-size:22px">Ajoutes des Bannieres</a></li>
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="" style="text-decoration: none;color:black;font-size:22px">Liste des Bannieres</a></li>
                </ul>
            </div>
            <div class="mt-5">
                <span class="text-center"><a href="" style="text-decoration: none;color:green; font-size:28px">Montres</a></span>
                <ul class="">
                    <li class="mt-2" style="list-style-type: circle;color:green"><a href="" style="text-decoration: none;color:black;font-size:22px">Ajoutes des Watchs</a></li>
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
                    <h3 class="mt-3 dhPnl" style="font-family: 'Merienda', cursive;font-family: 'Yatra One', cursive; color:rgb(230, 227, 227)">Ajouter Une Bannieres</h3>
                </div>
            </div> 
          <div class="row mt-5" >
            <div class="col-lg-9 mt-5">
                <div class="col-lg-12">
                    <table class="table caption-top" style="border: 2px solide black">
                        <caption>List of users</caption>
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">IMAGES</th>
                            <th scope="col">PRIX</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">PUBLIER</th>
                            <th scope="col">ACTIONS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>
                                <button type="button" class="btn btn-primary" name="btn_save"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger" name="btn_save"><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-warning" name="btn_save"><i class="fa fa-allergies"></i></button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Mark</td>
                            <td>
                                <button type="button" class="btn btn-primary" name="btn_save"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger" name="btn_save"><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-warning" name="btn_save"><i class="fa fa-allergies"></i></button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Mark</td>
                            <td>
                                <button type="button" class="btn btn-primary" name="btn_save"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger" name="btn_save"><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-warning" name="btn_save"><i class="fa fa-allergies"></i></button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2 pt-5 pb-5 pr-5" style="border-radius: 6px; box-shadow:2px 3px 5px black">
                <form action="" method="POST" >
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Selection d'Article</label>
                        <input class="form-control btn btn-info" name="imgs" placeholder="Select +" type="file" id="formFile">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Prix</label>
                      <input type="text" name="prix" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Titre et Description</label>
                      <input type="text" name="description" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="" style="text-align: center; "><button type="submit" class="btn btn-primary p-2" style="font-size:20px">Save</button></div>
                  </form>
            </div>
          </div>
    </div>
</div>

@endsection