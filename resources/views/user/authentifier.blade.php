@extends('../templates/auths')

@section('pre-autentification')

<div class="container" >
    <div class="row mt-5 mb-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 ">
            <div class=" connection_card p-5 mb-5">

              <div class="row">
                @if(session()->has('success'))
                <div class="alert amlert-info text-center" style="font-size: 20px; color:green">{{ session()->get('success') }}</div>
                @endif
              </div>

              <div class="row">
                <div class="col-lg-12">  
              @if($errors)
              @foreach ($errors->all() as $error)
                <div class="text-center" style="color: red;font-size:16px">{{ $error }}</div>
              @endforeach
              @endif
                </div>
              </div>

                <h2 class="text-center" style="font-family: 'Merienda', cursive;font-family: 'Yatra One', cursive;">Welcom</h2>
               <div class="text-center "> <img src="/images/espo2.png"  class=" " width="80px" alt="" style="clip-path:ellipse(50% 40%); "></div>
                
                <form class="pt-2 " action="/index/conn/signUp" method="POST">
                  @method('POST')
                  @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" style="font-size: 15px">ADDRESSE MAIL*</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="exemple@gmail.com" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label" style="font-size: 15px">MOT DE PASSE*</label>
                      <input type="password" name="passwd" class="form-control" id="exampleInputPassword1" placeholder="........" required>
                    </div>
                   <div class="pb-3 mt-5" style="text-align: center"><button type="submit" class="btn  w-100 " style=" background-color:#007266;color:white" >Se Connecter</button></div>
                  </form>

            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>

@endsection